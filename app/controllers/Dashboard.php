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

    public function processTambahTypeTransport()
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

    public function editTypeTransport($id)
    {
        $data['title'] = 'Type Transportasi';
        $data['typeTransport'] = $this->model('TypeTransportasi_model')->getTypeTransportasiByID($id);
        $this->view('dashboard/typetransport/edit', $data);
    }

    public function processEditTypeTransport()
    {
        if ($this->model('TypeTransportasi_model')->editTypeTransportasi($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil diedit', 'success');
            redirect('/dashboard/typetransport');
        } else {
            Flasher::setFlash('Data', 'gagal diedit', 'danger');
            backToPrev();
        }
    }

    public function transportasi()
    {
        $data['title'] = 'Transportasi';
        $data['transportasi'] = $this->model('Transportasi_model')->getAllTransportasi();
        $this->view('dashboard/transportasi/index', $data);
    }

    public function tambahTransportasi()
    {
        $data['title'] = 'Transportasi';
        $data['typeTransport'] = $this->model('TypeTransportasi_model')->getAllTypeTransportasi();
        $this->view('dashboard/transportasi/tambah', $data);
    }

    public function processTambahTransportasi()
    {
        if ($this->model('Transportasi_model')->tambahTransportasi($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
            redirect('/dashboard/transportasi');
        } else {
            Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');
            backToPrev();
        }
    }

    public function deleteTransportasi($data)
    {
        if ($this->model('Transportasi_model')->hapusTransportasi($data) > 0) {
            Flasher::setFlash('Data', 'berhasil dihapus', 'success');
            redirect('/dashboard/transportasi');
        } else {
            Flasher::setFlash('Data', 'gagal dihapus', 'danger');
            backToPrev();
        }
    }

    public function editTransportasi($id)
    {
        $data['title'] = 'Type Transportasi';
        $data['typeTransport'] = $this->model('TypeTransportasi_model')->getTypeTransportasiByID($id);
        $this->view('dashboard/typetransport/edit', $data);
    }

    public function processEditTransportasi()
    {
        if ($this->model('TypeTransportasi_model')->editTypeTransportasi($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil diedit', 'success');
            redirect('/dashboard/typetransport');
        } else {
            Flasher::setFlash('Data', 'gagal diedit', 'danger');
            backToPrev();
        }
    }
}
