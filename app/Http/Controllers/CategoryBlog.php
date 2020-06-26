<?php

namespace App\Http\Controllers;
use App\CategoryBlogModel;
use App\BlogModel;
use Illuminate\Http\Request;

class CategoryBlog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cate = CategoryBlogModel::paginate(10);
        $Count = count(CategoryBlogModel::all());
        return view('back-end.CategoryBlog.index',['Cate' =>$Cate, 'Count' => $Count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.CategoryBlog.add');
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
            'name' =>'required|min:2|max:200',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'name.max' => 'độ dài phải từ 2 đến 200 kí tự',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);
    $model = new CategoryBlogModel();
    $model->cate_name = $request->name;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = "giao-dien/images/" . uniqid() . '-' . $image['name'];
            move_uploaded_file($image['tmp_name'], $filename);
    }
    $model->logo = $filename;
    $model->save();
    return redirect('admin/category-blog/add')-> with('thongbao','thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryBlogModel::find($id);
        if(!$category){
            header("location: " . asset('') . "admin/trademark/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.CategoryBlog.edit', ['cate' => $category]);
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
        $model = CategoryBlogModel::find($id);
        $model->cate_name = $request->name;
        $image = $_FILES['image'];
        $filename = $model->logo; 
        if($image['size'] > 0){
                $filename = "giao-dien/images/" . uniqid() . '-' . $image['name'];
                move_uploaded_file($image['tmp_name'], $filename);
        }
        $model->logo = $filename;
        $model->save();
        return redirect('admin/category-blog/index')-> with('thongbao','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryBlogModel::find($id);
        if($category == null){
            header("location: " . asset('') . "admin/category-blog/index?msg=id không tồn tại");
        }
        $blog = BlogModel::where('cate_id','=', $id)->count();
        // dd($blog);
        if($blog == 0){
            CategoryBlogModel::destroy($id); 
            return redirect('admin/category-blog/index')->with('thongbao','Xóa Thành Công');
        }else{
            return redirect('admin/category-blog/index')->with('thongbao','không xóa được do đã liên kết đến sản phẩm');
        }
    }

    public function checkname()
    {
        $name = $_POST['name'];
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
	    $queryData = CategoryBlogModel::where('cate_name', $name);
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
            $category = CategoryBlogModel::where('cate_name', 'LIKE', '%' . $request->search . '%')->get();
            if ($category) {
                foreach ($category as $key => $cate) {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->cate_name . '</td>
                    <td><img src="' . $cate->logo . '" alt=""></td>
                    <td>
                    <a href="'.'admin/category-blog/edit/'.$cate->id.'" class="btn btn-sm btn-primary">Sửa</a> &nbsp
                    <a href="'.'admin/category-blog/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }

}
