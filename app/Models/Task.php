<?php

namespace App\Models;

use AfaanBilal\LaravelHasUUID\HasUUID;
use App\Enums\TaskStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;
    use HasUUID;

    protected $casts = [
        'status' => TaskStatus::class
    ];

    public function taskList(): BelongsTo
    {
        return $this->belongsTo(TaskList::class);
    }
}
