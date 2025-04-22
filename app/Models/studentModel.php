<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    protected $table = "students";

    public function class()
{
    return $this->belongsTo(ClassModel::class, 'class_id');
}

}
