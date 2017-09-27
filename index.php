<html>

  <head>
    <title>PUISSANCE 4 ACHICHE KEVIN</title>
		<meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
		<link href="jeuP4.css" rel="stylesheet"/>

  </head>

  <body style="background-color:powderblue;">

    <div align="center">
      <h1><span class="label label-danger" style="color: yellow;">PUISSANCE 4 ACHICHE KEVIN</span></h1>

      <form method="GET" action="#" class="navbar-form">
    		<div align="center">
    			<input type="text" name="joueur1" class="form-control" placeholder="Joueur 1" required><br/><br/>
          <input type="text" name="joueur2" class="form-control" placeholder="Joueur 2" required><br/><br/>
          <input type="submit" name="jouerPartie" value="Démarrer la partie" style="font-size:30px;" />
        </div>
      </form>

      <?php
      if(isset($_GET['jouerPartie'])){
        $_SESSION['joueur1'] = $_GET['joueur1'];
        $_SESSION['joueur2'] = $_GET['joueur2'];
        $test = 'azerty';
        $test2 = 'abcde';
      ?>
      <button type="button" id="buttonPlay" name="buttonPlay" style="font-size:60px;">PLAY <i class="icon icon-arrow-circle-o-right"></i></button>
      <br/><br/><br/><br/><br/>
    </div>

    <div id="jeu">

    </div>
      <?php
      }
      ?>


    <script src="baseJS.js"></script>
  </body>
</html>
