<?php

namespace App\Models;
use App\Models\type_perception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perceptions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function requestype()
    {
        return $this->belongsTo(type_perception::class, 'type_p','codigo');
    }
}
