<?php
    $query = "SELECT * FROM gallery g INNER JOIN gallery_type gt ON g.gallery_type_id = gt.id_gallery_type WHERE gt.name NOT IN ('slider','sponsor','employer')";
    $results = executeQuery($query);

    $query_type = "SELECT DISTINCT gt.name FROM gallery g INNER JOIN gallery_type gt ON g.gallery_type_id = gt.id_gallery_type WHERE gt.name NOT IN ('slider','sponsor','employer')";
    $types = executeQuery($query_type);
?>

<section id="gallery" class="portfolio-1 bg-lighter">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Our Work</h2>
                        <hr class="primary">
                        <ul class="list-inline" id="filters">
                            <li>
                                <button data-filter="*" type="button" class="btn btn-link">All</button>
                            </li>
                            <?php foreach($types as $result) : ?>
                            <li>
                                <button data-filter=".<?= $result->name?>" type="button" class="btn btn-link"><?= $result->name?></button>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>
                </div>
                <div class="row" data-scrollreveal="enter bottom over 1.5s">
                    <div class="isotope">
                        <?php foreach($results as $result) : ?>
                        <div class="col-sm-4 portfolio-item <?= $result->name?>">
                            <a href="<?= $result->path?>" class="portfolio-link <?=$result->class?>">
                                <div class="caption">
                                    <div class="caption-content">
                                        <i class="<?=$result->class_i?> fa-3x"></i>
                                    </div>
                                </div>
                                <img src="<?=$result->path_secondary?>" class="img-centered" alt="<?= $result->alt?>" />
                            </a>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </section>