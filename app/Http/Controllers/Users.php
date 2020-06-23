<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\BlogModel;
class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('back-end.users.index',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.users.add');
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
            'username' =>'required|min:2|max:200|unique:users,username|regex:/(^([a-zA-Z]+)(\d+)?$)/u',
            'name' =>'required|min:2|max:200',
            'email' =>'required|min:2|max:200|email|unique:users,email',
            'address' =>'required|min:2|max:200',
            'pass' =>'required|min:2|max:200',
            'passagain' =>'required|same:pass',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'required' => 'Dữ Liệu Không Được Bỏ Trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
            'unique' => 'dữ liệu đã tồn tại',
            'passagain.same' => 'mật khẩu nhập lại chưa đúng',
            'email' => 'phải nhập đúng định dạng email',
            'regex' => ' user name phải viết liền không dấu',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn'
        ]);
    $model = new User();
    $model->username = $request->username;
    $model->name = $request->name;
    $model->email = $request->email;
    $model->address = $request->address;
    $model->password = bcrypt($request->pass);
    $model->level = $request->level;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename = $image['name'];
            move_uploaded_file($image['tmp_name'],"giao-dien/images/user/" . $filename);
    }
    $model->logo = $filename;
    $model->save();
    return redirect('admin/member/add')-> with('thongbao','thêm thành công');
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
        $data = User::find($id);
        return view('back-end.users.edit', ['data' => $data]);
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
            'name' =>'required|min:2|max:200',
            'email' =>'required|min:2|max:200|email|unique:users,email,'.$id,
            'address' =>'required|min:2|max:200',
            'image' =>'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'required' => 'Dữ Liệu Không Được Bỏ Trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự',
            'unique' => 'dữ liệu đã tồn tại',
            'email' => 'phải nhập đúng định dạng email',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn'
        ]);
        $model = User::find($id);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->address = $request->address;
        $model->level = $request->level;
        $image = $_FILES['image'];
        $filename = $model->logo;
        if($image['size'] > 0){
                $filename = $image['name'];
                move_uploaded_file($image['tmp_name'],"giao-dien/images/user/" . $filename);
        }
        $model->logo = $filename;
            if( $request->changePass == "on"){
                $this -> validate($request,
                [
                    'pass' =>'required|min:2|max:200',
                    'passagain' =>'required|same:pass'
                ],
                [
                    'pass.required' => 'Mật Khẩu Không Được Bỏ Trống',
                    'min' => 'độ dài phải từ 2 đến 200 kí tự',
                    'max' => 'độ dài phải từ 2 đến 200 kí tự',
                    'unique' => 'dữ liệu đã tồn tại',
                    'passagain.same' => 'mật khẩu nhập lại chưa đúng'
                ]);
                $model->password = bcrypt($request->pass);
            };
    $model->save();
    return redirect('admin/member/index')-> with('thongbao','thêm thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User = User::find($id);
        if($User == null){
            header("location: " . asset('') . "admin/member/index?msg=id không tồn tại");
        }
        $blog_user = BlogModel::where('user','=', $id);
        if($blog_user){
            return redirect('admin/member/index')->with('thongbao','không xóa được do user đã đăng bài viết');
        }else{
            User::destroy($id);
            return redirect('admin/member/index')->with('thongbao','Xóa Thành Công');
        }
    }


    public function getLoginAdmin(){
        return view('back-end.login');
    }


    public function postLoginAdmin(Request $request)
    {
        $this -> validate($request,
        [
            'name' =>'required',
            'pass' =>'required|min:2|max:200',
        ],
        [
            'required' => 'Dữ Liệu Không Được Bỏ Trống',
            'min' => 'độ dài phải từ 2 đến 200 kí tự',
            'max' => 'độ dài phải từ 2 đến 200 kí tự'
        ]);
        // dd($request->name);
        $remember = $request->has("remember") ? true : false;
            $arr =[
                "username" => $request->name , 
                "password" => $request->pass 
            ];
        if(Auth::attempt($arr,$remember)){
            return redirect('admin/index');
        }
        else{
            return redirect('admin/dangnhap')->with('thongbao','dang nhap khong thanh cong');
        }
    }


    
    public function logoutAdmin(){
        Auth::logout();
        return redirect('admin/dangnhap');
    }

}