<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?= htmlspecialchars($nome) ?></title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</head>
<body>
    <div class="container curriculo">
        <div class="button-container">
            
        </div>
        <div class="header">
            <?php if ($foto): ?>
                <img src="<?= htmlspecialchars($foto) ?>" alt="Foto de <?= htmlspecialchars($nome) ?>" class="foto">
            <?php endif; ?>
            <div>
                <div class="nameclass">
                <h1><?= htmlspecialchars($nome) ?></h1>
                </div>
                <div class="date">
                <p>Data de Nascimento: <?= htmlspecialchars($data_nascimento) ?></p>
                <p>Idade: <?= htmlspecialchars($idade) ?></p>
                <p>Telefone: <?= htmlspecialchars($telefone) ?></p>
                </div>
            </div>
        </div>
        <div class="info">
        <p>Email: <?= htmlspecialchars($email) ?></p>
        <p>Endereço: <?= htmlspecialchars($endereco) ?></p>
        <p>CNH: <?= htmlspecialchars($cnh) ?></p>
        <p>Qualidades: <?= nl2br(htmlspecialchars($qualidades)) ?></p>
        <p>Defeitos: <?= nl2br(htmlspecialchars($defeitos)) ?></p>
        </div>
        <div class="section">
            <h2>Experiências Profissionais</h2>
            <?php foreach ($experiencias as $index => $titulo): ?>
                <div class="experiencia">
                    <h3><?= htmlspecialchars($titulo) ?></h3>
                    <p>Empresa: <?= htmlspecialchars($_POST['experiencia_empresa'][$index]) ?></p>
                    <p>Inicio: <?= htmlspecialchars($_POST['experiencia_inicio'][$index]) ?> - Fim: <?= htmlspecialchars($_POST['experiencia_fim'][$index]) ?></p>
                    <p><?= nl2br(htmlspecialchars($_POST['experiencia_descricao'][$index])) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="section">
            <h2>Histórico Educacional</h2>
            <?php foreach ($historicos as $index => $instituicao): ?>
                <div class="historico">
                    <h3><?= htmlspecialchars($instituicao) ?></h3>
                    <p><?= htmlspecialchars($_POST['historico_curso'][$index]) ?></p>
                    <p>De: <?= htmlspecialchars($_POST['historico_inicio'][$index]) ?> - Fim: <?= htmlspecialchars($_POST['historico_fim'][$index]) ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <script>
        function printCurriculum() {
            window.print();
        }
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1></h1>
        <form action="process.php" method="POST" id="form-curriculo">
            <!-- Seu formulário aqui -->
            <button type="button" onclick="generatePDF()" class="btn btn-primary btn-sm">Gerar PDF do Currículo</button>
        </form>
    </div>

    <script>
        function generatePDF() {
            // Remove temporariamente o botão de imprimir do DOM
            var printButton = document.querySelector("button[type=button]");
            printButton.style.display = "none";
            
            // Gera o PDF
            window.print();
            
            // Restaura o botão de imprimir após a impressão
            printButton.style.display = "inline"; // Ou "block", dependendo do estilo do botão
        }
    </script>
</body>
</html>
