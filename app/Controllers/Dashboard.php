<?php

namespace App\Controllers;

use App\Models\datamotor_model;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view("admin_nav");
        echo view("admin_header");
        echo view("dashboard_view");
        echo view("admin_footer");
    }

    public function info()
    {
        echo view("admin_nav");
        echo view("admin_header");
        echo view("info");
        echo view("admin_footer");
    }

    public function formTambahMotor()
    {
        echo view("admin_header");
        echo view("tambahMotor");
        echo view("admin_footer");
    }

    public function formTambahMatriks()
    {
        $mtr = new datamotor_model();
        $data['dataMtr'] = $mtr->tampilmatriks();
        echo view("admin_header");
        echo view("tambahMatriks", $data); // Kirim data ke view
        echo view("admin_footer");
    }

    public function formTambahBobot()
    {        
        echo view("admin_header");
        echo view("tambahBobot"); // Kirim data ke view
        echo view("admin_footer");
    }

    public function formTambahKriteria()
    {        
        echo view("admin_header");
        echo view("tambahKriteria"); // Kirim data ke view
        echo view("admin_footer");
    }

    public function formEditMtr($alt)
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->getMotor($alt);
        $data = array('dataMtr' => $dataMtr,);
        echo View('admin_header');
        echo View('index_editMotor', $data);
        echo View('admin_footer');
    }

    public function formEditMatriks($id)
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->getMatriks($id);
        $data = array('dataMtr' => $dataMtr,);
        echo View('admin_header');
        echo View('index_editMatriks', $data);
        echo View('admin_footer');
    }

    public function formEditBobot($id)
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->getBobot($id);
        $data = array('dataMtr' => $dataMtr,);
        echo View('admin_header');
        echo View('index_editBobot', $data);
        echo View('admin_footer');
    }

    public function formEditKriteria($kode)
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->getKriteria($kode);
        $data = array('dataMtr' => $dataMtr,);
        echo View('admin_header');
        echo View('index_editKriteria', $data);
        echo View('admin_footer');
    }

    public function editmtr($alt)
    {
        $alt_motor = $this->request->getPost('alt_motor');
        $nama_motor = $this->request->getPost('nama_motor');
        $pabrikan = $this->request->getPost('pabrikan');
        $tahun = $this->request->getPost('tahun');

        $data = [
            'alt_motor' => $alt_motor,
            'nama_motor' => $nama_motor,
            'pabrikan' => $pabrikan,
            'tahun' => $tahun,
        ];

        $where = ['alt_motor' => $alt];

        $mtr = new datamotor_model();
        $tabelData = "tbl_datamotor";
        $simpan = $mtr->updateMotor($tabelData, $data, $where);
        return redirect()->to(site_url("Dashboard/viewmtr"));
    }

    public function editmatriks($id)
    {
        $alt_motor = $this->request->getPost('alt_motor');
        $kode = $this->request->getPost('kode_kriteria');
        $value = $this->request->getPost('value');        

        $data = [
            'alt_motor' => $alt_motor,
            'kode_kriteria' => $kode,
            'value' => $value,            
        ];

        $where = ['id_alt' => $id];

        $mtr = new datamotor_model();
        $tabelData = "tbl_alt";
        $simpan = $mtr->updateMatriks($tabelData, $data, $where);
        return redirect()->to(site_url("Dashboard/viewmatriks"));
    }

    public function editbobot($id)
    {
        $kode_kriteria = $this->request->getPost('kode_kriteria');
        $nilai_bobot = $this->request->getPost('nilai_bobot');

        $data = [
            'kode_kriteria' => $kode_kriteria,
            'nilai_bobot' => $nilai_bobot,
        ];

        $where = ['id_bobot' => $id];

        $mtr = new datamotor_model();
        $tabelData = "tbl_bobot";
        $simpan = $mtr->updateBobot($tabelData, $data, $where);
        return redirect()->to(site_url("Dashboard/viewbobot"));
    }

    public function editkriteria($kode)
    {
        $kode = $this->request->getPost('kode_kriteria');
        $nama = $this->request->getPost('nama_kriteria');
        $tingkat = $this->request->getPost('tingkat_kepentingan');        

        $data = [
            'kode_kriteria' => $kode,
            'nama_kriteria' => $nama,
            'tingkat_kepentingan' => $tingkat,            
        ];

        $where = ['kode_kriteria' => $kode];

        $mtr = new datamotor_model();
        $tabelData = "tbl_kriteria";
        $simpan = $mtr->updateKriteria($tabelData, $data, $where);
        return redirect()->to(site_url("Dashboard/viewkriteria"));
    }

    public function deletematriks($id)
    {
        $mtr = new datamotor_model();
        $tabelData = "tbl_alt";
        $delete = $mtr->deletematriks($id);
        return redirect()->to(site_url("Dashboard/viewmatriks"));
    }

    public function deletemotor($alt)
    {
        $mtr = new datamotor_model();
        $tabelData = "tbl_datamotor";
        $delete = $mtr->deletemotor($alt);
        return redirect()->to(site_url("Dashboard/viewmtr"));
    }

    public function deletebobot($id)
    {
        $mtr = new datamotor_model();
        $tabelData = "tbl_bobot";
        $delete = $mtr->deletebobot($id);
        return redirect()->to(site_url("Dashboard/viewbobot"));
    }

    public function deletekriteria($kode)
    {
        $mtr = new datamotor_model();
        $tabelData = "tbl_kriteria";
        $delete = $mtr->deletekriteria($kode);
        return redirect()->to(site_url("Dashboard/viewkriteria"));
    }

    public function simpandatamotor()
    {
        $alt_motor = $this->request->getPost('alt_motor');
        $nama_motor = $this->request->getPost('nama_motor');
        $pabrikan = $this->request->getPost('pabrikan');
        $tahun = $this->request->getPost('tahun');

        $data = [
            'alt_motor' => $alt_motor,
            'nama_motor' => $nama_motor,
            'pabrikan' => $pabrikan,
            'tahun' => $tahun,
        ];

        $dataMtr = new datamotor_model();
        $tabelData = "tbl_datamotor";
        $simpan = $dataMtr->simpandata($tabelData, $data);
        return redirect()->to(site_url("Dashboard/viewmtr"));
    }

    public function simpandatamatriks()
    {
        $alt_motor = $this->request->getPost('alt_motor');
        $kode_kriteria = $this->request->getPost('kode_kriteria');
        $value = $this->request->getPost('value');       

        $data = [
            'alt_motor' => $alt_motor,
            'kode_kriteria' => $kode_kriteria,
            'value' => $value,
        ];

        $dataMtr = new datamotor_model();
        $tabelData = "tbl_alt";
        $simpan = $dataMtr->simpandata($tabelData, $data);
        return redirect()->to(site_url("Dashboard/viewmatriks"));
    }

    public function simpandatabobot()
    {
        $kode_kriteria = $this->request->getPost('kode_kriteria');          
        $bobot = $this->request->getPost('nilai_bobot');

        $data = [
            'kode_kriteria' => $kode_kriteria,            
            'nilai_bobot' => $bobot,
        ];

        $dataMtr = new datamotor_model();
        $tabelData = "tbl_bobot";
        $simpan = $dataMtr->simpandata($tabelData, $data);
        return redirect()->to(site_url("Dashboard/viewbobot"));
    }

    public function simpandatakriteria()
    {
        $kode_kriteria = $this->request->getPost('kode_kriteria');          
        $nama = $this->request->getPost('nama_kriteria');
        $tingkat = $this->request->getPost('tingkat_kepentingan');

        $data = [
            'kode_kriteria' => $kode_kriteria,            
            'nama_kriteria' => $nama,
            'tingkat_kepentingan' => $tingkat,
        ];

        $dataMtr = new datamotor_model();
        $tabelData = "tbl_kriteria";
        $simpan = $dataMtr->simpandata($tabelData, $data);
        return redirect()->to(site_url("Dashboard/viewkriteria"));
    }

    public function viewbobot()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilbobot();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_bobot', $data);
        echo View('admin_footer');
    }

    public function viewmtr()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilmtr();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_motor', $data);
        echo View('admin_footer');
    }

    public function viewmatriks()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilmatriks();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_matriks', $data);
        echo View('admin_footer');
    }

    public function viewkriteria()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilkriteria();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_kriteria', $data);
        echo View('admin_footer');
    }

    public function viewnormalisasi()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilnormalisasi();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_normalisasi', $data);
        echo View('admin_footer');
    }

    public function viewpreferensi()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilpreferensi();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_preferensi', $data);
        echo View('admin_footer');
    }

    public function viewranking()
    {
        $mtr = new datamotor_model();
        $dataMtr = $mtr->tampilranking();
        $data = array('dataMtr' => $dataMtr);

        echo View('admin_header');
        echo View('index_ranking', $data);
        echo View('admin_footer');
    }
}
