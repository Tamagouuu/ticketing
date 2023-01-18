<?php
class Home extends Controller
{
    public function index()
    {
        echo 'Halo';
    }
    public function saya($id)
    {
        echo $id;
    }
}
