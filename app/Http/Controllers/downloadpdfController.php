<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\evacueess;
use Carbon\Carbon;


class downloadpdfController extends Controller
{
    public function preview()
    {
        $count = evacueess::where('member','none' )->count();
        $counts = evacueess::whereNotIn('member', ['none','None'] )->count();
        $evac = evacueess::join('evacuation as e', 'e.id', '=', 'evacuees.loc_id')
        ->orderby('Evacuation')
        ->get(['evacuees.*','e.brand','e.capacity']);
  
        return view('list', compact('count','counts'),['evac'=> $evac]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createPDF()
    {
        $count = evacueess::where('member','none' )->count();
        $counts = evacueess::whereNotIn('member', ['none','None'] )->count();
        $evac = evacueess::join('evacuation as e', 'e.id', '=', 'evacuees.loc_id')
        ->orderby('Evacuation')
        ->get(['evacuees.*','e.brand','e.capacity']);
  
        
        $pdf = PDF::loadView('downloadpdf', compact('count','counts'),['evac'=> $evac]);
        return $pdf->download('EARS.pdf');
    }
}
