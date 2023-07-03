<?php
/*
* Template name: Convenios
*/
?>

<?php get_header(); ?>

<?php include('btnDonar.php'); ?>


<!-- PROGRAMAS -->
	<main>
		<div class="container-fluid">
			<div class="container">
			
				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/><br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<h2 class="h2_gris text-center">Convenios</h2>
					</div>
				</div>	

				<div class="row">
					<div class="col-md-12">
						<br/><br/>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<p class="tex_sec_sec">Para llegar al mayor número de estudiantes posible, establecemos convenios de colaboración con escuelas en todo el país. Además, contamos con programas para estudiantes de centros educativos que no forman parte de la red Bécalos.</p>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12">
						<br/><br/>
					</div>
				</div>






				<div style="height: 6em;" class="row">
					<div class="col-md-6">
						<h2 class="h2_conv">Busca tu escuela</h2>
					</div>

					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<p class="tex_sec_sec">Escuelas con convenio de acuerdo al nivel de educación y localidad</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<select id="sel_niv" class="browser-default custom-select" onchange="javascript: fncConv();">
							<option value="0" selected="selected">Nivel de educación</option>
							<option value="1">CAPACITACIÓN </option>
							<option value="2">ESPECIAL (BÁSICA Y EQUIDAD) </option>
							<option value="3">MEDIA SUPERIOR </option>
							<option value="4">SUPERIOR </option>
							<option value="5">EDUCACIÓN CONTINUA </option>
						</select>




						<!-- <select class="sel_conv">
							<option class="sel_valc_conv" value="0">Ciudad o estado</option>
							<option value="1">Aguascalientes</option>
							<option value="2">Baja California</option>
							<option value="3">Baja California Sur</option>
							<option value="4">Campeche</option>
							<option value="5">Coahuila de Zaragoza</option>
							<option value="6">Colima</option>
							<option value="7">Chiapas</option>
							<option value="8">Chihuahua</option>
							<option value="9">Ciudad de México</option>
							<option value="10">Durango</option>
							<option value="11">Estado de México</option>
							<option value="12">Guanajuato</option>
							<option value="13">Guerrero</option>
							<option value="14">Hidalgo</option>
							<option value="15">Jalisco</option>
							<option value="16">Michoacán de Ocampo</option>
							<option value="17">Morelos</option>
							<option value="18">Nayarit</option>
							<option value="19">Nuevo León</option>
							<option value="20">Oaxaca</option>
							<option value="21">Puebla</option>
							<option value="22">Querétaro</option>
							<option value="23">Quintana Roo</option>
							<option value="24">San Luis Potosí</option>
							<option value="25">Sinaloa</option>
							<option value="26">Sonora</option>
							<option value="27">Tabasco</option>
							<option value="28">Tamaulipas</option>
							<option value="29">Tlaxcala</option>
							<option value="30">Veracruz</option>
							<option value="31">Yucatán</option>
							<option value="32">Zacatecas</option>
						</select> -->
					</div>

					<div class="col-md-6">
						<div class="row">
							<div class="col-md-12">
								<div id="resul_conv"></div>
							</div>
						</div>
					</div>
				</div>

				




				<div class="row">
					<div class="col-md-12">
						<br/><br/><br/><br/><br/><br/>
					</div>
				</div>





				
			</div>
		</div>
	</main>
	<!-- PROGRAMAS -->



<?php get_footer(); ?>