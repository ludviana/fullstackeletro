<?php

require_once("../conexoes/conect.php");
/*
nome cliente
endereco
telefone
nome do produto
valor unitario
quantidade
valor total
*/
include_once('../includes/head.php');
?>
    <title>Compra</title>
</head>
<body>
    
<?php include_once('../includes/menu.php');?>

<?php

    $id = $_GET['produto'];
    $sqlreq = "SELECT * FROM produtos where id_produto = $id";
    $resultado = mysqli_query($conexao,$sqlreq);

?>

<h2 class="center">Preencha os campos para envio</h2>
<section class="center" >

    <form action="../conexoes/cadastro.php" method="post"> 
        <div class="formcompra">   
            <div>
                <label class="labe" for="nome">Nome: </label><br>
                <input class="inp" type="text" name="nome" id="nome" onkeyup="verifica()"><br>

                <label class="labe" for="ende">Endereço: </label><br>
                <input class="inp" type="text" name="ende" id="ende" onkeyup="verifica()"><br>

                <label class="labe" for="telef">Telefone: </label><br>
                <input class="inp" type="tel" name="telef" id="telef" onkeyup="verifica()"><br>

                
            </div>

            <?php 
                while($row = mysqli_fetch_assoc($resultado)){
            ?>
        
            <div class="prod">
                <img class="ops" src="<?php echo $row['imagem']?>" alt="<?php echo $row['nome']?>">
                <p><?php echo $row['descricao']?></p>
                <p>R$ <?php echo $row['preco']?></p>
                
                <label for="num">Quantidade:</label>
                <input type="hidden" name="produt" id="produt" value="<?php echo $row['nome'];?>">

                <input type="hidden" name="prec" id="prec" value="<?php echo $row['preco'];?>">
                
                <input type="number" name="numqt" min="1" value="1" id="numqt"><br><br>
            </div>
            <?php }?>
        </div>
        
        <button id="sucesso" type="submit" name="submit"> Finalizar compra</button>
    </form>

    
    
</section>

<?php
    include_once('../includes/footer.php');
?>