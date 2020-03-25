
<?php
$currentPage="Fornecedores";
session_start();
include_once '../common/cabecalho.php';
?>
<body>
    <main role="main" id="main" class="col-lg-12 main">
    <div class="card col-md-12">
        <article class="card-body">    
            <h4 class="card-title mb-4 mt-1">New Fornecedor</h4>
            <form action="../inserts/insertFornecedor.php" method="POST" autocomplete="off">
                <div class="row">
                <div class="form-group col-md-4">    
                    <label for="nomeF">Nome Fornecedor</label>
                    <input class="form-control" type="text" id="nomeF" name="nomeF">
                </div>
                <div class="form-group col-md-4">
                    <label for="contactoF">Contacto Fornecedor</label>
                    <input class="form-control" type="text" id="contactoF" name="contactoF">
                </div>
                <div class="form-group col-md-4">
                    <label for="emailF">Email Fornecedor</label>
                    <input class="form-control" type="text" id="emailF" name="emailF">
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-info" style="float:right" type="submit" name="submit">Criar</button>
                </div>
                </div>
            </form>
        </article>
    </div>
</main>
    <?php
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>