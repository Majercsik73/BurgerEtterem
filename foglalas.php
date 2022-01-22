<?php 
    include("dbconnect.php");

    session_start();
    
    //echo "Az alábbi adatokkal léptél be: <br />";
    //echo "<pre>";
    //print_r($_SESSION);
    //echo "</pre>";

    
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {      
        if(isset($_POST["szemelydb"]) && !empty($_POST["szemelydb"]) &&
        isset($_POST["datum"]) && !empty($_POST["datum"]) &&
        isset($_POST["idopont"]) && !empty($_POST["idopont"]))
            {
                $azon = $_SESSION['Azonosito'];
                $nev = $_SESSION['Felhasznalonev'];
                $azon2 = $_POST['azon2'];
                $szemelydb = $_POST["szemelydb"];
                $datum = $_POST["datum"];
                $idopont = $_POST["idopont"];
                
                //Személy darabszám ellenőrzés
                /*$min = 1;
                $max = 8;
                if (filter_var($szemelydb, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false)
                    {
                        echo "<script>alert('A megadható személyek száma 1 és 8 közötti lehet!')</script>";
                        header("foglalas.php");
                    }*/

                //dátum és időpont lekérése ellenőrzéshez
                $sql5 = "SELECT idopont FROM foglalas WHERE datum = '$datum' AND idopont = '$idopont'";
                $result5 = $db->query($sql5);

                //dátum és időpont tényleges ellenőrzése
                if($result5 -> num_rows > 6){
                    echo "<script>alert('Az Ön által megadott időpontra már nem lehetséges foglalás!        Kérjük adjon meg egy másik időpontot!')</script>";
                    echo "<script>location.href='foglalas.php'</script>";
                }

                //Ha minden rendben, az új foglalást felvesszük a db-be
                else{   
                    $sql4 = "INSERT INTO foglalas (fazon, azon, szemelydb, datum, idopont, ido, megjelent) VALUES
                    (null, '$azon', '$szemelydb', '$datum', '$idopont', now(), 0); ";       
                    $request4 = $db->query($sql4);
                    echo "<script>alert('Köszönjük a foglalást!')</script>";
                    header("Refresh:0");  // Ne ragadjonak be az adatok!!!!
                    echo "<script>location.href='foglalas.php'</script>";
                }
            }
    }   
    //Lekérdezés

    $sql = "SELECT * FROM foglalas ORDER BY fazon DESC limit 6";
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
    <body class="container bg-dark">
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
                <form method="POST" action= "">
                    <div>
                        <h1> Üdvözöljük <?php echo " ".$_SESSION['Felhasznalonev']//."  ".$_SESSION['Azonosito'] ?> !</h1>
                        <h2> Foglalásához kérjük adja meg a személyek számát, a dátumot és az időpontot!</h2>
                    </div>
                    <br><label class="labella"></label><br />
                    <div>
                        <label class="labella">Személyek száma:</label><br />
                        <select class="bevitel" name="szemelydb">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                        </select>
                    </div>
                    <div>
                        <label class="labella">Dátum: </label><br />
                        <input type="date" class="bevitel" name="datum"><br />
                    </div>
                    <div>
                        <label class="labella">Időpont:</label><br />
                        <select class="bevitel" name="idopont">
                            <option>16:00:00</option>
                            <option>17:00:00</option>
                            <option>18:00:00</option>
                            <option>19:00:00</option>
                            <option>20:00:00</option>
                            <option>21:00:00</option>
                        </select>
                    </div>
                    <br />
                    <input type="submit" class="btn btn-success" value="Foglalom!">
                    <br /><label class="labella"></label><br />
                    <a class="btn btn-primary" href="foglalasaim.php">Előző foglalásaim</a>
                    <br /><label class="labella"></label><br />
                    <a class="btn btn-danger" href="index.php">Kilépés</a>
                </form>
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