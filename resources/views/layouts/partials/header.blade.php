<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">EVA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('institutes.*') ? 'active':''}}"
                       href="{{route('institutes.index')}}">Institutos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('courses.*') ? 'active':''}}"
                       href="{{route('courses.index')}}">Cursos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('categories.*') ? 'active':''}}"
                       href="{{route('categories.index')}}">Categorias</a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link {{request()->routeIs('editions.*') ? 'active':''}}"--}}
{{--                       href="{{route('editions.index')}}">Ediciones</a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('institutes.*') ? 'active':''}} "
                       href="{{route('institutes.index')}}">Inscribete!</a>
                </li>
            </ul>
            @if(Auth::user())
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-display="static" aria-expanded="false">
                        <strong>
                            {{Auth::user()->name}}
                        </strong>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end mt-3">
                        @if(Auth::user()->type_of_user==='admin')
                            <li><a class="dropdown-item" href="{{route('dashboard')}}">Panel de Control</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                        @endif
                        <li>
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button type='submit' class="dropdown-item">Crerrar sesión</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @else
                <a class="btn btn-outline-light " href="{{route('login')}}" role="button" style="margin-right: .5rem">Inciar
                    sesión</a>
            @endif
        </div>
    </div>
</nav>
