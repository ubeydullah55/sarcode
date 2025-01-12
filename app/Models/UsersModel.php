<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    // Tablo adı
    protected $table      = 'users';
    
    // Birincil anahtar
    protected $primaryKey = 'user_id';
    
    // İzin verilen alanlar
    protected $allowedFields = ['yetki', 'username', 'password', 'status'];
    
    // Döndürülecek tür
    protected $returnType = 'array';  // Dizi olarak döndürülür
    
    // Zaman damgası kullanılmıyor
    protected $useTimestamps = false;

    // Kullanıcıyı ID ile almak
    public function getUserById($userId)
    {
        return $this->find($userId);
    }

    // Kullanıcıyı username ile almak
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
