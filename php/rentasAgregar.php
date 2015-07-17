<?php

if ( isset($_POST['nombre']) ){

	$cliente 	= mysql_real_escape_string($_POST['cliente']);
	$rento 	    = mysql_real_escape_string($_POST['rento']);
	$fecha_ini  = mysql_real_escape_string($_POST['fecha_ini']);
	$fecha_fin 	= mysql_real_escape_string($_POST['fecha_fin']);


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
					<a href="admin.php?m=rentas" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Nueva renta
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Cliente</label>
								<div class="col-lg-8"><input type="text" name="cliente" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Que rento....?</label>
								<div class="col-lg-8"><input type="text" name="rento" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">Fecha inicial</label>
								<div class="col-lg-6"><input type="text" name="fecha_ini" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-2">
							
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-6 control-label">Fecha Final</label>
								<div class="col-lg-6"><input type="text" name="fecha_fin" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-2">
							
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>