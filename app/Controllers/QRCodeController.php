<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Libraries\Ciqrcode; // Ciqrcode kütüphanesini dahil et

class QRCodeController extends Controller
{
    public function generateQRCode()
    {
        $qr = new Ciqrcode(); // Kütüphaneyi başlat

        $params = [
            'data' => 'https://www.example.com', // QR kodunda yer alacak veri
            'size' => 6,  // QR kodunun boyutu
            'level' => 'L',  // Hata düzeyi (L, M, Q, H)
            'savename' => WRITEPATH . 'uploads/qrcode.png'  // QR kodunun kaydedileceği yol
        ];

        $qr->generate($params);

        return "QR Kod başarıyla oluşturuldu!";
    }
}
