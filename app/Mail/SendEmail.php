<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\PurchaseDetailController;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;
    public $value;
    public $responses;
    public $results;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($value, $responses, $results)
    {
        $this->value = $value;
        $this->responses = $responses;
        $this->results = $results;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this ->subject('Bill Generate')
              ->view('purchase.purchase_bill')
              ->with([
                'value'      => $this->value,
                'responses'  => $this->responses,
                'results'    => $this->results
            ]);
        return $this;
    }
}

