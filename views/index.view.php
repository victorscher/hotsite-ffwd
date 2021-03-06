<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Hot Site</title>
    <link rel="stylesheet" href="assets/css/mobile.css">
    <link rel="stylesheet" href="assets/css/medium.css">
    <link rel="stylesheet" href="assets/css/large.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="assets/css/snackbar.css">
</head>

<div class="ball-1"></div>
<div class="ball-2"></div>
<div class="ball-3"></div>

<body>
    <div class="main">
        <div class="head-title">
            <p>LP | CONVERSÃO</p>
        </div>
        
        <div class="ball-title">
            <div class="title">
                <h1>Lorem<br>
                <span class="bold">ipsum dolor</span><br>
                sit amet
                </h1>
            </div>
        </div>
        
        <div class="success-msg"  id="success-msg">
            <div>
                <h2>Sucesso!</h2>
                <p>Use o link abaixo para indicar<br>seus amigos!</p>
            </div>
        </div>

        <div class="clipboard" id="clipboard" hidden> 
            <input type="text" id="link" class='link input' >
            <button class="btn-copy" id="btn-copy" alt="Copiar!"><i class="far fa-copy copy-icon"></i></button>
        </div>
        
        <div class="form">
            <form action="/store" method="POST" id="form">
                
                <input class="input" id="name" type="text" name="name" placeholder="NOME">
                
                <input class="input" id="email" type="email" name="email" placeholder="E-MAIL">

                <input class="input" id="cpf" type="text" name="cpf" placeholder="CPF" onkeydown="javascript: fMasc( this, mCPF );" maxlength='14'>

                <input class="input" id="telefone" type="text" name="telefone" placeholder="TELEFONE" onkeydown="javascript: fMasc( this, mTel );" maxlength="14">

                <input id="uniqueId" hidden type="text" value="<?= str_replace('.', '',uniqid('id', true))?>">

                <input id="indicator" hidden type="text" name="indicator" value="<?=$_GET['indicator']?>">

                <div class="btn-box">
                    <button class="btn " id="btnSubmit" type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>

        <div class="text-box">
            <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas, leo quis efficitur elementum</p></div>
        </div>
    </div>

    <div id="snackbar"></div>

    <script src="js/getElements.js"></script>
    <script src="js/masks.js"></script>
    <script src="js/store.js"></script>
</body>
</html>