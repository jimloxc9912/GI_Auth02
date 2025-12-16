<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            Dashboard de {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white p-6 rounded shadow">
                <p>Has iniciado sesión correctamente.</p>
                <p class="mt-2 text-sm text-gray-600">
                    Este contenido solo es visible para usuarios registrados.
                </p>
            </div>
        </div>
    </div>
</x-app-layout>
