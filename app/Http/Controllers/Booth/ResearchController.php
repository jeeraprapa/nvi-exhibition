<?php

namespace App\Http\Controllers\Booth;

use App\Http\Controllers\Controller;
use App\Models\Booth;

class ResearchController extends Controller
{

    public function index ()
    {
        $booths = Booth::Research()->orderBy('weight','asc')->get();

        return view('booth.main.research',compact('booths'));
    }

    public function detail (Booth $booth)
    {
        $next = Booth::Research()->where('id','>',$booth->id)->latest()->first();
        $previous = Booth::Research()->where('id','<',$booth->id)->latest()->first();

        return view('booth.detail1',compact('booth','next','previous'));
    }
}
