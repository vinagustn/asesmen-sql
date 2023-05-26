<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'gender',
        'alamat',
        'no_hp',
        'user_id'
    ];

    public function createBy()
    {
        return $this->belongsTo(User::class);
    }
}
