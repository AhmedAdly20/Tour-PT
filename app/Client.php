<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelUserActivity\Traits\Loggable;
use App\Order;

class Client extends Model
{
    use Loggable;
    protected $fillable = ['name','phone','email','address'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
