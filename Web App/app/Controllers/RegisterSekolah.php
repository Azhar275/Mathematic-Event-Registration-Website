<?php

namespace App\Controllers;

use App\Models\SekolahModel;

class RegisterSekolah extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in'))
        {
            return redirect()->to(base_url());
        }
        return view('register_sekolah');
    }
    public function process()
    {   
        $validation =  \Config\Services::validation();
        if (!$this->validate([
            'nama_sekolah' => [
                'rules' => 'required|is_unique[sekolah.nama_sekolah]',
                'errors' => [
                    'required' => 'Nama sekolah harus diisi',
                    'is_unique' => 'Sekolah sudah terdaftar'
                ]
            ],
            'tingkat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tingkat harus diisi',
                ]
            ],
            'provinsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Provinsi harus diisi',
                ]
            ],
            'kabupaten' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kabupaten harus diisi',
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus diisi',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi',
                ]
            ],
            'kontak_pendamping' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kontak pendamping harus diisi',
                ]
            ],
            'kontak_sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kontak sekolah harus diisi',
                ]
            ],
        ])) {
            //session()->setFlashdata('error', $this->validator->listErrors());
            session()->setFlashdata('error', 'Periksa kembali pendaftaran anda');
            return redirect()->to('register/sekolah')->withInput();
        }
        $sekolah = new SekolahModel();
        $nama_sekolah = $this->request->getVar('nama_sekolah');

        $sekolah->insert([
            'nama_sekolah' => $nama_sekolah,
            'tingkat' => $this->request->getVar('tingkat'),
            'provinsi' => $this->request->getVar('provinsi'),
            'kabupaten' => $this->request->getVar('kabupaten'),
            'alamat' => $this->request->getVar('alamat'),
            'email' => $this->request->getVar('email'),
            'kontak_pendamping' => $this->request->getVar('kontak_pendamping'),
            'kontak_sekolah' => $this->request->getVar('kontak_sekolah')
        ]);
        $data['dataPreview'] = $sekolah->where([
            'nama_sekolah' => $nama_sekolah,
        ])->first();
        session()->setFlashdata('success', 'Sekolah telah terdaftar');
        return view('preview_sekolah', $data);
        //return redirect()->to('register/sekolah');
    }
}