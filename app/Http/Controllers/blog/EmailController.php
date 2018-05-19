<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailController extends Controller
{
    public function getForm(){
    	return view('blog\email');
    }

    public function postForm(EmailRequest $request){
    		$email=new Email;
    		$email->email=$request->input('email');
    		$email->save();
    	return view('blog\email_ok');
    }
}
