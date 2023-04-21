<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'number',
        'location',
        'guest_number',
        'restaurant_id',
        'status'
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class,"restaurant_id");
    }
}
