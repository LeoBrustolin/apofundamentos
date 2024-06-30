<!-- index.php -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="assets/js/script.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gerador de Currículos</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Gerador de Currículos</h1>
        <form id="curriculo-form" action="process.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="data_nascimento">Data de Nascimento:</label>
                <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" id="idade" name="idade" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" id="endereco" name="endereco" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cnh">CNH:</label>
                <input type="text" id="cnh" name="cnh" class="form-control">
            </div>
            <div class="form-group">
                <label for="qualidades">Qualidades:</label>
                <textarea id="qualidades" name="qualidades" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="defeitos">Defeitos:</label>
                <textarea id="defeitos" name="defeitos" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="experiencias">Experiências Profissionais:</label>
                <div id="experiencias">
                    <div class="experiencia">
                        <input type="text" name="experiencia_titulo[]" placeholder="Título" class="form-control" required>
                        <input type="text" name="experiencia_empresa[]" placeholder="Empresa" class="form-control" required>
                        <input type="date" name="experiencia_inicio[]" placeholder="Data de Início" class="form-control" required>
                        <input type="date" name="experiencia_fim[]" placeholder="Data de Fim" class="form-control">
                        <textarea name="experiencia_descricao[]" placeholder="Descrição" class="form-control" required></textarea>
                    </div>
                </div>
                <button type="button" id="add-experiencia" class="btn btn-primary">+</button>
            </div>
            <div class="form-group">
                <label for="historico_educacional">Histórico Educacional:</label>
                <div id="historico_educacional">
                    <div class="historico">
                        <input type="text" name="historico_instituicao[]" placeholder="Instituição" class="form-control" required>
                        <input type="text" name="historico_curso[]" placeholder="Curso" class="form-control" required>
                        <input type="date" name="historico_inicio[]" placeholder="Data de Início" class="form-control" required>
                        <input type="date" name="historico_fim[]" placeholder="Data de Fim" class="form-control">
                    </div>
                </div>
                <button type="button" id="add-historico" class="btn btn-primary">+</button>
            </div>
            <button type="submit" class="btn btn-success">Gerar Currículo</button>
        </form>
    </div>
    
</body>
</html>
