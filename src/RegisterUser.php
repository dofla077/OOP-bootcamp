<?php


namespace Acme;


class RegisterUser
{


    public function execute(array $data, RespondsToUserRegistration $listener)
    {
        var_dump('Registering user.');

        $listener->userRegisteredFailed();
    }

}