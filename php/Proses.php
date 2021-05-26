<?php

class Proses{

    private $DB;

    public function __construct(){

        $this->DB = new mysqli('localhost', 'root', '', 'dbk_perpus');

        if(mysqli_connect_errno()){

            echo "Koneksi Gagal";

            exit;

        }

    }

    public function LihatData(){

        $res = $this->DB->query("SELECT *FROM anggota");

        while ($row = $res->fetch_object()){

            $data[] = $row;

        }

        if(empty($data)){

            return null;

        }else{

            return $data;

        }

    }

    public function PencarianData($search){

        $res = $this->DB->query("SELECT *FROM anggota WHERE nama_anggota LIKE '%$search%' OR nim_anggota LIKE '%$search%' OR jurusan LIKE '%$search%'");

        while ($row = $res->fetch_object()){

            $data[] = $row;

        }

        if(empty($data)){

            return null;

        }else{

            return $data;

        }


    }

    public function getDataByid($id){

        $res = $this->DB->query("SELECT *FROM anggota WHERE id_anggota = '$id'");

        while ($row = $res->fetch_object()){

            $data[] = $row;

        }


        if(empty($data)){

            return null;

        }else{

            return $data;

        }

    }

    public function EditData(){

        $this->DB->query("UPDATE anggota SET nama_anggota = '$_POST[nama_anggota]' , jeniskelamin_anggota = '$_POST[jeniskelamin_anggota]', 
                        notelp_anggota = '$_POST[notelp_anggota]', nim_anggota = '$_POST[nim_anggota]', 
                        jurusan = '$_POST[jurusan]' WHERE id_anggota = '$_POST[id_anggota]'");

    }

    public function TambahData(){

        $this->DB->query("INSERT INTO anggota (nama_anggota, jeniskelamin_anggota, notelp_anggota,  nim_anggota, jurusan) VALUES 
                        ('$_POST[nama_anggota]', '$_POST[jeniskelamin_anggota]', '$_POST[notelp_anggota]', '$_POST[nim_anggota]', '$_POST[jurusan]')");
        

    }

    public function HapusData(){

        $this->DB->query("DELETE FROM anggota WHERE id_anggota = '$_GET[id_anggota]'");

    }


}

$PublicProses = new Proses();

if(isset($_GET['tambah'])){

    $PublicProses->TambahData();

    header('location:../tambah.php?sukses');

}else if(isset($_GET['edit'])){

    $PublicProses->EditData();

    header('location:../edit.php?id='.$_POST['id_anggota'].'&sukses');

}else if(isset($_GET['hapus'])){

    $PublicProses->hapusData();
    header('location:../index.php?sukses');

}

?>