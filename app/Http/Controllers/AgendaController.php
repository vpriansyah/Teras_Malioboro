<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Carbon\CarbonImmutable;

class AgendaController extends Controller
{

    public function index()
    {
        $now = Carbon::now();
        $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i:s');
        $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i:s');
        $end = $now->endOfWeek(Carbon::SUNDAY);
        //$info_agenda = DB::table('agenda');
        // $info_agenda=DB::table('agenda')->paginate(10);
        $info_agenda = DB::table('agenda')->where('status', 'Aktif')->where('tanggal_akhir','<', $weekEndDate)->where('tanggal','>', $weekStartDate)->get();
        $tanggalan=DB::table('agenda')->where('status', 'Aktif')->get(); 
    	return view('publik.agenda', compact('info_agenda','tanggalan')); 


        
        //$info_agenda = DB::table('agenda')->where('tanggal','>', $weekStartDate)->get();
        //$info_agenda = DB::table('agenda')->where('tanggal_akhir','<', $weekEndDate)->get();
        

        return view('publik.agenda', ['info_agenda' => $info_agenda]);
    }
}
