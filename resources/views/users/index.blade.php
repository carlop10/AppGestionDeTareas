<!-- resources/views/users/index.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1>Lista de Usuarios</h1>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('users.create') }}" class="text-blue-500 hover:text-blue-700">Crear Nuevo Usuario</a>
                    <table class="mt-4">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo Electrónico</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700">Editar</a><br>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700">Eliminar</button><br>
                                        </form>
                                        <a href="{{route('dashboard')}}">Inicio</a><br>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
