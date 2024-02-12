<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Lapangan extends Model
{
    use HasFactory, Sluggable;


    protected $guarded = ['id'];
    protected $with = ['cabor'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search) {
            $query->where(function($query) use ($search) {
                $query->where('nama', 'like', '%'.$search.'%');
                $query->orWhere('cabor_id', 'like', '%'.$search.'%');
                $query->orWhere('tarif', 'like', '%'.$search.'%');
            });
        });

        $query->when($filters['cabor'] ?? false, function($query, $cabor) {
            $query->whereHas('cabor', function($query) use ($cabor) {
                $query->where('slug', $cabor);
            });
        });
    }

    public function cabor()
    {
        return $this->belongsTo(Cabor::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    
}
