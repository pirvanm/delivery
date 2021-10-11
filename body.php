<body>
    <div class="container">
        <!-- Aici incep sectiunile propriu zise de cod -->
        <!-- Sectiunea 1 , navbar -->
<?php
include ('sectione1.php');
include('sectiontwo.php');
?>
        <!-- Sectiunea 2  -->

<div class="container">
<!-- save for the future of the grid -->

        <div id="3" class="row">
            <div class="col">            
            <!-- Sectiunea 3 -->

            <h1>
                Gaseste Mancare
            </h1>

            <span> 
                <span>
                    <i class="fab fa-apple"></i>
                </span>

                <span>
                   
                    <b> Download</b>
                    
                    <b> App</b>
                </span>
            </span>

            <span> 
                <span><i class="fas fa-play"></i></span>

                <span>
                   
                    <b> Google </b>
                    
                    <b> Play</b>
                </span>
            </span>
<!-- inchidere coloana stanga din sectiunea 3 -->
            </div>
            <div class="col mt-5">
            <!-- Coloana dreapta din sectiunea 3  -->
            <h1> Dreapta -> Your Has</h1>
             </div>
            <!-- Inchidere Sectiune 3 -->
        </div>


        <div class="row"> 
            <!-- Coloana Stanga -->
            <div class="col">
            
            </div>

            <!-- Coloana Dreapta -->
            <div class="col">
                Dreapta 
            </div>
          
        </div>

        <div  id="4" class="row">
            <h1> Sectiunea 4</h1>
            <div class="col-8">
                <!-- Zona de Contor numar produse per categorii -->
                <ul class="d-flex">
                    <li>
                        <button type="button" class="btn  bg-danger">
                            All <span class="badge bg-secondary">(170))</span>
                          </button>
                    </li>

                    <li>
                        <button type="button" class="btn  bg-danger">
                            <i class="fas fa-birthday-cake"></i> Break Fast
                             <span class="badge bg-secondary">23</span>
                          </button>
                    </li>

                    <li>
                        <button type="button" class="btn  bg-danger">
                            
                             
                            <i class="fas fa-pizza-slice">
                                <span class="badge bg-secondary"> 
                                    41
                                </span></i>Lunch
                          </button>
                    </li>

                    <li>
                        <button type="button" class="btn  bg-danger">
                            
                             
                            <i class="fas fa-pizza-slice">
                                <span class="badge bg-secondary"> 
                                    41
                                </span></i>Lunch
                          </button>
                    </li>

                    <li>
                        <button type="button" class="btn  bg-danger">
                            
                             
                            <i class="fas fa-pizza-slice">
                                <span class="badge bg-secondary"> 
                                    41
                                </span></i>Lunch
                          </button>
                    </li>

                    <li>
                        <button type="button" class="btn  bg-danger">
                            
                             
                            <i class="fas fa-pizza-slice">
                                <span class="badge bg-secondary"> 
                                    41
                                </span></i>Lunch
                          </button>
                    </li>
                </ul>
                <!-- Inchiderea sectiuni contor -->

                <div class="row">
                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>

                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>

                        <div class="col-4">
                            <div class="card" style="width: 18rem;">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Card title</h5>
                                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                              </div>
                        </div>
                </div>

                <footer class="d-flex">
                  <h1> Popular</h1>
                  <hr>
                </footer>
            </div>

            <div class="col-4">
               <h1> Price / Serving</h1>

               <!-- Componentea luata din bootstrap -->
               <label for="customRange3" class="form-label">Example range</label>
<input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">

<p> Cusine</p>

<!-- Sectiune lista categorii -->
<div class="d-flex">
    <ul>
        <li> Elem 1</li>
        <li> Elem 2</li>
        <li> Elem 3</li>
        <li> Elem 4</li>
    </ul>

    <ul>
        <li> Elem 1</li>
        <li> Elem 2</li>
        <li> Elem 3</li>
        <li> Elem 4</li>
    </ul>
    <!-- Inchidere sectiunea categorii  -->
</div>

        <div class="food-background">
                <button class="btn btn-info center">
                    Trimite-ma
                </button>
        </div>
            </div>
        </div>
    </div>

        <!-- Inchidere sectiuni -->
    </div>
</body>