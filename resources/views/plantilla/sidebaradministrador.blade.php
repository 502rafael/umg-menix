<div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Inicio</a>
                    </li>
                    <li class="nav-title">
                    _____________________________________
                    </li>
                    <li class="nav-item nav-dropdown">

                        {{-- Categorias --}}
                        <li @click="menu=1" class="nav-item">
                             <a class="nav-link" href="#"><i class="icon-bag"></i> Categorías</a>
                        </li>
                        {{-- Producto --}}
                         <li @click="menu=2" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-bag"></i> Productos</a>
                        </li>
                        {{-- Ventas --}}
                        <li @click="menu=5" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Realizar Venta</a>
                        </li>
                        {{-- Clientes --}}
                        <li @click="menu=6" class="nav-item">
                             <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                        </li>
                        {{-- Proveedores --}}
                        <li @click="menu=4" class="nav-item">
                             <a class="nav-link" href="#"><i class="icon-notebook"></i> Proveedores</a>
                        </li>
                        {{-- Ingresos --}}
                        <li @click="menu=3" class="nav-item">
                             <a class="nav-link" href="#"><i class="icon-wallet"></i> Ingresos stock</a>
                        </li>
                    </li>
                    {{-- <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-basket"></i> Venta</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=5" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-basket-loaded"></i> Realizar Venta</a>
                            </li>
                            <li @click="menu=6" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-notebook"></i> Clientes</a>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Usuarios y Roles</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=7" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user"></i> Usuarios</a>
                            </li>
                            <li @click="menu=8" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Roles</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Reportes</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=9" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ingresos</a>
                            </li>
                            <li @click="menu=10" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-chart"></i> Reporte Ventas</a>
                            </li>
                        </ul>
                    </li>
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Dasboard</a>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>