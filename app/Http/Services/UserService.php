<?php

namespace App\Http\Services;
use App\Models\Purchase;
use App\Models\Payment;
use Illuminate\Support\Facades\Auth;


class UserService{
    static public function getMoney($user){
        if($user->role->name == 'ADMINISTRADOR'){
            return Payment::where('confirm', false)
                                            ->pluck('value')
                                            ->flatten()
                                            ->sum();
        }


        return $user->clients()->with('payments')
                                    ->get()
                                    ->pluck('payments')
                                    ->where('confirm', false)
                                    ->flatten()
                                    ->pluck('value')
                                    ->sum();
    }
}
