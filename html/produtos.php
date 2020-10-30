<?php include_once('../includes/head.php');?>

    <title>Produtos</title>
</head>
<body>
    
<?php include_once('../includes/menu.php');?>
    
    <header>
        <h2>Produtos</h2> 
        <hr>
    </header>

    <main id="cateprod">

        <section class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibir_todos()" onmouseover="style.cursor='pointer';">Todos (12)</li>
                <li onclick="exibir_categoria('geladeira')" onmouseover="style.cursor='pointer';">Geladeiras (3)</li>
                <li onclick="exibir_categoria('fogao')" onmouseover="style.cursor='pointer';">Fogões (2)</li>
                <li onclick="exibir_categoria('microondas')" onmouseover="style.cursor='pointer';">Microondas (3)</li>
                <li onclick="exibir_categoria('lavaropas')" onmouseover="style.cursor='pointer';">Maquina de lavar roupas (2)</li>
                <li onclick="exibir_categoria('lavalocas')" onmouseover="style.cursor='pointer';">Maquina de lavar louças (2)</li>
            </ul>
        </section>
        <section class="produtos">
            <?php
                require_once('../conexoes/conect.php');

                $sqlSel = "SELECT * FROM produtos;";
                $resultado = mysqli_query($conexao,$sqlSel);

                while($row = mysqli_fetch_assoc($resultado)){
                
            ?>
                    <div class="box_produto" id="<?php echo $row['nome']?>">
                        <img src="<?php echo $row['imagem']?>" alt="<?php echo $row['nome'] ?>" title="<?php echo $row['nome'] ?>" onclick="destaque(this)"> 
                        <br>
                        <?php echo $row['descricao']?>
                        <hr>
                        <p class="velho">R$ <?php echo $row['preco_antigo'] ?></p>
                        <p class="novo" >R$ <?php echo $row['preco']?></p>

                        <button class="comprar" ><a href="./comprar.php?produto=<?php echo $row['id_produto'];?>"> Comprar </a></button>
                    </div>
                
            <?php
                }
            ?>
        </section>
    
    </main>

<?php
    include_once('../includes/footer.php');
?>