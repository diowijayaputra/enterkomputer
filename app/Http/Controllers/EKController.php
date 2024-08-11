<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Menu;
use App\Models\Order;

class EKController extends Controller
{
    // CREATE
    public function order(Request $request)
    {
        $data = $request->validate([
            'table' => 'required',
            'name' => 'required',
            'variant' => 'required',
            'category' => 'required',
            'qty' => 'required',
            'price' => 'required',
        ]);

        Order::create($data);
    }

    // READ
    public function getDataMakanan()
    {
        $getData = Menu::where('category', 1)->get();
        return response()->json($getData);
    }

    public function getDataMinuman()
    {
        $getData = Menu::select(DB::raw('MIN(id) as id'), 'name', DB::raw('MIN(variant) as variant'), 'category', DB::raw('MAX(price) as price'))->where('category', 2)->groupBy('name', 'category')->orderBy('name', 'desc')->get();
        return response()->json($getData);
    }

    public function getDataPromo()
    {
        $getData = Menu::select('id', 'name', 'price')->where('name', 'like', '%Nasi Goreng + Jeruk Dingin%')->get();
        return response()->json($getData);
    }

    public function getDataMenu($id)
    {
        $getData = Menu::where('id', $id)->get();
        return response()->json($getData);
    }

    public function getVariant($name, $category)
    {
        $getData = Menu::where('name', 'LIKE', "%$name%")->where('category', $category)->get();
        return response()->json($getData);
    }
}
