<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function perihal()
    {
        return $this->belongsTo(Perihal::class,'perihal_id','id');
    }

    public function filemasuk()
    {
        return $this->hasMany(Filemasuk::class, 'suratmasuk_id', 'id');
    }
}
