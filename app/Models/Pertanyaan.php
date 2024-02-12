<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    // protected $guarded = ['id'];
    protected $fillable = ['name', 'email', 'phone', 'domisili', 'pertanyaan'];

    // public function scopeFilter($query, array $filters)
    // {
    //     $query->when($filters['search'] ?? false, function ($query, $search) {
    //         return $query->where('name', 'like', '%' . $search . '%')
    //             ->orWhere('email', 'like', '%' . $search . '%')
    //             ->orWhere('phone', 'like', '%' . $search . '%')
    //             ->orWhere('domisili', 'like', '%' . $search . '%')
    //             ->orWhere('pertanyaan', 'like', '%' . $search . '%');
    //     });
    // }
}
