
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"/>

<div id="all-companies">
   <div class="main-text-body">
    <h2>Все развлекательные организации города Краматорска</h2>
  </div>
  
    
<div class="container">
  
    <?php
    foreach($items as $itemx):?>
    
    <div class="well">
      <div class="media">

      	<a href="<?= $path; ?>/index.php?ctrl=company&act=one&id=<?= $itemx->id; ?>" class="pull-left">

    		<img class="picture-media" src="http://placekitten.com/150/150">
  		</a>
  		    <div class="company-name">
            

    		<h4><?= $itemx->fullname; ?></h4>
            </div>
            <div class="company-description">
                <p><?= $itemx->description; ?></p>
            </div>

            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <a href='#'><span><i class="fa fa-facebook-square"></i></span></a>
              <a href='#'><span><i class="fa fa-twitter-square"></i></span></a>
              <a href='#'><i class="fa fa-google-plus-square"></i></span></a>
           
       </div>
       <div class="company-footer">
       <span class="pull-right buttons">
           <a class="btn btn-sm btn-primary" href="index.php?ctrl=company&act=one&id=1" role="button">Больше</a>
        </span>  
      </div>

    </div>
    <?php endforeach
    /*
    <div class="well">
      <div class="media">
      	<a class="pull-left" href="index.php?ctrl=company&act=one&id=1">
    		<img class="picture-media" src="img/page3-img9.jpg">
  		</a>
  		    <div class="company-name">
    		<h4>Кинотеатр "Родина"</h4>
            </div>
            <div class="company-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscin</p>
            </div>

            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <a href='#'><span><i class="fa fa-facebook-square"></i></span></a>
              <a href='#'><span><i class="fa fa-twitter-square"></i></span></a>
              <a href='#'><i class="fa fa-google-plus-square"></i></span></a>
           
       </div>

       <div class="company-footer">
       <span class="pull-right buttons">
           <a class="btn btn-sm btn-primary" href="index.php?ctrl=company&act=one&id=1" role="button">Больше</a>
        </span>  
      </div>

    </div>
    <div class="well">
      <div class="media">
      	<a class="pull-left" href="index.php?ctrl=company&act=one&id=1">
    		<img class="picture-media" src="img/page3-img4.jpg">
  		</a>
  		    <div class="company-name">
    		<h4>Кинотеатр "Родина"</h4>
            </div>
            <div class="company-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
</p>
            </div>

            <!-- Use Font Awesome http://fortawesome.github.io/Font-Awesome/ -->
              <a href='#'><span><i class="fa fa-facebook-square"></i></span></a>
              <a href='#'><span><i class="fa fa-twitter-square"></i></span></a>
              <a href='#'><i class="fa fa-google-plus-square"></i></span></a>
            </div>

            <div class="company-footer">
       <span class="pull-right buttons">
           <a class="btn btn-sm btn-primary" href="index.php?ctrl=company&act=one&id=1" role="button">Больше</a>
        </span>  
      </div>

    </div>

    <div class="container"> 
    <nav aria-label="pagination">
    <ul class="pagination">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item"><a class="page-link" href="#">6</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>

</div>
</div>

*/
    ?>