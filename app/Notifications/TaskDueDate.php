<?php

namespace App\Notifications;

use App\Models\Task;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;


class TaskDueDate extends Notification
{
    use Queueable;

    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
       {
           return (new MailMessage)
               ->line('La tarea "' . $this->task->title . '" está próxima a vencerse.')
               ->action('Ver Tarea', url('/tasks/' . $this->task->id))
               ->line('Gracias por usar nuestra aplicación!');
       }
}
