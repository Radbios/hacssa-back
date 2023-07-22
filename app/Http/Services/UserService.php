<?php

namespace App\Http\Services;
use App\Models\Purchase;

class UserService{
    static public function getMoney(){
        $user = auth()->user()->clients;
        return $user;
    }
}
