<?php

class Login extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['is_loggedin'])) {
            redirect('/');
        }
    }

    public function index()
    {
        $data['title']  = "Login";
        $this->view('auth/login', $data);
    }

    public function processLogin()
    {
        if (!$this->model('Penumpang_model')->getPenumpangByUsername($_POST['username'])) {
            if (!$this->model('Petugas_model')->getPetugasByUsername($_POST['username'])) {
                Flasher::setFlash("Username", "tidak terdaftar", "danger");
                header('Location:' . BASEURL . '/login');
                return;
            }
        }

        if (!$this->model('Penumpang_model')->getPenumpangByUsername($_POST['username'])) {
            $data = $this->model('Petugas_model')->getPetugasByUsername($_POST['username']);
        } else {
            $data = $this->model('Penumpang_model')->getPenumpangByUsername($_POST['username']);
        }

        if (!password_verify($_POST['password'], $data['password'])) {
            Flasher::setFlash("Password", "tidak sesuai", "danger");
            header('Location:' . BASEURL . '/login');
            return;
        }

        $_SESSION['username'] = $data['username'];
        $_SESSION['level'] = $data['id_level'] ?? 'penumpang';
        $_SESSION['is_loggedin'] = true;

        header('Location:' . BASEURL . '/dashboard');
    }
}
