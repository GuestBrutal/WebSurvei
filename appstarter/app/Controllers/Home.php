<?php

namespace App\Controllers;
use App\Models\Kebijakan;
use App\Models\Responden;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function login()
    {
        return view('login');
    }
    public function masuk()
    {
        $responden = new Responden();
        
        return redirect()->to('/kebijakan');
    }
    
    public function kebijakan()
    {

        return view('kebijakan');
    }

    public function inputKBJ()
    {
        $kebijakan = new Kebijakan();
        $data['kebijakan'] = [
            'id_responden' => 1,
            'persyaratan' => $this->request->getPost('persyaratan'),
            'prosedur' => $this->request->getPost('prosedur'),
            'tarif' => $this->request->getPost('tarif'),
            'waktu' => $this->request->getPost('waktu'),
            'antrian' => $this->request->getPost('antrian'),
            'perlibatan' => $this->request->getPost('perlibatan'),
            'publikasi' => $this->request->getPost('publikasi'),
            'skm' => $this->request->getPost('skm'),
            'tarifb' => $this->request->getPost('tarifb')
        ];
        $success=$kebijakan->insert($data['kebijakan']);
        return redirect()->to('login');
    }
}
