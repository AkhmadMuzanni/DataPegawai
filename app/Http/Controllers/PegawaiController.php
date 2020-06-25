<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
