<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BillModel;
class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = BillModel::paginate(10);
        return view('back-end.Bill.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Bill = BillModel::find($id);
        if($Bill == null){
            header("location: " . asset('') . "admin/donhang/index?msg=id không tồn tại");
        }
        BillModel::destroy($id);
        return redirect('admin/donhang/index');
    }


    public function search(Request $request)
    {
        if ($request->ajax()) {
            $output = '';
            $bill = BillModel::where('status', 'LIKE', '%' . $request->search . '%')->get();
            if ($bill) {
                foreach ($bill as $key => $showbill) {
                    $output .= '<tr>
                    <td class="sorting_1">'. $showbill->id .'</td>
                    <td>'. $showbill->name .'</td>
                    <td>'. $showbill->email .'</td>
                    <td>'. $showbill->address .'</td>
                    <td>'. $showbill->phone_number .'</td>
                    <td>
                        '. $showbill->type_payment .'
                    </td>
                    <td>'. $showbill->User->username .'</td>
                    <td>    
                    <a href="admin/hoadon/delete/'. $showbill->id .'" class="btn btn-sm btn-danger btn-remove"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>';
                }
            }
            return Response($output);
        }
    }



}
