<?php

class Logout extends Controller
{
    public function index()
    {
        session_destroy();
        session_start();
        Flasher::setFlash('Akun berhasil', 'logout', 'success');
        header('Location: ' . BASEURL . '/login');
    }
}
