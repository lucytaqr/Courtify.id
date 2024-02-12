<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Jam extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jam';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'start_time', 'end_time'
    ];

    // Tambahan metode atau properti lain sesuai kebutuhan aplikasi

    public function lapangan()
    {
        return $this->belongsToMany(Lapangan::class);
    }
}
