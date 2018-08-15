<header id="myCarousel" class="carousel slide carousel-fade intro-slider">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->

            <?php
                $upit = "SELECT * FROM gallery INNER JOIN gallery_type ON gallery.gallery_type_id=gallery_type.id_gallery_type WHERE gallery_type.name='slider'";
                $sliderPic = executeQuery($upit);
                ?>

            <div class="carousel-inner">
                <?php
                    foreach($sliderPic as $pic):
                ?>
                <div class="item <?php if($pic->id_gallery == 1) echo 'active';?>">
                    <div class="fill" style="background-image:url('<?= $pic->path?>');"></div>
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <div class="intro-body">
                            <p class="intro-welcome">Sportwil!</p>
                            <br>
                            <h1 class="brand-heading">
                                
                                <span class="text-primary">THIS IS</span>
                                <br>SPARTA
                                
                            </h1>
                            <hr class="light">
                            <div class="page-scroll" data-scrollreveal="enter bottom after .6s">
                                <a href="#about" class="btn btn-scroll-light sink">
                                    <i class="fa fa-angle-double-down"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
               
            </div>
        </header>