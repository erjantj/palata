<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Display about page
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $slug = 'about';
        $page = Page::where('slug', '=', $slug)->firstOrFail();

        return view('about', compact('page'));
    }

    /**
     * Display contacts page
     *
     * @return \Illuminate\Http\Response
     */
    public function contacts()
    {
        $slug = 'contacts';
        $page = Page::where('slug', '=', $slug)->firstOrFail();
        $contact = Contact::latest()->first();
        $coordinates = $contact->getCoordinates()[0];

        return view('contacts', compact('page', 'contact', 'coordinates'));
    }
}
