<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
   public function getInfos()
    {
		return view('blog\infos');
	}

	public function postInfos(Request $request)
	{
		return 'Le nom est ' . $request->input('name'); 
	}

}
