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
                  <li class="nav-item">
                    <a class="nav-link active text-center text-light" data-bs-toggle="pill" href="#csonakburgonya">Csónakburgonya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#edesburgonya">Édesburgonya</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#rantotthagymakarika">Rántott hagymakarika</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#chips">Chips</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#philadelphiasajtgolyo">Philadelphia sajtgolyó</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#mozzarellasajtgolyo">Mozzarella sajtgolyó</a>
                  </li>
                </ul>
            </nav>
        </div>


        <!-- Tab panes -->
        <div class="tab-content">

            <div id="csonakburgonya" class="container tab-pane active"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/koretek/Csónakburgonya/plate-of-sweet-potato-wedges.jpg" class="img-fluid float-end rounded" alt="csonakburgonya">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Csónakburgonya
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Olajban sült csónak formájú burgonyaszeletek.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">640Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="edesburgonya" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/koretek/Édesburgonya/P9294510.jpg" class="img-fluid float-end rounded" alt="edesburgonya">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Édesburgonya
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Olajban sült édesburgonya hasábok.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">800Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="rantotthagymakarika" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/koretek/Rántott hagymakarikák/keto-onion-rings-1200.jpg" class="img-fluid float-end rounded" alt="rantotthagymakarika">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Rántott hagymakarika
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Olajban sült hagymakarikák.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">850Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="chips" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/koretek/Chips/photo-1528751014936-863e6e7a319c.jpeg" class="img-fluid float-end rounded" alt="chips">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Chips
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Olajban sült burgonyaszirom.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">750Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="philadelphiasajtgolyo" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/koretek/Philadelphia sajtgolyók/7b499f9be29b4ca01a937df93e9e2200.jpg" class="img-fluid float-end rounded" alt="philadelphiasajtgolyo">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Philadelphia sajtgolyó
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Panírozott sajtgolyók krémsajttal töltve.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">1000Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="mozzarellasajtgolyo" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/koretek/Mozzarella sajtgolyók/maxresdefault.jpg" class="img-fluid float-end rounded" alt="mozzarellasajtgolyo">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Mozzarella sajtgolyó
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Ropogós, paradicsomos rizottóval töltött golyócskák, mozzarella belsővel.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">900Ft</span>
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