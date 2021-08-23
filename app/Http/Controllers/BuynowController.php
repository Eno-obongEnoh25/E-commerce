<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BuynowController extends Controller
{

    public function buyNow()
    {
        $userId = Auth::id();
        $total = DB::table('carts')
        ->join('items', 'carts.item_id', '=', 'items.id')
        ->where('carts.user_id', $userId)
        ->sum('items.price');

        return view('buynow', ['total' => $total]);
    }

    public function checkOut(Request $request)
    {
        $userId = Auth::id();
        $allItems = Cart::where('user_id', $userId)->get();
        foreach($allItems as $allItem)
        {
            $buy = new Buy;
            $buy->item_id = $allItem->item_id;
            $buy->user_id = Auth::id();
            $buy->status = 'pending';
            $buy->payment_method = $request->payment;
            $buy->payment_status = 'pending';
            $buy->address = $request->address;
            $buy->save();
            Cart::where('user_id', $userId)->delete();
        }
            $request->input();
            return redirect('welcome');
    }

    public function orders()
    {
        $userId = Auth::id();
        $orders = DB::table('buys')
        ->join('items', 'buys.item_id', '=', 'items.id')
        ->where('buys.user_id', $userId)
        ->get();

        return view('orders', ['orders' => $orders]);
    }

}
