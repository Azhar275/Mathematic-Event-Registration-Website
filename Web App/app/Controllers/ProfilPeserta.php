<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\PesertaSDModel;
use App\Models\PesertaSMPModel;
use App\Models\PesertaSMAModel;
use App\Models\SekolahModel;
use App\Models\UserModel;

class ProfilPeserta extends BaseController
{
    public function index()
    {
        $peserta = new PesertaModel();

        $data['datapeserta'] = $peserta->where([
            'username' => session()->get('username'),
        ])->first();
        $data['tingkat'] = $data['datapeserta']['tingkat'];
        
        if ($data['tingkat'] == 'SMP'){
            $smp = new PesertaSMPModel();
            $data['datatingkat'] = $smp->where([
                'username' => session()->get('username'),
            ])->first();
        }
        else if($data['tingkat'] == 'SMA'){
            $sma = new PesertaSMAModel();
            $data['datatingkat'] = $sma->where([
                'username' => session()->get('username'),
            ])->first();
        }
        else if($data['tingkat'] == 'SD'){
            $sd = new PesertaSDModel();
            $data['datatingkat'] = $sd->where([
                'username' => session()->get('username'),
            ])->first();
        }
        return view('profil_peserta', $data);
    }
}