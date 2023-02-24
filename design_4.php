<?php include_once './header.php'?>

<style>
  .img{
    background: rebeccapurple;
    height: 250px;
  }

</style>


<section >
  <div class="container bg-black">

  <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row">
        <div class="col-3"><div class="img"></div></div>
        <div class="col-3"><div class="img"></div></div>
        <div class="col-3"><div class="img"></div></div>
        <div class="col-3"><div class="img"></div></div>
        <div class="col-3"><div class="img"></div></div>
      </div>
      <!-- <img src="..." class="d-block w-100" alt="..."> -->
    </div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  </div>

</section>



<?php include_once './footer.php'?>