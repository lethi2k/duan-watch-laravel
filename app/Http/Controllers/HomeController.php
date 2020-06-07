<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SliderModel;
use App\AdvertisementModel;
use App\BlogModel;
use App\CategoryBlogModel;
use App\CommentBlog;
use App\ContactModel;
use App\ProductModel;
use App\CateProductModel;
use App\CommentModel;
use App\OderModel;
use Session;
use Cart;
use Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    //hàm sử lý index
    public function index()
    {

        $slider = SliderModel::all();
        $advertisement = AdvertisementModel::all();
        $blog = BlogModel::limit(3)->orderBy('id', 'desc')->get();
        $product = ProductModel::paginate(8); 
        $product_oderby = ProductModel::limit(10)->orderBy('id', 'desc')->get();
        $product_price = ProductModel::limit(10)->orderBy('price', 'desc')->get();
        $product_sale_price = ProductModel::limit(10)->orderBy('sale_price', 'desc')->get();
        $product_view = ProductModel::limit(10)->orderBy('view_count', 'desc')->get();
            return view('font-end.index',compact('slider','advertisement','blog','product','product_oderby','product_price','product_sale_price','product_view'));

    }


    //hàm sử lý bài viết
    public function blog($id)
    {

        $slider = SliderModel::all();
        $advertisement = AdvertisementModel::all();
        $blog = BlogModel::where('cate_id', '=', $id )->orderBy('id', 'desc')->get();
            return view('font-end.block',compact('slider','advertisement','blog'));

    }


    //hàm sử lý chi tiết bài viết
    public function ctbl($id)

    {
        $slider = SliderModel::all();
        $advertisement = AdvertisementModel::all();
        $blog = BlogModel::find($id);
        $queryData = CategoryBlogModel::join('blog', 'category_blog.id', '=', 'blog.cate_id')->where('blog.id', '<>', $id)->limit(5)->orderBy('blog.id', 'desc')->get();
        $commentbl = CommentBlog::limit(5)->orderBy('id', 'desc')->get();
            return view('font-end.chitietblock',compact('slider','advertisement','blog','queryData','commentbl'));

    }


    //hàm sử lý thêm bình luận bài viết
    public function addcommentbl(Request $request,$id)
    {

        $this -> validate($request,
        [
            'comment' =>'required|min:2|max:255'
        ],
        [
            'required' => 'Không đươc bỏ trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
        ]);

        $model = new CommentBlog();
        $model->idbl = $id; 
        $model->content = $request->comment;
        $model->user = Auth::user()->id;; 
        $model->save();
            return redirect('giao-dien/ctbl/'.$id)-> with('thongbao','thêm thành công');

    }


    //hàm sử lý đăng nhập
    public function dangnhap()
    {

        return view('font-end.dangnhap');

    }


    public function postdangnhap(Request $request)
    {

        $this -> validate($request,
        [
            'username' =>'required',
            'pass' =>'required|min:2|max:200',
        ],
        [
            'required' => 'User name or pasword Không Được Bỏ Trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự'
        ]);
        // dd($request->name);
        $remember = $request->has("remember") ? true : false;
            $arr =[
                "username" => $request->username , 
                "password" => $request->pass 
            ];
        if(Auth::attempt($arr,$remember)){
            return redirect('');
        }
        else{
            return redirect('giao-dien/dangnhap')->with('thongbao','dang nhap khong thanh cong');
        }

    }



    public function logoutdangnhap(){
        Auth::logout();
        return redirect('giao-dien/dangnhap');
    }



    //hàm sử lý đăng kí
    public function dangki(){

        return view('font-end.dangki');

    }


    //hàm sử lý liên hệ
    public function lienhe(){

        return view('font-end.lienhe');

    }


    //hàm sử lý phản hồi
    public function postfeedback(Request $request){

        $this -> validate($request,
        [
            'contact_name' =>'required|min:2|max:255',
            'contact_email' =>'required|email',
            'contact_message' =>'required|min:2|max:255'
        ],
        [
            'contact_name.required' => 'Không đươc bỏ trống tên',
            'contact_email.required' => 'Không đươc bỏ trống email',
            'contact_message.required' => 'Không đươc bỏ trống nội dung',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
            'email' => 'mời bạn nhập đúng định dạng emial'
        ]);

        $model = new ContactModel();
        $model->name = $request->contact_name; 
        $model->email = $request->contact_email;
        $model->content = $request->contact_message; 
        $model->save();
            return redirect('giao-dien/lienhe')-> with('thongbao','gửi dữ liệu thành công');

    }


    //hàm sử lý so sánh
    public function sosanh(){
        return view('font-end.sosanh');
    }


    //hàm sử lý thanh toán
    public function thanhtoan(){
        $userID = Auth::user()->id;
        $items = \Cart::session($userID)->getContent();
        return view('font-end.thanhtoan',['items'=>$items]);
    }


    //hàm sử lý giới thiệu
    public function gioithieu(){

        return view('font-end.gioithieu');

    }


    //hàm sử lý giỏ hàng
    // public function giohang(){

    //     return view('font-end.giohang');

    // }


    //hàm sử lý sản phẩm
    public function sanpham(){

        $product = ProductModel::paginate(20);
        return view('font-end.sanpham',compact('product'));

    }


    //hàm sử lý chi tiết sản phẩm
    public function chitietsanpham($id){

        $productKey = 'ProductModel_' . $id;
        if (!Session::has($productKey))
        {
            ProductModel::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }
        $product_detail = ProductModel::find($id);
        $related_product = CateProductModel::join('product', 'category_product.id', '=', 'product.cate_id')->where('product.id', '<>', $id)->limit(5)->orderBy('product.id', 'desc')->get();
        $comment_product = CommentModel::limit(5)->orderBy('id', 'desc')->get();
            return view('font-end.chitietsp',compact('product_detail','related_product','comment_product'));

    }


    //hàm sử lý thêm bình luận sản phẩm
    public function addcommentproduct(Request $request,$id)
    {
        $this -> validate($request,
        [
            'review' =>'required|min:2|max:255'
        ],
        [
            'required' => 'Không đươc bỏ trống nội dung',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
        ]);

        $model = new CommentModel();
        $model->product_id = $id; 
        $model->content_comment = $request->review;
        $model->user = Auth::user()->id;
        $model->save();
            return redirect('giao-dien/ctsp/'.$id)-> with('thongbao','thêm thành công');
    }


     //hàm sử lý giỏ hàng
     public function addcart($id, Request $request){
        $product_cart = ProductModel::find($id);

        if($request->quantity){
            $quantity = $request->quantity;
        }
        else{
            $quantity = 1;
        }

    $userID = Auth::user()->id;
    \Cart::session($userID)->add(
                array(
                    'id'=>$id, 
                    'name'=>$product_cart->product_name,
                    'quantity'=>$quantity,
                    'price'=>$product_cart->price,
                    'attributes' => array('images'=>$product_cart->images),
                    'associatedModel' => $product_cart
                    )
            );
            // dd(\Cart::session($userID)->getContent());
            return redirect()->route('giaodien.showcart');
    }


    public function showcart(){
        $userID = Auth::user()->id;
        $items = \Cart::session($userID)->getContent();
            return view('font-end.giohang',['items'=>$items]);
    }


    public function updatecart($id){
        // dd(request('quantity'));
        $userID = Auth::user()->id;
        \Cart::session($userID)->update($id,[
            'quantity' => array(
                'relative' => false,
                'value' => request('soluong')
            )
        ]);
            return back();
    }



    public function removecart($id){
        $userID = Auth::user()->id;
        \Cart::session($userID)->remove($id);
            return back();
    }

    

    public function addorder()
    {
        $userID = Auth::user()->id;
        $items = \Cart::session($userID)->getContent();
        $count = \Cart::session($userID)->getContent()->count();
        foreach($items as $showcart)
        {
                $product_name = $showcart->associatedModel->product_name;
                $product_images = $showcart->associatedModel->images;
                $product_price = $showcart->associatedModel->price;
                $product_quantity = $showcart->quantity;
                $product_user = $userID;
                $product_status = 1;
                    $model = new OderModel();
                    $model->name =  $product_name;
                    $model->price = $product_price;
                    $model->quantity = $product_quantity;
                    $model->user = $product_user;
                    $model->status = 1;
                    $image = $product_images;
                    move_uploaded_file("giao-dien/images/order" . $image);
                    $model->img = $image;
                    $model->save();
                        return redirect('')-> with('thongbao','thêm thành công');            
        }

    }

    // public function updateview(Request $request, $id)
    // {
    //     $model = ProductModel::find($id);
    //     $model->view_count = $request->demslview;
    //     $model-> save();
    //     return redirect('giao-dien/ctsp/'.$id);

    //     // $sessionView = Session::get($sessionKey);
    //     // $model = ProductModel::findOrFail($id);
    //     // if (!$sessionView) { //nếu chưa có session
    //     //     Session::put($sessionKey, 1); //set giá trị cho session
    //     //     $model->view_count('views');
    //     // }
    // }
    
}