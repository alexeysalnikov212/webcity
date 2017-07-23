<!-- Contents events -->

 <div id="events">
 <div class="main-text-body">
    <h2>Самые интересные места отдыха в Краматорске ждут вас!</h2>
  </div>
  <div class="container-fluid ">
    <div class="content">
     <div lass="row">
        <?php
    foreach($events as $itemx):?>
            
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
              <p><a href="/index.php?ctrl=event&act=one&id=<?= $itemx->id; ?>" class="label label-default">Узнать больше</a></p>
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
       </div>
       </div> 