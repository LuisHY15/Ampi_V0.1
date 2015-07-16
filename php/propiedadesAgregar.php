<?php

if ( isset($_POST['nombre']) ){

	$categoria 	= mysql_real_escape_string($_POST['categoria']);
	$nombre 	= mysql_real_escape_string($_POST['nombre']);
	$direccion  = mysql_real_escape_string($_POST['direccion']);
	$telefono  	= mysql_real_escape_string($_POST['telefono']);
	$contacto  	= mysql_real_escape_string($_POST['contacto']);
	$correo  	= mysql_real_escape_string($_POST['correo']);
	$rfc  		= mysql_real_escape_string($_POST['rfc']);

	if ( mysql_query("INSERT INTO clientes SET fecha='".date("Y-m-d")."',categoria='".$categoria."',nombre='".$nombre."',direccion='".$direccion."',telefono='".$telefono."',contacto='".$contacto."',email='".$correo."',rfc='".$rfc."'") ){
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
						<div class="col-lg-4">
						
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label class="col-lg-3 control-label">Nomb. de la propiedad</label>
								<div class="col-lg-9"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div class="col-md-4">
						<div>
							
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Direccion</label>
								<div class="col-sm-8 col-md-8 col-lg-9"><textarea name="direccion" class="form-control"  style="height:200px; width:300;"></textarea></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 control-label">Descripcion</label>
								<div class="col-sm-8 col-md-8 col-lg-9"><textarea name="descripcion" class="form-control"  style="height:200px; width:300;"></textarea></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="step-content clearfix">
        <form class="m-b-sm">
          <div class="step-pane active" id="step1">
            <div class="panel-body">
              <div class="dropzone">
                <form action="/file-upload" class="dropzone">
                  <div class="fallback">
                    <input multiple name="file" type="file">
                  </div>
                </form>
                <div class="dz-preview dz-file-preview" id=
                "dz-preview-template">
                  <div class="dz-details">
                    <div class="dz-filename">
                      <span data-dz-name=""></span>
                    </div>
                    <div class="dz-size" data-dz-size="">
                    </div><img data-dz-thumbnail="">
                  </div>
                  <div class="dz-progress">
                    <span class="dz-upload" data-dz-uploadprogress=""></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
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
