<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyModel;
class Company extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = CompanyModel::paginate(10);
        $Count = count(CompanyModel::all());
        return view('back-end.Company.index',['show' =>$show, 'Count' => $Count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.Company.add');
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
            'address' =>'required|min:2|max:200',
            'email' =>'required|min:2|max:200',
            'accnumber' =>'required|min:2|max:200',
            'phone' =>'required|min:2|max:200',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'required' => 'Bạn chưa nhập tên thể loại',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);
    $model = new CompanyModel();
    $model->name = $request->name;
    $model->address = $request->address;
    $model->phone_number = $request->phone;
    $model->email = $request->email;
    $model->stk = $request->accnumber;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = $image['name'];
            move_uploaded_file($image['tmp_name'], "giao-dien/images/company/". $filename);
    }
    $model->logo = $filename;
    $model->save();
    return redirect('admin/company/add')-> with('thongbao','thêm thành công');
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
        $data = CompanyModel::find($id);
        return view('back-end.Company.edit',compact('data'));
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
        $model = CompanyModel::find($id);
        $model->name = $request->name;
        $model->address = $request->address;
        $model->phone_number = $request->phone;
        $model->email = $request->email;
        $model->stk = $request->accnumber;
        $image = $_FILES['image'];
        $filename = $model->logo; 
        if($image['size'] > 0){
                $filename = $image['name'];
                move_uploaded_file($image['tmp_name'], "giao-dien/images/company/". $filename);
        }
        $model->logo = $filename;
        $model->save();
        return redirect('admin/company/index')-> with('thongbao','sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = CompanyModel::find($id);
        if($company == null){
            header("location: " . asset('') . "admin/company/index?msg=id không tồn tại");
        }
        CompanyModel::destroy($id);
        return redirect('admin/company/index');
    }
}
