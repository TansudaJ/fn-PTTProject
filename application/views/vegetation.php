<div class="container">
    <div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
       
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(68).jpg" alt="First slide">
                    <div class="mask rgba-black-light"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Light mask</h3>
                    <p>First text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(6).jpg" alt="Second slide">
                    <!-- 1321 × 583 -->
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Strong mask</h3>
                    <p>Secondary text</p>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg" alt="Third slide">
                    <div class="mask rgba-black-slight"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Slight mask</h3>
                    <p>Third text</p>
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Kodchasan:wght@200&display=swap');


    .card {
        background: #fff;
        box-shadow: 0 6px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
        transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
        border: 0;
        border-radius: 1rem;
    }

    .card-img,
    .card-img-top {
        border-top-left-radius: calc(1rem - 1px);
        border-top-right-radius: calc(1rem - 1px);
        height: 200px;
    }

    .card-img-top {
        object-fit: contain;
        padding: 15px
    }

    .btn {
        font-size: 1rem;
        font-weight: 500;
        text-transform: uppercase;
        padding: 5px 50px 5px 50px;
    }


    .card p {
        font-size: small;
        font-style: italic;
        font-weight: 400;
        color: #4a4a4a;
        text-align: center;
    }

    .card h5 {
        font-size: medium;
        font-family: 'Kodchasan', sans-serif;
        font-weight: bolder;
        text-align: center;
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }

    .row {
        margin: 3%;
    }
</style>
<div class="container-fluid">
<form method="get" action="<?php echo site_url("vegetation/index");?>">
<div class="row">
    <div class="input-group">
    
 <input type="text" name="search" class="form-control" placeholder="Search here..."/>

<button type="submit" value="search" name="save" class="btn btn-primary">
<i class="material-icons">search</i>
</button>
</div>
</div>

     
</form>

    <div class="row">
    <?php
					foreach($results as $row){
						?>
        <div class="col col-12 col-sm-6  col-md-4 col-lg-3">
            <div class="card h-100">
                <img src="<?php echo $row->URL; ?>" class="card-img-top" alt="..." />
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row->n_common_TH ." (".$row->n_common_ENG .")";?></h5>
                    <p class="card-text">
                    <?php echo $row->n_scientific; ?>
                    </p>
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-warning">View</a>
                </div>
                
            </div>
            
        </div>
        <?php
					}	
				?>


      
        
    </div>
    <?php
				if(isset($links)){
					echo $links;
				} 
			?>
            <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>

</div>