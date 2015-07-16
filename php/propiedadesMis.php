<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i>Lista de propiedades</header>
	
	<div class="row wrapper">
		<div class="col-xs-6  col-md-8 col-lg-9">
			<a href="admin.php?m=propiedadesAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Agregar propiedad</a>
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
					<th>Nom. propiedad</th>
					<th>Direccion</th>
					<th>Descripcion</th>
					<th>Imagen</th>
					<th width="150"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2</td>
					<td>columna 3</td>
					<td>imagen  1</td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2</td>
					<td>columna 3</td>
					<td>imagen  2</td>
					<td>
						<a href="admin.php?m=clientesEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=clientes&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>