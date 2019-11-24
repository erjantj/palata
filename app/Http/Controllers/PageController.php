<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Page;
use App\Callback;
use App\Lawyer;
use Illuminate\Http\Request;

class PageController extends Controller
{
    const LAWYERS_LIMIT = 3;

    /**
     * Display a index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageAbout = Page::where('slug', '=', 'about')->firstOrFail();
        $pageLawyers = Page::where('slug', '=', 'lawyers')->firstOrFail();
        $lawyersList = Lawyer::latest()->limit(self::LAWYERS_LIMIT)->get();

        return view('index', compact('pageAbout', 'pageLawyers', 'lawyersList'));
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

    /* Handle callback form
     *
     * @return \Illuminate\Http\Response
     */
    public function callback(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255|string',
            'phone_number' => 'required|max:255|regex:/^(\+7[0-9\(\)-]{13})$/',
        ], [], [
            'name' => __('messages.first_name'),
            'phone_number' => __('messages.phone_number'),
        ]);

        tap(new Callback($data))->save();
        
        $request->session()->flash('callback_success', __('messages.callback_save'));

        return redirect('/contacts');
    }

    /**
     * Display membership page
     *
     * @return \Illuminate\Http\Response
     */
    public function membership()
    {
        $slug = 'membership';
        $page = Page::where('slug', '=', $slug)->firstOrFail();

        return view('membership', compact('page'));
    }
}
