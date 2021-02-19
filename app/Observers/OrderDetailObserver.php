<?php

namespace App\Observers;

use App\Order_Detail;
use App\Order;

class OrderDetailObserver
{
    private function generateTotal($invoiceDetail)
    {
        //MENGAMBIL INVOICE_ID
        $order_id = $orderDetail->order_id;
        //SELECT DARI TABLE invoice_details BERDASARKAN INVOICE
        $order_detail = Order_Detail::where('order_id', $order_id)->get();
        //KEMUDIAN DIJUMLAH UNTUK MENDAPATKAN TOTALNYA
        $total = $invoice_detail->sum(function($i) {
            //DIMANA KETENTUAN YANG DIJUMLAHKAN ADALAH HASIL DARI price* qty
            return $i->price * $i->qty;
        });
        //UPDATE TABLE invoice PADA FIELD TOTAL
        $orderDetail->order()->update([
            'total' => $total
        ]);
    }
    /**
     * Handle the order detail "created" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function created(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "updated" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function updated(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "deleted" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function deleted(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "restored" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function restored(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "force deleted" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function forceDeleted(OrderDetail $orderDetail)
    {
        //
    }
}
