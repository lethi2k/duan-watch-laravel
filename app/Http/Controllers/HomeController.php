<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\SliderModel;
use App\AdvertisementModel;
use App\BlogModel;
use App\CategoryBlogModel;
use App\CommentBlog;
use App\ContactModel;
use App\ProductModel;
use App\CateProductModel;
use App\CategoryProductModel;
use App\CommentModel;
use App\OderModel;
use App\BillModel;
use App\User;
use Session;
use Cart;
use Auth;
use Mail;
use Carbon\Carbon;

class HomeController extends Controller
{

    public function test(){
        $message = 'Test chuc nang log: ';
        Log::emergency($message); 

        Log::alert($message);

        Log::critical($message);

        Log::error($message);

        Log::warning($message);

        Log::notice($message);

        Log::info($message);

        Log::debug($message);
    }

    //hàm sử lý index
    public function index()
    {

        $slider = SliderModel::all();
        $advertisement = AdvertisementModel::where('status','=',1)->limit(3)->get();
        $blog = BlogModel::limit(3)->orderBy('id', 'desc')->get();
        $product = ProductModel::paginate(10); 
        $product_oderby = ProductModel::limit(10)->orderBy('id', 'desc')->get();
        $product_price = ProductModel::limit(10)->orderBy('price', 'desc')->get();
        $product_sale_price = ProductModel::limit(10)->orderBy('sale_price', 'desc')->get();
        $product_view = ProductModel::limit(5)->orderBy('view_count', 'desc')->get();
        $advertisement_footer = AdvertisementModel::where('status', '=', 0 )->limit(2)->get();
            return view('font-end.index',compact('slider','advertisement','blog','product','product_oderby','product_price','product_sale_price','product_view','advertisement_footer'));

    }


    //hàm sử lý bài viết
    public function blog($id)
    {

        $slider = SliderModel::all();
        $advertisement = AdvertisementModel::all();
        $blog = BlogModel::where('cate_id', '=', $id )->orderBy('id', 'desc')->paginate(10);
            return view('font-end.block',compact('slider','advertisement','blog'));

    }


    //hàm sử lý bài viết
    public function showbv()
    {
        $slider = SliderModel::all();
        $advertisement = AdvertisementModel::all();
        $blog = BlogModel::paginate(10);
            return view('font-end.block',compact('slider','advertisement','blog'));

    }


