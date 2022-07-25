<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\PesertaSMPModel;
use App\Models\SekolahModel;
use App\Models\UserModel;

class RegisterSMP extends BaseController
{
    public function index()
    {
        if(session()->get('logged_in'))
        {
            return redirect()->to(base_url());
        }
        $sekolah = new SekolahModel();

		$data['sekolah2'] = $sekolah->where('tingkat', 'SMP')->orderBy('nama_sekolah', 'ASC')->findAll();

        return view('register_smp', $data);
    }
    public function process()
    {   
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama harus diisi',
                ]
            ],
            'nisn' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NISN harus diisi',
                ]
            ],
            'gender' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jenis kelamin harus diisi',
                ]
            ],
            'sekolah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Sekolah harus diisi',
                ]
            ],
            'kontak_wa' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kontak Whatssapp harus diisi',
                ]
            ],
            'email' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Email harus diisi',
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[4]|max_length[100]|is_unique[peserta.username]',
                'errors' => [
                    'required' => 'Username Harus diisi',
                    'min_length' => 'Username Minimal 4 Karakter',
                    'max_length' => 'Username Maksimal 100 Karakter',
                    'is_unique' => 'Username sudah terdaftar',
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[8]|max_length[50]',
                'errors' => [
                    'required' => 'Password Harus diisi',
                    'min_length' => 'Password Minimal 8 Karakter',
                    'max_length' => 'Password Maksimal 50 Karakter',
                ]
            ],
            'foto_peserta' => [
                'rules' => 'uploaded[foto_peserta]|mime_in[foto_peserta,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_peserta,4096]',
                'errors' => [
                    'uploaded' => 'Foto peserta harus diupload',
                    'mime_in' => 'Format file yang diupload bukan foto',
                    'max_size' => 'Ukuran file foto peserta terlalu besar',
                ]
            ],
            'foto_rapor' => [
                'rules' => 'uploaded[foto_rapor]|mime_in[foto_rapor,image/jpg,image/jpeg,image/gif,image/png]|max_size[foto_rapor,4096]',
                'errors' => [
                    'uploaded' => 'Foto rapor harus diupload',
                    'mime_in' => 'Format file rapor yang diupload bukan foto',
                    'max_size' => 'Ukuran file foto rapor terlalu besar',
                ]
            ],
        ])) {
            session()->setFlashdata('error', 'Periksa kembali pendaftaran anda');
            return redirect()->to('register/smp')->withInput();
        }
        // Grab the file by name given in HTML form
        $foto_peserta = $this->request->getFile('foto_peserta');
        $foto_rapor = $this->request->getFile('foto_rapor');

        // Generate a new secure name
        $username1 = $foto_peserta->getRandomName();
        $username2 = $foto_rapor->getRandomName();

        // Move the file to the directory
        $foto_peserta->move('foto_peserta', $username1);
        $foto_rapor->move('foto_rapor', $username2);

        $tingkat = "SMP";
        $username = $this->request->getVar('username');
        $nama_peserta = $this->request->getVar('nama');
        $nisn = $this->request->getVar('nisn');
        $sekolah = $this->request->getVar('sekolah');

        $peserta = new PesertaModel();
        $user = new UserModel();
        $peserta_sd = new PesertaSMPModel();
        $kode_peserta = $peserta_sd->countAllResults();
        $kode_peserta = sprintf("F-%03d", $kode_peserta);
        $kode_1 = $kode_peserta;


        $peserta->insert([
            'nama' => $nama_peserta,
            'nisn' => $nisn,
            'gender' => $this->request->getVar('gender'),
            'sekolah' => $sekolah,
            'tingkat' => $tingkat,
            'kontak_wa' => $this->request->getVar('kontak_wa'),
            'email' => $this->request->getVar('email'),
            'username' => $username,
            'foto_peserta' => $username1,
            'foto_rapor' => $username2,

        ]);
        $user->insert([
            'username' => $username,
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'nama' => $nama_peserta,
        ]);
        $peserta_sd->insert([
            'nama' => $nama_peserta,
            'nisn' => $nisn,
            'sekolah' => $sekolah,
            'tingkat' => $tingkat,
            'username' => $username,
            'kode_peserta' => $kode_1,
        ]);
        $data['dataPreview'] = $peserta->where([
            'username' => $username,
        ])->first();
        session()->setFlashdata('success', 'Kamu telah terdaftar');
        return view('register_preview', $data);
        //return redirect()->to('register/smp');
    }
}