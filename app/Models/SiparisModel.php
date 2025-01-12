<?php

namespace App\Models;

use CodeIgniter\Model;

class SiparisModel extends Model
{
    // Model için kullanılacak tablo adı
    protected $table = 'siparisler';

    // Bu tabloda yer alan sütunlar
    protected $primaryKey = 'id';
    protected $allowedFields = ['bilezik_id', 'agirlik', 'genislik', 'tarih', 'cnc'];

    // Otomatik zaman damgalarını kullanmak istiyorsanız
    protected $useTimestamps = false;

    // İstenilen formatlarda veri dönüşümü yapabilirsiniz
    protected $dateFormat = 'datetime';

    // id ve tarih gibi alanları modelinize dahil etmek için
    protected $validationRules = [
        'bilezik_id' => 'required|integer',
        'agirlik' => 'required|decimal',
        'genislik' => 'required|decimal',
        'tarih' => 'required|valid_date',
        'cnc' => 'required|string',
    ];

    // Mesajlar
    protected $validationMessages = [
        'bilezik_id' => [
            'required' => 'Bilezik ID alanı gereklidir.',
            'integer' => 'Bilezik ID bir sayı olmalıdır.',
        ],
        'agirlik' => [
            'required' => 'Ağırlık alanı gereklidir.',
            'decimal' => 'Ağırlık sayısal bir değer olmalıdır.',
        ],
        'genislik' => [
            'required' => 'Genişlik alanı gereklidir.',
            'decimal' => 'Genişlik sayısal bir değer olmalıdır.',
        ],
        'tarih' => [
            'required' => 'Tarih alanı gereklidir.',
            'valid_date' => 'Geçerli bir tarih girilmelidir.',
        ],
        'cnc' => [
            'required' => 'CNC alanı gereklidir.',
            'string' => 'CNC alanı metin olmalıdır.',
        ],
    ];
}
