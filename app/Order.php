<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Client;

class Order extends Model
{
    protected $fillable = [
        'client_id' , 'flight_to' , 'total_price' , 'paid' , 'stage1' , 'stage2' , 'stage3', 'invoice'
    ];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
