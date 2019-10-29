<?php 
session_start();
$id = $_GET['id'];
$verProduto = $_SESSION['produtos'][$id];
?>
<?php include_once("assets/includes/functions.php");
include_once("assets/includes/menu.php");?>
<main class="container">
<!-- <php 
    echo"<pre>";
    var_dump($verProduto) 
?> -->
    <div class="row bg-light">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">        
            <img src="<?php echo $verProduto['imagem']?> " />
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h1><?php echo $verProduto['nome'] ?></h1>

            <p>Categoria: <?php echo $verProduto['categoria']?></p>
           
            <p>Descrição: <?php echo $verProduto['descricao']?></p>

            <p>Quantidade: <?php echo $verProduto['quantidade']?></p>

            <p>Preço: <?php echo $verProduto['preco']?></p>
            
        </div>
    </div>