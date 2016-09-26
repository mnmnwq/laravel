<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table='config';
    protected $primaryKey='conf_id';
    public $timestamps=false;
    protected $guarded=[];  //排除敏感字段
}
