<body>
    <div class="container">
        <!-- Aici incep sectiunile propriu zise de cod -->
        <!-- Sectiunea 1 , navbar -->
<?php
include ('sectione1.php');
include('sectiontwo.php');
include('sectionTree.php');
?>
        <!-- Sectiunea 2  -->

<div class="container">
<!-- save for the future of the grid -->
        <div class="row"> 
            <!-- Coloana Stanga -->
            <div class="col">
            
            </div>

            <!-- Coloana Dreapta -->
            <div class="col">
                Dreapta 
            </div>
          
        </div>
<?php 
include ('sectionFour.php');
?>

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