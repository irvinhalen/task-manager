<?php

namespace App\Models;

use AfaanBilal\LaravelHasUUID\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskList extends Model
{
    use HasFactory;
    use HasUUID;
}
