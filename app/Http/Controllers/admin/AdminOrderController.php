<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use PDF;

class AdminOrderController extends Controller
{
    public function index()
    {
        return view('admin.order.index', [
            'orders' => Order::orderBy('id', 'desc')->get(),
        ]);
    }

    public function orderDetail($id)
    {
        return view('admin.order.detail', [
            'order' => Order::find($id),
        ]);
    }

    public function orderInvoice($id)
    {
        return view('admin.order.view-invoice', [
            'order' => Order::find($id),
        ]);
    }

    public function downloadInvoice($id)
    {
        $pdf = PDF::loadView('admin.order.download-invoice');
        return $pdf->stream('invoice.pdf');
    }

    public function edit($id)
    {
        return view('admin.order.view-invoice', [
            'orders' => Order::find($id),
        ]);
    }

    public function delete($id)
    {

    }
}
