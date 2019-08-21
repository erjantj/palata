<?php

namespace App\Http\Controllers;

use App\Page;
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
        $slug = 'lawyers';
        $page = Page::where('slug', '=', $slug)->firstOrFail();

        $lawyersList = Lawyer::all();
        return view('lawyer.index', compact('lawyersList', 'page'));
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
