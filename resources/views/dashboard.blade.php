<x-app-layout>
    <div class="py-10 bg-gray-100 min-h-screen">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-semibold text-gray-900">
                    Dashboard
                </h1>
                <p class="mt-1 text-sm text-gray-600">
                    Bienvenida, {{ Auth::user()->name }}
                </p>
            </div>

            <!-- Main Card -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <h2 class="text-lg font-medium text-gray-900">
                    Sesión iniciada
                </h2>

                <p class="mt-2 text-gray-600 text-sm leading-relaxed">
                    Has iniciado sesión correctamente. Este panel es visible
                    únicamente para usuarios autenticados.
                </p>

                <div class="mt-6 flex gap-3">
                    <a href="#"
                       class="px-4 py-2 rounded-md text-sm font-medium
                              text-white bg-indigo-600 hover:bg-indigo-700 transition">
                        Perfil
                    </a>

                    <a href="#"
                       class="px-4 py-2 rounded-md text-sm font-medium
                              text-gray-700 bg-gray-100 hover:bg-gray-200 transition">
                        Configuración
                    </a>
                </div>
            </div>

            <!-- Info Row -->
            <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-xs text-gray-500">Estado</p>
                    <p class="mt-1 font-medium text-green-600">Activo</p>
                </div>

                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-xs text-gray-500">Rol</p>
                    <p class="mt-1 font-medium text-gray-900">Usuario</p>
                </div>

                <div class="bg-white p-4 rounded-lg border border-gray-200">
                    <p class="text-xs text-gray-500">Último acceso</p>
                    <p class="mt-1 font-medium text-gray-900">
                        {{ now()->format('d/m/Y') }}
                    </p>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
