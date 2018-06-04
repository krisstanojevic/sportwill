<section class="clients bg-dark">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2>Our Clients</h2>
                        <hr class="light">
                    </div>
                    <div class="col-lg-12">
                        <ul id="clients-carousel" class="text-center">
                            <?php
                                $upit = "SELECT * FROM sponsors INNER JOIN gallery ON sponsors.gallery_id=gallery.id_gallery INNER JOIN gallery_type ON gallery.gallery_type_id=gallery_type.id_gallery_type WHERE gallery_type.name='sponsor'";
                                $sponsors = executeQuery($upit);
                                foreach($sponsors as $sponsor):
                            ?>
                            <li class="item">
                                <img class="img-responsive" src=" <?= $sponsor->path ?>" alt="<?= $sponsor->alt ?>">
                            </li>
                                <?php endforeach; ?>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </section>