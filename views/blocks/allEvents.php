<!-- Contents events -->

 <div id="events">
   <div class="main-text-body">
    <h2>Все события в Краматорске!</h2>
  </div>
  <div class="container-fluid ">
    <div class="content">
      <div class="row">
          
          <?php
    foreach($items as $itemx):?>
          
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <div class="event-title">
                <h2><?= $itemx->title; ?></h2>
              </div>
              <div class="event-description">
                <p><?= $itemx->description; ?></p>
              </div>
              <div class="event-date">
                <h3><?= $itemx->date_start; ?></h3>
              </div>
              <p><a href="?ctrl=event&act=one&id=<?= $itemx->id; ?>" class="label label-default">Узнать больше</a></p>
            </div>
            <div class="event-picture">
              <div class="event-picture-wrap" style="background-image: url(img/Velosipedisty.jpg);"><img src="img/Velosipedisty.jpg" alt="" title=""></div>
              </div>
          </div>
        </div>
<?php endforeach
          
          /*
        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <div class="event-title">
                <h2>Thumbnail Headline</h2>
              </div>
              <div class="event-description">
                <p>Приглашаем принять участие в велопробеге...</p>
              </div>
              <div class="event-date">
                <h3>24.07.2017</h3>
              </div>
              <p><a href="index.php?ctrl=event&act=one&id=1" class="label label-default">Узнать больше</a></p>
            </div>
            <div class="event-picture">
              <div class="event-picture-wrap" style="background-image: url(img/page3-img4.jpg);"><img src="img/page3-img4.jpg" alt="" title=""></div>
            </div>
          </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <div class="event-title">
                <h2>Велопробег</h2>
              </div>
              <div class="event-description">
                <p>Приглашаем принять участие в велопробеге...</p>
              </div>
              <div class="event-date">
                <h3>24.07.2017</h3>
              </div>
              <p><a href="" class="label label-default">Узнать больше</a></p>
            </div>
            <div class="event-picture">
              <div class="event-picture-wrap" style="background-image: url(img/page3-img6.jpg);"><img src="img/page3-img4.jpg" alt="" title=""></div>
            </div>
          </div>
        </div>

        <div class="col-xs-6 col-sm-4 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <div class="event-title">
                <h2>Thumbnail Headline</h2>
              </div>
              <div class="event-description">
                <p>Приглашаем принять участие в велопробеге...</p>
              </div>
              <div class="event-date">
                <h3>24.07.2017</h3>
              </div>
              <p><a href="" class="label label-default">Узнать больше</a></p>
            </div>
            <div class="event-picture">
              <div class="event-picture-wrap" style="background-image: url(img/page3-img4.jpg);"><img src="img/page3-img4.jpg" alt="" title=""></div>
            </div>
          </div>
        </div>
      </div>

          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <div class="event-title">
                    <h2>Велопробег</h2>
                  </div>
                  <div class="event-description">
                    <p>Приглашаем принять участие в велопробеге...</p>
                  </div>
                  <div class="event-date">
                    <h3>24.07.2017</h3>
                  </div>
                  <p><a href="" class="label label-default">Узнать больше</a></p>
                </div>
                <div class="event-picture">
                  <div class="event-picture-wrap" style="background-image: url(img/page3-img9.jpg);"><img src="img/page3-img4.jpg" alt="" title=""></div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <div class="event-title">
                    <h2>Thumbnail Headline</h2>
                  </div>
                  <div class="event-description">
                    <p>Приглашаем принять участие в велопробеге...</p>
                  </div>
                  <div class="event-date">
                    <h3>24.07.2017</h3>
                  </div>
                  <p><a href="" class="label label-default">Узнать больше</a></p>
                </div>
                <div class="event-picture">
                  <div class="event-picture-wrap" style="background-image: url(img/page3-img1.jpg);"><img src="img/page3-img1.jpg" alt="" title=""></div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <div class="event-title">
                    <h2>Велопробег</h2>
                  </div>
                  <div class="event-description">
                    <p>Приглашаем принять участие в велопробеге...</p>
                  </div>
                  <div class="event-date">
                    <h3>24.07.2017</h3>
                  </div>
                  <p><a href="" class="label label-default">Узнать больше</a></p>
                </div>
                <div class="event-picture">
                  <div class="event-picture-wrap" style="background-image: url(img/page3-img4.jpg);"><img src="img/page3-img4.jpg" alt="" title=""></div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-3">
              <div class="thumbnail">
                <div class="caption">
                  <div class="event-title">
                    <h2>Thumbnail Headline</h2>
                  </div>
                  <div class="event-description">
                    <p>Приглашаем принять участие в велопробеге...</p>
                  </div>
                  <div class="event-date">
                    <h3>24.07.2017</h3>
                  </div>
                  <p><a href="" class="label label-default">Узнать больше</a></p>
                </div>
                <div class="event-picture">
                  <div class="event-picture-wrap" style="background-image: url(img/page3-img5.jpg);"><img src="img/page3-img4.jpg" alt="" title=""></div>
                </div>
              </div>
            </div>
              */?>
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
       </div> 