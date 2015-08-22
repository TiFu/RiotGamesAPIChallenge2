<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/fonts.css" rel="stylesheet" type="text/css"/>
        <title>Riot Project v2 -  Start the game</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/custom.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Riot Project v2</a>
                </div>
                <!-- Search -->
                <form action="result.php" method="get" class="navbar-form navbar-left hidden-sm hidden-xs" role="search">
                    <div class="form-group">
                        <input class="form-control" style="width:250px;" placeholder="Item Name ..." type="text">
                    </div>
                    <button type="submit" class="btn btn-danger">Search</button>
                </form>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">                  
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="game.php">Game</a>
                        </li>
                        <li>
                            <a href="score.php">High Score</a>
                        </li>      
                        <li>
                            <a href="export.php">Export Data</a>
                        </li>
                        <li>
                            <a href="about.php">About</a>
                        </li>                       
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>

        <!-- Page Content -->
        <div class="container topmargin">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Game</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 backgroundimg col-centered">
                    <form action="" method="get" class="form-horizontal" role="search" style="padding-top:100px;">
                        <div class="form-group">
                            <p class="col-sm-2 text-center">
                                Your Name
                            </p>
                            <div class="col-sm-3">
                                <input style="width:200px;margin:0 auto;" placeholder="Enter Your Name" class="form-control" type="text" required="">
                            </div>
                            <p class="col-sm-3 text-center" style="padding-top:10px;">
                                Champion
                            </p>
                            <div class="col-sm-2">
                                <select style="width:200px;margin:0 auto;" class="form-control" required="">
                                    <option style="background: url('images/chmpions/Zed.png') no-repeat;background-size: 25px 25px;" class="selectoptioon">Zed</option>
                                </select>
                            </div>   
                             <div class="col-sm-12 text-center" style="padding-top:50px;">
                                 <button style="width:200px;margin:0 auto;" type="submit    " class="btn btn-success">Start Game</button>
                            </div>                             
                        </div>
                    </form>
                </div>
            </div>
            <hr />

            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p>Copyright &copy; Riot Project v2</p>
                    </div>
                </div>
                <!-- /.row -->
            </footer>

        </div>
        <!-- /.container -->

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <script>
            $('[data-toggle="popover"]').popover({trigger: 'hover', 'placement': 'top'});
        </script>
    </body>

</html>