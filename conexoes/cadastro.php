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
            echo "<p>Compra efetuada com sucesso </p>
                <p>Obrigado por comprar conosco ".$nome."</p>
                <p>Seu pedido será entregue em alguns dias no endereço: </p>".$endereco;
            header("refresh:5 ; ../html/produtos.php");
        } else{
            echo "Falha no pedido";
        }
    }
?>