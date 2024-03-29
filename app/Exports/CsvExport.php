<?php

namespace App\Exports;

use App\OderModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class CsvExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $orders =  OderModel::all();

        foreach ($orders as $row) {
            $order[] = array(
                '0' => $row->id,
                '1' => $row->Product->product_name,
                '2' => $row->price,
                '3' => $row->quantity,
                '4' => $row->status,
                '5' =>$row->price *  $row->quantity,
            );
        }

        return (collect($order));
    }

    public function headings(): array
    {
        return [
            'id',
            'Tên',
            'Địa chỉ',
            'Email',
            'Ngày đặt hàng',
            'Tổng',
        ];
    }

}
