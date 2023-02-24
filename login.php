<?php 
include_once './header.php';
?>

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
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

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
       <form action="" method="post">
        <!-- <h2 class="mb-2">Login:</h2> -->
        <input placeholder="Username or Email" class="form-control mb-2" type="text">
        <input placeholder="Password" class="form-control mb-2" type="text">
        <input class="form-control mb-2" type="submit" value="Login">
       </form>
       </div>

      <div class="cc hide">
      <form action="" method="post">
        <!-- <h2 class="mb-2">Registeration:</h2> -->
        <input placeholder="Username or Email" class="form-control mb-2" type="text">
        <input placeholder="Password" class="form-control mb-2" type="text">
        <input placeholder="Confirm Password" class="form-control mb-2" type="text">
        <input class="form-control mb-2" type="submit" value="Registeration">
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


<?php 
include_once './footer.php';
?>


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