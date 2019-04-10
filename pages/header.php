<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BMC Admin</title>

    <style type="text/css">

    * On small screens, set height to 'auto' for sidenav and grid
================================================================================= */

@media screen and (max-width: 767px) {
  .sidebar {

    height: auto;
    
  }
  div.sidebar.col-sm-3{
        position:static;

  } 

}

/* On Larger Screens
================================================================================= */

    @media screen and (min-width: 1200px) {

        div.sidebar.col-sm-3{
            position:fixed;

        } 

    }
    </style>
   

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <script type="text/javascript">
                        <

                        
                    </script>
                </button>
                <a class="navbar-brand" href="index.php">Nepali SEWa</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong class="pull-center" style="text-decoration: underline;">Our More Product</strong>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <div class="divider">
                                
                            </div>
                            <li>
                                <a href="#">
                                    <strong>Hotel Booking System</strong>
                                </a>
                            </li>
                            <div class="divider"></div>
                            <li>
                                <a href="#">
                                    <strong>Online Quiz system System</strong>
                                </a>
                            </li>
                            <div class="divider"></div>
                            <li>
                                <a href="#">
                                    <strong>Our Official Websites</strong>
                                </a>
                            </li>


                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> login</a>
                        </li>
                        <div class="divider"></div>
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Register</a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar">
                <div class=" navbar-collapse">
                    <ul class="nav" id="side-menu">

                        
                        
                     
                        <li>
                            <a href="#"><i class="fa fa-pencil-square-o"></i> Article Manager <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="add-article.php"><i class="fa fa-plus fa-fw"></i>Add Article</a>
                                </li>
                                <li>
                                    <a href="view-article.php"><i class="fa fa-eye fa-fw"></i>View Article</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                             <li>
                            <a href="#"><i class="fa fa-medium"></i> Media Manager <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php"><i class="fa fa-plus fa-fw"></i>Add Media</a>
                                </li>
                                <li>
                                    <a href="blank.php"><i class="fa fa-eye fa-fw"></i>View Media</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                             <li>
                            <a href="#"><i class="fa fa-sticky-note"></i> Notice Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php"><i class="fa fa-plus fa-fw"></i>Add Notice</a>
                                </li>
                                <li>
                                    <a href="blank.php"><i class="fa fa-eye fa-fw"></i>View Notice</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                     
                             <li>
                            <a href="#"><i class="fa fa-flag"></i> Result Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php"><i class="fa fa-plus fa-fw"></i>Add Result</a>
                                </li>
                                <li>
                                    <a href="blank.php"><i class="fa fa-eye fa-fw"></i>View Result</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                              <li>
                            <a href="#"><i class="fa fa-comment"></i> Message Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php"><i class="fa fa-plus fa-fw"></i>Add Message</a>
                                </li>
                                <li>
                                    <a href="blank.php"><i class="fa fa-eye fa-fw"></i>View Message</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                             <li>
                            <a href="#"><i class="fa fa-header"></i> Human Resource Manager<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="blank.php"><i class="fa fa-plus fa-fw"></i>Add HR</a>
                                </li>
                                <li>
                                    <a href="blank.php"><i class="fa fa-eye fa-fw"></i>View HR</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>