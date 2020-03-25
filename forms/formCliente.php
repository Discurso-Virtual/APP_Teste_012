
<?php
$currentPage="Clientes";
session_start();
include_once '../common/cabecalho.php';
?>
<main role="main" id="main" class="col-lg-12 container main">

<div class="card col-md-12 " >
    <article class="card-body">
        <h4 class="card-title mb-4 mt-1">New Cliente</h4>
        <form action="<?php echo $path?>/inserts/insertCliente.php" method="POST" autocomplete="off">
            <div class="row">
            <div class="form-group col-md-4">
                <label for="nomeC">Nome Cliente</label>
                <input class="form-control" type="text" id="nomeC" name="nomeC">
            </div>
            <div class="form-group col-md-4">
                <label for="contactoC">Contacto Cliente</label>
                <input class="form-control" type="text" id="contactoC" name="contactoC">
            </div>
            <div class="form-group col-md-4">
                <label for="emailC">Email Cliente</label>
                <input class="form-control" type="text" id="emailC" name="emailC">
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