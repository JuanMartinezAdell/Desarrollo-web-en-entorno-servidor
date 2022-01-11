<?php
    include "cabecera.php";

    $cursos = array(
        array("nombre" => "1DAW", "etapa" => "CFGS", "anio" => "2021"),
        array("nombre" => "2DAW", "etapa" => "CFGS", "anio" => "2021"),
        array("nombre" => "1GA", "etapa" => "CFGM", "anio" => "2021"),
        array("nombre" => "2GA", "etapa" => "CFGM", "anio" => "2021"),
        array("nombre" => "1º ESO", "etapa" => "ESO", "anio" => "2021"),
        array("nombre" => "2º ESO", "etapa" => "ESO", "anio" => "2021"),
        array("nombre" => "3º ESO", "etapa" => "ESO", "anio" => "2021"),
        array("nombre" => "4º ESO", "etapa" => "ESO", "anio" => "2021"),
        array("nombre" => "1º Bachillerato", "etapa" => "Bachillerato", "anio" => "2021"),
        array("nombre" => "2º Bachillerato", "etapa" => "Bachillerato", "anio" => "2021"),
    )
?>


                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">CURSOS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Etapa</th>
                                            <th>Año</th>                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Etapa</th>
                                            <th>Año</th>                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        foreach($cursos as $curso) {
                                            echo "<tr>";
                                            foreach($curso as $value) {
                                                echo "<td>";
                                                echo $value;
                                                echo "</td>";
                                            }
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

<?php
    include "pie.php";
?>