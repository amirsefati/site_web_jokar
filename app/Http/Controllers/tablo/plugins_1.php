<?php

namespace App\Http\Controllers\tablo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Daily_individual_cash_inflow;

class plugins_1 extends Controller
{
    public function get_data_api(Request $request , $date){
        
        $res = Http::get('http://localhost:8001/api/daily_individual_cash_inflows/'.$date);
        if(Daily_individual_cash_inflow::where('date',$date)->count() < 1){
            
            Daily_individual_cash_inflow::create([
                'date' => $date,
                'data' => $res->json()
            ]);
        }
       
    }

    public function get_data(Request $request,$date){
        $res = Daily_individual_cash_inflow::where('date',$date)->first()->data;
        return json_encode($res);
    }
}

