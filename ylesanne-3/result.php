<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
    <!-- Kustuta see funktsioon (print_r() koos <pre> elemendiga) pärast seda, kui oled veendunud, et programm töötab. -->
    <?php
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    ?>
    <?php
    $username = isset($_POST["username"]) ? ($_POST["username"]) : "Puudub";
    $sex = isset($_POST["sex"]) ? ($_POST["sex"]) : "Puudub";
    if ($username = $_POST["username"] && $_POST['sex'])
    {
        echo "Tere " . $_POST['username'] .", Tundub et olete {$sex}";
    }
	elseif ($username = "Puudub" && $_POST['sex'])
    {
        echo "Palun minge tagasi ja sisestage nimi.";
    }
	elseif ($sex = "Puudub" && $_POST['username'])
    {
        echo "Palun minge tagasi ja valige sugu.";
    }
	elseif ($sex = "Puudub" && $username = "Puudub")
    {
        echo "Palun minge tagasi ja täitke väljad.";
    }
    else
    {
        echo "Tundub, et sattusid siia otseteed pidi.";
    }
    ?>
    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
