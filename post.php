
<?php
session_start();

include_once './header.php';


// include_once './navbar.php';


if (isset($_SESSION['row'])) {    
    // echo 'its';
    
    // session_unset();
} else {
    header('location:index');
}

?>



<section class="post pt-5">
<form action="./connect.php" method="post" enctype="multipart/form-data">
    <div class="container">        
        <div class="row">
        
            <div class="col-lg-6">
                <h1>UPLOAD:MOVIE</h1>
                <div>
                    <label for="Title">Title :</label>
                    <input type="text" class="form-control " name="Title" id="Title" placeholder="Title">
                </div>
                <div>
                    <label for="Image">Image :</label>
                    <input type="file" class="form-control"  name="image" id="Image">
                </div>
                <div>
                    <label for="Image">Language :</label>
                    <script>
                        language = ['English', 'Hindi', 'South', 'Chinese', 'Other']
                        language.forEach(i => {
                            document.write(`<div class="form-check">
  <input class="form-check-input" name="${i}" type="checkbox" value="${i}" id="${i}">
  <label class="form-check-label" for="${i}">
  ${i}
  </label>
</div>`)
                        });
                </script>  
                </div>

                <div>
                    <label for="">Movie Year :</label>
                    
                    <select class="form-select" name="Movie_Year" id="">
                    <script >
                    var year = new Date();
                         year2 =year.getFullYear()
                    // document.write(year2);
                    for (let i = year2; i >= 2000 ; i--) {
                        document.write(`<option value="${i}">${i}</option>`)
                        
                    }
                </script>
                    </select>
                </div>

                <div>
                    <label for="">Rating :</label>
                    <select class="form-select" name="Rating" id="">
                    <option selected hidden>Rating Out of 10-</option>
                        <script>
                            i = 1;
                            while (i <= 10) {
                                document.write(`<option value="${i.toFixed(1)}">${i.toFixed(1)}</option>`)

                                i =i + .1
                            }
                        </script>
                        
                    </select>
                </div>




            </div>
            <div class="col-lg-6">

            <div>
                <label for="">Gener :</label>
                <div class="">
                <script>
                    Gener = ['Action','Adventure','Comedy','Crime','Fantasy','Family','Animation','Drama','Romance','Sci-Fi','Horror','Sport']

                    Gener.forEach(g => {
                        document.write(`
                <input class="form-check-input" type="checkbox" name="${g}" value="${g}" id="${g}">
                <label for="${g}">${g}</label>
               `)
                    });
                 </script>
                </div>                
            </div>

            <div>
                <label for="">Movie Cast :</label>
                <textarea name="Movie_Cast" class="form-control" placeholder="Movie Casting....." id="" cols="10" rows="4"></textarea>
            </div>
           
            <div>
                <label for="">Film Industry :</label>
                <select class="form-select" name="Film_Industry" id="">
                  <script>
                    cast = ['Bollywood','Hollywood','Tollywood']
                    cast.forEach(c => {
                        document.write(`<option value="${c}">${c}</option>`)
                    });
                  </script>
                
                    <!-- <option value="">Boo</option> -->
                </select>

            </div>

            <div>
                <label for="">Link url:</label>
                <input type="text" class="form-control" placeholder="Download link.....(url)" name="Link_url" id="">
            </div>

            </div>
        </div>
        <div class="row ">
            <div class="col-lg-3 offset-lg-3 mt-3 mb-3"><input type="submit" class="btn btn-info form-control" name="submit" value="upload"></div>
            <div class="col-lg-3 mt-lg-3 mb-3"><input type="reset" class="btn btn-dark form-control" value="reset"></div>
        </div>
        </form>
    </div>
</section>


<?php include_once './footer.php'?>