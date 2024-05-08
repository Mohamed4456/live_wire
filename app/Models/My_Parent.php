<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class My_Parent extends Model
{
    use HasFactory;
    protected $guarded=[];
    protected $table = 'my__parents';

/**
 * Get the user that owns the My_Parent
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */

}
