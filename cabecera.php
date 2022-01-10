
    <!--Mi contenido opcupa todo el ancho de la pantalla-->
    <!-- ALERTA -->
    <!-- Le pongo fixed-bottom para que no haya conflicto con el menú -->
    <div class="alert alert-dismissible fade show alert-warning fixed-bottom">
        Aviso de Cookies: ¿Las aceptas?
        <button type="button" class="close" data-dismiss="alert">
            <span>X</span>
        </button>
    </div>

    <header class="row">
        <!-- cabecera menu -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top justify-content-start">
            <a class="navbar-brand" href="http://127.0.0.1:8080/BoostratEjPhp/"><img src="img/logo.png"></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a href="http://127.0.0.1:8080/BoostratEjPhp/" class="nav-link">Freelancer Adell</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Noticias</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Ultimas noticias</a>
                            <a class="dropdown-item" href="#">Noticias destacadas</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Nosotros</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">La empresa</a>
                            <a class="dropdown-item" href="#">Trabaja con nosotros</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Contacto</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">¿Donde estamos?</a>
                            <a class="dropdown-item" href="#">Servico al cliente</a>
                        </div>
                    </li>
                </ul>
            </div>
            <form class="form-inline justify-content-end p-3">
                <input class="btn btn-primary btn-sm mr-2" data-toggle="modal" data-target="#entrar" type="button" value="Login">
                <input class="btn btn-primary btn-sm" data-toggle="modal" data-target="#registro" type="button" value="Registro">
            </form>
        </nav>
        <section class="modal" id="entrar">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <div class="modal-title">
                            Entrar en Sesión
                        </div>
                        <span data-dismiss="modal">X</span>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Email:</label>
                                <input type="email" class="form-control" placeholder="Introduce tu email">
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" placeholder="Introduce tu Contraseña">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Entrar">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <section class="modal" id="registro">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <div class="modal-title">
                            Registro de usuario
                        </div>
                        <span data-dismiss="modal">X</span>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu nombre">
                            </div>
                            <div class="form-group">
                                <label>Apellido:</label>
                                <input type="text" class="form-control" placeholder="Introduce tu apellidos">
                            </div>
                            <div class="form-group">
                                <label>E-mail:</label>
                                <input type="email" class="form-control" placeholder="Introduce tu email">
                            </div>
                            <div class="form-group">
                                <label>Contraseña:</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Sexo:</label>
                                <div class="btn btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-warning">
                                        <input type="radio" name="sexo" id="V">Hombre
                                    </label>
                                    <label class="btn btn-warning">
                                        <input type="radio" name="sexo" id="M">Mujer
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-primary" value="Registrar">
                        </div>
                </div>
            </div>
            </div>
            </div>
            </form>
            </div>
            </div>
        </section>
    </header>
  