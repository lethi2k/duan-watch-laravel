<?php

namespace App\Http\Controllers;
use App\BlogModel;
use App\User;
use App\CategoryBlogModel;
use Illuminate\Http\Request;

class Blog extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = BlogModel::find(1)->CateBlog->toArray();
        // dd($data);
        $Cate = BlogModel::paginate(10);
        $Count = count(BlogModel::all());

        return view('back-end.Blog.index',['Cate' =>$Cate, 'Count' => $Count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catebl = CategoryBlogModel::all();
        $userbl = User::all();  
        return view('back-end.Blog.add',['catebl'=>$catebl,'userbl' =>$userbl]);
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
            'mota' =>'required|min:2|max:255',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'name.max' => 'độ dài phải từ 2 đến 200 kí tự',

            'mota.required' => 'Bạn chưa mô tả',
            'mota.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'mota.max' => 'độ dài phải từ 2 đến 200 kí tự',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);
    $model = new BlogModel();
    $model->cate_id = $request->danhmucbl;
    $model->name_blog = $request->name;
    $model->meta = $request->mota;
    $model->content = $request->area1;
    $model->user = $request->user;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = $image['name'];
            move_uploaded_file($image['tmp_name'],"giao-dien/images/blog/". $filename);
    }
    $model->images = $filename;
    $model->save();
    return redirect('admin/blog/add')-> with('thongbao','thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = BlogModel::find($id);
        return view('back-end.Blog.chitiet',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $catebl = CategoryBlogModel::all();
        $userbl = User::all();
        $blog = BlogModel::find($id);
        if(!$blog){
            header("location: " . asset('') . "admin/blog/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.Blog.edit', ['cate' => $blog, 'catebl'=>$catebl,'userbl' =>$userbl]);
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
        $model = BlogModel::find($id);
        $model->cate_id = $request->danhmucbl;
        $model->name_blog = $request->name;
        $model->meta = $request->mota;
        $model->content = $request->area1;
        $model->user = $request->user;
        $image = $_FILES['image'];
        $filename = $model->images;; 
        if($image['size'] > 0){
                $filename = $image['name'];
                move_uploaded_file($image['tmp_name'], "giao-dien/images/blog/". $filename);
        }
    $model->images = $filename;
        $model->save();
        return redirect('admin/blog/index')-> with('thongbao','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = BlogModel::find($id);
        if($blog == null){
            header("location: " . asset('') . "admin/blog/index?msg=id không tồn tại");
        }
        BlogModel::destroy($id);
        return redirect('admin/blog/index');
    }
}
