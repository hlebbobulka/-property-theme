<?php
/*
Template Name: Single house
Template Post Type: houses
*/
?>

    <?php get_header(); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/swipebox/css/swipebox.css"/>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/swipebox/js/jquery.swipebox.js"></script>
      <div class="container-fluid px-0">
        <div id="gallery">
          <a href="<?php echo the_post_thumbnail_url(); ?>" class="swipebox">
            <img src="<?php echo the_post_thumbnail_url(); ?>" style="height: 400px;"/>
          </a>
          <?php if ( get_field( 'img0') ) { ?>
          <a href="<?php the_field( 'img0' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img0' ); ?>"  style="height: 400px;" />
          </a>
          <?php } ?>
          <?php if ( get_field( 'img1') ) { ?>
            <a href="<?php the_field( 'img1' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img1' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img2') ) { ?>
            <a href="<?php the_field( 'img2' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img2' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img3') ) { ?>
            <a href="<?php the_field( 'img3' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img3' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img4') ) { ?>
            <a href="<?php the_field( 'img4' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img4' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img5') ) { ?>
            <a href="<?php the_field( 'img5' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img5' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img6') ) { ?>
            <a href="<?php the_field( 'img6' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img6' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img7') ) { ?>
            <a href="<?php the_field( 'img7' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img7' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img8') ) { ?>
            <a href="<?php the_field( 'img8' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img8' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img9') ) { ?>
            <a href="<?php the_field( 'img9' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img9' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img10') ) { ?>
            <a href="<?php the_field( 'img10' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img10' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img11') ) { ?>
            <a href="<?php the_field( 'img11' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img11' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img12') ) { ?>
            <a href="<?php the_field( 'img12' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img12' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img13') ) { ?>
            <a href="<?php the_field( 'img13' ); ?>" class="swipebox">
          	<img src="<?php the_field( 'img13' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
          <?php if ( get_field( 'img14') ) { ?>
            <a href="<?php the_field( 'img14' ); ?>" class="swipebox">
            	<img src="<?php the_field( 'img14' ); ?>"  style="height: 400px;" />
            </a>
          <?php } ?>
        </div>
      </div>
      <script>
        $('#gallery').slick({
          dots: false,
          infinite: true,
          arrows: true,
          speed: 300,
          slidesToShow: 1,
          centerMode: true,
          variableWidth: true,
          adaptiveHeight: true
        });
        ( function( $ ) {
      	   $( '.swipebox' ).swipebox();
        })( jQuery );
      </script>
  <div class="container">
    <div class="row">
      <div class="col-12 mainblock px-2" data-lat="<?php the_field( 'широта' ); ?>" data-lon="<?php the_field( 'долгота' ); ?>" >
        <div class="card item obj mb-3">

          <div class="row card-body">
            <div class="col-md-6 col-lg-5">
              <p class="obj-info ">
                <span class="border-r pr-2"> <?php the_field( 'площадь' ); ?> м² </span>
                <span class="border-r px-2"> <?php the_field('сотки'); ?> сот. </span>
                <span class="border-r px-2"> <?php the_field( 'этажей' ); ?> эт. </span>
                <span class="pl-2"> <?php the_field('км_от_мкад'); ?> км </span>
              </p>
              <p>
                <a href="#map">
                  <small>
                    <i class="ion-ios-location"></i>
                    <?php if ( get_field( 'шоссе') ) { ?>
                      <?php the_field('шоссе'); ?> ш.,
                    <?php } ?>
                    <?php if ( get_field( 'область') ) { ?>
                      <?php the_field( 'область' ); ?> обл.,
                    <?php } ?>
                    <?php if ( get_field( 'поселок') ) { ?>
                      <?php the_field( 'поселок' ); ?>,
                    <?php } ?>
                    <?php if ( get_field( 'адрес') ) { ?>
                      <?php the_field( 'адрес' ); ?>
                    <?php } ?>
                  </small>
                </a>
              </p>
            </div>
            <div class=" col-lg-3 d-md-none d-none d-lg-block"></div>
            <div class="col-md-6 col-lg-4">
                <p class="price price-obj mb-2"><?php echo number_format(get_field('price'), 0, ',', ' ')  ?>
                    <span>
                      <?php if (is_numeric ( get_field('price') )): ?>
                        руб.
                        <?php else: ?>
                        <?php endif ?>
                    </span>
                  </p>
                  <?php if ( get_field( 'торг') ) { ?>
                    <p class="text-center p-0 mb-2">
                      <small>Торг уместен</small>
                    </p>
                  <?php } ?>
                  <?php  if( $_GET["secret"] == get_field( 'secret' )) : ?>
                    <a href="tel:<?php the_field( 'phone' ); ?>" class="btn btn-c-primary circled btn-block">
                      <?php
                        $str = strval(get_field( 'phone' ));
                        $str = '+'.substr($str, 0, 1).'('.substr($str, 1, 3).')'.substr($str, 4, 3).'-'.substr($str, 7, 2).'-'.substr($str, 9, 2);
                        echo $str;
                      ?>
                    </a>
                  <?php else : ?>
                    <!-- <button class="btn btn-c-primary circled btn-block" data-toggle="modal" data-target="#getPhone" ><i class="icon ion-android-call"></i> Телефон владельца</button> -->
                    <a href="<?php the_field( 'buy_link' ); ?>" target="_blank" class="btn btn-c-primary circled btn-block"><i class="icon ion-android-call"></i> Телефон владельца</a>
                  <?php endif ?>
              <div class="row">
                <?php if ( get_field( 'call_from') && get_field( 'call_to')  ) { ?>
                  <div class="col-12 text-center mt-2">
                    <small>Звонить с: <b><?php the_field( 'call_from' ); ?></b></small>
                    <small>до: <b><?php the_field( 'call_to' ); ?></b></small>
                  </div>
                <?php } ?>
                </div>
              </div>
          </div>
          <div class="row card-body productInfo py-2 px-3">
            <div class="col-md-12 col-lg-8">

              <h2><?php the_title(); ?></h2>
              <div class="ya-share2" data-services="vkontakte,twitter,facebook,gplus" data-counter></div>
              <div class="row my-3">
                <div class="col-12 col-sm-6">
                  <h5>Удобства</h5>
                  <table class="table  table-sm">
                    <tbody>
                      <?php if ( get_field( 'интернет') ) { ?>
                          <tr>
                            <td>Интернет:</td>
                            <td><?php the_field( 'интернет' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'телефония') ) { ?>
                          <tr>
                            <td>Телефония:</td>
                            <td><?php the_field( 'телефония' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'телевидение') ) { ?>
                          <tr>
                            <td>Телевидение:</td>
                            <td><?php the_field( 'телевидение' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'материал') ) { ?>
                          <tr>
                            <td>Материал постройки:</td>
                            <td><?php the_field( 'материал' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'спальни') ) { ?>
                          <tr>
                            <td>Спальни:</td>
                            <td><?php the_field( 'спальни' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'охрана') ) { ?>
                          <tr>
                            <td>Охрана:</td>
                            <td><?php the_field( 'охрана' ); ?></td>
                          </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="col-12 col-sm-6">
                  <h5>Коммуникации</h5>
                  <table class="table  table-sm">
                    <tbody>
                      <?php if ( get_field( 'водоснабжение') ) { ?>
                          <tr>
                            <td>Водоснабжение:</td>
                            <td><?php the_field( 'водоснабжение' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'Газ') ) { ?>
                          <tr>
                            <td>Газ:</td>
                            <td><?php the_field( 'газ' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'канализация') ) { ?>
                          <tr>
                            <td>Канализация:</td>
                            <td>  <?php the_field( 'канализация' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'электричество') ) { ?>
                          <tr>
                            <td>Электричество:</td>
                            <td><?php the_field( 'электричество' ); ?></td>
                          </tr>
                      <?php } ?>
                      <?php if ( get_field( 'отопление') ) { ?>
                          <tr>
                            <td>Отопление:</td>
                            <td><?php the_field( 'отопление' ); ?></td>
                          </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>

              </div>
              <hr/>
              <?php the_post(); the_content(); ?>
            </div>
            <div class="col-md-12 col-lg-4">
              <!-- Ads -->
            </div>
          </div>
          <div class="col-12 px-0" id="pointonmap">
            <div id="map"></div>
          </div>
        </div>
    </div>

    <div class="row px-3 py-5 ">
      <div class="col-12 px-2">
           <h2 class="pb-3 fw-slim h1">Последние предложения</h2>
      </div>
        <?php $loop = new WP_Query(array( 'post_type' => array('houses-sale'),'showposts' => '3')); if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
            <?php get_template_part( 'loop-templates/houses-sale', get_post_format() ); ?>
            <?php endwhile; ?>
            <?php endif; wp_reset_postdata(); ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 equalheight px-2 mb-3">
              <div class="card item">
                  <div class="card-body text-center d-flex flex-column justify-content-around">
                    <i class="pointicon flaticon-house-1" id="findyours"></i><br/>
                    <h5 class="card-title fw-slim">Найдите свой дом</h5>
                    <p class="card-text">используя гибкие фильтры</p>
                    <a href="/rent/houses" class="btn circled btn-active btn-c-primary">Все предложения</a>
                  </div>
                </div>
            </div>
    </div>
  </div>
             <script>
             	function initMap(){
                var cords = [];
                $.each($('.mainblock'),function(){
                   var that = $(this);
                   cords.push(that.attr('data-lon'),that.attr('data-lat'));
                 }
                );
                ymaps.ready(function () {
                 var myMap = new ymaps.Map('map', {
                         center: cords,
                         zoom: 15,
                         controls: [],
                       });
                       myMap.controls
                       .add('zoomControl')
                       .add('typeSelector');
                     myPlacemark = new ymaps.Placemark(myMap.getCenter(), {}, {
                         iconLayout: 'default#image',
                         iconImageHref: '/wp-content/themes/property-theme/img/point.png',
                         iconImageSize: [25, 48],
             						iconImageOffset: [-11, -28]
                     }), myMap.geoObjects.add(myPlacemark)})
             		};

               	$(document).ready(function() {
               	  $(function() {

                    initMap();
               	  });
               	});
              </script>
              <style>
             		 html, .map, #map {
             				 width: 100%; height: 100%; padding: 0; margin: 0;
             		 }
             		 div#map {
             				height: 30vh;
             				z-index: 22;
             				position: absolute;
             		}
              </style>

   </div>
            <?php get_footer(); ?>
                <!-- Ваш файл footer.php -->
