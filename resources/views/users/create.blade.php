<!-- resources/views/users/create.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h1>Crear Nuevo Usuario</h1>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                        <label for="email">Correo Electrónico:</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" required>

                        <label for="password_confirmation">Confirmar Contraseña:</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required>

                        <button type="submit">Crear Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
