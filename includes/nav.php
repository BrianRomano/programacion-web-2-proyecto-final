<nav class="navbar navbar-light">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="index.php">
            <img class="logo d-none d-md-block" src="imagenes/logos/desktop/logo.png" alt="Cases" title="Cases" width="354" heigth="89">
            <img class="logo d-md-none d-block " src="imagenes/logos/tablet-mobile/logo.png" width="101" height="89" alt="Cases">
        </a>

        <!-- Boton - Login -->
        <div class="dropdown login">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Iniciar sesión
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <form class="px-4 py-3">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Email</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder=" Ingrese su email">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Contraseña</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                            <label class="form-check-label" for="dropdownCheck">Recuerdame</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </form>
            </div>
        </div>
        <!-- Boton Hamburguesa -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><img src="imagenes/iconos/menu-hamburguesa/inicio.png" alt="Inicio" width="512" heigth="512">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php"><img src="imagenes/iconos/menu-hamburguesa/productos.png" alt="Productos" width="512" height="512">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php"><img src="imagenes/iconos/menu-hamburguesa/contacto.png" alt="Contacto" width="512" height="512">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>