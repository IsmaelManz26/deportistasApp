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
/* \u0043\u0072\u0065\u0061\u0064\u006f \u0070\u006f\u0072 \u0049\u0073\u006d\u0061\u0065\u006c \u004d\u0061\u006e\u007a\u0061\u006e\u006f */