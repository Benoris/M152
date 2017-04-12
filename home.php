<?php
require_once 'images.php';
$posts = getPost();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <meta charset="utf-8">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <title>Home</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="home.php">Blogzer</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="post.php">Post</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container">
            <div class="row">
                <img width="50px" height="50px" src="img/prof.png">Tony Dinh
                <h3>Bienvenue sur mon blog</h3>
                <?php
                foreach ($posts as $post) {
                    $media = getMedia($post['idPost']);
                    foreach ($media as $img) {
                        if ($img['typeMedia'] == "image/jpeg") {
                            echo '<figure>'
                            . '<img src="./img/' . $img['nomFichierMedia'] . '" alt="error" />';
                        } else if ($img['typeMedia'] == "video/mp4") {
                            echo '  <video width="320" height="240" controls>
                            <source src="./vid/' . $img['nomFichierMedia'] . '" type="video/mp4">
                            Your browser does not support the video tag.
                            </video>';
                        } else if ($img['typeMedia'] == "audio/mp3") {
                            echo '<audio controls>
                                    <source src="./aud/'.$img['nomFichierMedia'].'" type="'.$img['typeMedia'].'">
                                    Your browser does not support the audio element.
                                    </audio>';
                        }
                    }
                    echo '<figcaption>' . $post['commentaire'] . '</figcaption></figure>';
                }
                ?>
            </div>
        </div>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </body>
</html>
