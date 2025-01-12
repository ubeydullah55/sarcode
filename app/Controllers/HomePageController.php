<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiparisModel;

class HomePageController extends BaseController
{
    
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }

        return view('homepage');
    }

    public function incele(): string
    {
        // Formdan gelen sipariş id'sini alıyoruz
        $siparisId = $this->request->getPost('siparis_id');
        
        // Sipariş id'sine göre işlem yapılabilir
        // Örneğin, bir model kullanarak siparişi kontrol edebilirsiniz
        $siparisModel = new SiparisModel();
        $siparis = $siparisModel->where('id', $siparisId)->first(); 
        // Eğer sipariş bulunduysa, gerekli işlemleri yapabilirsiniz
        if ($siparis) {
            return view('siparisIncele', ['siparis' => $siparis]);
        } else {
            return redirect()->back()->with('error', 'Sipariş bulunamadı');
        }
        return view('homepage');
    }
    

}
