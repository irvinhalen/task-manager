<?php

namespace App\Models;

use AfaanBilal\LaravelHasUUID\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaskList extends Model
{
    use HasFactory;
    use HasUUID;

    public function tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }
}
