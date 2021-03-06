
<?php
$currentPage="Fornecedores";
session_start();

include_once '../common/cabecalho.php';
    $id = $_GET['id'];

    include_once '../common/connectDB.php';

    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * from fornecedor where codForne =". $id ;

?>

<main role="main" id="main" class="col-lg-12 container main">
    <div class="card col-md-12 " >
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">Update Fornecedor</h4>
            <form action="./updateFornecedor.php" method="POST">
                <div class="row">
                <?php
                    foreach ($db->query($sql) as $row) {
                ?>
                <div class="form-group col-md-3">
                    <label for="codF">Código Fornecedor</label>
                    <input class="form-control" type="text" id="codF" name="codF" value="<?php echo $row['codForne'] ?>" readonly >
                </div>
                <div class="form-group col-md-3">
                    <label for="nomeF">Nome Fornecedor</label>
                    <input class="form-control" type="text" id="nomeF" name="nomeF" value="<?php echo $row['nomeForne'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="contactoF">Contacto Fornecedor</label>
                    <input class="form-control" type="text" id="contactoF" name="contactoF"  value="<?php echo $row['contacForne'] ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="emailF">Email Fornecedor</label>
                    <input class="form-control" type="text" id="emailF" name="emailF"  value="<?php echo $row['emailForne'] ?>">
                </div>
                <div class="form-group col-md-12">
                    <button class="btn btn-success" style="float:right" type="submit" name="submit">Alterar</button>
                </div>
                </div>
            </form>
        </article>
    </div>
</main>
    <?php
    }
     include_once '../common/rodape.php'; 
    ?>
</body>
</html>