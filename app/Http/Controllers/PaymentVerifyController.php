<?php

namespace App\Http\Controllers;

use App\Models\PostExtra;
use Illuminate\Http\Request;

class PaymentVerifyController extends Controller
{
    public function verify(Request $request)
    {
        if ($request->q == 'su') {
            $post_extra_process_key = PostExtra::where('post_id', $request->oid)
            ->where('key_name', '_order_process_key')
            ->first();
            $process_key = $post_extra_process_key->key_value;
            // foreach ($post_extra_process_key as $data) {
            //     $process_key = $data->where('key_name', '_order_process_key')->first()->key_value;
            // }
            $post_extras = new PostExtra();
            $post_extras->post_id = $request->oid;
            $post_extras->key_name = '_esewa_ref_id';
            $post_extras->key_value = $request->refId;
            $post_extras->save();

        } else {
            $result = [
                'message' => 'Payment Unsuccessful!',
            ];
        }
        return redirect()->route('frontend-order-received', ['order_id'=>$request->oid, 'order_key'=>$process_key]);
    }
}
