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
                    <a class="nav-link active text-center text-light" data-bs-toggle="pill" href="#cocacola">Coca-Cola</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#cocacolazero">Coca-Cola Zero</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#fanta">Fanta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#kinleytonic">Kinley Tonic</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#fuzeteabarackos">Fuzetea Barackos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#fuzeteacitromos">Fuzetea Citromos</a>
                  </li>
                </ul>
            </nav>
        </div>


        <!-- Tab panes -->
        <div class="tab-content">

            <div id="cocacola" class="container tab-pane active"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/italok/Coca-Cola/76-765067_coke-zero-sugar-glass-bottle.jpeg" class="img-fluid float-end rounded" alt="cocacola">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Coca-Cola
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Cola ízű szénsavas üdítőital.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">350Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="cocacolazero" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/italok/Coca-Cola Zero/istockphoto-458428285-612x612.jpg" class="img-fluid float-end rounded" alt="cocacolazero">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Coca-Cola Zero
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Energiamentes cola ízű szénsavas üdítőital</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">350Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="fanta" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/italok/Fanta/381717001_fanta-orange-330ml_temp.jpg" class="img-fluid float-end rounded" alt="fanta">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Fanta
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Narancs ízű szénsavas üdítőital.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">350Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="kinleytonic" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/italok/Kinley Tonic/795451515.kinley-tonic-uveges-0-25l.jpg" class="img-fluid float-end rounded" alt="kinleytonic">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Kinley Tonic
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Tonik ízű szénsavas üdítőital</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">450Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="fuzeteabarackos" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/italok/Fuzetea Barackos/Fuzetea-05-l-őszibarack-hibiszkusz-ízű-full.png" class="img-fluid float-end rounded" alt="fuzeteabarackos">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Fuzetea Barackos
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Barack ízű jegestea.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">550Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="fuzeteacitromos" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/italok/Fuzetea Citromos/fuzetea-citrom.png" class="img-fluid float-end rounded" alt="fuzeteacitromos">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Fuzetea Citromos
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Citrom ízű jegestea.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">550Ft</span>
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