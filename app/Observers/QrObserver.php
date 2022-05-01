<?php

namespace App\Observers;

use App\Models\QR;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class QrObserver
{
    /**
     * Handle the QR "created" event.
     *
     * @param \App\Models\QR $qR
     * @return void
     */
    public function created(QR $qR)
    {
        $specialCode = Str::random(12);
        $qR->specialCode = $specialCode;
        $qR->linkQr = URL::route('website').'/tichdiem/'.sprintf("%s/%s/%s", $qR->product_id, $qR->promotion_id,$specialCode);
        $qR->save();
    }

    /**
     * Handle the QR "updated" event.
     *
     * @param \App\Models\QR $qR
     * @return void
     */
    public function updated(QR $qR)
    {
        //
    }

    /**
     * Handle the QR "deleted" event.
     *
     * @param \App\Models\QR $qR
     * @return void
     */
    public function deleted(QR $qR)
    {
        //
    }

    /**
     * Handle the QR "restored" event.
     *
     * @param \App\Models\QR $qR
     * @return void
     */
    public function restored(QR $qR)
    {
        //
    }

    /**
     * Handle the QR "force deleted" event.
     *
     * @param \App\Models\QR $qR
     * @return void
     */
    public function forceDeleted(QR $qR)
    {
        //
    }
}
