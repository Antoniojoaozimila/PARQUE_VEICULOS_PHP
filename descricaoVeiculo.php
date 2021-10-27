<?php include 'header.php'; include "conexao.php"; ?>
           
        <div class="product-page small-11 large-12 columns no-padding small-centered">
            
            <div class="global-page-container">
                <?php
                
            
                $db_connect = new mysqli($server,$user,$senha,$db);
                mysqli_set_charset($db_connect,"utf8");

                if ($db_connect->connect_error) {
                    echo 'Falha: ' . $db_connect->connect_error;
                } else {
                    //echo 'Conexão feita com sucesso' . '<br><br>';
                    $id =$_GET['id']; 
                    $sql = "SELECT * FROM viaturas WHERE codigo = '$id'";
                    $result = $db_connect->query($sql);

                    if($result->num_rows>0){
                        while($row = $result->fetch_assoc()){ 
                            $marca = $row['marca'];
                            $modelo = $row['modelo'];
                            $preco = $row['preco'];
                            
                       }
                    } else{
                        echo 'Nao ha destaques';
                    }
                }
                ?>

                <?php if($marca != NULL) {?>
                <div class="product-section">
                    <div class="product-info small-12 large-5 columns no-padding">
                        <h3><?php echo $marca?></h3>
                        <h4><?php echo $modelo?></h4>
                         
                        </p>

                        <h5><b>Preço: </b>R$ <?php echo $preco?></h5>
                        <h5><b>descrição: </b><?php echo "Desciacao doveiculo "?></h5> 
                    </div>

                    <div class="product-picture small-12 large-7 columns no-padding">
                        <img src="lib/img/carros/<?php echo $id?>.jpg" alt="Foto do veiculo: <?php echo $marca?>">
                    </div>

                </div>
                <?php } else{
                    echo 'veiculo nao encontrado!' . '<br>'; 
                }?>

                <div class="go-back small-12 columns no-padding">
                    <a href="imagensCarros.php"><< Voltar</a>
                </div>

            </div>
        </div>
            


        <?php include 'footer.php'; ?>
