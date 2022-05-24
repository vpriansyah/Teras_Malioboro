<?php
 
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class Agenda2Controller extends Controller
{
 
    public function index()
    {
    	//$info_agenda = DB::table('agenda');
        // $info_agenda=DB::table('agenda')->paginate(10);
        $info_agenda=DB::table('agenda')->where('status', 'Aktif')->get();
    	return view('publik.agenda2', ['info_agenda' => $info_agenda]);
    }
 
}