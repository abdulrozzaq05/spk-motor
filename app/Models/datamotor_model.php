<?php

namespace App\Models;

use CodeIgniter\Model;

class datamotor_model extends Model
{
    protected $table = 'tbl_datamotor';

    function __construct()
    {
        $this->db = db_connect();
    }

    function tampilbobot()
    {
        $dataquery = $this->query("SELECT * FROM tbl_bobot, tbl_kriteria WHERE tbl_bobot.kode_kriteria=tbl_kriteria.kode_kriteria");

        return $dataquery->getResult();
    }

    function tampilmtr()
    {
        $dataquery = $this->query("SELECT * FROM tbl_datamotor");

        return $dataquery->getResult();
    }

    function tampilmatriks()
    {
        $dataquery = $this->query("SELECT * FROM tbl_alt, tbl_datamotor, tbl_kriteria WHERE tbl_alt.alt_motor=tbl_datamotor.alt_motor AND tbl_alt.kode_kriteria=tbl_kriteria.kode_kriteria");

        return $dataquery->getResult();
    }

    function tampilkriteria()
    {
        $dataquery = $this->query("SELECT * FROM tbl_kriteria");

        return $dataquery->getResult();
    }

    function tampilnormalisasi()
    {
        $dataquery = $this->query("SELECT * FROM vw_total_normalisasi");

        return $dataquery->getResult();
    }

    function tampilpreferensi()
    {
        $dataquery = $this->query("SELECT * FROM vw_preferensi");

        return $dataquery->getResult();
    }

    function tampilranking()
    {
        $dataquery = $this->query("SELECT * FROM vw_ranking");

        return $dataquery->getResult();
    }

    public function updateMotor($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }

    public function updateMatriks($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }

    public function updateBobot($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }

    public function updateKriteria($table, $data, $where)
    {
        $this->db->table($table)->update($data, $where);
        return true;
    }


    function getMotor($alt)
    {
        return $this->db->table('tbl_datamotor')->getWhere(['alt_motor' => $alt])->getResult();
    }

    function getMatriks($id)
    {
        return $this->db->table('tbl_alt')->getWhere(['id_alt' => $id])->getResult();
    }    

    function getBobot($id)
    {
        return $this->db->table('tbl_bobot')
            ->join('tbl_kriteria', 'tbl_bobot.kode_kriteria = tbl_kriteria.kode_kriteria')
            ->where('tbl_bobot.id_bobot', $id)
            ->get()
            ->getResult();
    }

    function getKriteria($kode)
    {
        return $this->db->table('tbl_kriteria')->getWhere(['kode_kriteria' => $kode])->getResult();
    }

    // MEMPERBAIKI EDIT, JIKA YG DIAMBIL KODE KRITERIA TIDAK BERHASIL, KALO ID_BOBOT BERHASIL TP TIDAK UPDATE 2 TABEL
    // AKSI DELETE BELOMM

    // function getBobotByKode($kode)
    // {
    //     return $this->db->table('tbl_bobot')
    //         ->join('tbl_kriteria', 'tbl_bobot.kode_kriteria = tbl_kriteria.kode_kriteria')
    //         ->where('tbl_bobot.kode_kriteria', $kode)
    //         ->get()
    //         ->getResult();
    // }

    function simpandata($tabel, $data)
    {
        $this->db->table($tabel)->insert($data);
        return true;
    }

    public function deletematriks($id)
    {
        $this->db->table('tbl_alt')->where('id_alt', $id)->delete(); // Hapus data terkait di tbl_alt
        // $this->db->table('tbl_datamotor')->where('alt_motor', $alt)->delete(); // Hapus data di tbl_datamotor
        return true;
    }

    public function deletemotor($alt)
    {        
        $this->db->table('tbl_datamotor')->where('alt_motor', $alt)->delete(); // Hapus data di tbl_datamotor
        return true;
    }

    public function deletebobot($id)
    {
        $this->db->table('tbl_bobot')->where('id_bobot', $id)->delete(); // Hapus data terkait di tbl_alt        
        return true;
    }

    public function deletekriteria($kode)
    {
        $this->db->table('tbl_kriteria')->where('kode_kriteria', $kode)->delete(); // Hapus data terkait di tbl_alt        
        return true;
    }
}
