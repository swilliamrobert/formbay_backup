<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    public $incrementing = false;

    protected $fillable = [
        'id', 'name', 'eye_color','age','is_active'
    ];

    /**
     * Search by name
     *
     * @param $name
     * @return \Illuminate\Support\Collection
     */
    public function searchName($name)
    {
        return $this->where('name', 'LIKE', '%' . $name . '%')->get();
    }
}
