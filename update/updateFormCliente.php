
<?php
$currentPage="Clientes";
session_start();
include_once '../common/cabecalho.php';


    $id = $_GET['id'];

    include_once '../common/connectDB.php';

    $database = new Connection();
    $db = $database->openConnection();
    $sql = "SELECT * from cliente where codCliente =". $id ;

?>
<main role="main" id="main" class="col-lg-12 container main">
    <div class="card col-md-12" >
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">Update Cliente</h4>
                
                <form action="<?php echo $path ?>/update/updateCliente.php" method="POST" autocomplete="off">
                <div class="row">
                    <?php
                        foreach ($db->query($sql) as $row) {
                    ?> 
                    <div class="form-group col-md-3">
                        <label for="codC">Código Cliente</label>
                        <input class="form-control" type="text" id="codC" name="codC" value="<?php echo $row['codCliente'] ?>" readonly>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="nomeC">Nome Cliente</label>
                        <input class="form-control" type="text" id="nomeC" name="nomeC" value="<?php echo $row['nomeCliente'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="contactoC">Contacto Cliente</label>
                        <input class="form-control" type="text" id="contactoC" name="contactoC"  value="<?php echo $row['contacCliente'] ?>">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="emailC">Email Cliente</label>
                        <input class="form-control" type="text" id="emailC" name="emailC"  value="<?php echo $row['emailCliente'] ?>">
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