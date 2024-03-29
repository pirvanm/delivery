<!-- Binding Evcent , destul de frecvent pe la interviu -->
<!-- https://getbootstrap.com/docs/5.1/components/navs-tabs/ --> 
<ul class="nav nav-tabs" id="myTab" role="tablist">

  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" 
    aria-selected="true">
        All
    </button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="break-tab" data-bs-toggle="tab" data-bs-target="#break" type="button" role="tab" aria-controls="break" aria-selected="false">Break</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="lunch-tab" data-bs-toggle="tab" data-bs-target="#lunch" type="button" role="tab" aria-controls="lunch" aria-selected="false">Lunch</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="drink-tab" data-bs-toggle="tab" data-bs-target="#drink" type="button" role="tab" aria-controls="drink" aria-selected="false">Drink</button>
  </li>

 

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="desert-tab" data-bs-toggle="tab" data-bs-target="#desert" type="button" role="tab" aria-controls="desert" aria-selected="false">Desert</button>
  </li>

  <li class="nav-item" role="presentation">
    <button class="nav-link" id="fast-tab" data-bs-toggle="tab" data-bs-target="#fast" type="button" role="tab" aria-controls="fast" aria-selected="false">Fast Food</button>
  </li>

</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
 
  <div class="row mt-5">

  <div class="card col-lg-4" style="width: 18rem;">
  <img src="img/menu1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title"><span> Nume Meniu 1 span>  </span>  <span> <i class="fas fa-heart"></i></span></h5>
  <div class="card-text d-flex">
      <ul class="d-flex star-list">
        <li>
           <i class="fas fa-star"></i>
        </li>

        <li>
          <i class="fas fa-star"></i>
        </li>

       <li>
        <i class="fas fa-star"></i>
        </li>

        <li>
        <i class="fas fa-star"></i>
        </li>
    
        <li>
          <i class="far fa-star"></i>
        </li>

      </ul>

         <span> 20 Reviw uri </span>
</div>

  <div class="etichete mb-2">
  <span class="badge rounded-pill bg-light text-dark p-2">Italian</span>
  <span class="badge rounded-pill bg-light text-dark p-2">European</span>
  <span>  <i class="fas fa-clock"></i> 10-20 </span>

  </div>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-lg-4" style="width: 18rem;">
  <img src="img/menu2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><span> Nume Meniu 2</span> <span> <i class="far fa-heart"></i> </span></h5>

    <div class="card-text d-flex">
      <ul class="d-flex star-list">
        <li>
           <i class="fas fa-star"></i>
        </li>

        <li>
          <i class="fas fa-star"></i>
        </li>

       <li>
        <i class="fas fa-star"></i>
        </li>

        <li>
        <i class="fas fa-star"></i>
        </li>
    
        <li>
          <i class="far fa-star"></i>
        </li>

      </ul>

         <span> 20 Reviw uri </span>
</div>

  <div class="etichete mb-2">
  <span class="badge rounded-pill bg-light text-dark p-2">Italian</span>
  <span class="badge rounded-pill bg-light text-dark p-2">European</span>
  <span>  <i class="fas fa-clock"></i> 10-20 </span>

  </div>

    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<div class="card col-lg-4" style="width: 18rem;">
  <img src="img/menu3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title"><span>Nume Meniu 3</span><span> <i class="fas fa-heart"></i></span>  </h5>
  <div class="card-text d-flex">
      <ul class="d-flex star-list">
        <li>
           <i class="fas fa-star"></i>
        </li>

        <li>
          <i class="fas fa-star"></i>
        </li>

       <li>
        <i class="fas fa-star"></i>
        </li>

        <li>
        <i class="fas fa-star"></i>
        </li>
    
        <li>
          <i class="far fa-star"></i>
        </li>

      </ul>

         <span> 20 Reviw uri </span>
</div>

  <div class="etichete mb-2">
  <span class="badge rounded-pill bg-light text-dark p-2">Italian</span>
  <span class="badge rounded-pill bg-light text-dark p-2">European</span>
  <span>  <i class="fas fa-clock"></i> 10-20 </span>

  </div>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>

<!-- Inchidere Sectiunea Carduri -->

  </div>

  <div class="tab-pane fade" id="break" role="tabpanel" aria-labelledby="break-tab">
    break
  </div>
  <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunch-tab">lunch</div>
  <div class="tab-pane fade" id="drink" role="tabpanel" aria-labelledby="drink-tab">drink</div>



  <div class="tab-pane fade" id="desert" role="tabpanel" aria-labelledby="desert-tab">Desert</div>

  <div class="tab-pane fade" id="fast" role="tabpanel" aria-labelledby="fast-tab">Fast</div>
</div>
                    <!-- <li>
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
                </ul> -->
                <!-- Inchiderea sectiuni contor -->

                <!-- <div class="row">
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
                </div> -->

                <footer class="d-flex">
                  <h1> Popular</h1>
                  <hr>
                </footer>