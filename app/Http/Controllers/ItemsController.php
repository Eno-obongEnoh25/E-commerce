<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function showComputing()
    {
        $items = Item::where('category_id', '1')->get();
        return view('computing', [
            'item' => $items
        ]);
    }


    public function showPhonesAndTablets()
    {
        $items = Item::where('category_id', '4')->get();
        return view('phonesAndTablets', [
            'item' => $items
        ]);
    }


}
