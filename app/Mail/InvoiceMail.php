<?php

namespace App\Mail;
use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
// use Illuminate\Mail\Mailables\Content;

use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
// use App\Mail\Content;

class InvoiceMail extends Mailable
{
    use Queueable, SerializesModels;

    public $invoice;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Invoice $invoice)
    {
        $this->invoice = $invoice;
        // dd($data);
    }

    /**
     * Build the message.
     *
     * @return $this
     * @return \Illuminate\Mail\Mailables\Content
     */

     
    public function build()
    {
        // return $this->subject('Mail from info2limelight@gmail.com')
        // ->view('backend.mails.mail',['invoice'=>$this->invoice]);

        return $this->from('haqueshamima34@gmail.com', 'Me')
            ->to($this->invoice->sender_email, 'Your Mail')
            ->view('backend.mails.mail')
            ->with([
                'invoice'=>$this->invoice
            ]);
       

    }
}
