<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper{

    public static function processDob($rawDate)
    {
        if (!empty($rawDate)) {
            return Carbon::createFromFormat('d-m-Y', $rawDate)->toDateString();
        } else {
            return null;
        }
    }
}