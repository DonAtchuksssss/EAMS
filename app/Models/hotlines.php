<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class hotlines extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'hotline';

    protected $dates = ['deleted_at'];
    use SoftDeletes;
    const UPDATED_AT = null;

}
