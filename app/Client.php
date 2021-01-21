<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Client extends Model
{
    protected $fillable = ['name','phone','email','address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
