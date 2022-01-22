<?php 
    include("dbconnect.php");
    session_start();

    /*echo "Az alábbi adatokkal vagy itt: <br />";
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";*/
    //Lekérdezés
    $azon = $_SESSION['Azonosito'];
    //echo $azon;
    $sql = "SELECT * FROM foglalas WHERE azon = '$azon' ORDER BY ido DESC";
    $request = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Burger Étterem</title>
    </head>
    <body class="container bg-warning">
        <header>
            <img src="images/hatter/DSC_0921-Copy-1002x666.jpg" alt="étterem-háttér">

            <div class="jumbotron jumbotron-fluid bg-dark">
                <div class="text-center text-light bg-dark p-5 display-4">Burger Étterem</div>
            </div>
        </header>
        <?php
            include_once("navbar.php"); 
        ?>
        <br />
        <div class="container">
            <div class="ujfelhasznalo">
                <div>
                    <h2>Kedves <?php echo $_SESSION['Felhasznalonev']?> !</h2>
                    <h3>Éttermünkben az alábbi foglalásaid voltak korábban:</h3>
                </div>
                <br />
                <table>
                    <thead style="font-weight:bold">
                        <tr>
                            <td>Személyek száma</td>
                            <td>Dátum</td>
                            <td>Időpont</td>
                            <td>Foglalás ideje</td>
                        </tr>
                    </thead>
                    <?php
                        while ($sor = $request->fetch_assoc()){
                            echo
                            "<tr>
                                <td>".$sor["szemelydb"]."</td>
                                <td>".$sor["datum"]."</td>
                                <td>".$sor["idopont"]."</td>
                                <td>".$sor["ido"]."</td>
                            </tr>";
                        }
                    ?>
                </table>
                <br />
                <br />
                <a class="btn btn-danger" href="foglalas.php">Vissza a foglalásokhoz</a>
            </div>
        </div>
        <br />
        <footer class="page-footer text-center wow fadeIn">
            <div class="py-3 bg-dark">
                <span class="footer-copyright text-secondary center" id="copyright">© 2022 Copyright:</span>
                <span class="text-secondary center">Burger Étterem</span>
            </div>
        </footer>
    </body>
</html>