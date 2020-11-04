<?php include_once('../includes/head.php');?>
    <title>Contato</title>
</head>
<body>

<?php include_once('../includes/menu.php');?>
<div class="container-fluid">
    <header class="container-fluid mt-3">
        <h2>Contato</h2>
    </header>
    <hr>
    

    <section class="container mx-auto">
    
        <div class="row d-flex justify-content-center text-center">
            <div class="col-6">
                <img src="../fotos/email.jpg" width="70px">
                <p>contato@fullstack.com</p>
            </div>

            <div class="col-6">
                <img src="../fotos/whats.png" width="70px">
                <p>(11)9999-9999</p>
            </div>
        </div>

    </section>
<hr>
    

    <form class="mt-5" action="" method="GET">        
        <div class="form-group">
            <label for="nome">Nome:</label>
                <input class="form-control" type="text" name="nome" id="nome">
        </div>

        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
                <textarea class="form-control" name="mensagem" id="mensagem"> </textarea>
        </div> 
        <div class="text-center mt-5">
            <button type="submit" class="btn btn-lg btn-success">Enviar</button>
        </div>
    </form>


<?php
    include_once('../includes/footer.php');
?>