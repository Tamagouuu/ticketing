<?php

class Register extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['is_loggedin'])) {
            redirect('/');
        }
    }

    public function index()
    {
        $data['title'] = "Register";
        $this->view('auth/register', $data);
    }

    public function processRegis()
    {
        if ($this->model('Penumpang_model')->tambahPenumpang($_POST) > 0) {
            Flasher::setFlash('Akun', 'berhasil didaftarkan', 'success');
            redirect('/login');
        } else {
            Flasher::setFlash('Data', 'gagal didaftarkan', 'danger');
            backToPrev();
        }
    }
}
