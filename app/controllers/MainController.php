<?php
class MainController
{
    public function index()
    {
        $user = User::find(2);
        Response::render("home", ["name" => $user->name, "age" => $user->age, "email" => $user->email]);
    }
    public function about()
    {
        echo "Hello from about";
    }
}