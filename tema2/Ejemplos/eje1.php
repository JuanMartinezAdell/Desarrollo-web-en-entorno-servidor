<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/cabecera.php");
?>

      <div class="col-md-8 themed-grid-col">
		<div class="flex-shrink-0 p-3 bg-white">

		
			<?php
				echo "Aquí se ejecutaría el código del ejercicio1". "<br>";
				echo $_SERVER["DOCUMENT_ROOT"] . "<br>";
				echo $_SERVER["HTTP_HOST"] . "<br>";
				echo $_SERVER["HTTP_HOST"] . "<br>";
			?>


		</div>
	  </div>
    </div>

<?php
    include_once("../pie.php");
?>