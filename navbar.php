<?php include_once './header.php'?>


<section class="sec_nav">    
<nav class="navbar position-fixed w-100 navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand offset-lg-1" href="#"><img src="./assets/img/yts-removebg-preview.png"  alt="" srcset=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="col cl_1">
        <div class="search form-control">
          <i class="fa fa-search" id="fa-search"></i>
        <input type="search" placeholder="Quick Search" name="" id="">
      </div>
      </div>
      <div class="col cl_2">
      <div><span onclick="abc(0)">Home</span></div>
      <div><span onclick="abc(1)">4K</span></div>
      <div><span onclick="abc(2)">Trending</span></div>
      <div class=" sec_hide_0" id="sec_hide_0">
          <p>its only for the home purpose</p>
          <div class="btn btn-dark">EDIT</div>
          <div class="btn btn-danger">LOG OUT</div>
        </div>
        <div class="sec_hide_1" id="sec_hide_1">
          <p>its only for the edit purpose</p>
          <div class="btn btn-dark">EDIT</div>
        </div>
        <div class="sec_hide_2" id="sec_hide_2">
          <p>its only for the logout purpose</p>
          <div class="btn btn-danger">LOG OUT</div>
        </div>
      <div><a href=""><span>Browse Movies</span></a></div>
      <div><span data-bs-toggle="modal" data-bs-target="#exampleModal">Login | Register</span></div>
      <!-- <div><a href=""><span>Register</span></a></div> -->
    </div>
      
<script>
  document.getElementById('sec_hide_0').style.display = 'none';
  document.getElementById('sec_hide_1').style.display = 'none';
  document.getElementById('sec_hide_2').style.display = 'none';

  function abc(i) {
    if (i == 0) {
      x = document.getElementById('sec_hide_0').style.display

      if (x == 'none' | x == '') {
        document.getElementById('sec_hide_0').style.display = 'block';
    document.getElementById('sec_hide_1').style.display = 'none';
    document.getElementById('sec_hide_2').style.display = 'none';
    
      }

      else {
        document.getElementById('sec_hide_0').style.display = 'none';
      }
      
    }

    else if (i == 1) {
      x = document.getElementById('sec_hide_1').style.display

if (x == 'none' | x == '') {
  document.getElementById('sec_hide_0').style.display = 'none';
document.getElementById('sec_hide_1').style.display = 'block';
document.getElementById('sec_hide_2').style.display = 'none';

}

else {
  document.getElementById('sec_hide_1').style.display = 'none';
}
      
    }

    else if (i == 2) {
      x = document.getElementById('sec_hide_2').style.display

      if (x == 'none' | x == '') {
        document.getElementById('sec_hide_0').style.display = 'none';
    document.getElementById('sec_hide_1').style.display = 'none';
    document.getElementById('sec_hide_2').style.display = 'block';
    
      }

      else {
        document.getElementById('sec_hide_2').style.display = 'none';
      }
      
    }
  }
</script>
     
    </div>
  </div>
</nav>
</section>





<?php include_once './footer.php'?>
<section>
<style>
    .hide {
        display: none;
    }

    .modal-header  {
        padding: 0;
    }
    .cc1 { 
        padding: 20px;
        border-radius: 5px 0px 0px 0px;
    }

    .cc2 {    
        padding: 20px;
        border-radius: 0px 5px 0px 0px;
    }

    .active {
        background: yellowgreen;
        cursor: pointer;
    }

