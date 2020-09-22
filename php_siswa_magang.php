<?php
$data_siswa=[];
while(true){
    // data siswa
    $siswa=&$data_siswa;

    // bener aplikasi

    tampil("data siswa magang TOP");
    tampil("======================");
//    user input data siswa magang
$input_siswa=readline("masukkan data siswa ? ");

// validasi huruf
// falidasi iku kanggoo ko nek ngisine isane huruf nek angka gak iso
if(!preg_match("/^[A-Za-z]*$/",$input_siswa) || empty($input_siswa)){
    echo PHP_EOL;
    echo "tolong masukkan Huruf!\n";
    continue;
}

// simpan data siswa

$siswa[]=$input_siswa;

// munculkan data siswa magang

$nomor=1;    

foreach($siswa as $key){
    tampil("$nomor.$key");
    $nomor++;
}



    //tutup apk
    tanyaUser();
}



function tampil($pesan){
    echo $pesan.PHP_EOL;
}

// tanya user utuk masukkan data lagi
function tanyaUser()
{
$tanya=readline("tambah data ? (yes/no)");
if($tanya=="no"  ||  $tanya!=="yes")
{
    tampil("tanggapan ini telah direkam");
exit;
}
}
// CRUD( Crate Read Update Delete)

function inputData(&$data){
    $tanya2=readline("Input Data");
    if($tanya2=="no"){
        tampil("maturnuhun");
        exit;
    }
}
