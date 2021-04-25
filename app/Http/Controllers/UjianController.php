<?php

namespace App\Http\Controllers;
use App\Ujian;
use Illuminate\Http\Request;

class UjianController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujians = Ujian::all();
        return view('ujian.index',compact('ujians'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('ujian.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request)
    {
        Ujian::create($request->all());
        return redirect()->route('ujian.index')
                        ->with('success','Ujian created successfully');
    }

    
}
