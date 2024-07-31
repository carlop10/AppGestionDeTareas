<!-- resources/views/tasks/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1>Crear Nueva Tarea</h1>
    </x-slot>

    <div>
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required>
            <label for="description">Descripción:</label>
            <textarea id="description" name="description" required></textarea>
            <label for="status">Estado:</label>
            <select id="status" name="status">
                <option value="pending">Pendiente</option>
                <option value="completed">Completada</option>
            </select>
            <label for="due_date">Fecha de Vencimiento:</label>
            <input type="date" id="due_date" name="due_date" required>
            <button type="submit">Guardar</button>
        </form>
    </div>
</x-app-layout>
