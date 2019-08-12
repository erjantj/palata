<?php

namespace App\Http\Controllers;

use App\Lawyer;
use Illuminate\Http\Request;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lawyersList = Lawyer::all();
        return view('lawyer.index', compact('lawyersList'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Lawyer $lawyer)
    {
        return view('lawyer.show', compact('lawyer'));
    }
}
