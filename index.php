<html>
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initia-scale=1">
    <title>Gerador de Curriculo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
		<nav class="navbar navbar-dark bg-dark">
		  <div class="container-fluid">
		    <a class="navbar-brand" href="#">Gerador de Curriculo</a>
		  </div>
		</nav>
		<main class="container">
			<form method="post" target="_blank" enctype="multipart/form-data">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">Informações Gerais</h4>
						<div class="form-group">
							<label for="name">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome">
						</div>
						<div class="row">
							<div class="col">
								<div class="form-group">
									<label for="cargo">Cargo pretendido</label>
									<input type="text" class="form-control" name="cargo" id="cargo"
								</div>
							</div>
								<div class="col">
									<div class="form-group">
										<label for="foto">Foto</label>
										<input type="file" class="form-control" name="foto" id="foto">
									</div>
								</div>
						</div>
							<div class="form-group">
								<label for="endereco">Endereço</label>
								<input type="text" class="form-control" name="endereco" id="endereco">
							</div>
								<div class="row">
									<div class="col">
										<div class="form-group">
											<label for="telefone">Telefone</label>
											<input type="text" class="form-control" name="telefone">
										</div>
									</div>
									<div class="col">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="email" class="form-control" name="email"
										</div>
									</div>
								</div>
							<div class="form-group">
								<label for="resumo">Resumo</label>
								<textarea class="form-control" name="resumo" id="resumo"></textarea>
							</div>					
					</div>
					<div clas="card-body" id="div-formacoes">
						<h4 class="card-title">Formação</h4>
						<button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
					</div>
						<div class="card-body" id="div-experiencias">
							<h4 class="card-title">Modelo de currículo</h4>
							<div class="row">
								<div class="col-12 col-md-4">
									<div class="form-check form-check-inline">
										<label class="form-check-label"
										<input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked>Moderno preto
										</label>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-check form-check-inline">
										<label class="form-check-label"
										<input class="form-check-input" type="radio" name="modelo" id="modelo2" value="modelo2" checked>Moderno azul
										</label>
									</div>
								</div>
								<div class="col-12 col-md-4">
									<div class="form-check form-check-inline">
										<label class="form-check-label"
										<input class="form-check-input" type="radio" name="modelo" id="modelo3" value="modelo3" checked>Básico
										</label>
									</div>
								</div>								
							</div>
						</div>
						<div class="card-footer">
							<button class="btn btn-primary" type="submite">Gerar currículo</button>
							<button class="btn btn-default" type="reset">Limpar campos</button>
						</div>						
				</div>
			</form>
		</main>
		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>												
  </body>
</html>