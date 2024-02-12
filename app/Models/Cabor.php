<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabor extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function lapangans()
    {
        return $this->hasMany(Lapangan::class);
    }
}
