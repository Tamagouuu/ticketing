<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $allRute = $this->model('Rute_model')->getRuteJoinTransType();
        $rute = [];
        foreach ($allRute as $r) {
            $rute[$r['rute_awal']][] = ['rute_akhir' => $r['rute_akhir'], 'id_rute' => $r['id_rute']];
        }
        $data['rute'] = $rute;
        $this->view('home/index', $data);
    }

    public function fetchRuteAkhir($data)
    {
        // preventRequest();
        $allRute = $this->model('Rute_model')->getRuteJoinTransTypeWhere($data);
        $rute = [];
        // Proses forEach ini digunakan untuk mengelompokan rute awal, yang dimana akan memudahkan ketika nanti looping di viewnya
        // foreach ($allRute as $r) {
        //     $rute[$r['rute_awal']][$r['rute_akhir']][] = $r;
        // }
        foreach ($allRute as $r) {
            $rute[$r['rute_akhir']][] = $r;
        }
        // echo "<pre>";
        // var_dump($rute);
        // echo "</pre>";
        // die;
        $json = json_encode($rute);
        echo $json;
    }

    // public function fetchTransportasi($data)
    // {
    //     $transportAvail = $this->model('Transportasi_model');

    // }
}
