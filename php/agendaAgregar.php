<?php

if ( isset($_POST['nombre']) ){

	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$correo     = mysql_real_escape_string($_POST['correo']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$rfc  	    = mysql_real_escape_string($_POST['rfc']);
	$cp  		= mysql_real_escape_string($_POST['cp']);

	if ( mysql_query() ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Cliente agregado correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<div class="pull-right">
					<a href="admin.php?m=agenda" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar usuario a la Agenda
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-5 control-label">Correo</label>
								<div class="col-lg-7"><input type="text" name="correo" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">Tel&eacute;fono</label>
								<div class="col-lg-6"><input type="text" name="telefono" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-3 control-label">Direcci&oacute;n</label>
								<div class="col-lg-9"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-5 control-label">RFC</label>
								<div class="col-lg-7"><input type="text" name="rfc" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">C.P.</label>
								<div class="col-lg-6"><input type="text" name="cp" class="form-control" placeholder=""></div>
							</div>
						</div>
						
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>