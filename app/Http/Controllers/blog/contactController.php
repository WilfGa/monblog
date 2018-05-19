<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
     public function getForm()
	{
		return view('blog\contact');
	}

	public function postForm(ContactRequest $request)
	{
		Mail::send('emails.contact', $request->all(), function($message) 
		{
			$message->to('monadresse@free.fr')->subject('Contact');
		});

		return view('blog\confirm');
	}
}
