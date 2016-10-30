<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">TOUR KENYA 254.</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <?php nav_main($conn, $page_id); ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Default</a></li>
            <li><a href="#">Static top</a></li>
            <li class="active"><a href="#">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
     <script src="2/thumbnail-slider.js" type="text/javascript"></script>
     <link href="2/thumbnail-slider.css" rel="stylesheet" type="text/css" />
   <!-- jumbotron -->
   
  <div class ="slider_custom">
 
 		<div id="myCarousel" class="carousel slide" data-ride="carousel">
 			
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		  </ol>
 			
			<div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="imgs/slide_imgs/lake_nakuru.jpg" alt="Chania">
		    </div>
		
		    <div class="item">
		      <img src="imgs/slide_imgs/maasai_mara.jpg" alt="Chania">
		    </div>
		
		    <div class="item">
		      <img src="imgs/slide_imgs/malindi.jpg" alt="Flower">
		    </div>
		
		    <div class="item">
		      <img src="/imgs/slide_imgs/mombasa.jpg" alt="Flower">
		    </div>
		  </div>
		  
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>

		</div>
 
    </div>
    
    
    
    
    
  
  </div>


 



<!--
<nav class="navbar navbar-default" role="navigation">
<nav class="container">
	<ul class="nav navbar-nav">
		<?php nav_main($conn, $page_id); ?>
		
		
		<li<?php if($page_id == 3){ echo ' class="active" ' ;} ?>><a href="?page=3">FAQ</a></li>
		<li<?php if($page_id == 4){ echo ' class="active" ' ;} ?>><a href="?page=4">Contacts</a></li>
	</ul>
</nav>
</nav> <!-- End Main nav -->