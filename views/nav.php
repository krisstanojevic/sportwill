<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <div id="wrapper">

        <nav class="navbar navbar-dark navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="#page-top">
                        <span class="logo">
                        <?php 
                            $gym = executeQuery("SELECT * FROM gym");
                        ?>
                            <img src=" <?= $gym[0]->logo ?>" alt="logo">
                        </span>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <?php 
                    $navigation = executeQuery("SELECT * FROM navigation");
                ?>
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <?php foreach($navigation as $nav): ?>
                            <li class="page-scroll">
                                <a href=" <?= $nav->path ?> "> <?= $nav->name ?> </a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>