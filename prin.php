<?php

  session_start();

  if($_SESSION['us']!=false){
    include "conexao.php";
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="js/ajax1.js"></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <title>Document</title>
  </head>
  <body>
    <script>
      gerarcards();
      gerarcate();
    </script>
    <link rel="stylesheet" href="css/style1.css" />
    <link rel="stylesheet" href="css/style2.css" />

    <header class="header">commerce</header>

    <nav class="navbar navbar-expand-lg dcdc">

      <div class="container-fluid">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="prin.php"
              >Home</a
            >
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="prin.php"
              >loggout</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link active" id="pod" aria-current="page" href="prin.php"
              >carrinho</a
            >
        </ul>
        
      </div>
      <div class="navbar-collapse collapse w-101 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">carrinho</a>
            </li>
        </ul>
    </div>
    </nav>

    <div class="fh">
      <div class="sidebar" id="catsidebar"></div>

      <div class="fbcards" id="fbcards"></div>
    </div>
  </body>
</html>