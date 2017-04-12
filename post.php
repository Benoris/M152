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

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <meta charset="UTF-8">
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
                        <li><a href="home.php">Home </a></li>
                        <li class="active"><a href="#">Post<span class="sr-only">(current)</span></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
        <h1>Images</h1>
            <form method="post" action="send.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="description">Description</label><br>
                    <textarea name="description" placeholder="Votre description..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputfile">File input</label>
                    <input type="file" name="image[]" id="inputfile" accept="image/*" multiple="">
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                </div>
                <button type="submit" name="submitimg" class="btn btn-default">Submit</button>
        <hr>
        <h1>Vidéo</h1>
                <div class="form-group">
                    <label for="descriptionvid">Description</label><br>
                    <textarea name="descriptionvid" placeholder="Votre description..."></textarea>
                </div>
                <div class="form-group">
                    <label for="inputfile">File input</label>
                    <input type="file" name="video[]" id="inputfile" accept="video/*" multiple="">
                    <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                </div>
        <button type="submit" name="submitvid" class="btn btn-default">Submit</button>
            </form>
        </div>
        <?php
        // put your code here
        ?>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
    </body>
</html>
