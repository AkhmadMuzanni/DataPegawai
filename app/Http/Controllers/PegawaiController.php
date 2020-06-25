<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller
{
    public function getData(){
        // persiapkan curl
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://static.sekawanmedia.co.id/data.json");

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // tutup curl 
        curl_close($ch);      

        // menampilkan hasil curl
        echo $output;
    }

    public function store(){
        // persiapkan curl
        $ch = curl_init(); 

        // set url 
        curl_setopt($ch, CURLOPT_URL, "http://static.sekawanmedia.co.id/data.json");

        // return the transfer as a string 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

        // $output contains the output string 
        $output = curl_exec($ch); 

        // tutup curl 
        curl_close($ch);      

        // menampilkan hasil curl
        // echo $output;
        

        $dataPegawai = json_decode(($output));
        // print_r($dataPegawai->data);

        for ($x = 0; $x < count($dataPegawai->data); $x++) {
            $tempData = $dataPegawai->data[$x];
            $pegawai = new Pegawai;
            $pegawai->namaPegawai = $tempData->employee_name;
            $pegawai->gaji    = $tempData->employee_salary;
            $pegawai->usia    = $tempData->employee_age;
            $pegawai->foto    = $tempData->profile_image;
            $pegawai->save();
        }
        
        // $pegawai = new Pegawai;
        // $pegawai->idPegawai = 1;
        // $pegawai->namaPegawai = "Testing";
        // $pegawai->gaji    = 1;
        // $pegawai->usia    = 2;
        // $pegawai->foto    = "";
        // $pegawai->save();
    }
}
