<?php

namespace App\Http\Controllers;
use App\CategoryProductModel;
use App\ProductModel;
use Illuminate\Http\Request;
class CategoryProduct extends Controller
{
    
    public function index()
    {
        $Cate = CategoryProductModel::paginate(5); 
        $Count = count(CategoryProductModel::all()); 
        return view('back-end.CategoryProduct.index',['Cate' => $Cate,'Count' => $Count]);
    }

    public function create()
    {
        return view('back-end.CategoryProduct.add');
    }

    public function store(Request $request)
    {
        $this -> validate($request,
        [
            'name' =>'required|min:2|max:200',
            'country' =>'required|min:2|max:255',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'name.max' => 'độ dài phải từ 2 đến 200 kí tự',
            
            'country.required' => 'Bạn chưa nhập tên thể loại',
            'country.min' => 'độ dài phải từ 2 đến 255 kí tự',
            'country.max' => 'độ dài phải từ 2 đến 255 kí tự',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);
    $model = new CategoryProductModel();
    $model->name = $request->name;
    $model->country = $request->country;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = "giao-dien/images/" . uniqid() . '-' . $image['name'];
            move_uploaded_file($image['tmp_name'], $filename);
    }
    $model->logo = $filename;
    $model->save();
    return redirect('admin/trademark/add')-> with('thongbao','thêm thành công');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category = CategoryProductModel::find($id);
        if(!$category){
            header("location: " . asset('') . "admin/trademark/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.CategoryProduct.edit', ['cate' => $category]);
    }

    public function update(Request $request, $id)
    {
        $model = CategoryProductModel::find($id);
        $model->name = $request->name;
        $model->country = $request->country;
        $image = $_FILES['image'];
        $filename = $model->logo;
        if($image['size'] > 0){
                $filename = "giao-dien/images/" . uniqid() . '-' . $image['name'];
                move_uploaded_file($image['tmp_name'], $filename);
        }
        $model->logo = $filename;
        $model->save();
        return redirect('admin/trademark/index');
    }


    public function destroy($id)
    {
        $category = CategoryProductModel::find($id);
        if($category == null){
            header("location: " . asset('') . "admin/trademark/index?msg=id không tồn tại");
        }
        
        $product = ProductModel::where('category_trade','=', $category);
        if($product == null){
            return redirect('admin/trademark/index')->with('thongbao','không xóa được do đã liên kết đến sản phẩm');
        }
        
            CategoryProductModel::destroy($id);
            return redirect('admin/trademark/index')->with('thongbao','Xóa Thành Công');
        
        
    }


    public function checkname()
    {
        $name = $_POST['name'];
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
	    $queryData = CategoryProductModel::where('name', $name);
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
            $category = CategoryProductModel::where('name', 'LIKE', '%' . $request->search . '%')->orwhere('country', 'LIKE', '%' . $request->search . '%')->get();
            if ($category) {
                foreach ($category as $key => $cate) {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->name . '</td>
                    <td>' . $cate->country . '</td>
                    <td><img src="' . $cate->logo . '" alt=""></td>
                    <td>
                    <a href="'.'admin/trademark/edit/'.$cate->id.'" class="btn btn-sm btn-primary">Sửa</a> &nbsp
                    <a href="'.'admin/trademark/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }
}
