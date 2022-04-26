<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

 
class AduanController extends Controller
{
 
    public function index()
    {
    	
        $aduan_publik=DB::table('aduan_saran_publik')->get();
    	 return view('publik.aduansaran', ['aduan_publik' => $aduan_publik]);
    }
 
}