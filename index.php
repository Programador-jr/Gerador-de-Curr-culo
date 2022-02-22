<!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gerador de Currículo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
    </nav>
    <main class="container" style="margin-top:20px">
        <form action="gerarCurriculo.php" method="post" target="_blank" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Informações gerais</h4>

                    <div class="form-group">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo" class="form-label">Cargo pretendido</label>
                                <input type="text" class="form-control" name="cargo" id="cargo">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="foto" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" id="foto">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco" id="endereco">
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="telefone" class="form-label">Telefone</label>
                                <input type="tel" class="form-control" name="telefone" id="telefone" required>
                            </div>
                        </div> 
                        <div class="col">
                            <div class="form-group">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label for="resumo" class="form-label">Resumo</label>
                        <textarea class="form-control" name="resumo" id="resumo"></textarea>
                    </div>
                </div>

                <div class="card-body" id="div-formacoes">
                    <h4 class="card-title">Formação</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-formacao" title="Adicionar formação">Adicionar formação</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Experiência</h4>
                    <button class="btn btn-sm right" id="btn-adicionar-experiencia" title="Adicionar experiência">Adicionar experiência</button>
                </div>

                <div class="card-body" id="div-experiencias">
                    <h4 class="card-title">Modelo de currículo</h4>
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label form-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo1" value="modelo1" checked> Moderno preto
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline">
                                <label class="form-check-label form-label">
                                 <input class="form-check-input" type="radio" name="modelo" id="modelo2" value="modelo2"> Moderno azul
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="form-check form-check-inline ">
                                <label class="form-check-label form-label">
                                    <input class="form-check-input" type="radio" name="modelo" id="modelo3" value="modelo3"> Básico
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">Gerar currículo</button>
                    <button class="btn btn-default" type="reset">Limpar campos</button>
                </div>
            </div>
        </form>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>	
    <script src="js/index.js"></script>
</body>
</html>