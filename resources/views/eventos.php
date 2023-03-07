
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>EVENTOS</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

	<link href="css/ui.css" rel="stylesheet" />
	<link href="css/datepicker.css" rel="stylesheet" />

    <script src="js/jquery-1.10.2.js"></script>

    <script type='text/javascript' src='js/jquery/jquery-ui-1.10.1.custom.min.js'></script>


</head>
<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">VER Y AGREGAR EVENTO
						<?php
						echo (isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")?
						' <a href="eventos.php" class="btn btn-primary btn-sm pull-right">Volver <i class="glyphicon glyphicon-arrow-right"></i></a>':'<a href="eventos.php?action=add" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Agregar Evento </a>';
						?>
						</h1>

<?php


?>
                    </div>
                </div>



        <?php
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>

			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">

                    <div class="col-sm-10 col-sm-offset-1">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                        </div>
						<form action="eventos.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						<fieldset class="scheduler-border" >
						 <legend  class="scheduler-border">Información del Evento agregar :</legend>
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Nombre del Cliente </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="sname" name="sname" value=""  />
								</div>
							</div>
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Numero de Telefono </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="contact" name="contact" value="" maxlength="10" />
								</div>
							</div>



						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Selecciona tu paquete</label>
								<div class="col-sm-10">
									<select  class="form-control" id="branch" name="branch" >
									<option value="" >Selecciona el Paquete de Salon </option>
									<option value="paquete1">paquete 1</option>
									<option value="paquete2">paquete 2</option>
									<option value="paquete3">paquete 3</option>


									</select>


								</div>





						</div>




							<div class="form-group">
								<label class="col-sm-1 control-label" for="Old"> Servicio </label>
								   <div class="col-sm-10">
									<select  class="form-control" id="branch" name="branch" >
									<option value="" >Selecciona el Servicio </option>
									<option value="servicio1">Servicio 1</option>
									<option value="servicio2">Servicio 2</option>
									<option value="servicio3">Servicio 3</option>

									</select>
					<br>

					</div>

					<div class="form-group">
					<br><label class="col-sm-2 control-label" for="Old">Fecha  del evento </label>
								<div class="col-sm-10">
								<input type="date" id="joindate" name="joindate" value="">

								</div>
							</div>


						 </fieldset>


							<fieldset class="scheduler-border" >
						 <legend  class="scheduler-border">Total a pagar por el   evento:</legend>
						<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Total a pagar </label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="fees" name="fees" value=""  />
								</div>
						</div>

						<?php
						{
						?>

						<?php


						}
						?>





							<?php
						{
						?>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password">Comentario </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="remark" name="remark"></textarea >
								</div>
							</div>
						<?php
						}
						?>

							</fieldset>

							 <fieldset class="scheduler-border" >
						 <legend  class="scheduler-border">Información Opcional:</legend>
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password">Fotografias </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="about" name="about"></textarea >
								</div>
							</div>

							<div class="form-group">
								<label class="col-sm-2 control-label" for="Old">Correo Electrónico del Cliente</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="emailid" name="emailid" value=""  />
								</div>
						    </div>
							</fieldset>

						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="">
								<input type="hidden" name="action" value="">

									<button type="submit" name="save" class="btn btn-primary">Guardar </button>



								</div>
							</div>





                         </div>
							</form>

                        </div>
                            </div>


                </div>




		<script type="text/javascript">








		$("#fees").keyup( function(){
		$("#advancefees").val("");
		$("#balance").val(0);
		var fee = $.trim($(this).val());
		if( fee!='' && !isNaN(fee))
		{
		$("#advancefees").removeAttr("readonly");
		$("#balance").val(fee);
		$('#advancefees').rules("add", {
            max: parseInt(fee)
        });

		}
		else{
		$("#advancefees").attr("readonly","readonly");
		}

		});






		<?php
		}else{
		?>

		 <link href="css/datatable/datatable.css" rel="stylesheet" />




		<div class="panel panel-default">
                        <div class="panel-heading">
						panel para agregar  un evento
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <center>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Fecha de evento</th>
                                            <th>Total</th>
											<th>Fotos</th>

                                        </tr>
                                        </center>
                                    </thead>
                                    <tbody>
									<?php

									{


									}
									?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

	<script src="js/dataTable/jquery.dataTables.min.js"></script>



		<?php
		}
		?>



            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
DERECHOS RESERVADOS 2023 <a href="LINK" target="_blank">INSTITUO DE DIPLOMADOS</a>
	</div>


    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom1.js"></script>V


</body>
</html>
