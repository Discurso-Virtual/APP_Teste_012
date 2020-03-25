
<?php
$currentPage="Produtos";
session_start();
include_once '../common/cabecalho.php';
?>
   <main role="main" id="main" class="col-lg-12 container main">
    <div class="card col-md-12">
        <article class="card-body">
            <h4 class="card-title mb-4 mt-1">New Produto</h4>
            <form action="../inserts/insertProduto.php" method="POST" autocomplete="off">
            <div class="row">
                <div class="form-group col-md-3">
                    <label for="refProd">Referência</label>
                    <input  class="form-control" type="text" id="refProd" name="refProd"> 
                </div>
                <div class="form-group col-md-3">
                    <label for="descProd">Descrição Produto</label>
                    <input class="form-control" type="text" id="descProd" name="descProd">
                </div>
                <div class="form-group col-md-3">
                    <label for="uniProd">Unidade Produto</label>
                    <input class="form-control" type="text" id="uniProd" name="uniProd">
                </div>
                <div class="form-group col-md-3">
                    <label for="famProd">Familia Produto</label>
                    <input class="form-control" type="text" id="famProd" name="famProd">
                </div>
                <div class="form-group col-md-3">
                    <label for="preco1Prod">Preço1 Produto</label>
                    <input class="form-control" type="text" id="preco1Prod" name="preco1Prod">
                </div>
                <div class="form-group col-md-3">
                    <label for="preco2Prod">Preço2 Produto</label>
                    <input class="form-control" type="text" id="preco2Prod" name="preco2Prod">
                </div>
                <div class="form-group col-md-3">
                    <label for="preco3Prod">Preço3 Produto</label>
                    <input class="form-control" type="text" id="preco3Prod" name="preco3Prod">
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