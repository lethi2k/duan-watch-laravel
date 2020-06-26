<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OderModel;
use Excel;
use App\Exports\CsvExport;
use Carbon\Carbon;
use App\BillModel;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->time) 
        {
            $time = $request->time;
            switch ($time) 
            {
                case '1':
                    $data = OderModel::orderBy('created_at', 'desc')->paginate(10);
                    break;
                case '2':
                    $data = OderModel::orderBy('created_at', 'asc')->paginate(10);
                    break;
                default:
                    $data = OderModel::paginate(10);
                    break;
            }
        }
        else
        {
            $data = OderModel::paginate(10);
        }
        
        return view('back-end.Order.index',compact('data'));
        
    }


    public function show($id)
    {
        $data = BillModel::where('id_order','=',$id)->get();
        return view('back-end.Bill.index',compact('data'));
    }

    public function exportFile(){
        return Excel::download(new CsvExport,'xample.csv');
        // $data = OderModel::all()->toArray();
        // $data_arr[] = array('product_id','price','quantity','status','id_order',);
        
        // foreach($data as $print_data){
        //     $data_arr[] = array(
                
        //         'product_id' =>$print_data->product_id,
        //         'price' =>$print_data->price,
        //         'quantity' =>$print_data->quantity,
        //         'status' =>$print_data->status,
        //         'id_order' =>$print_data->id_order,
        //     );
        // }
        // dd($data_arr);
        // Excel::store('custom data',function($excel) use($data_arr){
        //     $excel = setTitle('custom data');
        //     $excel->sheet('custom data',function($sheet) use($data_arr){
        //         $sheet ->fromArray($data_arr,null,'A1',false,false);
        //     })->download('xlsx');
        // });

        // $order = OderModel::find($id);
        // if(!$order){
        //     header("location: " . asset('') . "admin/donhang/edit?msg=id không tồn tại");
        //     die;
        // }
        // return view('back-end.Order.hoadon', ['order' => $order]);
    }
    
    public function edit($id)
    {
        $order = OderModel::find($id);
        if(!$order){
            header("location: " . asset('') . "admin/donhang/edit?msg=id không tồn tại");
            die;
        }
        return view('back-end.Order.edit', ['order' => $order]);
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
        $model = OderModel::find($id);
        $model->status = $request->trangthai;
        $model->save();
         return redirect('admin/donhang/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = OderModel::find($id);
        if($order == null){
            header("location: " . asset('') . "admin/donhang/index?msg=id không tồn tại");
        }
        BillModel::where('id_order','=', $id)->delete();
        OderModel::destroy($id);
            return redirect('admin/donhang/index')->with('thongbao','xóa thành công');
        // $order_detail = BillModel::where('id_order','=', $id)->count();
        // if($order_detail == 0)
        // {
        //     OderModel::destroy($id);
        //     return redirect('admin/donhang/index');
        // }else
        // {
        //     return redirect('admin/donhang/index')->with('thongbao','không xóa được bạn cần xóa chi tiết đơn hàng trước');
        // }
        
    }
}