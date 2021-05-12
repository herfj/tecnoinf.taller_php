<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap p-4 mx-auto lg:mt-12 mr-12 ml-24">
        <div class="w-auto" style="width: 25%;">
            <div class="rounded-md bg-blue-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-blue-400 rounded-md">Institutos</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Lista de Institutos</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.create')}}">Crear un Instituto</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Editar un Instituto</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Eliminar un Instituto</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-auto" style="width: 25%;">
            <div class="rounded-md bg-blue-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-blue-400 rounded-md">Usuarios</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Lista de Institutos</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.create')}}">Crear un Instituto</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Editar un Instituto</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-blue-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Eliminar un Instituto</a>
                        </h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
