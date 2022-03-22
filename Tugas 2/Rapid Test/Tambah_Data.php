<?php
require_once 'model/Peserta.php';

if(adaPermintaanProsesTambah()){
    $peserta = new Peserta($_POST['email'],$_POST['nama']);
    $peserta->add();
    $pesan = "Peserta berhasil ditambah.";
    kirimkeHalamanUtama($pesan);
} else{
    tampilkanFormulirTambahPeserta();
}

function adaPermintaanProsesTambah(){
    if(isset($_POST['email']) && isset($_POST['nama'])){
        return true;
    } else return false;
}

function tampilkanFormulirTambahPeserta(){
    require_once 'View/view_tambah_peserta.php';
}

function kirimKeHalamanUtama($pesan){
    header("Location: Index_Data.php?pesan=$pesan");
}