<?php

namespace AlfaDeTeam\AbstractapiGeo\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocationLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'response'];
}