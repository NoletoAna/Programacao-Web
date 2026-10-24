<?php include('layouts/header.php'); ?>

<?php
$data_nascimento = $_POST['data_nascimento'] ?? '';
$signos = simplexml_load_file("signos.xml");

$signoEncontrado = null;
$nascimento = DateTime::createFromFormat('!Y-m-d', $data_nascimento);

if ($nascimento && $signos) {
    $ano = $nascimento->format('Y');

    foreach ($signos->signo as $signo) {
        $inicio = DateTime::createFromFormat('!d/m/Y', $signo->dataInicio . '/' . $ano);
        $fim = DateTime::createFromFormat('!d/m/Y', $signo->dataFim . '/' . $ano);

        if ($inicio <= $fim) {
            $dentroDoIntervalo = $nascimento >= $inicio && $nascimento <= $fim;
        } else {
            $dentroDoIntervalo = $nascimento >= $inicio || $nascimento <= $fim;
        }

        if ($dentroDoIntervalo) {
            $signoEncontrado = $signo;
            break;
        }
    }
}
?>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <?php if ($signoEncontrado): ?>
                    <div class="card text-center text-white border-0 shadow signo-card">
                        <div class="card-body p-5">
                            <h1 class="display-4 signo-nome"><?php echo htmlspecialchars($signoEncontrado->signoNome); ?></h1>
                            <p class="text-white-50 mb-4">
                                <?php echo htmlspecialchars($signoEncontrado->dataInicio); ?> a <?php echo htmlspecialchars($signoEncontrado->dataFim); ?>
                            </p>
                            <p class="lead signo-descricao"><?php echo htmlspecialchars($signoEncontrado->descricao); ?></p>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="alert alert-danger text-center">
                        Data de nascimento inválida. Por favor, tente novamente.
                    </div>
                <?php endif; ?>

                <div class="text-center mt-4">
                    <a href="index.php" class="btn btn-outline-primary">Voltar à página inicial</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
