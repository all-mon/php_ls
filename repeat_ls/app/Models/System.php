<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class System extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'systems';
    protected $guarded = false;

    public function devices()
    {
        return $this->
        belongsToMany(Device::class,'device_systems','system_id','device_id');
    }
}
