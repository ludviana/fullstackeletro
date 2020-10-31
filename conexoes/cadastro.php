<?php
    require_once('../conexoes/conect.php');

    if(isset($_POST['nome']) && isset($_POST['ende']) && isset($_POST['telef']) && isset($_POST['numqt']) && isset($_POST['produt']) && isset($_POST['prec'])){
    
        $nome = $_POST["nome"];
        $endereco = $_POST["ende"];
        $telefone = $_POST["telef"];
        $qte = $_POST["numqt"];
        $nomeProd = $_POST["produt"];
        $precProd = $_POST["prec"];

        $sqlIn = "INSERT INTO pedidos(nomeCliente,endereco,telefone,nomeProduto,valorUnitario,quantidade) VALUES ('$nome','$endereco','$telefone','$nomeProd','$precProd','$qte')";

        $resultado = mysqli_query($conexao,$sqlIn);

        if($resultado){
            header("refresh:5 ; ../html/produtos.php");
            ?>

            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <style>
                    body{
                        text-align:center;
                    }
                    p{
                        font-size:20pt;
                        color: red;
                        margin-top:110px;
                    }
                </style>

                <title>Obrigado pela compra</title>
            </head>
            <body>
                <p>Compra efetuada com sucesso </p>
                <p>Obrigado por comprar conosco <?php echo $nome?></p>
                <p>Seu pedido será entregue em 7 dias no endereço: <?php echo $endereco;?> </p>                
            </body>
            </html>
             
            
            <?php
        } else{
            echo "Falha no pedido";
        }
    }
?>