<?php

class HomeController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = $this->model('User');
    }

    public function index()
    {
        return $this->view('home');
    }

    public function getusers()
    {
        $users = $this->user->find(2);
        var_dump($users);
        return $this->view('users', ['users' => $users]);
    }
}
