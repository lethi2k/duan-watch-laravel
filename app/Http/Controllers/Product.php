<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductModel;
use App\CateProductModel;
use App\CategoryProductModel;
use App\ImagesModel;

// use Illuminate\Support\Facades\Input;
class Product extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ProductModel::paginate(5);
        return view('back-end.product.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cate = CateProductModel::all();
        $trade = CategoryProductModel::all();
        return view('back-end.product.add',['cate'=>$cate,'trade'=>$trade]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,
        [
            'tensp' =>'required|min:2|max:255|unique:product,product_name',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gia' =>'required|min:1',
            'giamgia' =>'required|min:1',
            'area2' =>'required',
            'soluong' =>'required|min:1',
            'sosao' =>'required|min:1|max:5',
            'mausac' =>'required|min:1|max:255'
        ],
        [
            'tensp.required' => 'Bạn chưa nhập tên sản phẩm',
            'tensp.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'tensp.max' => 'độ dài phải từ 2 đến 200 kí tự',
            'unique' => 'tên sản phẩm đã tồn tại',

            'gia.required' => 'Bạn chưa nhập giá',
            'gia.min' => 'độ dài phải từ 2 đến 200 kí tự',
            
            'giamgia.required' => 'Bạn chưa nhập giảm giá',
            'giamgia.min' => 'giá trị phải lớn hơn 1',

            'soluong.required' => 'Bạn chưa nhập số lượng',
            'soluong.min' => 'giá trị phải lớn hơn 1',

            'sosao.required' => 'Bạn chưa nhập số sao',
            'sosao.min' => 'giá trị phải lớn hơn 1',
            'sosao.max' => 'độ dài phải từ 1 đến 5 kí tự',


            'area2.required' => 'Bạn chưa mô tả',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);
    $model = new ProductModel();
    $model->category_trade = $request->thuonghieu;
    $model->cate_id = $request->danhmuc;
    $model->product_name = $request->tensp;
    $model->price = $request->gia;
    $model->sale_price = $request->giamgia;
    $model->detail = $request->area2;
    $model->quantity = $request->soluong;
    $model->metal = $request->area1;
    $model->star = $request->sosao;
    $model->color = $request->mausac;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = $image['name'];
            move_uploaded_file($image['tmp_name'],"giao-dien/images/product/". $filename);
    }
    $model->images = $filename;
    $model->save();
    $product_id = $model->id;
    
    if($request->imagedetail){
        foreach($request->imagedetail as $file){
            $productimg = new ImagesModel();
            if(isset($file)){
                $productimg ->images = $file ->getClientOriginalName();
                $productimg ->idsp = $product_id;
                $file -> move("giao-dien/images/product/", $file ->getClientOriginalName());
                $productimg -> save();
            }
        }
    };
    return redirect('admin/product/add')-> with('thongbao','thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = ProductModel::find($id);
        return view('back-end.product.chitiet',['data' =>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = CateProductModel::all();
        $trade = CategoryProductModel::all();
        $data = ProductModel::find($id);
        if(!$data){
            header("location: " . asset('') . "admin/product/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.Product.edit', ['data' => $data , 'cate'=>$cate,'trade'=>$trade]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this -> validate($request,
        [
            'tensp' =>'required|min:2|max:255',
            'image' =>'mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gia' =>'required|min:1',
            'giamgia' =>'required|min:1',
            'area2' =>'required',
            'soluong' =>'required|min:1',
            'sosao' =>'required|min:1|max:5',
            'mausac' =>'required|min:1|max:255'
        ],
        [
            'tensp.required' => 'Bạn chưa nhập tên sản phẩm',
            'tensp.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'tensp.max' => 'độ dài phải từ 2 đến 200 kí tự',

            'gia.required' => 'Bạn chưa nhập giá',
            'gia.min' => 'độ dài phải từ 2 đến 200 kí tự',
            
            'giamgia.required' => 'Bạn chưa nhập giảm giá',
            'giamgia.min' => 'giá trị phải lớn hơn 1',

            'soluong.required' => 'Bạn chưa nhập số lượng',
            'soluong.min' => 'giá trị phải lớn hơn 1',

            'sosao.required' => 'Bạn chưa nhập số sao',
            'sosao.min' => 'giá trị phải lớn hơn 1',
            'sosao.max' => 'độ dài phải từ 1 đến 5 kí tự',


            'area2.required' => 'Bạn chưa mô tả',

            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);

        $model = ProductModel::find($id);
        $model->category_trade = $request->thuonghieu;
        $model->cate_id = $request->danhmuc;
        $model->product_name = $request->tensp;
        $model->price = $request->gia;
        $model->sale_price = $request->giamgia;
        $model->detail = $request->area2;
        $model->quantity = $request->soluong;
        $model->metal = $request->area1;
        $model->star = $request->sosao;
        $model->color = $request->mausac;
        $image = $_FILES['image'];
        $filename = $model->images; 
        if($image['size'] > 0){
                $filename = $image['name'];
                move_uploaded_file($image['tmp_name'],"giao-dien/images/product/". $filename);
        }
        $model->images = $filename;
        $model->save();


        if($request->imagedetail){
            foreach($request->imagedetail as $file){
                $productimg = new ImagesModel();
                if(isset($file)){
                    $productimg ->images = $file ->getClientOriginalName();
                    $productimg ->idsp = $id;
                    $file -> move("giao-dien/images/product/", $file ->getClientOriginalName());
                    $productimg -> save();
                }
            }
        };
    //     if($request->imagedetail){
    //     $productsv = ImagesModel::where('idsp', '=', $id)->get();  
    //     $dataImg  = $_FILES["imagedetail"];
    //     for ($i = 0; $i < count($dataImg["tmp_name"]); $i++) {
    //         foreach($productsv as $layid){
    //             $savepr = ImagesModel::find($layid->id);
    //             $imagespr = $layid->images;
    //             if($dataImg['size'] > 0){
    //                 $tmp_images = $dataImg['tmp_name'][$i];
    //                 $imagespr = $dataImg['name'][$i];
    //                 move_uploaded_file($tmp_images,"giao-dien/images/product/" . $imagespr);
    //             }
    //             $savepr ->images = $imagespr;
    //                 $savepr -> save();
    //             // dd($savepr);
    //         }
            
    //     }
    // };
        return redirect('admin/product/index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro = ProductModel::find($id);
        if($pro == null){
            header("location: " . asset('') . "admin/product/index?msg=id không tồn tại");
        }
        ImagesModel::where('idsp', $id)->delete();
        ProductModel::destroy($id);
        return redirect('admin/product/index');
    }
    
    public function deleteimg($id){
        $pro = ImagesModel::find($id);
        if($pro == null){
            header("location: " . asset('') . "admin/product/index?msg=id không tồn tại");
        }
        ImagesModel::destroy($id);
        return back();
    }

    public function checkname()
    {
        $name = $_POST['name_product'];
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
	    $queryData = ProductModel::where('product_name', $name);
	    if($id != -1){
	        $queryData->where('id', '<>', $id);
        } 
        $numberRecord = $queryData->count();
        echo $numberRecord == 0 ? "true" : "false";
    }


    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $product = ProductModel::where('product_name', 'LIKE', '%' . $request->search . '%')->get();
            if ($product) {
                foreach ($product as $key => $cate) {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' .$cate ->Category ->name . '</td>
                    <td>' . $cate ->Trademark ->name . '</td>
                    <td>' . $cate ->product_name . '</td>
                    <td>
                        <div class="row">
                            <div class="w3-content" style="max-width:1200px">
                                <img class="mySlides" src="giao-dien/images/product/'.$cate->images .'" alt=""
                                    style="width:100%">
                            </div>
                        </div>
                    </td>
                    <td>'. $cate->price .'</td>
                    <td>'. $cate->sale_price .'</td>
                    <td>'. $cate->detail .'</td>
                    <td>'. $cate->quantity .'</td>
                    <td><a href="admin/product/chitiet/'. $cate->id .'" class="btn btn-sm btn-success">Chi
                            Tiết</a></td>
                    <td>'. $cate->star .'</td>
                    <td>'. $cate->color .'</td>
                    <td>
                    <a href="'.'admin/product/edit/'.$cate->id.'" class="btn btn-sm btn-primary">Sửa</a> &nbsp
                    <a href="'.'admin/product/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }


    
}
