<?php

class Dashboard extends Controller
{
    public function index()
    {
        $data['title'] = 'Dashboard';
        $this->view('dashboard/index', $data);
    }

    public function typeTransport()
    {
        $data['title'] = 'Type Transportasi';
        $data['datatable'] = true;
        $data['typeTransport'] = $this->model('TypeTransportasi_model')->getAllTypeTransportasi();
        $this->view('dashboard/typetransport/index', $data);
    }

    public function tambahTypeTransport()
    {
        $data['title'] = 'Type Transportasi';
        $this->view('dashboard/typetransport/tambah', $data);
    }

    public function processTypeTransport()
    {
        if ($this->model('TypeTransportasi_model')->tambahTypeTransportasi($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
            redirect('/dashboard/typetransport');
        } else {
            Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');
            backToPrev();
        }
    }

    public function deleteTypeTransport($data)
    {
        if ($this->model('TypeTransportasi_model')->hapusTypeTransportasi($data) > 0) {
            Flasher::setFlash('Data', 'berhasil dihapus', 'success');
            redirect('/dashboard/typetransport');
        } else {
            Flasher::setFlash('Data', 'gagal dihapus', 'danger');
            backToPrev();
        }
    }
}
