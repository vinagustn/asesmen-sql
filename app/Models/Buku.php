<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $fillable = [
        'judul',
        'pengarang',
        'deskripsi',
        'tahun_terbit',
        'user_id'
    ];

    public function createBy()
    {
        return $this->belongsTo(User::class);
    }
}
