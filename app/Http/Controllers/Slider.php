<?php

namespace App\Http\Controllers;
use App\SliderModel;
use Illuminate\Http\Request;

class Slider extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cate = SliderModel::paginate(5); 
        $Count = count(SliderModel::all()); 
        return view('back-end.slider.index',['Cate' => $Cate,'Count' => $Count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.Slider.add');
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
            'title' =>'required|min:2|max:255',
            'area1' =>'required',
            'image' =>'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên ',
            'name.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'name.max' => 'độ dài phải từ 2 đến 200 kí tự',
            
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'title.min' => 'độ dài phải từ 2 đến 255 kí tự',
            'title.max' => 'độ dài phải từ 2 đến 255 kí tự',

            'area1.required' => 'Bạn chưa nhập nội dung',

            'image.required' => 'images không được bỏ trống',
            'image.mimes' => 'vui lòng chọn đúng định dạng ảnh',
            'image.max' => 'Độ dài vượt quá giới hạn',
        ]);
    $model = new SliderModel();
    $model->name = $request->name;
    $model->title = $request->title;
    $model->content = $request->area1;
    $model->status = $request ->status;
    $image = $_FILES['image'];
    $filename = ""; 
    if($image['size'] > 0){
            $filename =$image['name'];
            move_uploaded_file($image['tmp_name'], "giao-dien/images/slider/".$filename);
    }
    $model->images = $filename;
    $model->save();
    return redirect('admin/slider/add')-> with('thongbao','thêm thành công');
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
        $category = SliderModel::find($id);
        if(!$category){
            header("location: " . asset('') . "admin/slider/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.Slider.edit', ['cate' => $category]);
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
        $model = SliderModel::find($id);
        $model->name = $request->name;
        $model->title = $request->title;
        $model->content = $request->area1;
        $model->status = $request ->status;
        $image = $_FILES['image'];
        $filename = $model->images;
        if($image['size'] > 0){
                $filename = $image['name'];
                move_uploaded_file($image['tmp_name'], "giao-dien/images/slider/" .$filename);
        }
        $model->images = $filename;
        $model->save();
        return redirect('admin/slider/index')->with('thongbao','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = SliderModel::find($id);
        if($category == null){
            header("location: " . asset('') . "admin/slider/index?msg=id không tồn tại");
        }
        SliderModel::destroy($id);
        return redirect('admin/slider/index')->with('thongbao','Xóa thành công');
    }

    public function checkname()
    {
        $name = $_POST['name'];
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
	    $queryData = SliderModel::where('name', $name);
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
            $slider = SliderModel::where('name', 'LIKE', '%' . $request->search . '%')->get();
            if ($slider) {
                foreach ($slider as $key => $cate) {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->name . '</td>
                    <td>' . $cate->title . '</td>
                    <td><img src="' . $cate->images . '" alt=""></td>
                    <td>' . $cate->content . '</td>
                    <td>
                    <a href="'.'admin/slider/edit/'.$cate->id.'" class="btn btn-sm btn-primary">Sửa</a> &nbsp
                    <a href="'.'admin/slider/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }

    
}
