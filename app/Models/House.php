<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Database\Eloquent\Casts\Attribute;

class House extends Model
{
    protected $table = 'houses';
    protected $fillable = [
        'name',
        'description',
        'bed_room',
        'bath_room',
        'living_room',
        'kitchen_room',
        'car_park',
        'pool_villa',
        'area',
        'blueprint',
        'cover',
    ];

    protected $appends = ['safe_id'];
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    public static function active_products() {
        return Product::where('isActive','=', true)->get();
    }
    protected function true_id($id) {
        return Hashids::decode($id)[0];
    }
    protected function safeId(): Attribute
    {
        return new Attribute(
            get: fn () => Hashids::encode($this->attributes['id']),
        );
    }
}
