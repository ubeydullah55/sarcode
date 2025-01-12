<?php

namespace App\Controllers;
use App\Models\UsersModel;
class LoginController extends BaseController
{
    public function index(): string
    {
        // Eğer kullanıcı zaten giriş yaptıysa, ana sayfaya yönlendirelim
       
        return view('login');
    }

    public function submit()
    {
        // Formdan gelen verileri alıyoruz
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // UsersModel'ini kullanarak veritabanındaki kullanıcıları kontrol ediyoruz
        $userModel = new UsersModel();
        $user = $userModel->where('username', $username)->first(); // Kullanıcı adı ile arama yapıyoruz

        // Kullanıcı bulunduysa, şifreyi doğruluyoruz
        if ($user && password_verify($password, $user['password'])) {
            // Başarılı giriş: session oluşturuyoruz
            $this->session->set([
                'isLoggedIn' => true,
                'user_id' => $user['user_id'],
                'username' => $user['username'],
                'yetki' => $user['yetki'],
            ]);
            
            return redirect()->to('anasayfa');  // Giriş başarılıysa ana sayfaya yönlendiriyoruz
        } else {
            // Hatalı giriş: hata mesajı ile geri dönüyoruz
            return redirect()->back()->with('error', 'Geçersiz kullanıcı adı veya şifre');
        }
    }

    public function logout()
    {
        // Kullanıcıyı çıkış yaparken session'dan temizliyoruz
        $this->session->destroy();
        return redirect()->to('');
    }
}
