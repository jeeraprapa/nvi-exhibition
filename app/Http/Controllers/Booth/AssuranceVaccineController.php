<?php

namespace App\Http\Controllers\Booth;

use App\Http\Controllers\Controller;
use App\Models\Booth;

class AssuranceVaccineController extends Controller
{

    public function index ()
    {
        $booths = Booth::AssuranceVaccine()->orderBy('weight','asc')->get();

        return view('booth.main.assurance_vaccine',compact('booths'));
    }

    public function detail (Booth $booth)
    {
        $next = Booth::AssuranceVaccine()->where('id','>',$booth->id)->latest()->first();
        $previous = Booth::AssuranceVaccine()->where('id','<',$booth->id)->latest()->first();

        return view('booth.detail3',compact('booth','next','previous'));
    }
}
