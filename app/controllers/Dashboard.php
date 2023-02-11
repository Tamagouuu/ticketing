<?php

class Dashboard extends Controller
{

    public function __construct()
    {
        if (!isset($_SESSION['is_loggedin'])) {
            redirect('/');
            exit;
        }

        if ($_SESSION['level'] != 1) {
            if ($_SESSION['level'] != 2) {
                redirect('/');
                exit;
            }
        }
    }

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
        preventRequest();

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
        preventRequest();

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
        preventRequest();

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
        $data['datatable'] = true;
        $data['title'] = 'Transportasi';
        $data['transportasi'] = $this->model('Transportasi_model')->getTypeJoinTransportasi();
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
        preventRequest();
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
        preventRequest();
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
        $data['title'] = 'Transportasi';
        $data['typeTransport'] = $this->model('TypeTransportasi_model')->getAllTypeTransportasi();
        $data['transportasi'] = $this->model('Transportasi_model')->getTransportasiByID($id);
        $this->view('dashboard/transportasi/edit', $data);
    }

    public function processEditTransportasi()
    {
        preventRequest();
        if ($this->model('Transportasi_model')->editTransportasi($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil diedit', 'success');
            redirect('/dashboard/transportasi');
        } else {
            Flasher::setFlash('Data', 'gagal diedit', 'danger');
            backToPrev();
        }
    }

    public function petugas()
    {
        Middleware::setAllowed(1);
        $data['datatable'] = true;
        $data['title'] = 'Petugas';
        $data['petugas'] = $this->model('Petugas_model')->getAllPetugas();
        $this->view('dashboard/petugas/index', $data);
    }

    public function tambahPetugas()
    {
        Middleware::setAllowed(1);
        $data['title'] = 'Transportasi';
        $this->view('dashboard/petugas/tambah', $data);
    }

    public function processTambahPetugas()
    {
        Middleware::setAllowed(1);
        preventRequest();
        if ($this->model('Petugas_model')->tambahPetugas($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
            redirect('/dashboard/petugas');
        } else {
            Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');
            backToPrev();
        }
    }

    public function editPetugas($id)
    {
        Middleware::setAllowed(1);
        $data['title'] = 'Petugas';
        $data['petugas'] = $this->model('Petugas_model')->getPetugasByID($id);
        $this->view('dashboard/petugas/edit', $data);
    }


    public function processEditPetugas()
    {
        Middleware::setAllowed(1);
        preventRequest();
        if ($this->model('Petugas_model')->editPetugas($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil diedit', 'success');
            redirect('/dashboard/petugas');
        } else {
            Flasher::setFlash('Data', 'gagal diedit', 'danger');
            backToPrev();
        }
    }

    public function deletePetugas($data)
    {
        Middleware::setAllowed(1);
        preventRequest();
        if ($this->model('Petugas_model')->hapusPetugas($data) > 0) {
            Flasher::setFlash('Data', 'berhasil dihapus', 'success');
            redirect('/dashboard/petugas');
        } else {
            Flasher::setFlash('Data', 'gagal dihapus', 'danger');
            backToPrev();
        }
    }

    public function rute()
    {
        $data['datatable'] = true;
        $data['title'] = 'Rute';
        $data['rute'] = $this->model('Rute_model')->getRuteJoinTransportasi();
        $this->view('dashboard/rute/index', $data);
    }

    public function tambahRute()
    {
        $data['title'] = 'Rute';
        $data['transportasi'] = $this->model('Transportasi_model')->getAllTransportasi();
        $this->view('dashboard/rute/tambah', $data);
    }


    public function processTambahRute()
    {
        if ($this->model('Rute_model')->tambahRute($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
            redirect('/dashboard/rute');
        } else {
            Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');
            backToPrev();
        }
    }

    public function deleteRute($data)
    {
        if ($this->model('Rute_model')->hapusRute($data) > 0) {
            Flasher::setFlash('Data', 'berhasil dihapus', 'success');
            redirect('/dashboard/rute');
        } else {
            Flasher::setFlash('Data', 'gagal dihapus', 'danger');
            backToPrev();
        }
    }

    public function editRute($id)
    {
        $data['title'] = 'Rute';
        $data['transportasi'] = $this->model('Transportasi_model')->getAllTransportasi();
        $data['rute'] = $this->model('Rute_model')->getRuteByID($id);
        $this->view('dashboard/rute/edit', $data);
    }

    public function processEditRute()
    {
        if ($this->model('Rute_model')->editRute($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil diedit', 'success');
            redirect('/dashboard/rute');
        } else {
            Flasher::setFlash('Data', 'gagal diedit', 'danger');
            backToPrev();
        }
    }

    public function penumpang()
    {
        $data['datatable'] = true;
        $data['title'] = 'Penumpang';
        $data['penumpang'] = $this->model('Penumpang_model')->getAllPenumpang();
        $this->view('dashboard/penumpang/index', $data);
    }

    public function tambahPenumpang()
    {
        $data['title'] = 'Penumpang';
        $this->view('dashboard/penumpang/tambah', $data);
    }


    public function processTambahPenumpang()
    {
        if ($this->model('Penumpang_model')->tambahPenumpang($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil ditambahkan', 'success');
            redirect('/dashboard/penumpang');
        } else {
            Flasher::setFlash('Data', 'gagal ditambahkan', 'danger');
            backToPrev();
        }
    }

    public function deletePenumpang($data)
    {
        if ($this->model('Penumpang_model')->hapusPenumpang($data) > 0) {
            Flasher::setFlash('Data', 'berhasil dihapus', 'success');
            redirect('/dashboard/penumpang');
        } else {
            Flasher::setFlash('Data', 'gagal dihapus', 'danger');
            backToPrev();
        }
    }

    public function editPenumpang($id)
    {
        $data['title'] = 'Penumpang';
        $data['penumpang'] = $this->model('Penumpang_model')->getPenumpangByID($id);
        $this->view('dashboard/penumpang/edit', $data);
    }

    public function processEditPenumpang()
    {
        if ($this->model('Penumpang_model')->editPenumpang($_POST) > 0) {
            Flasher::setFlash('Data', 'berhasil diedit', 'success');
            redirect('/dashboard/penumpang');
        } else {
            Flasher::setFlash('Data', 'gagal diedit', 'danger');
            backToPrev();
        }
    }
}
