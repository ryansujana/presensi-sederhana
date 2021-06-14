<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;
use App\Models\Presensi;

class PresensiController extends Controller
{
	public function index()
	{
		return view('presensi.masuk');
	}

	public function store(Request $request)
	{
		$timezone = 'Asia/jakarta';
		$date = new DateTime('now', new DateTimeZone($timezone)); //ini ngambil jam atau waktu dari server
		$tanggal = $date->format('Y-m-d');
		$localtime = $date->format('H:i:s');

		$presensi = Presensi::where([
			['user_id', '=', auth()->user()->id],
			['tgl', '=', $tanggal],
		])->first();
		if ($presensi){
			dd("sudah ada");
		}else{
			Presensi::create([
				'user_id' => auth()->user()->id,
				'tgl' => $tanggal,
				'jammasuk' => $localtime,
			]);
		}

		return redirect('presensi-masuk');
	}
}
