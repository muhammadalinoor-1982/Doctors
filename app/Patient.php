<?php

namespace App;

use App\Http\Controllers\Medications\MedicationsController;
use Illuminate\Database\Eloquent\Model;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Patient extends Model
{
    protected $fillable = [
        'custom_id',
        'doctor_id',
        'name',
        'email',
        'phone',
        'dob',
        'age',
        'blood_group',
        'gender',
        'marital_status',
        'status',
        'image',
        'status',
        'creator',
        'updater',
    ];
    public function doctor()
    {
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->custom_id = IdGenerator::generate(['table' => 'patients','field'=>'custom_id','length' => 10, 'prefix' =>'PNT-']);
        });
    }
}
