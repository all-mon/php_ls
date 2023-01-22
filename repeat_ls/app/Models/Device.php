<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Device extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'devices';
    protected $guarded = [];

    public function systems()
    {
        return $this->
        belongsToMany(System::class,'device_systems','device_id','system_id');
    }
}
