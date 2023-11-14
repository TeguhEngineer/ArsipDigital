<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perihal extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function suratmasuk() {
        return $this->hasmany(Suratmasuk::class,'perihal_id','id');
    }
    public function suratkeluar() {
        return $this->hasmany(SuratKeluar::class,'perihal_id','id');
    }
}
