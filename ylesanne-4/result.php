<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsiste tagasiside</title>
  </head>

  <body>
  <?php
  $arvestus = isset($_COOKIE["arvestus"]) ? $_COOKIE : "";
  if (!isset($_COOKIE["arvestus"]))
  {
    echo "Cookie on olemas" ;
  }
  else
  {
    echo "Cookie-t ei ole!";
  }
  ?>`
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <pre><?php print_r($_COOKIE); ?></pre>
  </body>
</html>
