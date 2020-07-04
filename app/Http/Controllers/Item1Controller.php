<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item1Model;

class Item1Controller extends Controller
{
    //
    public function create(){
        return view('item.form1');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_item1 = Item1Model::save($request->all());

        return redirect('/items1/id');
    }

    public function index() {
        $items1 = Item1Model::get_all();
        //dd($items);
        return view('item.index1', compact('items1'));
    }
    
    public function show($id){
        $item = Item1Model::find_by_id($id);
        return view('item.show', compact('item'));
    }

}
