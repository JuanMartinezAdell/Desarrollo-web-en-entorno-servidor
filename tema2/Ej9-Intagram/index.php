<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Instagram</title>
</head>
<body  class="bg-danger bg-opacity-25">
    <!-- 9. Instagram casero. Intenta hacer con diseño responsive (puedes usar Bootstrap) una web que muestre unas 7 fotos
            con la misma información que se muestra en esa red social:
                                    - Nombre del usuario que hace el post
                                    - Lugar donde se toma la foto
                                    - Fotografía
                                    - Número de me gusta
                                    - Comentarios: cada uno con usuario y mensaje.
            Cada foto añade dos comentarios al menos.
            Ten en cuenta que la información a mostrar estará en un array, y al recorrerlo lo vas pintando. Si tienes problemas
            para hacerlo responsive hazlo como puedas.  -->

            <?php   


                $instagram = array(
                            array("Nombre" => "Ismael", "Lugar" => "Pulpi" , "foto" => "imgs/img1.jpg","like" => "8", "comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                            array("Nombre" => "Amador", "Lugar" => "H-O" , "foto" => "imgs/imgs2.jpeg","like" => "9", "comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                            array("Nombre" => "Javi", "Lugar" => "Archena" , "foto" => "imgs/img3.jpg","like" => "10", "comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                            array("Nombre" => "Dani", "Lugar" => "Cuevas" , "foto" => "imgs/img4.jpg","like" => "7", "comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                            array("Nombre" => "Fran", "Lugar" => "Mojacar" , "foto" => "imgs/img5.jpg","like" => "6","comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                            array("Nombre" => "Manuel", "Lugar" => "Terreros" , "foto" => "imgs/img6.jpeg","like" => "6", "comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                            array("Nombre" => "Juan", "Lugar" => "Sevilla" , "foto" => "imgs/img7.jpg","like" => "7", "comentarios1" => array ("nombre" => "Lucia", "comentario"=> "Is beutiful"), "comentarios2" => array("nombre" => "Andres", "comentario"=> "Muy bonito")),
                );

                echo "<div class='container-fluid'>";
                echo "<h1 class='display-7 font-weight-bold text-center text-white pb-4 p-4'>Instagram</h1>";
                echo "<div class='row text-md-center'>";    
                    //echo "<article class='col-12 col-md-6 col-lg-3 mb-3 mb-lg-0'>";
                        foreach ($instagram as $instagramer) {
                         ?> 
                         <article class="col-12 col-md-5 col-lg-3 mb-3 mb-lg-2">
                                <div class="card">
                                    <img src='<?= $instagramer['foto'] ?>' class="card-img-top" alt="###" width="100" height="200">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= $instagramer['Nombre']?></h5>
                                        <p class='card-text'><?= $instagramer['Lugar']?></p>
                                        <p class='card-text'>Likes: <?= $instagramer['like']?></p>
                                        <p class='card-text'><?= $instagramer['comentarios1']['nombre']?> "<?= $instagramer['comentarios1']['comentario']?>" </p>
                                        <p class='card-text'><?= $instagramer['comentarios2']['nombre']?> "<?= $instagramer['comentarios2']['comentario']?>" </p>
                                    </div>
                                </div>
                        </article>
                        <?php
                              }
                        ?>
            </div>
            </div> 

    <!-- footer -->
    <h6 class='text-center text-white'>Realizado por Juan Martínez Adell</h6>   
           
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>