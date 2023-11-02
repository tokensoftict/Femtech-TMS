<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Login extends Component
{
    #[Rule('required|email|unique:users')]
    public $email = 'admin@femtechit.com';

    #[Rule('required|min:6')]
    public $password = '123456';

    public $loading = false;

    public function login()
    {
        $this->validate();

        $this->loading = true;
        $user = User::where('email', '=', $this->email)->first();

        if ($user && Hash::check($this->password, $user->password)) {
            session()->put('User', $user->id);
            return $this->redirect('admin/users');
        }
        $this->loading = false;

        session()->flash('danger', 'Invalid Login Credentials');
        return $this->redirect('/');
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('components.layouts.header');
    }
}
