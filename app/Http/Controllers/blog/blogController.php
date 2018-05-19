<?php

namespace App\Http\Controllers\blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Poste;

class blogController extends Controller
{
   public function index(){
    	$postes=Poste::all();
    	return view('blog/index', compact('$postes'))->withPostes($postes);
    }
    

}
