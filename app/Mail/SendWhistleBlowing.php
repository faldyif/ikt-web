<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendWhistleBlowing extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @param $data
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->view('emails.whistle')
            ->subject('IPC Car Terminal Whistleblowing Report #'.$this->data->hash)
            ->with('data', $this->data);
        foreach ($this->data->lampiran_bukti as $key) {
            $mail->attach($key->getRealPath(), [
                'as' => $key->getClientOriginalName(),
                'mime' => $key->getMimeType()
            ]);
        }
        return $mail;
    }
}
