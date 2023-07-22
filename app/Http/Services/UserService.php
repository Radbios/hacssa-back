<?php

namespace App\Http\Services;
use App\Models\Purchase;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;


class UserService{
    static public function getMoney($user){
        $clients = $user->clients;
        $value = 0;
        foreach ($clients as $client) {
            $payments = $client->payments->where("confirm", false);
            foreach ($payments as $payment) {
                $value += $payment->value;
            }
        }
        return $value;
    }
}
