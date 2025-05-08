<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class testingModel extends Model
{
    protected $table = "testings";

    public function class()
{
    return $this->belongsTo(ClassModel::class, 'class_id');
}

}
