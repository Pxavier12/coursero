<?php

namespace App\Http\Controllers;


use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function index()
    {
        $reports=DB::table('reports')
            ->where('user_id','=',\Auth::user()->id)
            ->get();
        return view('dashboard',compact('reports'));
    }


    public function store(Request $request){

        $request -> validate([
            'answer' => 'required',
        ]);
        Report::create([
            'user_id'=>\Auth::user()->id,
            'language'=>$request->language,
            'exercise'=>$request->exercise,
            'answer'=>$request->answer,
            'status'=>'pending',
            'result'=>'pending',
        ]);

        return redirect('/dashboard');
    }

}
