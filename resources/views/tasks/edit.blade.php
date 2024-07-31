<!-- resources/views/tasks/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1>Editar Tarea</h1>
    </x-slot>

    <div>
        <form action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" value="{{ $task->title }}" required>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required>{{ $task->description }}</textarea>
            <label for="status">Estado:</label>
            <select id="status" name="status">
                <option value="pending" {{ $task->status == 'pending' ? 'selected' : '' }}>Pendiente</option>
                <option value="completed" {{ $task->status == 'completed' ? 'selected' : '' }}>Completada</option>
            </select>
            <label for="due_date">Fecha de Vencimiento:</label>
            <input type="date" id="due_date" name="due_date" value="{{ $task->due_date->format('Y-m-d') }}" required>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</x-app-layout>