    //hàm sử lý chi tiết bài viết
    public function ctbl($id)
    {
        $delete = request('deletecomment');
        if($delete){
            $comment = CommentBlog::find($delete);
            if($comment == null)
            {
                return back()->with('thongbao','không xóa được sản phẩm');
            }
            CommentBlog::destroy($delete);
            return back()->with('thongbao','xóa bình luận thành công');
        }
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
        $model->user = Auth::user()->id;
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



    public function adduser(Request $request)
    {
        $this -> validate($request,
        [
            'account_fname' =>'required|min:2|max:200|unique:users,username|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'account_lname' =>'required|min:2|max:200',
            'register_email' =>'required|min:2|max:200|email|unique:users,email',
            'register_address' =>'required|min:2|max:200',
            'register_password' =>'required|min:2|max:200',
            'cur_password' =>'required|same:register_password',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'required' => 'Dữ Liệu Không Được Bỏ Trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
            'account_fname.unique' => 'tài khoản đã tồn tại',
            'register_email.unique' => 'đại chỉ email đã tồn tại',

            'passagain.same' => 'mật khẩu nhập lại chưa đúng',
            'regex' => ' user name phải viết liền không dấu',
            'email' => 'phải nhập đúng định dạng email',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn'
        ]);
    $model = new User();
    $model->username = $request->account_fname;
    $model->name = $request->account_lname;
    $model->email = $request->register_email;
    $model->address = $request->register_address;
    $model->password = bcrypt($request->register_password);
    $model->level = 0;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = $image['name'];
            move_uploaded_file($image['tmp_name'],"giao-dien/images/user/" . $filename);
    }
    $model->logo = $filename;
    $model->save();
    return back()-> with('thongbao','thêm thành công');
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


    public function searchSanPham(Request $request){
     
        if($request->thuonghieusp){
            $product = ProductModel::where('category_trade','=', $request->thuonghieusp)->paginate(10);
            $category_product = CateProductModel::all();
            $trade_product = CategoryProductModel::paginate(5);
            if ($request->price) {
                $price = $request->price;
                switch ($price) {
                    case '0':
                        $product = ProductModel::where('price','<', 1000000)->paginate(5);
                        break;
                    case '1':
                        $product = ProductModel::whereBetween('price', [1000000, 2000000])->paginate(5);
                        break;
                    case '2':
                        $product = ProductModel::whereBetween('price', [2000000, 3000000])->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::whereBetween('price', [3000000, 4000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::whereBetween('price', [4000000, 5000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::where('price','>', 5000000)->paginate(5);
                        break;
                    
                }
            }
            if ($request->order_by) {
                $order_by = $request->order_by;
                switch ($order_by) {
                    case '2':
                        $product = ProductModel::orderBy('id', 'desc')->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::orderBy('id', 'asc')->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::orderBy('price', 'desc')->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::orderBy('price', 'asc')->paginate(5);
                        break;
                }
            }
            return view('font-end.sanpham',compact('product','category_product','trade_product'));

            }

        else{
            $category_product = CateProductModel::all();
            $product = ProductModel::where('product_name', 'LIKE', '%' . $request->search . '%')->paginate(20);
            $trade_product = CategoryProductModel::paginate(5);
            if ($request->price) {
                $price = $request->price;
                switch ($price) {
                    case '0':
                        $product = ProductModel::where('price','<', 1000000)->paginate(5);
                        break;
                    case '1':
                        $product = ProductModel::whereBetween('price', [1000000, 2000000])->paginate(5);
                        break;
                    case '2':
                        $product = ProductModel::whereBetween('price', [2000000, 3000000])->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::whereBetween('price', [3000000, 4000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::whereBetween('price', [4000000, 5000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::where('price','>', 5000000)->paginate(5);
                        break;
                    
                }
            }
            if ($request->order_by) {
                $order_by = $request->order_by;
                switch ($order_by) {
                    case '2':
                        $product = ProductModel::orderBy('id', 'desc')->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::orderBy('id', 'asc')->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::orderBy('price', 'desc')->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::orderBy('price', 'asc')->paginate(5);
                        break;
                }
            }
            return view('font-end.sanpham',compact('product','category_product','trade_product'));
    
    
        }

    }


    //hàm sử lý sản phẩm

    public function sanpham(Request $request){

        if($request->danhmucsp){
            $product = ProductModel::where('cate_id','=', $request->danhmucsp)->paginate(10);
            $category_product = CateProductModel::all();
            $trade_product = CategoryProductModel::paginate(5);
            if ($request->price) {
                $price = $request->price;
                switch ($price) {
                    case '6':
                        $product = ProductModel::where('price','<', 1000000)->paginate(5);
                        break;
                    case '1':
                        $product = ProductModel::whereBetween('price', [1000000, 2000000])->paginate(5);
                        break;
                    case '2':
                        $product = ProductModel::whereBetween('price', [2000000, 3000000])->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::whereBetween('price', [3000000, 4000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::whereBetween('price', [4000000, 5000000])->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::where('price','>', 5000000)->paginate(5);
                        break;
                    
                }
            }
            if ($request->order_by) {
                $order_by = $request->order_by;
                switch ($order_by) {
                    case '2':
                        $product = ProductModel::orderBy('id', 'desc')->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::orderBy('id', 'asc')->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::orderBy('price', 'desc')->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::orderBy('price', 'asc')->paginate(5);
                        break;
                }
            }
            return view('font-end.sanpham',compact('product','category_product','trade_product'));

        }
        
        if($request->thuonghieusp){
            $product = ProductModel::where('category_trade','=', $request->thuonghieusp)->paginate(10);
            $category_product = CateProductModel::all();
            $trade_product = CategoryProductModel::paginate(5);
            if ($request->price) {
                $price = $request->price;
                switch ($price) {
                    case '6':
                        $product = ProductModel::where('price','<', 1000000)->paginate(5);
                        break;
                    case '1':
                        $product = ProductModel::whereBetween('price', [1000000, 2000000])->paginate(5);
                        break;
                    case '2':
                        $product = ProductModel::whereBetween('price', [2000000, 3000000])->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::whereBetween('price', [3000000, 4000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::whereBetween('price', [4000000, 5000000])->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::where('price','>', 5000000)->paginate(5);
                        break;
                    
                }
            }
            if ($request->order_by) {
                $order_by = $request->order_by;
                switch ($order_by) {
                    case '2':
                        $product = ProductModel::orderBy('id', 'desc')->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::orderBy('id', 'asc')->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::orderBy('price', 'desc')->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::orderBy('price', 'asc')->paginate(5);
                        break;
                }
            }
            return view('font-end.sanpham',compact('product','category_product','trade_product'));

            }

        else{
            $category_product = CateProductModel::all();
            $product = ProductModel::paginate(10);
            $trade_product = CategoryProductModel::paginate(5);
            if ($request->price) {
                $price = $request->price;
                switch ($price) {
                    case '6':
                        $product = ProductModel::where('price','<', 1000000)->paginate(5);
                        break;
                    case '1':
                        $product = ProductModel::whereBetween('price', [1000000, 2000000])->paginate(5);
                        break;
                    case '2':
                        $product = ProductModel::whereBetween('price', [2000000, 3000000])->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::whereBetween('price', [3000000, 4000000])->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::whereBetween('price', [4000000, 5000000])->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::where('price','>', 5000000)->paginate(5);
                        break;
                    
                }
            }
            if ($request->order_by) {
                $order_by = $request->order_by;
                switch ($order_by) {
                    case '2':
                        $product = ProductModel::orderBy('id', 'desc')->paginate(5);
                        break;
                    case '3':
                        $product = ProductModel::orderBy('id', 'asc')->paginate(5);
                        break;
                    case '4':
                        $product = ProductModel::orderBy('price', 'desc')->paginate(5);
                        break;
                    case '5':
                        $product = ProductModel::orderBy('price', 'asc')->paginate(5);
                        break;
                }
            }
            return view('font-end.sanpham',compact('product','category_product','trade_product'));
    
    
        }

    }


    //hàm sử lý chi tiết sản phẩm
    public function chitietsanpham($id){

        $productKey = 'ProductModel_' . $id;
        if (!Session::has($productKey))
        {
            ProductModel::where('id', $id)->increment('view_count');
            Session::put($productKey, 1);
        }
        $delete = request('deletecomment');
        if($delete){
            $comment = CommentModel::find($delete);
            if($comment == null)
            {
                return back()->with('thongbao','không xóa được sản phẩm');
            }
            CommentModel::destroy($delete);
            return back()->with('thongbao','xóa bình luận thành công');
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

    
    public function deletecart(){
        $userID = Auth::user()->id;
        \Cart::session($userID)->clear();
        return back();
    }


    // thêm đơn hàng
    public function addorder(Request $request)
    {
        $userID = Auth::user()->id;
        $items = \Cart::session($userID)->getContent();
        // $khoa = \Cart::session(Auth::user()->id)->getContent();
        // $cartItems = array_map(function($items){
        //     return[
        //         'name'=> $items['name'],
        //         'price'=> $items['price'],
        //         'quantity' => $items['quantity']
        //     ];
        // },$items->getContent()->toarray());
            
        // foreach($cartItems as $key => $show){
        //     dd ($key) ;
        //     }
        $this -> validate($request,
        [
            'billing_fname' =>'required|min:2|max:200',
            'billing_phone' =>'required|min:2|max:200',
            'billing_email' =>'required|min:2|max:200',
            'billing_streetAddress' =>'required|min:2|max:200',
        ],
        [
            'billing_fname.required' => 'tên Không Được Bỏ Trống',
            'billing_fname.min' => 'độ dài tên phải từ 2 đến 200 kí tự',
            'billing_fname.max' => 'độ dài tên phải từ 2 đến 200 kí tự',


            'billing_phone.required' => 'số điện thoại Không Được Bỏ Trống',
            'billing_phone.min' => 'độ dài số điện thoại phải từ 2 đến 200 kí tự',
            'billing_phone.max' => 'độ dài số điện thoại phải từ 2 đến 200 kí tự',


            'billing_email.required' => 'email Không Được Bỏ Trống',
            'billing_email.min' => 'độ dài email phải từ 2 đến 200 kí tự',
            'billing_email.max' => 'độ dài email phải từ 2 đến 200 kí tự',


            'billing_streetAddress.required' => 'địa chỉ Không Được Bỏ Trống',
            'billing_streetAddress.min' => 'độ dài địa chỉ phải từ 2 đến 200 kí tự',
            'billing_streetAddress.max' => 'độ dài địa chỉ phải từ 2 đến 200 kí tự',
        ]);

        foreach($items as $showcart)
        {
                $model = new OderModel();
                $model->product_id =  $showcart->id;
                $model->price = $showcart->price;
                $model->quantity = $showcart->quantity;
                $model->status = 1;
                $model->save();   
                
                $bill = new BillModel;
                $bill->name = $request->billing_fname;
                $bill->email = $request->billing_email;
                $bill->address = $request->billing_streetAddress ;
                $bill->phone_number = $request->billing_phone;  
                $bill->type_payment = 1;
                $bill->note = $request->orderNotes;
                $bill->id_order = $model->id;
                $bill->user = $userID;
                $bill->save(); 
        }

      

        \Cart::session($userID)->clear();
        return redirect('')-> with('thongbao','thêm thành công');   

    }


    public function getResetPassworld(){
        return view('font-end.laymk');
    }



    public function postResetPassworld(Request $request)
    {
        $email = $request->register_email;
        $checkEmail = User::where('email', $email)->first();
        if (!$checkEmail) {
            return back()->with('thongbao','Email Không tồn tại');   
        }
        $verify_code = bcrypt(time().$email);
        $checkEmail->verify_code = $verify_code;
        $checkEmail->verify_code_time = Carbon::now();
        $checkEmail->save();
        $url = route('user.reset_password.get',['verify_code'=>$checkEmail->verify_code,'email'=>$email,'username'=>$checkEmail->username]);
        $data=[
            'route' => $url
        ];
        Mail::send('emails.hello', $data, function($message) use ($email){
            $message->to($email, 'Reset Password')->subject('Lấy lại mật khẩu người dùng Boss Luxury');
        });
         
    }

    public function getChanePassworld(Request $request)
    {
        $verify_code = $request->verify_code;
        $email = $request->email;
        $username = $request->username;
        $checkEmail = User::where([
            'verify_code' => $verify_code,
            'email' => $email])->first();
        if (!$checkEmail) {
            return redirect()->back()->with('thongbao', 'Sorry the link to get the link back is incorrect !');
        }
        return view('font-end.getpass',['email'=>$email,'username'=>$username]);
    }


    public function postChanePassworld(Request $request)
    {
        $verify_code = $request->verify_code;
        $email = $request->email;
        $username = $request->username;
        $checkEmail = User::where([
            'verify_code' => $verify_code,
            'email' => $email])->first();
        if (!$checkEmail) {
            return redirect()->back()->with('thongbao', 'Sorry the link to get the link back is incorrect !');
        }

        $this -> validate($request,
        [
            'register_pass' =>'required|min:2|max:200',
            'register_reset_pass' =>'required|same:pass',

        ],
        [
            'required' => 'Dữ Liệu Không Được Bỏ Trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
            'register_reset_pass.same' => 'mật khẩu nhập lại chưa đúng',
        ]);
        $checkEmail->password = bcrypt($request->register_pass);
        $checkEmail->save();
        return redirect()->back()->with('thongbao', 'thành công');
    }

    
    // public function sendmail(){
    //     Mail::send('emails.hello','hello', function($message) {
    //         $message->to('clublienquan2909@gmail.com', 'Reset Password')->subject('Reset Password MoMe !');
    //     });
    // }


    public function shownhanhsp(Request $request,$id){

        if ($request->ajax()) {
            $output = '';
            $product = ProductModel::find($id);
            if ($product) {
                    $output .= $product;
            }
            return Response($output);
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