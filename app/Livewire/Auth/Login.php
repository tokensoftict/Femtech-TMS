<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{

    /**
     * @var string
     */
    #[Rule('required|email')]
    public string $email = "admin@femtechit.com";

    /**
     * @var string
     */
    #[Rule('required|min:5|max:32')]
    public string $password = "123456";

    /**
     * @var bool
     */
    public bool $isLoading = false;

    /**
     * @return mixed
     */
    public function render()
    {
        return auth_layout();
    }


    public function performLogin()
    {
        $this->validate();

        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if(auth()->attempt($credentials)){
           $this->redirectRoute('dashboard');
        }else{
            session()->flash('message', 'Invalid Username or Password, Please check and try again');
        }

    }

}
