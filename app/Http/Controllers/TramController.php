<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Tram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TramController extends Controller
{
    public function index()
    {
        $title = 'Trạm';

        $tram['tram'] = DB::table('tram')->get()->toArray();

        return view('tram/tram', compact('title'), $tram);
    }

    public function them() {
        $title = 'Trạm';

        return view('tram/them', compact('title'));
    }

    public function chinhsua() {
        $title = 'Trạm';
        return view('tram/chinhsua', compact('title'));
    }


    public function store(Request $request) {
        $add = new Tram();
        $add->T_MaTram = $request->input('maTram');
        $add->T_TenTram = $request->input('tenTram');
        $add->T_DiaChiTram = $request->input('diaChi');

        $add->save();

        return redirect('add')->with('status', 'Insert thành công');
    }
}