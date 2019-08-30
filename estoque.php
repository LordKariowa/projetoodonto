<!DOCTYPE html>
<html>
	<head>
		<title>Odonto - Home</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="styleHome.css">
		<link rel="stylesheet" type="text/css" href="styleHeader.css">
	</head>
	<body>
		
		<?php include 'header.php'?>
		
		
		<button type="button" class="btn btn-primary btn-md ml-5" data-toggle="modal" data-target="#modal1">Cadastro de Esoque</button>

			<!--Modal-->
			<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h3 class="modal-title text-primary ml-5" id="modalTitle">Cadastro de Estoque</h3>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>

			      		<div class="modal-body">
			        		<h5>Dados do Produto</h5>
							<form class = "form-group mt-2" action="agendarCliente.php" method="post">
								<div class="form-group">
									<label for="cpf">CPF:</label>
									<input type="text" class="form-control" id="cpf" placeholder="" name = "cpf">
								</div>
								<div class="form-group">
									<label for="nome">Nome:</label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "nome">
								</div>
								<div class="form-group">
									<label for="nome"></label>
									<input type="text" class="form-control" id="nome" placeholder="" name = "nome">
								</div>
							
								<input type="submit" class="btn btn-primary float-right" value = "Cadastrar">
							</form>
			      		</div>
						<div class="modal-footer">
						</div>
					</div>
				</div>
			</div>
		
		<table class="table w-75">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Codigo</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">Categoria</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">Un</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>