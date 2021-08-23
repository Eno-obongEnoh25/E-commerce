<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function show()
    {
        return view('admindashboard');
    }

    public function addItem(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'price' => 'required',
            'category' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048'
        ]);

        $destinationPath = 'public/images/items';
        $imageName = time().'_'.$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs($destinationPath, $imageName);


        Item::create([
            'name' => $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'image_name' => $imageName,
            'category_id' => $request->category_id,
        ]);

        return back()->with('message', 'Succesfull');


    }
}
