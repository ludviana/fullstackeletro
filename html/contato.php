<?php include_once('../includes/head.php');?>
    <title>Contato</title>
</head>
<body>

<?php include_once('../includes/menu.php');?>

    <header>
        <h2>Contato</h2>
        <hr>
    </header>

    <section id="contato">
    
            <div id="item1">
                <img src="../fotos/email.jpg">
                <p>contato@fullstack.com</p>
            </div>

            <div id="item2">
                <img src="../fotos/whats.png">
                <p>(11)9999-9999</p>
            </div>
            

    </section>
<hr>
    
    <form class="formulario" action="" method="GET">
        
        <label for="nome">Nome:</label>
        <br>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="mensagem">Mensagem:</label>
        <br>
        <textarea name="mensagem" id="mensagem"> </textarea>
        <br>
        <input type="submit" value="Enviar" id="envia">
        
    </form>


<?php
    include_once('../includes/footer.php');
?>