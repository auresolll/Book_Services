<?php


namespace app\src\services\auth;


interface AuthServiceInterface
{
//    public function configuration();
    public function login();
    public function callback();
    public function logout();
}