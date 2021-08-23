<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function show()
    {
        $userId = Auth::id();
        $carts = DB::table('carts')
        ->join('items', 'carts.item_id', '=', 'items.id')
        ->where('carts.user_id', $userId)
        ->select('items.*', 'carts.id as carts_id')
        ->get();


        return view('cart', ['carts' => $carts]);
    }

    public function addToCart(Request $request)
    {
        if (Auth::user()) {
           $cart = new Cart;
                $cart->user_id = Auth::id();
                $cart->item_id = $request->item_id;
                $cart->save();

                return back();
        }
        return redirect('login');
    }

    static function cartItem()
    {
        $userId = Auth::id();
        return Cart::where('user_id', $userId)->count();
    }

    public function destroy($id)
    {
        Cart::destroy($id);
        return back();
    }

    


}
