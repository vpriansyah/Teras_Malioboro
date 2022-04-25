<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
use App\Agenda;
 
class AgendaController extends Controller
{
 
    public function index()
    {
    	$agenda = Agenda::all();
    	return view('agenda', ['agenda' => $agenda]);
    }
 
}