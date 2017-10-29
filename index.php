<!DOCTYPE html>
<html>
<head>
    <title>Site 1: Kalkulatory</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
    <div class="header">
        <h1 class="header">Kalkulatory Bartka</h1>
    </div>

    <div class="left">
        <?php include("menu.inc.html");    ?>
    </div>
  
    <div class="content">
    <?php
        $id = isset($_GET["id"])?$_GET["id"]:"";

        switch ($id)
        {
            case 1: require("strona1.inc.html"); break;
            case 2: require("strona2.inc.html"); break;
            case 3: require("strona3.inc.html"); break;
            case 4: require("strona4.inc.html"); break;
            case 5: require("strona5.inc.html"); break;
            default: require("domyslnie.inc.html"); break;
        }
        ?>
    </div>
  
  <div class="footer">
      © Copyright by Bartek.
  </div>

</div>

</body>
</html>
