<?php

if ( isset($_POST['nombre']) ){

	$nom_propiedad 	= mysql_real_escape_string($_POST['categoria']);
	$direccion   	= mysql_real_escape_string($_POST['direccion']);
	$descripcion    = mysql_real_escape_string($_POST['descripcion']);


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
					<a href="admin.php?m=propiedadesMis" class="return"><i class="fa fa-mail-reply"></i> Regresar</a>
				</div>
				<i class="fa fa-plus icon"></i> Editar propiedad
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-2">
							
						</div>
						<div class="col-md-7">
							<div class="form-group">
								<label class="col-lg-4 control-label">Nomb. de la propiedad</label>
								<div class="col-lg-8"><input type="text" name="nom_propiedad" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-3">
							
						</div>			
					</div>
					<div class="row-wrapper">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 col-md-4  control-label">Direccion</label>
								
							</div>
							<div class="form-group">
								<div class="col-sm-8 col-md-8 col-lg-9"><textarea name="direccion" class="form-control"  style="height:130px; width:130%;"></textarea></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-lg-4 col-md-4 control-label">Descripcion</label>
							</div>
							<div class="form-group">
								<div class="col-sm-8 col-md-8 col-lg-9"><textarea name="descripcion" class="form-control"  style="height:130px; width:130%;"></textarea></div>
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
