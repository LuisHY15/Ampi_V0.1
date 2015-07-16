<?php

if ( isset($_POST['nombre']) ){

	$nombre 	  = mysql_real_escape_string($_POST['nombre']);
	$direccion 	  = mysql_real_escape_string($_POST['direccion']);
	$contraseña   = mysql_real_escape_string($_POST['contraseña']);
	$tip_usuario  = mysql_real_escape_string($_POST['tip_usuario']);


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
					<a href="admin.php?m=usuarios" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Agregar usuarios
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nombre</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-2 control-label">Direccion</label>
								<div class="col-lg-10"><input type="text" name="direccion" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label class="col-lg-6 control-label">Contraseña</label>
								<div class="col-lg-6"><input type="text" name="contraseña" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-3">
							
						</div>
						<div class="col-md-3">
							<div class="form-group">
									<label class="col-lg-4 control-label">Tipo de usuario</label>
									<div class="col-lg-8">
									<select class="form-control" name="tip_usuario">
									  <option></option>
									  <option>Mis</option>
									  <option>Otros</option>
									</select>
									</div>
							</div>
						</div>
						<div class="col-md-3">
							
						</div>
						
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<a href="admin.php?m=clientes" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</a>
							<a href="admin.php?m=clientes" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>