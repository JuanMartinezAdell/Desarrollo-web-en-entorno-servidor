
<?php
    include "cabecera.php";

    //Mis alumnos en un array
    $alumnos = array(

        array("nombre" => "Ismael", "apellidos" => "García Flores", "edad" => "30", 
              "dni" => "48419851L", "email" => "ismagf@gmail.com", "localidad" => "vera",
              "telefono" => "686548774", "curso" => "1DAW", "avatar" => ""),
        array("nombre" => "Luis", "apellidos" => "Flores Martín", "edad" => "32", 
              "dni" => "48418851A", "email" => "luisito@gmail.com", "localidad" => "vera",
              "telefono" => "686548775", "curso" => "1DAW", "avatar" => ""),
    );

?>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">ALUMNOS</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Edad</th>
                                            <th>Dni</th>
                                            <th>Email</th>
                                            <th>Localidad</th>
                                            <th>Teléfono</th>
                                            <th>Curso</th>
                                            <th>Avatar</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Edad</th>
                                            <th>Dni</th>
                                            <th>Email</th>
                                            <th>Localidad</th>
                                            <th>Teléfono</th>
                                            <th>Curso</th>
                                            <th>Avatar</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    <?php
                                        foreach($alumnos as $alumno) {
                                            echo "<tr>";
                                            foreach($alumno as $value) {
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