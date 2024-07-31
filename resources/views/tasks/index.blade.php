<!-- resources/views/tasks/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1>Lista de Tareas</h1>
    </x-slot>

    <div>
        <a href="{{ route('tasks.create') }}">Crear Nueva Tarea</a>
        <table>
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Fecha de Vencimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->due_date }}</td>
                        <td>
                            <a href="{{ route('tasks.edit', $task->id) }}">Editar</a><br>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button><br>
                            </form>
                            <a href="{{route('dashboard')}}">Inicio</a><br>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
