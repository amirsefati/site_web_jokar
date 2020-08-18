<?php

namespace App\Http\Controllers\tablo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Daily_individual_cash_inflow;
use Illuminate\Support\Str;

class plugins_1 extends Controller
{
    public function get_data_api(){
        
        $res = Http::get('http://localhost:8001/api/daily_individual_cash_inflows');
        $check_exist = Str::length($res);
        if($check_exist > 200){
            Daily_individual_cash_inflow::where('id',1)->update([
                'data' => $res->json()
        ]);
        }else{
            return 'دیتای امروز رو هنوز نگرفتید، آپدیت بعد از گرفتن دیتا روزانه انجام میشود';
        }

        $res = Http::get('http://localhost:8001/api/micro_entry_and_exit_throughout_the_market');
        $check_exist = Str::length($res);
        if($check_exist > 200){
            Daily_individual_cash_inflow::where('id',2)->update([
                'data' => $res->json()
        ]);
        }else{
            return 'دیتای امروز رو هنوز نگرفتید، آپدیت بعد از گرفتن دیتا روزانه انجام میشود';
        }

    }

    public function get_data(){
        $res = Daily_individual_cash_inflow::where('id',1)->first()->data;
        return json_encode($res);
    }

    public function get_data_2(){
        $res = Daily_individual_cash_inflow::where('id',2)->first()->data;
        return json_encode($res);
    }
}

