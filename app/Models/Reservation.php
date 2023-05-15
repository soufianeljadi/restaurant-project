<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [

       'client_id',
       'table_id',
       'reservation_date',
       'reservation_time',
   ];



    public function client(){
        return $this->belongsTo(Client::class,'client_id',);
    }


    public function table(){
        return $this->belongsTo(Table::class,'table_id');
    }


}
