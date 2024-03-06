<?php

namespace App\Jobs;
use App\Models\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Hash;

class ProcessRegistration implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $userData;

    public function __construct($userData)
    {
        $this->userData = $userData;
    }

    public function handle()
    {
        
        $existingEmail = User::where('email', $this->userData['email'])->first();

        if ($existingEmail) {
            
            return;
        }

        $user = new User();
        $user->name = $this->userData['name'];
        $user->email = $this->userData['email'];
        $user->password = Hash::make($this->userData['pass']);
        $user->status = 0;    
        $user->save();
    }
}