<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class Item1Model {
    public static function get_all(){
        $items1 = DB::table('items1')->get();
        return $items1;
    }

    public static function save($data) {
        unset($data["_token"]);
        $new_item1 = DB::table('items1')->insert($data);
        return $new_item1;
    }
}