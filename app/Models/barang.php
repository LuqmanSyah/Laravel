<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public function pesanan_detail() 
    {
        return $this->hasMany('App\Models\pesananDetail','barang_id', 'id');
    }
}
