<?php

if(!function_exists('auth_layout')){
    function auth_layout($layout = 'livewire.auth.login', $parameters = [])
    {
        return view($layout)->layout('layout.app', ['login_layout' => true]);
    }
}


if(!function_exists('app_layout')){
    function app_layout($layout, $parameters = [])
    {
        return view($layout)->layout('layout.app',);
    }
}
