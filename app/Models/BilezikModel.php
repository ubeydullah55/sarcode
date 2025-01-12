<?php

namespace App\Models;

use CodeIgniter\Model;

class BilezikModel extends Model
{
    protected $table = 'bilezikler'; // Veritabanı tablonuzun adı
    protected $primaryKey = 'id'; // Birincil anahtar sütunu

    // Veritabanı sütunları
    protected $allowedFields = [
        'name',      // Sipariş adı
        'bas_gr',    // Başlangıç gramajı
        'bit_gr',    // Bitiş gramajı
        'bas_gen',   // Başlangıç genişliği
        'bit_gen',   // Bitiş genişliği
        'cnc'        // CNC bilgisi
    ];

    // Timestamps
    protected $useTimestamps = false; // Eğer created_at ve updated_at sütunlarınız varsa true yapabilirsiniz.

    // Validation Rules
    protected $validationRules = [
        'name'      => 'required|max_length[255]',
        'bas_gr'    => 'required|decimal',
        'bit_gr'    => 'required|decimal',
        'bas_gen'   => 'required|decimal',
        'bit_gen'   => 'required|decimal',
        'cnc'       => 'permit_empty|string',
    ];

    protected $validationMessages = [
        'name'      => [
            'required'    => 'İsim alanı zorunludur.',
            'max_length'  => 'İsim 255 karakterden uzun olamaz.'
        ],
        'bas_gr'    => [
            'required'    => 'Başlangıç gramajı alanı zorunludur.',
            'decimal'     => 'Başlangıç gramajı geçerli bir sayı olmalıdır.'
        ],
        'bit_gr'    => [
            'required'    => 'Bitiş gramajı alanı zorunludur.',
            'decimal'     => 'Bitiş gramajı geçerli bir sayı olmalıdır.'
        ],
        'bas_gen'   => [
            'required'    => 'Başlangıç genişliği alanı zorunludur.',
            'decimal'     => 'Başlangıç genişliği geçerli bir sayı olmalıdır.'
        ],
        'bit_gen'   => [
            'required'    => 'Bitiş genişliği alanı zorunludur.',
            'decimal'     => 'Bitiş genişliği geçerli bir sayı olmalıdır.'
        ],
    ];
}
