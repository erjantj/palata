<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Contact;

class ContactsComposer
{

    protected $contact;
    protected $coordinates;


    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->contact = Contact::latest()->first();
        $this->coordinates = $this->contact->getCoordinates()[0];
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('contact', $this->contact);
        $view->with('coordinates', $this->coordinates);
    }
}