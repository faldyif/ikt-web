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
            'content' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(array(
                'error' => true,
                'errors' => $validator
            ));
        }

        $data = (object) array(
            'content' => nl2br($request->content),
            'hash' => strtoupper(str_random(10)),
        );

        Mail::to('info@indonesiacarterminal.co.id')->send(new SendWhistleBlowing($data));

        return response()->json(array(
            'error' => false
        ));
    }
}
