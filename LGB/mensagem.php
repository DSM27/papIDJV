
	<?php
		include "header.php";

	 	?>

  <?php
  include_once("ligacaobd.php");
  //if (isset($_POST['btnAdic'])) {
    $nome  = mysqli_real_escape_string($ligacao, $_POST['txtNome']);
    $email = mysqli_real_escape_string($ligacao, $_POST['txtEmail']);
    $mensagem = mysqli_real_escape_string($ligacao, $_POST['txtMensagem']);



    if(empty($nome) || empty($email) || empty($mensagem)){


    }else {
      $cmdSQL="INSERT INTO tblmensagem(nome,email,mensagem)
      VALUES('$nome','$email','$mensagem') ";

      $resultSQL = mysqli_query($ligacao, $cmdSQL);

      if (!$resultSQL) {
        echo "<font color='red'>Erro com o comando SQL. <br>";
        throw new Exception(mysli_error($ligacao));
      }
      else{
        echo "<font align='center'><h2><br><br><br>Mensagem enviada<br></h2>";
      }
    }


  mysqli_close($ligacao);

  ?>


  				<?php include "footer.php" ?>
