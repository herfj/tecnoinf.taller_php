<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Panel de Control') }}
        </h2>
    </x-slot>

    <div class="flex flex-wrap p-4 mx-auto lg:mt-12 lg:mr-64 lg:ml-64">
        {{--Instutos tabla--}}
        <div class="w-auto" >
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

        {{--Usuarios tabla--}}
            <div class="w-auto" >
            <div class="rounded-md bg-purple-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-purple-400 rounded-md">Usuarios</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-purple-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.index')}}">Lista de Usuarios</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-purple-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.create')}}">Crear un Usuario</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-purple-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.index')}}">Editar un Usuario</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-purple-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.index')}}">Eliminar un Usuario</a>
                        </h1>
                    </div>
                </div>
            </div>

        </div>

        {{--Inscripciones tabla--}}
            <div class="w-auto" >
            <div class="rounded-md bg-pink-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-pink-400 rounded-md">Inscripciones</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-pink-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.index')}}">Lista de Inscripciones por Edicion</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-pink-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.index')}}">Actualizar estado de inscripcion (Acep. o Recha.)</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-pink-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.create')}}">Editar una inscripcion</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-pink-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('admin.users.index')}}">Eliminar un Inscripcion</a>
                        </h1>
                    </div>
                </div>
            </div>

        </div>

        {{--Cursos tabla--}}
            <div class="w-auto" >
            <div class="rounded-md bg-green-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-green-400 rounded-md">Cursos</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-green-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('courses.index')}}">Lista de cursos</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-green-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('courses.index')}}">Lista de ediciones (de un Curso)</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-green-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('courses.create')}}">Crear un curso</a>
                        </h1>
                    </div>
                </div>

                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-green-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('courses.index')}}">Editar un curso</a>
                        </h1>
                    </div>
                </div>

            </div>

        </div>

        {{--Categorias tabla--}}
            <div class="w-auto" >
            <div class="rounded-md bg-yellow-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-yellow-400 rounded-md">Categorias</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-yellow-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('categories.index')}}">Lista de Categorias</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-yellow-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('categories.create')}}">Crear un Categoria</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-yellow-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('categories.index')}}">Editar un Categoria</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-yellow-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('categories.index')}}">Eliminar un Categoria</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        {{--Ediciones tabla--}}
            <div class="w-auto" >
            <div class="rounded-md bg-red-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-red-400 rounded-md">Ediciones</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-red-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Lista de Categorias</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-red-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.create')}}">Crear un Categoria</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-red-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Editar un Categoria</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-red-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Eliminar un Categoria</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

        {{--Clases tabla--}}
            <div class="w-auto" >
            <div class="rounded-md bg-indigo-200 pt-4 m-2 overflow-hidden"><h1
                    class="px-3 py-2 mx-3 mb-2 font-bold text-gray-800 bg-indigo-400 rounded-md">Clases</h1>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-indigo-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Lista de Categorias</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-indigo-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.create')}}">Crear un Categoria</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-indigo-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Editar un Categoria</a>
                        </h1>
                    </div>
                </div>
                <div>
                    <div
                        class="flex items-center px-3 py-2 text-gray-700 border-gray-300 cursor-pointer hover:bg-indigo-400 hover:text-gray-900">
                        <h1 class="flex-1 text-sm">
                            <a href="{{route('institutes.index')}}">Eliminar un Categoria</a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
