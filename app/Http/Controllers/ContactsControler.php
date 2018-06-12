<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsControler extends Controller
{
    public function create()
    {
    	return view('contacts.create');
    }
}
