<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Libreria Jaroso</title>
  </head>
  <body class="bg-secondary bg-opacity-25">

        <?php   
                $contHistoria=0;
                $contNegra=0;

                $libreria = array(
                            array("ISBN" => "0123456789101112", "titulo" => "aprender" , "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.","categoria" => "ciencias", "editorial" => "mad", "foto" => "imgs/isbm1.jpg", "precio"=> 5.65), 
                            array("ISBN" => "0123456789101114", "titulo" => "politica", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.","categoria" => "historica", "editorial" => "mad", "foto" => "imgs/isbn2.jpg", "precio"=> 6.02),
                            array("ISBN" => "0123456789101115", "titulo" => "desertificacion", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "deporte", "editorial" => "mad", "foto" => "imgs/isbn3.jpg", "precio"=> 4.81),
                            array("ISBN" => "0123456789101116", "titulo" => "feliz cumpleaños", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.","categoria" => "novela", "editorial" => "mad", "foto" => "imgs/isbn4.jpg", "precio"=> 5.56),
                            array("ISBN" => "0123456789101117", "titulo" => "la narracion","descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "historica", "editorial" => "mad", "foto" => "imgs/isbn10.jpg", "precio"=> 6.01),
                            array("ISBN" => "0123456789101118", "titulo" => "el libro", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.","categoria" => "historica", "editorial" => "mad", "foto" => "imgs/isbn5.jpg", "precio"=> 7.89),
                            array("ISBN" => "0123456789101119", "titulo" => "Entorno laboral", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "historica", "editorial" => "mad", "foto" => "imgs/isbn10.jpg", "precio"=> 5.90),
                            array("ISBN" => "0123456789101120", "titulo" => "Sobrevivir al insti", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.","categoria" => "romantica", "editorial" => "mad", "foto" => "imgs/isbm1.jpg", "precio"=> 6.50),
                            array("ISBN" => "0123456789101121", "titulo" => "Juega", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "historica", "editorial" => "mad", "foto" => "imgs/isbn6.jpg", "precio"=> 7.80),
                            array("ISBN" => "0123456789101122", "titulo" => "teoria del color", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "historia", "editorial" => "mad", "foto" => "imgs/isbn7.jpg", "precio"=> 4.67),
                            array("ISBN" => "0123456789101123", "titulo" => "Juega", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "negra", "editorial" => "mad", "foto" => "imgs/isbn8.jpg", "precio"=> 7.87),
                            array("ISBN" => "0123456789101124", "titulo" => "De ninguna manera", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "negra", "editorial" => "mad", "foto" => "imgs/isbn9.jpg", "precio"=> 5.60),
                            array("ISBN" => "0123456789101125", "titulo" => "tras la uni", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "negra", "editorial" => "mad", "foto" => "imgs/isbn9.jpg", "precio"=> 5.56),
                            array("ISBN" => "0123456789101126", "titulo" => "Diario", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "negra", "editorial" => "mad", "foto" => "imgs/isbn12.jpg", "precio"=> 6.90),
                            array("ISBN" => "0123456789101127", "titulo" => "El amor", "descripcion" => "Una novela es una obra literaria de carácter narrativo y de cierta extensión. Está escrita en prosa y narra hechos ficticios o basados en hechos reales.", "categoria" => "negra", "editorial" => "mad", "foto" => "imgs/isbn15.jpg", "precio"=> 5.50),
                );



            echo "<div class='container-fluid justify-content-around'>";
                echo "<h1 class='font-weight-bold text-start p-3'>LIBRERÍA JAROSO 2020</h1>";
        
                echo "<section class='proyectos py-4'>";
                    echo "<div class='container'>";
                    echo "<h1 class='display-4 font-weight-bold text-start text-primary pb-4'>Novela historica</h1>";
                    echo "<div class='row text-md-center'>";
                        //echo "<article class='col-12 col-md-6 col-lg-3 mb-3 mb-lg-0'>";
                            foreach ($libreria as $libro) {
                                if ($libro['categoria'] == "historica" && $contHistoria < 4) {
                                    $contHistoria++;
                             ?> 
                             <article class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <div class="card">
                                        <img src='<?= $libro['foto'] ?>' class="card-img-top" alt="###" width="100" height="200">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $libro['titulo']?></h5>
                                            <p class='card-text'><?= $libro['descripcion']?></p>
                                            <p class='card-text'><?= $libro['precio']?>€</p>
                                        </div>
                                    </div>
                            </article>
                            <?php
                                  }
                                } 
                            ?>
                </div>
                </div>
                <?php
                echo "<div class='container'>";
                    echo "<h1 class='display-4 font-weight-bold text-start text-primary pb-4'>Novela negra</h1>";
                    echo "<div class='row text-md-center'>";
                        //echo "<article class='col-12 col-md-6 col-lg-3 mb-3 mb-lg-0'>";
                            foreach ($libreria as $libro) {
                                if ($libro['categoria'] == "negra" && $contNegra < 4) {
                                    $contNegra++;
                             ?> 
                             <article class="col-12 col-md-6 col-lg-3 mb-3 mb-lg-0">
                                    <div class="card">
                                        <img src='<?= $libro['foto'] ?>' class="card-img-top" alt="###" width="100" height="200">
                                        <div class="card-body">
                                            
                                            <h5 class="card-title"><?= $libro['titulo']?></h5>
                                            <p class='card-text'><?= $libro['descripcion']?></p>
                                            <p class='card-text'><?= $libro['precio']?>€</p>
                                        </div>
                                    </div>
                            </article>
                            <?php
                                  }
                                } 
                            ?>
                </div>
                </div>
                </section>
    
        <!-- footer -->
        <h6 class=" text-center">Realizado por Juan Martínez Adell</h6>   
    </div>        
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>