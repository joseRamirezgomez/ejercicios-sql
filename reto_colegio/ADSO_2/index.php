<!doctype html>
<html lang="es">
  <head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="http://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
	<link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./css/styles.css">


    

    <title> Usuários</title>
  </head>
  
  <body>
  
  	<?php require 'config.php'; ?>

  	<div class="container-fluid">
  		<div class="col-md-12 mb-2 mt-2">
  			<div class="row justify-content-center">
  				<button class="btn btn-primary  mt-5" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-circle-plus"></i> Adicionar nueva tarea</button>
  			</div>
  		</div>
  		<div class="row">
  			<div class="col-md-12">
				<table class="table mt -10"  id="tabla">
				  <thead>
				    <tr>
					<th scope="col">id</th>
				         <th scope="col">usuario</th>
				          <th scope="col">Area</th>
				          <th scope="col">Tarea Asignada</th>
				          <th scope="col">Fecha_inicio</th>
				          <th scope="col">Fecha_entrega</th>
				           <th scope="col">Opciones</th>
				    </tr>
				  </thead>
				  <body>
			  		<?php 

			  		$listausuario = "SELECT * FROM usuarios ORDER BY id DESC";
			  		$listausuario = $pdo->query($listausuario);

			  		if ($listausuario->rowCount() > 0) {
			  			foreach ($listausuario->fetchAll() as $usuario) {
			  				echo '<tr>';
			  				echo '<td>'.$usuario['id'].'</td>';
			  				echo '<td>'.$usuario['Nombre'].'</td>';
			  				echo '<td>'.$usuario['Area'].'</td>';
                            echo '<td>'.$usuario['Tarea_asignada'].'</td>';
			  				echo '<td>'.$usuario['date_start'].'</td>';
			  				echo '<td>'.$usuario['date_end'].'</td>';
			  				echo '<td><button class="btn btn-primary" data-toggle="modal" data-target="#modal2'.$usuario['id'].'"> <i class="fa-solid fa-pen-to-square"></i> Editar</button>		  			
				      	 			  <a href="excluir.php?id='.$usuario['id'].'"><button onclick="return confirm(\'Esta seguro que desea eliminar?\');" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i> Eliminar</button></a></td>';			  			
			  				echo '<tr>';

							echo '<!-- Modal Editar -->

								<div class="modal fade" id="modal2'.$usuario['id'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								  <div class="modal-dialog" role="document">
								    <div class="modal-content">
								      <div class="modal-header">
								        <h5 class="modal-title" id="exampleModalLabel">Editar usuário</h5>
								        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								          <span aria-hidden="true">&times;</span>
								        </button>
								      </div>
								      <div class="modal-body">
									    <form action="editar.php" method="post" class="form-signin">
									      <input id="id" class="form-control" value="'.$usuario['id'].'" name="id" type="hidden"> 									    
									      <input type="text" class="form-control" placeholder="usuario" name="Nombre" value="'.$usuario['Nombre'].'" required autofocus>    
									      <input type="text" class="form-control" placeholder="Area" name="area" value="'.$usuario['Area'].'" required>
									      <input type="text" class="form-control" placeholder="Tarea asignada" name="tarea" value="'.$usuario['Tarea_asignada'].'" required>
										  <input type="date" class="form-control" placeholder="Fecha de entrega" name="date_end" value="'.$usuario['date_end'].'" required>
									      <button class="btn btn-lg btn-primary btn-block" type="submit">Actualizar datos</button>
									    </form>
								      </div>
								    </div>
								  </div>
								</div>	

								<!-- Modal Editar -->';		  				
			  			}
			  		}
			  		?>
				  </body>
				</table>
			</div>	
		</div>	
	</div>

	<!-- Modal Adicionar -->

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title mt-5" id="exampleModalLabel"><i class="fa-solid fa-floppy-disk"></i> Asignar Tarea</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">	      	
			<form method="post" action="inserir.php" class="form-signin">
			<input type="text" class="form-control mt-3 mb-3" placeholder="Alumno" name="Nombre" required autofocus>
        <input type="text" class="form-control mt-3 mb-3" placeholder="Area" name="Area" required>
        <input type="text" class="form-control mt-3 mb-3" placeholder="Tarea asignada" name="Tarea_asignada" required>
        <input type="date" class="form-control mt-3 mb-3" placeholder="Fecha de entrega" name="date_end" required>
        
				<button class="btn btn-lg btn-primary btn-block" type="submit"><i class="fa-solid fa-floppy-disk"></i> Asignar Tarea</button>
			
			</form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Modal Adicionar -->	

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="http://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
     <script>
		var tabla =document.querySelector("#tabla")
		var datatable= new DataTable(tabla)
	 </script> 	
	
	

  </body>
</html>