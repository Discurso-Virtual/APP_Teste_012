
<?php
$currentPage="TiposDoc";
session_start();
include_once '../common/cabecalho.php';
?>
<main role="main" id="main" class="col-lg-12 container main">
    <div class="card col-md-12">
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">New Tipo Documento</h4>
            <form action="<?php echo $path?>/inserts/insertTipoDoc.php" method="POST" autocomplete="off">
                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="nomeTDoc">Nome Tipo Documento</label>
                        <input class="form-control" type="text" id="nomeTDoc" name="nomeTDoc">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="tipoDoc">Tipo Documento</label>
                        <input class="form-control" type="text" id="tipoDoc" name="tipoDoc">
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