<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopMenu extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'status',
        'link',
    ];
}
