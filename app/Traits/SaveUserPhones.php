<?php

namespace App\Traits;

use App\Models\Phone;
use App\Models\User;

trait SaveUserPhones
{
    public function saveUserPhones(User $user, $requestPhone)
    {
       // Find a phone with the provided number
       $phone = Phone::where('phone', $requestPhone)->first();  

       if ($phone) {
           $user->phones()->attach($phone->id); // Attach the existing phone to the user
       } else {
           // Create a new phone and attach it to the user
           $newPhone = Phone::create(['phone' => $requestPhone]);
           $user->phones()->attach($newPhone->id);
       }
    }
}
