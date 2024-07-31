<?php

namespace App\Models;

use App\Notifications\TaskDueDate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'description', 'completed', 'due_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function checkDueDate()
    {
        if ($this->due_date->isToday()) {
            $this->user->notify(new TaskDueDate($this));
        }
    }

}
