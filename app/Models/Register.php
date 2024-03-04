<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class Register extends Model
{
    use HasFactory;

    protected $table = 'registers';
    protected $primaryKey = 'id';
    protected $fillable = [
        'uuid',
        'nama',
        'email',
        'asal',
        'jenis_kelamin',
        'tanggal_lahir',
        'no_telp',
        'akun_sosmed',
        'profesi',
        'instansi',
        'motivasi',
        'riwayat_penyakit',
        'ukuran',
        'file_ktp',
        'file_cv',
        'file_ppt',
    ];

    protected static function boot()
    {
        parent::boot();

        // Event listener untuk membuat UUID sebelum menyimpan
        static::creating(function ($model) {
            $model->uuid = Uuid::uuid4()->toString();
        });
    }
}
