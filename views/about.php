

        <section class="about-3 bg-lighter text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h2>About Us</h2>
                        <hr class="primary">
                        <p>O teretani!</p>
                    </div>
                    <div class="col-lg-3 col-lg-offset-1 col-md-6">
                        <h2>Our Team</h2>
                        <hr class="primary">
                        <div id="about-3-carousel" class="text-center">
                            <?php 
                                $employers = executeQuery("SELECT employers.*, about.*, gallery.* FROM employers INNER JOIN about ON employers.id_employers = about.employers_id INNER JOIN gallery on gallery.id_gallery = about.gallery_id INNER JOIN gallery_type on gallery.gallery_type_id = gallery_type.id_gallery_type where gallery_type.name = 'employer'");
                            ?>
                            <?php foreach($employers as $employer): ?>

                            <div class="item" style="background-image: url(<?= $employer->path ?>);">
                                <div class="info employer" data-id="<?=$employer->id_employers?>">
                                    <!-- Mobile Fallback Image -->
                                    <img class="img-responsive img-circle visible-xs" src="<?= $employer->path ?>" alt=" <?= $employer->alt ?>">
                                    <!-- Name / Position / Social Links -->
                                    <h3><?= $employer->name ?> <?= $employer->surname ?></h3>
                                    <p> <?= $employer->position ?> </p>
                                    <ul class="list-inline">
                                        <li><a class="light-text" href="<?=$employer->facebook?>"><i class="fa fa-facebook fa-fw"></i></a>
                                        </li>
                                        <li><a class="light-text" href="<?=$employer->instagram?>"><i class="fa fa-instagram fa-fw"></i></a>
                                        </li>
                                        <li><a class="light-text" href="<?=$employer->twitter?>"><i class="fa fa-twitter fa-fw"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>