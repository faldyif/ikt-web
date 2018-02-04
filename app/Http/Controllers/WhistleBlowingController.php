<?php

namespace App\Http\Controllers;

use App\Mail\SendWhistleBlowing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Validator;

class WhistleBlowingController extends Controller
{
    public function sendMail(Request $request) {
        $validator = Validator::make($request->all(), [
            'g-recaptcha-response' => 'required|recaptcha',
            'name' => 'required',
            'email' => 'required|email',
            'uraian_pelanggaran' => 'required',
            'tempat_kejadian' => 'required',
            'waktu_kejadian' => 'required',
            'pihak_terlibat' => 'required',
            'lampiran_bukti' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                'error' => true,
                'errors' => $validator
            ));
        }

        $data = (object) array(
            'name' => $request->name,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
            'uraian_pelanggaran' => nl2br($request->uraian_pelanggaran),
            'tempat_kejadian' => $request->tempat_kejadian,
            'waktu_kejadian' => $request->waktu_kejadian,
            'pihak_terlibat' => $request->pihak_terlibat,
            'lampiran_bukti' => $request->lampiran_bukti,
            'hash' => strtoupper(str_random(10)),
        );

        $mail = Mail::to('info@indonesiacarterminal.co.id')->send(new SendWhistleBlowing($data));

        return response()->json(array(
            'error' => false
        ));
    }
}
