<?php

namespace App\Enums;

enum TaskStatus: string{
    case ToDo = 'todo';
    case InProgress = 'in-progress';
    case Done = 'done';
}

?>
