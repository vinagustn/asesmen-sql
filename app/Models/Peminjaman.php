<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\User;
use App\Models\Anggota;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $fillable = [
        'book_id',
        'member_id',
        'user_id'
    ];

    public function createBy()
    {
        return $this->belongsTo(User::class);
    }

    public function books()
    {
        return $this->belongsTo(Buku::class);
    }

    public function member()
    {
        return $this->belongsTo(Anggota::class);
    }
}
