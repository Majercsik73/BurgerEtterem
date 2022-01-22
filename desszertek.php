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
                    <a class="nav-link active text-center text-light" data-bs-toggle="pill" href="#somloigaluska">Somlói galuska</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#gesztenyepure">Gesztenyepüré</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#gundelpalacsinta">Gundel palacsinta</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#turogomboc">Túrógombóc</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#prifiterol">Prifiterol</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-center text-light" data-bs-toggle="pill" href="#tiramisu">Tiramisu</a>
                  </li>
                </ul>
            </nav>
        </div>


        <!-- Tab panes -->
        <div class="tab-content">

            <div id="somloigaluska" class="container tab-pane active"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/desszertek/Somlói galuska/somloi_galuska.jpg" class="img-fluid float-end rounded" alt="somloigaluska">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Somlói galuska
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Kakaós-vaníliás piskóta tészta, mazsolával, vaníliakrémmel, házi készítésű tejszínhabbal.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">800Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="gesztenyepure" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/desszertek/Gesztenyepüré/gesztenyepure-nandi-konyhaja-55.jpg" class="img-fluid float-end rounded" alt="gesztenyepure">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Gesztenyepüré
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Friss gesztenyemassza, házi készítésű tejszínhabbal.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">600Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="gundelpalacsinta" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/desszertek/Gundel palacsinta/Walnut-crepes-The-Gundel-pancake-2-SunCakeMom.jpg" class="img-fluid float-end rounded" alt="gundelpalacsinta">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Gundel palacsinta
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Diótöltelékes palacsinta, kakaóöntettel, házi készítésű tejszínhabbal.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">950Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="turogomboc" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/desszertek/Túrógombóc/Sweet-cottage-cheese-dumpling.jpg" class="img-fluid float-end rounded" alt="turogomboc">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Túrógombóc
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Gőzölt túrógombóc vanília öntettel.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">850Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="prifiterol" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/desszertek/Prifiterol/gluten-free-profiteroles-recipe-featured.jpg" class="img-fluid float-end rounded" alt="prifiterol">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Prifiterol
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Forrázott tésztából készült mini fánkocskák csokis-, vaníliás öntettel.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">1200Ft</span>
                        </p>
                    </div>
                </div>
            </div>

            <div id="tiramisu" class="container tab-pane fade"><br>
                <div class="row p-2 m-3">
                    <div class="col-6">
                        <img src="images/desszertek/Tiramisu/9c56de315348fdcc66f9a7cfba56fe34.jpg" class="img-fluid float-end rounded" alt="tiramisu">
                    </div>
        
                    <div class="col-6">
                        <h1 class="text-center text-light p-2 m-3">
                            Tiramisu
                        </h1>
                        <p>
                            <span class="text-info">Összetevők: </span>
                            <span class="p-2">Kávés tejben áztatott babapiskóta, friss mascarpone-ból készült rumos-mandulás krémmel.</span>
                        </p>
                        <p>
                            <span class="text-warning">Ár: </span>
                            <span class="p-2">1100Ft</span>
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