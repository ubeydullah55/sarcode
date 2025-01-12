<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\SiparisModel;
use App\Models\BilezikModel;

class SiparisInceleController extends BaseController
{
    
    public function index(): string
    {
        if (!$this->session->get('isLoggedIn')) {
            return view('login'); // Login sayfasına yönlendir
        }
    
        $siparisId = $this->request->getPost('siparis_id');
        
        // Sipariş tablosunu kontrol et
        $siparisModel = new \App\Models\SiparisModel();
        $siparis = $siparisModel->where('id', $siparisId)->first(); 
        
        if ($siparis) {
            // Sipariş bulunduysa, bilezik_id ile bilezik bilgilerini de çek
            $bilezikId = $siparis['bilezik_id']; // Sipariş tablosundaki bilezik_id
            
            $bilezikModel = new \App\Models\BilezikModel();
            $bilezik = $bilezikModel->where('id', $bilezikId)->first();
    
            // Sipariş ve bilezik verilerini view'e gönder
            return view('siparisIncele', [
                'siparis' => $siparis,
                'bilezik' => $bilezik,
            ]);
        } else {
            return redirect()->back()->with('error', 'Sipariş bulunamadı');
        }
    
        return view('homepage');
    }
    

  
    

}
