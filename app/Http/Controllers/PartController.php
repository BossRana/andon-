<?php
 
namespace App\Http\Controllers;
use App\Models\Part;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
 
class PartController extends Controller
{


	public function index()
    {
		$part = part::paginate(10);
	    return view('part', compact('part'));
	}

}