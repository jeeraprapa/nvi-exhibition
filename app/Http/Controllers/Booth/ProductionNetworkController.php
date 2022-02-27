<?php

namespace App\Http\Controllers\Booth;

use App\Http\Controllers\Controller;
use App\Models\Booth;

class ProductionNetworkController extends Controller
{

    public function index ()
    {
        $booths = Booth::productionNetwork()->orderBy('weight','asc')->get();

        return view('booth.main.production_network',compact('booths'));
    }

    public function detail (Booth $booth)
    {
        $next = Booth::productionNetwork()->where('id','>',$booth->id)->latest()->first();
        $previous = Booth::productionNetwork()->where('id','<',$booth->id)->latest()->first();

        return view('booth.detail2',compact('booth','next','previous'));
    }
}
