<?php
  include('cabecalho.php');
  ?>
<div id="container-banner" class="container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-wrap="true">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/legolas1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/legolas2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/legolas3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container" id="container-armas">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Armas</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            
                
              <div class="jumbotron">
                <img src="img/1.png" alt="Image" class="img-fluid icones-armas">
                <div class="unit-1-text">
                  <strong class="text-primary mb-2 d-block text-center">Dano: 580</strong>
                  <h5 class="unit-1-heading text-center">Arma de teste</h5>
                </div>
              </div>
            
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
          <div class="jumbotron">
                <img src="img/2.png" alt="Image" class="img-fluid icones-armas">
                <div class="unit-1-text">
                  <strong class="text-primary mb-2 d-block text-center">Dano: 580</strong>
                  <h5 class="unit-1-heading text-center">Arma de teste</h5>
                </div>
              </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
              <div class="jumbotron">
                <img src="img/3.png" alt="Image" class="img-fluid icones-armas">
                <div class="unit-1-text">
                  <strong class="text-primary mb-2 d-block text-center">Dano: 580</strong>
                  <h5 class="unit-1-heading text-center">Arma de teste</h5>
                </div>
              </div>
          </div>
</div>
</div>

<?php
  include('rodape.php');
?>