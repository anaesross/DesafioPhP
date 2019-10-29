<?php 

$path = 'assets/images/';

if(!empty($_FILES)) {

    $img = $_FILES['imagem'];
    $imgName = time(); //time gera o horario que foi enviado o form
    
    $ext = end(explode('.', $img['name'])); // end pega o final do array, explode divide uma string em array , no 
    //caso quando achar o .    , [name] = nome da imagem pelo post
    
    $imgName .= '.' . $ext;
    //$imgName = $imgName . '.' . $ext; concatenou imgname = time + a extensão da imagem (arquivo)
    
    if( in_array($ext, ['jpg', 'jpeg', 'png', 'gif']) ) { //in_array = busca dentro do array, $ext nome do formato
        //da imagem [o que queremos buscar no array] 

        if( move_uploaded_file($img['tmp_name'], $path . $imgName) ) { 
            //echo $path . $imgName;
            $_POST['imagem'] = $path . $imgName;  //$path = caminho e $imgName = nome + extensão
        }
        else {
            //echo 'upload falhou';
        }
    }
}

session_start(); // inicia a sessão para guardar as informações

if( empty( $_SESSION['produtos'] ) ) {
    $_SESSION['produtos'] = []; // cria um novo array para os produtos
}

$_SESSION['produtos'][] = $_POST;

echo "<script>
        alert('Produto cadastro com sucesso!');
        location = 'index.php';
    </script>";

//header('location: index.php');
