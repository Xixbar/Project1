<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    public function create()
    {
        return view('entries.create');
    }
}
