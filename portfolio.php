<?php include_once './header.php'?>

<style>
    .portfolio{
        background: url(./assets/images/bg1.png);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 600px; 
     
    }
   
    .portfolio .c1 {
        
        height: 500px;
    }

    .portfolio .c2 {
        background: linear-gradient(transparent, #000);
        height: 100px;
    }

    
    .portfolio_2{
        padding: 100px 0;
        background: #000;
    }
    /* .portfolio_2 .css{
        background: radial-gradient(black,transparent);
        
    } */

    .portfolio_2 .img_a{
        background: url(./assets/images/img1.jpg);
    }
    .portfolio_2 .img_b{
        background: url(./assets/images/img2.jpg);
    }
    .portfolio_2 .img_c{
        background: url(./assets/images/img3.jpg);
    }
    .portfolio_2 .img{
        /* background: url(./assets/images/img1.jpg); */
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 350px;
        margin-top: 50px;
        border-radius: 15px;
    }
.p3 {
    background: url(./assets/images/bg2.jpg);
}
    .p3 .c1 {
        height: 100px;
        background: linear-gradient( #000, transparent);
    }
    .p3 .c2 {
        height: 100px;
        background: none;
    }

    .sec1 {
        background: url(./assets/images/bg_png.png);
        height: 900px;
        background-size: cover;
        background-position: right 0px top -200px;
        background-repeat: no-repeat;
        position: absolute;
    }
</style>

<!-- <section class="sec1">

</section> -->

<section class="portfolio">
<div class="container-fluid c1"></div>
<div class="container-fluid c2"></div>
</section>



<section class="portfolio_2">
    <div class="container-fluid  ">
        <div class="row">
            <div class="col-4"><div class="img_a img"></div></div>
            <div class="col-4"><div class="img_b img"></div></div>
            <div class="col-4"><div class="img_c img"></div></div>
            
        </div>
    </div>
</section>

<section class="portfolio p3">
<div class="container-fluid c1"></div>
<div class="container-fluid c2"></div>
</section>






<?php include_once './footer.php'?>