<?php

class Mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //isLogin();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->model('M_mobil');
    }

    public function index() #menampilkan data barang
    {
        $data = [
            'queryData' => $this->M_mobil->getDataMobil(),
            'title' => "Mobil",
            'page' => 'content/mobil'
        ];
        #var_dump($queryData);
        $this->load->view('layout/main', $data);
    }

    public function saveData()
    {
        $id  = $this->input->post('id');
        $namamobil  = $this->input->post('namamobil');
        $platnomor  = $this->input->post('platnomor');
        $serimobil  = $this->input->post('serimobil');
        $warnamobil  = $this->input->post('warnamobil');
        $statusmobil  = $this->input->post('statusmobil');

        $query = array(
            'id'           => $id,
            'namamobil'    => $namamobil,
            'platnomor'    => $platnomor,
            'serimobil'    => $serimobil,
            'warnamobil'   => $warnamobil,
            'statusmobil'  => $statusmobil,
        );

        $this->M_mobil->insertDataMobil($query, 'mobil');
        redirect('Mobil/index');
    }

    public function fungsiEdit($id)
    {
        #$id  = $this->input->post('id');
        #$namamobil  = $this->input->post('namamobil');
        #$platnomor  = $this->input->post('platnomor');
        #$serimobil  = $this->input->post('serimobil');
        #$warnamobil  = $this->input->post('warnamobil');
        #$statusmobil  = $this->input->post('statusmobil');

        #$query = array(
        #    'id'           => $id,
        #    'namamobil'    => $namamobil,
        #    'platnomor'    => $platnomor,
        #    'serimobil'    => $serimobil,
        #    'warnamobil'   => $warnamobil,
        #    'statusmobil'  => $statusmobil,
        #);

        #$this->M_mobil->updateDataMobil($id, $query);
        #redirect(base_url('Mobil/index'));

        $data = [
            'id' => $this->input->post('id'),
            'namamobil' => $this->input->post('namamobil'),
            'platnomor' => $this->input->post('platnomor'),
            'serimobil' => $this->input->post('serimobil'),
            'warnamobil' => $this->input->post('warnamobil'),
            'statusmobil' => $this->input->post('statusmobil')
        ];
        $this->M_mobil->updateDataMobil($id, $data);
        redirect('Mobil');
    }

    public function EditMobil($id) #menampilkan data mobil
    {
        #$DATA = [
        #    'queryMobilDetail' => $this->M_mobil->getDataMobilDetail($id),
        #    'data' => array('queryMblDetail' => 'queryMobilDetail'),
        #   'title' => "Edit Mobil",
        #    'page' => 'content/editmobil'
        #];
        $data = [
            'query' => $this->M_mobil->getDataMobilDetail($id),
            'page' => 'content/editmobil'

        ];
        #var_dump($queryData);
        $this->load->view('layout/main', $data);
    }

    public function fungsiDelete($id)
    {
        $this->M_mobil->deleteDataMobil($id);
        redirect(base_url('Mobil/index'));
    }
}
