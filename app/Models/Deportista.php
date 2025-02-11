<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Deportista extends Model
{
    protected $table = 'deportista';

    protected $fillable = ['name', 'deporte', 'edad', 'altura', 'peso'];

    static function change($request)
    {
        $deportista = new Deportista($request->all());
        return $deportista->store();
    }

    function modify($request)
    {
        $result = false;
        try {
            $result = $this->update($request->all());
        } catch (\Exception $e) {
        }
        return $result;
    }

    function store()
    {
        try {
            $result = $this->save();
        } catch (\Exception $e) {
            $result = false;
        }
        return $result;
    }
}
