<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" > 
    <script src="js/bootstrap.min.js"></script>
    <title> cadastrar essa merda!</title>
  </head>

<body class = "bg-dark text-light">
  <div class = "container">
    <div class = "jumbotron bg-danger"> 
      <h1>kaiky luiz crud!</h1>
      <p>um exemplo de crud php oo</p>
  </div>

                 <h2 class="mt-3">cadastrar dados!</h2>

 <form action="cadastrar.php" method="POST" enctype="multipart/form-data">

        <div class="form-group">
                <h3>PREENCHA O FORMULARIO E CADASTRE-SE </h3>
        </div>  
        
        
  <div class="form-group">
    <div>
           <label>cliente: </label> 
    </div>
    <div>
      <div class="form-check form-check-inline">
      <label class = "form-control"><input type="radio" name="tipo_radio" value="juridico"> Juridico  
      </label>    
      </div>

      <div class="form-check form-check-inline">
        <label class = "form-control"><input type="radio" name="tipo_radio" value="fisico"> Fisico</label>    
      </div>
    </div>
  </div>

  <br>  

  <div class="form-group">
    <label>Foto:</label> <input type="file" name="img"><br><br>
  </div>

    <div class="form-group">
      <label>Nome:</label> <input type="text" name="nome" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>Data de Nascimento:</label> <input type="date" name="dt_nascimento" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>Estado:</label> <input type="text" name="estado" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>Cidade:</label> <input type="text" name="cidade" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>Bairro:</label> <input type="text" name="bairro" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>CEP:</label> <input type="text" name="cep" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>Logradouro:</label> <input type="text" name="logradouro" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>N° da residencia:</label> <input type="text" name="n°_residencia" required="required"><br><br>
    </div>

    <div class="form-group">
      <label>Email:</label> <input type="email" name="email" required="required"><br><br>
    </div>

    <div class="form-group">
            <label>Senha:</label> <input type="password" name="senha" id="mostrar_senha" minlength="6" required="required"><br>

            <input type="checkbox"  onclick = "mostrarsenha()" > <label>mostrar senha</label>
            <script type="text/javascript" src="js/mostrar_senha.js"></script>
    </div>

           <div>
            <a href="cadastrar.php">
          <button class="btn btn-success" type="submit" value="enviar">cadastrar</button>
        </a>
        </div>

  </body>
</html>