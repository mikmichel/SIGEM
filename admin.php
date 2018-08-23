<?php 
/* esse bloco de código em php verifica se existe a sessão, pois o usuário pode
 simplesmente não fazer o login e digitar na barra de endereço do seu navegador 
o caminho para a página principal do site (sistema), burlando assim a obrigação de 
fazer um login, com isso se ele não estiver feito o login não será criado a session, 
então ao verificar que a session não existe a página redireciona o mesmo
 para a index.php.*/
session_start();
if(($_SESSION['login']) == null and  ($_SESSION['senha']) == null)
{
  echo var_dump($_SESSION['login']);
  header('location:login.php');
}else{
  $logado = $_SESSION['nome'];
  $avatar = $_SESSION['login'];
  $funcao = $_SESSION['funcao'];
}
?>
<!-- ================================================================================================= -->
<!DOCTYPE html>
<html>

  <head>
    <?php require_once('template/header.php');?>
  </head>

  <body>

    <!-- Side Navbar -->
    <?php require_once('template/sidebar.php');?>

    <!-- navbar-->
    <?php require_once('template/navbar.php');?>


      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Inicio</a></li>
          </ul>
        </div>
      </div>

    <!-- FOOTER -->
    <?php require_once('template/footer.php');?>

  </body>
  
</html>
