<!DOCTYPE html>
<html lang="es">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Roboto+Condensed&display=swap"
        rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Mi hoja de estilo -->
    <link rel="stylesheet" ref="style.css" />
    <title>Blog personal de Juan Martínez Adell</title>
</head>
<!--Seccion quien soy-->
<section class="container-fluid py-4 mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 text-center">
                    <img src="img/desarrollador.svg" alt="Soy el  desarrolador" class="img-fluid mb-4 mb-md-0">
                </div>
                <div class="col-12 col-md-6 text-left text-md-left align-self-md-center">
                    <h1 class="display-4 font-weight-bold text-primary">¿Quien soy?</h1>
                    <h3>Hola! Soy Adell desarrollador web Freelancer</h3>
                    <a href="#" class="btn btn-primary btn-lg">Leér más</a>
                </div>
            </div>
        </div>
    </section>
    <!--Seccion contenido-->
    <section class="filosofia py-4 bg-primary text-center text-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="img/emoji.png" width="260" height="auto" alt="Avatar de Juan Martinez"
                        class="img-fluid rounded-circle mb-4">
                    <p class="h2">Bienvenido a la web de ejercicos del programador full stack del ciclo DAW<br><br></p>
                    <p class="h3"> “Una computadora es una bicicleta para tu mente”: Steve Jobs<br>
                                     Las investigaciones muestran que el aprendizaje de la programación cambia la forma en la que funciona el cerebro.<br>
                                     Un estudio inicial demostró que los estudiantes con experiencia en programación de computadoras,<br>
                                     ¡obtuvieron un 16% más de puntaje en una prueba de habilidad cognitiva! <br></p>
                    <h4 class="h4 font-italic"> -Juan Adell</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- CARRUSEL -->
    <section class="row justify-content-center mt-5">
        <div class="col-md-9 mt-3">
            <div class="carousel slide" id="carrusel" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100 d-block" src="img/car1.jpg" alt="Primer elemento">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="img/car2.jpg" alt="Segundo elemento">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="img/car3.jpg" alt="Tercer elemento">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 d-block" src="img/car4.jpg" alt="Cuarto elemento">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carrusel" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carrusel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Posterior</span>
                </a>
                <ol class="carousel-indicators">
                    <li data-target="#carrusel" data-slide-to="0" class="active"></li>
                    <li data-target="#carrusel" data-slide-to="1"></li>
                    <li data-target="#carrusel" data-slide-to="2"></li>
                    <li data-target="#carrusel" data-slide-to="3"></li>
                </ol>
            </div>
        </div>
    </section>

    <section class="row bg-dark justify-content-center mt-3 mb-3">
        <h1 class="text-center text-white">Cursos ofertados</h1>
    </section>
    <!-- CARD -->
    <section class="row justify-content-around">
        <div class="col-sm-3">
            <div class="card">
                <a href="#" data-toggle="tooltip" data-html="true" title="Apúntate, es gratis el primer mes">
                    <img src="img/proyecto4.png" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Curso PHP</h3>
                    <h5 class="card-subtitle mb-3">Haz tu web de manera fácil</h5>
                    <div class="card-text">
                        PHP es el lenguaje de programación más usado para hacer páginas Web.
                    </div>
                    <a href="http://127.0.0.1:8080/BoostratEjPhp/temario.php" class="btn btn-primary">Ver proyecto</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <a href="#" data-toggle="tooltip" data-html="true" title="Apúntate, es gratis el primer mes">
                    <img src="img/proyecto1.png" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Curso JavaScript</h3>
                    <h5 class="card-subtitle mb-3">Todo la potencia de JavaScript.</h5>
                    <div class="card-text">
                        JavaScript pone la potencia de las web dinamica a tu alcance.
                    </div>
                    <a href="#" class="btn btn-primary">Ver proyecto</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <a href="#" data-toggle="tooltip" data-html="true" title="Mejor trabajo al mejor precio">
                    <img src="img/proyecto2.png" class="card-img-top">
                </a>
                <div class="card-body">
                    <h3 class="card-title">Últimos protectos</h3>
                    <h5 class="card-subtitle mb-3">Da vida a tu Web</h5>
                    <div class="card-text">
                        Diseño páginas webs de acuerdo a tus necisadades y a las de tu negocio
                    </div>
                    <a href="#" class="btn btn-primary">Ver proyecto</a>
                </div>
            </div>
        </div>
    </section>

    <section class="row bg-dark justify-content-center mt-3 mb-3">
        <h1 class="text-center text-white">Quieres hablar conmigo</h1>
    </section>

    <!-- LIST GROUP COMO TAB-PANEL -->
    <section class="row justify-content-center">
        <div class="col-md-5">
            <div class="list-group">
                <a class="list-group-item list-group-item-action active" data-toggle="list"
                    data-target="#contactar">Contactar</a>
                <a class="list-group-item list-group-item-action " data-toggle="list"
                    data-target="#sugerencia">Sugerencia</a>
                <a class="list-group-item list-group-item-action" data-toggle="list"
                    data-target="#empresas">Empresas</a>
            </div>
        </div>
        <div class="col-md-6 pb-2">
            <div class="tab-content">
                <div class="tab-pane fade show active" id="contactar">
                    <form>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Introduce tu correo">
                        </div>
                        <div class="form-group">
                            <label>Tu problema:</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </div>

                    </form>
                </div>
                <div class="tab-pane fade" id="sugerencia">
                    <form>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Introduce tu correo">
                        </div>
                        <div class="form-group">
                            <label>Tu Sugerencia:</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="empresas">
                    <form>
                        <div class="form-group">
                            <label>Nombre de la empresa:</label>
                            <input type="text" class="form-control" placeholder="Introduce el nombre de la empresa">
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input type="email" class="form-control" placeholder="Correo electrónico de contacto">
                        </div>
                        <div class="form-group">
                            <label>¿En qué podemos ayudarte?:</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary" value="Enviar">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
</body>

</html>