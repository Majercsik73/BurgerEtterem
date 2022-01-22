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
        

        <!-- Nav pills -->
        <div>
            <nav class="nav nav-pills navbar navbar-expand-sm bg-dark navbar-dark justify-content-center sticky-top">
                <ul class="nav navbar nav-justified">
                    <?php
                        // foreach-el végig menni 
                        echo '<li class="nav-item">
                                <a class="nav-link active text-center text-light" data-bs-toggle="pill" href="#sajtburger">Sajtburger</a>
                            </li>';
                    ?>
                  
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#pusztaburger">Pusztaburger</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#beerburger">Beerburger</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#jalapenoburger">Jalapeno burger</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#cheese4youburger">Cheese4You burger</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#kentuckyburger">Kentucky burger</a>
                  </li>
                </ul>
            </nav>
        </div>


        <!-- Tab panes -->
        <div class="tab-content">

            <div id="sajtburger" class="container tab-pane active"><br>
                <div class="row p-2 m-3">
                    <div class="col-sm-6">
                        <div class="text-center">
                            <img src="images/burgerek/Sajtburger/klipartz.com.png" class="img-fluid w-100 rounded" alt="sajtburger">
                        </div>
                    </div>
        
                    <div class="col-sm-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Sajtburger
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Buci, marhahúspogácsa, jégsaláta, édes hagyma, cheddar sajt, ketchup, mustár.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">950Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="pusztaburger" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-sm-6">
                        <div class="text-center">
                            <img src="images/burgerek/Pusztaburger/mps.2012.feature.jpg" class="img-fluid w-100 rounded" alt="pusztaburger">
                        </div>
                    </div>
        
                    <div class="col-sm-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Pusztaburger
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Buci, marhahúspogácsa, csemegeuborka, rántott hagymakarika, gouda sajt, pusztaszósz.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">1150Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="beerburger" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-sm-6">
                        <img src="images/burgerek/Beerburger/burger-black-background-menu_127425-584.png" class="img-fluid float-end rounded" alt="beerburger">
                    </div>
        
                    <div class="col-sm-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Beerburger
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Buci, sörben pácolt tépett sertéshús, csemegeuborka, cheddar sajt, majonéz, barbecue szósz.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">1950Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="jalapenoburger" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-sm-6">
                        <img src="images/burgerek/Jalapeno burger/Jalapeno-Bacon-Burger.png" class="img-fluid float-end rounded" alt="jalapenoburger">
                    </div>
        
                    <div class="col-sm-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Jalapeno burger
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Buci, marhahúspogácsa, csemegeuborka, jalapeno, tabasco szósz, jalapeno sajtgolyók.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">2050Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="cheese4youburger" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-sm-6">
                        <img src="images/burgerek/Cheese4You burger/Double-Cheeseburger-1.jpg" class="img-fluid float-end rounded" alt="cheese4youburger">
                    </div>
        
                    <div class="col-sm-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Cheese4You burger
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Buci, marhahúspogácsa, jégsaláta, edami sajt, trappista sajt, gouda sajt, cheddar sajt, majonéz.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">2250Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="kentuckyburger" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-sm-6">
                        <img src="images/burgerek/Kentucky burger/15943623395f0809e3de053.jpg" class="img-fluid float-end rounded" alt="kentuckyburger">
                    </div>
        
                    <div class="col-sm-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Kentucky burger
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Buci, zabpelyhes bundába panírozott csirkemell csíkok, jégsaláta, csemegeuborka, paradicsom, barbecue szósz.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">2400Ft</span>
                        </p>
                    </div>
                </div>
            </div>

        </div>


        



        <footer class="page-footer text-center wow fadeIn">
            <div class="py-5 bg-dark">
                <span class="footer-copyright text-secondary center" id="copyright">© 2022 Copyright:</span>
                <span class="text-secondary center">Burger Étterem</span>
            </div>
        </footer>


    </body>
</html>