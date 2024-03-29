<div class="container is-fluid mb-6">
	<h1 class="title">Usuarios</h1>
	<h2 class="subtitle">Lista de usuario</h2>
</div>
<div class="container pb-6 pt-6">


	<div class="table-container">
        <table class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th class="has-text-centered">#</th>
                    <th class="has-text-centered">Nombre</th>
                    <th class="has-text-centered">Usuario</th>
                    <th class="has-text-centered">Email</th>
                    <th class="has-text-centered">Creado</th>
                    <th class="has-text-centered">Actualizado</th>
                    <th class="has-text-centered" colspan="3">Opciones</th>
                </tr>
            </thead>
            <tbody>
    
				<tr class="has-text-centered">
					<td>1</td>
					<td>Nombre</td>
					<td>Usuario</td>
					<td>Email</td>
					<td>Creado</td>
					<td>Actualizado</td>
					<td>
	                    <a href="#" class="button is-info is-rounded is-small">Foto</a>
	                </td>
	                <td>
	                    <a href="#" class="button is-success is-rounded is-small">Actualizar</a>
	                </td>
	                <td>
	                	<form class="FormularioAjax" action="" method="POST" autocomplete="off">

	                		<input type="hidden" name="modulo_usuario" value="eliminar">
	                		<input type="hidden" name="usuario_id" value="1">

	                    	<button type="submit" class="button is-danger is-rounded is-small">Eliminar</button>
	                    </form>
	                </td>
				</tr>

				<tr class="has-text-centered" >
	                <td colspan="7">
	                    <a href="#" class="button is-link is-rounded is-small mt-4 mb-4">
	                        Haga clic acá para recargar el listado
	                    </a>
	                </td>
	            </tr>

	            <tr class="has-text-centered" >
	                <td colspan="7">
	                    No hay registros en el sistema
	                </td>
	            </tr>
			
			</tbody>
		</table>
	</div>

	<p class="has-text-right">Mostrando usuarios <strong>1</strong> al <strong>7</strong> de un <strong>total de 7</strong></p>

	<nav class="pagination is-centered is-rounded" role="navigation" aria-label="pagination">
    	<a class="pagination-previous is-disabled" disabled="">Anterior</a>

	    <ul class="pagination-list">
	    	<li><a class="pagination-link is-current" href="#">1</a></li>
	    </ul>

    	<a class="pagination-next is-disabled" disabled="">Siguiente</a>
    </nav>

</div>