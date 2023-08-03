<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PRUEBA AVE') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-xl font-semibold mb-4">{{ __("Clientes") }}</h2>
                    <div class="mb-4">
                        <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Crear</a>
                    </div>
                    <table class="w-full border-collapse border border-gray-200">
                        <thead>
                            <tr>
                                <th class="border border-gray-200 p-2">Documento</th>
                                <th class="border border-gray-200 p-2">Nombre</th>
                                <th class="border border-gray-200 p-2">Apellido</th>
                                <th class="border border-gray-200 p-2">Ciudad</th>
                                <th class="border border-gray-200 p-2">direccion</th>
                                <th class="border border-gray-200 p-2">celular</th>
                                <th class="border border-gray-200 p-2">cedula_base64</th>
                                <th class="border border-gray-200 p-2">correo</th>
                                <th class="border border-gray-200 p-2">contraseña</th>
                                <th class="border border-gray-200 p-2">Eliminar</th>
                                <th class="border border-gray-200 p-2">Actualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i <= 5; $i++) <tr>
                                <td class="border border-gray-200 p-2">Documento {{ $i }}</td>
                                <td class="border border-gray-200 p-2">Nombre {{ $i }}</td>
                                <td class="border border-gray-200 p-2">Apellido {{ $i }}</td>
                                <td class="border border-gray-200 p-2">Ciudad {{ $i }}</td>
                                <td class="border border-gray-200 p-2">direccion {{ $i }}</td>
                                <td class="border border-gray-200 p-2">celular {{ $i }}</td>
                                <td class="border border-gray-200 p-2">cedula_base64 {{ $i }}</td>
                                <td class="border border-gray-200 p-2">correo {{ $i }}</td>
                                <td class="border border-gray-200 p-2">contraseña {{ $i }}</td>
                                <td class="border border-gray-200 p-2"><a href="#" class="text-red-600">Eliminar</a></td>
                                <td class="border border-gray-200 p-2"><a href="#" class="text-yellow-600">Actualizar</a></td>
                                </tr>
                                @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>