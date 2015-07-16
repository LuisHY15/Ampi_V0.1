<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Lista de usuarios</header>
	
	<div class="row wrapper">
		<div class="col-xs-6  col-md-8 col-lg-9">
			<a href="admin.php?m=usuarioAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Agregar usuario</a>
		</div>
		<div class="col-xs-6 col-md-4 col-lg-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Contraseña</th>
					<th width="200"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>
						<a href="admin.php?m=usuarioEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=usuarios" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td class="pull-center">
						<a href="admin.php?m=usuarioEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=usuarios=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>