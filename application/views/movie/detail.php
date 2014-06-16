<?php echo $movieDetails['title']; ?>


<div id="content">
    <div class="menubar">
        <div class="sidebar-toggler visible-xs">
            <i class="ion-navicon"></i>
        </div>

        <div class="page-title">
            Filmdetails
        </div>
    </div>

    <div class="content-wrapper">

        <pre>
            <?php print_r($movieDetails); ?>
        </pre>

        <div class="row">
            <div class="col-md-3">
                <img class="img-responsive hidden-xs hidden-sm" src="http://image.tmdb.org/t/p/original/<?php echo $movieDetails['poster_path']; ?>" >
            </div>
            <div class="col-md-9">
                <h1><?php echo $movieDetails['title']; ?></h1>
                <p>
                    <?php

                    foreach ($movieDetails['genres'] as $genres)
                    {
                        echo '<span class="label label-default">'.$genres['name'].'</span>&nbsp;';
                    }

                    ?>
                </p>
                <p>
                    <?php echo $movieDetails['overview']; ?>
                </p>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Filminformationen</b></h3>
                    </div>

                    <table class="table table-striped">
                        <tr>
                            <td>Originaltitel</td>
                            <td><b><?php echo $movieDetails['original_title']; ?></b></td>
                        </tr>
                        <tr>
                            <td>Videoqualität</td>
                            <td><span class="label label-default">1080p</span></td>
                        </tr>
                        <tr>
                            <td>Soundqualität</td>
                            <td><span class="label label-default">DTS</span></td>
                        </tr>
                        <tr>
                            <td>Dauer</td>
                            <td><b><?php echo $movieDetails['runtime']; ?></b></td>
                        </tr>
                        <tr>
                            <td>Webseite</td>
                            <td><a href="#"><?php echo $movieDetails['homepage']; ?></a></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Schauspieler</b></h3>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <th>Name</th>
                            <th>Rolle</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chris Pratt</td>
                                <td>Emmet Brickowoski</td>
                            </tr>
                            <tr>
                                <td>Will Farell</td>
                                <td>President Business</td>
                            </tr>
                            <tr>
                                <td>Morgan Freeman</td>
                                <td>Vitruvius</td>
                            </tr>
                            <tr>
                                <td>Liam Neeson</td>
                                <td>Bad Cop</td>
                            </tr>
                            <tr>
                                <td>Alison Brie</td>
                                <td>Uni-Kitty</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><b>Kommentare</b></h3>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            Das ist ein Kommentar von mir, die Videoqualität ist überhaupt nicht angemessen.
                            <p class="list-group-item-text text-right"><small>Belinda Bolliger - 12.06.2014</small></p>
                        </li>
                        <li class="list-group-item">
                            Film wurde jetzt neu heruntergeladen, und ist in anständiger Video und Tonqualität auf dem Server abgelegt.
                            <p class="list-group-item-text text-right"><small>Raphael Bolliger - 12.06.2014</small></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="https://image.tmdb.org/t/p/original/qUcmEqnzIwlwZxSyTf3WliSfAjJ.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="https://image.tmdb.org/t/p/original/kFwUy1Nu9tM4ywZAGXHoetBY2pk.jpg" alt="...">
                                </div>
                                <div class="item">
                                    <img src="https://image.tmdb.org/t/p/original/3C4tQUQ8ioT9gwE30jZB5hU9Xa3.jpg" alt="...">
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <iframe width="100%" height="auto" src="//www.youtube.com/embed/0RjoVdtE2nk?rel=0" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>