</style>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header ">
       <div class="container ">
        <div class="row ">
            <div onclick="login()" class="col cc1 ">Login</div>
            <div onclick="Registeration()" class="col cc2 active">Registeration
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        </div>
       </div>
        
      </div>
      <div class="modal-body">
       <div class="cc">
       <form action="./connect.php" method="post">
        <!-- <h2 class="mb-2">Login:</h2> -->
        <input placeholder="Username or Email" name="email" class="form-control mb-2" type="text">
        <input placeholder="Password" name="pass2" class="form-control mb-2" type="text">
        <input class="form-control mb-2" name="Login" type="submit" value="Login">
       </form>
       </div>

      <div class="cc hide">
      <form action="./connect.php" method="post">
        <!-- <h2 class="mb-2">Registeration:</h2> -->
        <input placeholder="Username" name="username" class="form-control mb-2" type="text">
        <input placeholder="Email" name="email" class="form-control mb-2" type="text">
        <input placeholder="Mobile Number" name="mobile"  class="form-control mb-2" type="text">
        <input placeholder="Password" name="pass" class="form-control mb-2" type="text">
        <input placeholder="Confirm Password" name="pass" class="form-control mb-2" type="text">
        <input class="form-control mb-2" onclick="return check()" name="Registeration" type="submit" value="Registeration">
       </form>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<script>
    function login() {
        document.getElementsByClassName('cc')[0].className = 'cc'
        document.getElementsByClassName('cc')[1].className = 'cc hide'
        document.getElementsByClassName('cc2')[0].className = 'col cc2 active'
        document.getElementsByClassName('cc1')[0].className = 'col cc1'
    }

    function Registeration() {
        document.getElementsByClassName('cc')[0].className = 'cc hide'
        document.getElementsByClassName('cc')[1].className = 'cc'
        document.getElementsByClassName('cc2')[0].className = 'col cc2'
        document.getElementsByClassName('cc1')[0].className = 'col cc1 active'
    }
</script>

<script>
  function check() {
   x = document.getElementsByName('pass')[0].value
   y = document.getElementsByName('pass')[1].value
   if (x == y) {  
    return true
   } else {
    document.getElementsByName('pass')[0].style.color = 'red'
    document.getElementsByName('pass')[1].style.color = 'red'
    return false
   }
  }
</script>

</section>


<!-- <section>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="btn btn-dark" onclick="dca(0)">HOME</div>
        <div class="btn btn-dark" onclick="dca(1)">EDIT</div>
        <div class="btn btn-dark" onclick="dca(2)">LOG OUT</div>
        <div class=" sec_hide_0" id="sec_hide_0">
          <p>its only for the home purpose</p>
          <div class="btn btn-dark">EDIT</div>
          <div class="btn btn-danger">LOG OUT</div>
        </div>
        <div class="sec_hide_1" id="sec_hide_1">
          <p>its only for the edit purpose</p>
          <div class="btn btn-dark">EDIT</div>
        </div>
        <div class="sec_hide_2" id="sec_hide_2">
          <p>its only for the logout purpose</p>
          <div class="btn btn-danger">LOG OUT</div>
        </div>
      </div>
    </div>
  </div>

  
<script>
  document.getElementById('sec_hide_0').style.display = 'none';
  document.getElementById('sec_hide_1').style.display = 'none';
  document.getElementById('sec_hide_2').style.display = 'none';

  function dca(i) {
    if (i == 0) {
      x = document.getElementById('sec_hide_0').style.display

      if (x == 'none' | x == '') {
        document.getElementById('sec_hide_0').style.display = 'block';
    document.getElementById('sec_hide_1').style.display = 'none';
    document.getElementById('sec_hide_2').style.display = 'none';
    
      }

      else {
        document.getElementById('sec_hide_0').style.display = 'none';
      }
      
    }

    else if (i == 1) {
      x = document.getElementById('sec_hide_1').style.display

if (x == 'none' | x == '') {
  document.getElementById('sec_hide_0').style.display = 'none';
document.getElementById('sec_hide_1').style.display = 'block';
document.getElementById('sec_hide_2').style.display = 'none';

}

else {
  document.getElementById('sec_hide_1').style.display = 'none';
}
      
    }

    else if (i == 2) {
      x = document.getElementById('sec_hide_2').style.display

      if (x == 'none' | x == '') {
        document.getElementById('sec_hide_0').style.display = 'none';
    document.getElementById('sec_hide_1').style.display = 'none';
    document.getElementById('sec_hide_2').style.display = 'block';
    
      }

      else {
        document.getElementById('sec_hide_2').style.display = 'none';
      }
      
    }
  }
</script>

  
</section> -->