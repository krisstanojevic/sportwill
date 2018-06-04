        <section id="about" class="about-3 bg-lighter text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <h2>About Us</h2>
                        <hr class="primary">
                        <p>Spectrum is a template created by Start Bootstrap Themes! With this template, you will have many different options when it comes to the style and layout of your website!</p>
                        <p>LESS files are included with the download, so if you want to customize the theme further, you have the power to do so! If you don't want to mess with LESS, the complete CSS is included as well.</p>
                    </div>
                    <div class="col-lg-3 col-lg-offset-1 col-md-6">
                        <h2>Our Team</h2>
                        <hr class="primary">
                        <div id="about-3-carousel" class="text-center">
                        <?php
                            if($konekcija){
                                $upit = "SELECT * FROM zaposleni";
                                $rezultat = $konekcija->query($upit);
                                
                                if($rezultat->rowCount() > 0) {
                                    foreach($rezultat as $red) {
                                        echo "<div class='" . $red['slika_prikaz'] . "'> 
                                        <div class='info'>
                                            <!-- Mobile Fallback Image -->
                                            <img class='img-responsive img-circle visible-xs' src='" . $red['slika'] . "' alt=''
                                            <!-- Name / Position / Social Links -->
                                            <h3>" . $red['ime'] . " " . $red['prezime'] . "</h3>
                                            <p>" . $red['pozicija'] . "</p>
                                            <ul class='list-inline'>
                                                <li><a class='light-text' href='#'><i class='fa fa-facebook fa-fw'></i></a>
                                                </li>
                                                <li><a class='light-text' href='#'><i class='fa fa-linkedin fa-fw'></i></a>
                                                </li>
                                                <li><a class='light-text' href='#'><i class='fa fa-twitter fa-fw'></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>";
                                    }

                                }
                            }


                        ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>