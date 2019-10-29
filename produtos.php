<?php 
session_start();
?>
<?php include_once("assets/includes/functions.php");
include_once("assets/includes/menu.php");?>
<main class="container">
    <div class="row bg-light">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
        <!-- <img src='<= $value['imagem']; ?>' style='width: 100%'> -->
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h1><?php $value['nome'] ?></h1>

            <p>Categoria:</p>
            <p><?php $_GET['categoria']?></p>
            <p>Descrição:</p>
            <p><?php $_GET['descricao']?></p>
            <p>Quantidade:</p>
            <p><?php $_GET['quantidade']?></p>
            <p>Preço</p>
            <p><?php $_GET['preco']?></p>

        </div>