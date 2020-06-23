<?php

namespace App\Http\Controllers;
use App\CateProductModel;
use App\ProductModel;
use Illuminate\Http\Request;

class CateProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cate = CateProductModel::paginate(10);
        return view('back-end.CateProduct.index',['cate'=> $cate]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.CateProduct.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name' =>'required|min:2|max:200'
        ],
        [
            'name.required' => 'Bạn chưa nhập tên thể loại',
            'name.min' => 'độ dài phải từ 2 đến 200 kí tự',
            'name.max' => 'độ dài phải từ 2 đến 200 kí tự',
        ]);
    $model = new CateProductModel();
    $model->name = $request->name;
    $model->save();
    return redirect('admin/category-product/add')-> with('thongbao','thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('back-end.CateProduct.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CateProductModel::find($id);
        if(!$category){
            header("location: " . asset('') . "admin/category-product/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.CateProduct.edit', ['cate' => $category]);
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
        $category = CateProductModel::find($id);
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category-product/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CateProductModel::find($id);
        if($category == null){
            header("location: " . asset('') . "admin/category-product/index?msg=id không tồn tại");
        }
        $product = ProductModel::where('cate_id' == $id);
        if($product == null){
            return redirect('admin/category-product/index')->with('thongbao','không xóa được do đã liên kết đến sản phẩm');
        }else{
            CateProductModel::destroy($id);
            return redirect('admin/category-product/index')->with('thongbao','Xóa Thành Công');
        }
    }

    public function checkname()
    {
        $name = $_POST['name'];
	    $id = isset($_POST['id']) ? $_POST['id'] : -1;
	    $queryData = CateProductModel::where('name', $name);
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
            $category = CateProductModel::where('name', 'LIKE', '%' . $request->search . '%')->get();
            if ($category) {
                foreach ($category as $key => $cate) {
                    $output .= '<tr>
                    <td>' . $cate->id . '</td>
                    <td>' . $cate->name . '</td>
                    <td>
                    <a href="'.'admin/category-product/edit/'.$cate->id.'" class="btn btn-sm btn-primary">Sửa</a> &nbsp
                    <a href="'.'admin/category-product/delete/'.$cate->id.'" class="btn btn-sm btn-danger btn-remove">Xóa</a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }

}
