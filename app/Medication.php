<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class medication extends Model
{
    protected $fillable = [
        'custom_id',
        'doctor_id',
        'patient_id',
        'medicine',
        'advice',
        'lab_test',
        'next_visit',
        'lab_report',
        'status',
        'creator',
        'updater'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id','id');
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->custom_id = IdGenerator::generate(['table' => 'medications','field'=>'custom_id','length' => 10, 'prefix' =>'MDC-']);
        });
    }
}
