<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Rentas</header>
	
	<div class="row wrapper">
		<div class="col-xs-5  col-md-8 col-lg-9">
			<a href="admin.php?m=rentasAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Renta</a>
		</div>
		<div class="col-xs-7 col-md-4 col-lg-3">
			<div class="input-group">
				<input type="text" class="input-sm form-control" placeholder="Buscar"> <span class="input-group-btn"> <button class="btn btn-sm btn-default" type="button"> <i class="fa fa-search"></i> </button> </span>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th>Cliente</th>
					<th>Rento</th>
					<th>Fecha Inicial</th>
					<th>Fecha Final</th>
					<th width="150"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>
						<a href="admin.php?m=rentasEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=rentas" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				<tr>
					<td>columna 1</td>
					<td>columna 2 </td>
					<td>columna 3</td>
					<td>columna 4 </td>
					<td>
						<a href="admin.php?m=rentasEditar" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=rentas" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>

			</tbody>
		</table>
	</div>

</section>