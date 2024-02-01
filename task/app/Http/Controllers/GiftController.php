<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gifts;

class GiftController extends Controller
{
    public function index(){
        return view('gift.index');
    }

    public function create(){
        return view('gift.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'unit_price' => 'required|decimal:2',
            'units_owned' => 'required|numeric',
        ]);
        error_log(print_r($data, true));
        $newGifts = Gifts::create($data);
        error_log(print_r($newGifts, true));
        return redirect(route('gift.index'));

    }
    


}
