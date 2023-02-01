<?php

namespace App\Models;
use App\Models\type_deduction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deduction extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    
    public function requestypeduc()
    {
        return $this->belongsTo(type_deduction::class, 'type_d','codigo');
    }
}
