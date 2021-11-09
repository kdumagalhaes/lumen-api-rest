<?php


namespace App;


use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}
