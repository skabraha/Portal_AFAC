<?php

namespace App\Models;
use App\Models\deduction;
use App\Models\otherpay;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perceptions extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function requestdeduction()
    {
        return $this->belongsTo(deduction::class, 'NumEmpleado','NumEmpleado');
    }
    public function requspersep()
    {
        return $this->belongsTo(otherpay::class, 'NumEmpleado','NumEmpleado');
    }

}
