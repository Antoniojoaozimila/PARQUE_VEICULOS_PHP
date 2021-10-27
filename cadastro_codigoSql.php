<?php  include "conexao.php";

	
     // session_start();

      

       $editar_v=false;
       $marca=" ";
       $modelo=" ";
       $preco=null;
       $categoria="";
       $id=0;


       
	

	
      
///   guardando os dados no base de dados
if (isset($_POST['salvar'])) {
        $categoria=$_POST['categoria'];
        $marca = $_POST['marca'];
        $modelo =$_POST['modelo'];
        $preco =$_POST['preco'];
        $sql="INSERT INTO `viaturas`( `marca`, `modelo`, `preco`,`categoria`) VALUES ('$marca','$modelo','$preco','$categoria')"; 
        if(mysqli_query($conn,$sql)){
         
        }else 
        echo "erro ao cadastrar.";
        header('location: cadastroForm.php'); // redirecionar a pagina para tela cadastro apos a insercao
      }

      // actualizar dados
	if (isset($_POST['actualizar'])) {
    echo "olamundo";
    
    $id = $_POST['id'];
    $marca = $_POST['marca'];
    $modelo =$_POST['modelo'];
    $preco =$_POST['preco'];
    $categoria = $_POST['categoria'];
    
 	mysqli_query($conn, "UPDATE viaturas SET marca='$marca',modelo='$modelo',preco='$preco',categoria='$categoria' WHERE codigo=$id");

   
 header('location: cadastroForm.php'); // redirecionar a pagina para tela cadastro apos a insercao
			}	

      
	//eliminar dados
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($conn, "DELETE FROM viaturas WHERE codigo=$id");
		
				header('location:cadastroForm.php');	
		
		}	




         

       

      
       ?>
        