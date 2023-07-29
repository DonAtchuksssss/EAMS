<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Product;
class evacueess extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'evacuees';

    protected $dates = ['deleted_at'];
    use SoftDeletes;
    const UPDATED_AT = null;

   

}
