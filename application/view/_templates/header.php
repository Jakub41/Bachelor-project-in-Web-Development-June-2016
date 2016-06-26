<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>css/cloud-admin.css" >
    <link rel="stylesheet" type="text/css"  href="<?php echo URL;?>css/themes/default.css" id="skin-switcher" >
    <link rel="stylesheet" type="text/css"  href="<?php echo URL;?>css/responsive.css" >

    <link href="<?php echo URL;?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- DATE RANGE PICKER -->
    <link rel="stylesheet" type="text/css" href="<?php echo URL;?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>

</head>
<?php
/*
header("Cache-Control: no-cache, must-revalidate");
          header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
          header("Content-Type: application/xml; charset=utf-8");*/
		  ?>
<body>
    <!-- HEADER -->
    <header class="navbar clearfix navbar-fixed-top" id="header">
        <div class="container">
                <div class="navbar-brand">
                    <!-- COMPANY LOGO -->
                    <a href="<?php echo URL;?>dashboard/index">
                        <img src="<?php echo URL;?>img/logo/frugt_box2.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
                        
                    </a>
                    <!-- /COMPANY LOGO -->
                    <!-- TEAM STATUS FOR MOBILE -->
                    <div class="visible-xs">
                        <a href="#" class="team-status-toggle switcher btn dropdown-toggle">
                            <i class="fa fa-users"></i>
                        </a>
                    </div>
                    <!-- /TEAM STATUS FOR MOBILE -->
                    <!-- SIDEBAR COLLAPSE -->
                    <div id="sidebar-collapse" class="sidebar-collapse btn">
                        <i class="fa fa-bars"
                            data-icon1="fa fa-bars"
                            data-icon2="fa fa-bars" ></i>
                    </div>
                    <!-- /SIDEBAR COLLAPSE -->
                </div>
                <!-- NAVBAR LEFT -->

                <!-- /NAVBAR LEFT -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!--<li class="dropdown" id="header-notification">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <span class="badge">7</span>

                        </a>
                        <ul class="dropdown-menu notification">
                            <li class="dropdown-title">
                                <span><i class="fa fa-bell"></i> 7 Notifications</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="fa fa-user"></i></span>
                                    <span class="body">
                                        <span class="message">5 users online. </span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>Just now</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-primary"><i class="fa fa-comment"></i></span>
                                    <span class="body">
                                        <span class="message">Martin commented.</span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>19 mins</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-lock"></i></span>
                                    <span class="body">
                                        <span class="message">DW1 server locked.</span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>32 mins</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="fa fa-twitter"></i></span>
                                    <span class="body">
                                        <span class="message">Twitter connected.</span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>55 mins</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-danger"><i class="fa fa-heart"></i></span>
                                    <span class="body">
                                        <span class="message">Jane liked. </span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>2 hrs</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span>
                                    <span class="body">
                                        <span class="message">Database overload.</span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>6 hrs</span>
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">See all notifications <i class="fa fa-arrow-circle-right"></i></a>
                            </li>
                        </ul>
                    </li>-->
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!--<li class="dropdown" id="header-message">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope"></i>
                        <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu inbox">
                            <li class="dropdown-title">
                                <span><i class="fa fa-envelope-o"></i> 3 Messages</span>
                                <span class="compose pull-right tip-right" title="Compose message"><i class="fa fa-pencil-square-o"></i></span>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/avatars/avatar2.jpg" alt="" />
                                    <span class="body">
                                        <span class="from">Jane Doe</span>
                                        <span class="message">
                                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...
                                        </span>
                                        <span class="time">
                                            <i class="fa fa-clock-o"></i>
                                            <span>Just Now</span>
                                        </span>
                                    </span>

                                </a>
                            </li>

                            <li class="footer">
                                <a href="#">See all messages <i class="fa fa-arrow-circle-right"></i></a>
                            </li>
                        </ul>
                    </li>-->
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <!--<li class="dropdown" id="header-tasks">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-tasks"></i>
                        <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu tasks">
                            <li class="dropdown-title">
                                <span><i class="fa fa-check"></i> 6 tasks in progress</span>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="header clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">60%</span>
                                    </span>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                        <span class="sr-only">60% Complete</span>
                                      </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="header clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">25%</span>
                                    </span>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                        <span class="sr-only">25% Complete</span>
                                      </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="header clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">40%</span>
                                    </span>
                                    <div class="progress progress-striped">
                                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                                        <span class="sr-only">40% Complete</span>
                                      </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="header clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">70%</span>
                                    </span>
                                    <div class="progress progress-striped active">
                                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                        <span class="sr-only">70% Complete</span>
                                      </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="header clearfix">
                                        <span class="pull-left">Software Update</span>
                                        <span class="pull-right">65%</span>
                                    </span>
                                    <div class="progress">
                                      <div class="progress-bar progress-bar-success" style="width: 35%">
                                        <span class="sr-only">35% Complete (success)</span>
                                      </div>
                                      <div class="progress-bar progress-bar-warning" style="width: 20%">
                                        <span class="sr-only">20% Complete (warning)</span>
                                      </div>
                                      <div class="progress-bar progress-bar-danger" style="width: 10%">
                                        <span class="sr-only">10% Complete (danger)</span>
                                      </div>
                                    </div>
                                </a>
                            </li>
                            <li class="footer">
                                <a href="#">See all tasks <i class="fa fa-arrow-circle-right"></i></a>
                            </li>
                        </ul>
                    </li>-->
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown user" id="header-user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!--<img alt="" src="<?php //echo URL; ?>img/avatars/avatar3.jpg" />-->
                            <span class="username"><?php echo ($_SESSION['usertype']=="admin" ? "ADMIN":"USER"); ?></span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
							if($_SESSION['usertype']=="user")
							{
							?>
							<li><a href="<?php echo URL; ?>dashboard/displayuserinfo"><i class="fa fa-user"></i> My Profile</a></li><?php
							}else
						    {
							?>
						<li><a href="javascript:void(0);"><i class="fa fa-user"></i> My Profile</a></li>
							<?php
							}
							
							?>
                            <li><a href="#"><i class="fa fa-cog"></i> Account Settings</a></li>
                            <li><a href="#"><i class="fa fa-eye"></i> Privacy Settings</a></li>

							<?php
							if($_SESSION['usertype']=="admin"){
							?>
							<li><a href="<?php echo URL;  ?>dashboard/logout"><i class="fa fa-power-off"></i> Log Out</a></li>               <?php }else if($_SESSION['usertype']=="user")
							{?>
				<li><a href="<?php echo URL;  ?>login/logoutuser"><i class="fa fa-power-off"></i> Log Out</a></li>
							<?php
							}
							?>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
        </div>

        <!-- TEAM STATUS -->
        <div class="container team-status" id="team-status">
          <div id="scrollbar">
            <div class="handle">
            </div>
          </div>
          <div id="teamslider">
              <ul class="team-list">
                <li class="current">
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar3.jpg" alt="" />
                  </span>
                  <span class="title">
                    You
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 35%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 20%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 10%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">6</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">3</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">1</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar1.jpg" alt="" />
                  </span>
                  <span class="title">
                    Max Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 15%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 40%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 20%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">2</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">8</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">4</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar2.jpg" alt="" />
                  </span>
                  <span class="title">
                    Jane Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 65%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 10%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 15%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">10</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">3</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">4</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar4.jpg" alt="" />
                  </span>
                  <span class="title">
                    Ellie Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 5%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 48%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 27%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">1</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">6</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">2</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar5.jpg" alt="" />
                  </span>
                  <span class="title">
                    Lisa Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 21%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 20%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 40%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">4</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">5</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">9</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar6.jpg" alt="" />
                  </span>
                  <span class="title">
                    Kelly Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 45%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 21%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 10%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">6</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">3</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">1</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar7.jpg" alt="" />
                  </span>
                  <span class="title">
                    Jessy Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 7%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 30%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 10%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">1</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">6</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">2</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
                <li>
                  <a href="javascript:void(0);">
                  <span class="image">
                      <img src="<?php echo URL; ?>img/avatars/avatar8.jpg" alt="" />
                  </span>
                  <span class="title">
                    Debby Doe
                  </span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" style="width: 70%">
                        <span class="sr-only">35% Complete (success)</span>
                      </div>
                      <div class="progress-bar progress-bar-warning" style="width: 20%">
                        <span class="sr-only">20% Complete (warning)</span>
                      </div>
                      <div class="progress-bar progress-bar-danger" style="width: 5%">
                        <span class="sr-only">10% Complete (danger)</span>
                      </div>
                    </div>
                    <span class="status">
                        <div class="field">
                            <span class="badge badge-green">13</span> completed
                            <span class="pull-right fa fa-check"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-orange">7</span> in-progress
                            <span class="pull-right fa fa-adjust"></span>
                        </div>
                        <div class="field">
                            <span class="badge badge-red">1</span> pending
                            <span class="pull-right fa fa-list-ul"></span>
                        </div>
                    </span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        <!-- /TEAM STATUS -->
    </header>
    <!--/HEADER -->

    <!-- PAGE -->
    <section id="page">
                <!-- SIDEBAR -->
                <div id="sidebar" class="sidebar sidebar-fixed">
                    <div class="sidebar-menu nav-collapse">
                        <div class="divide-20"></div>
                        <!-- SEARCH BAR -->
                        <!--<div id="search-bar">
                            <input class="search" type="text" placeholder="Search"><i class="fa fa-search search-icon"></i>
                        </div>
-->                        <!-- /SEARCH BAR -->

                        <!-- SIDEBAR MENU -->
                        <ul>
                            <li>
                                <a href="<?php echo URL;?>dashboard">
                                    <i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">Dashboard</span>
                                </a>
                            </li>
                            <!-- <li class="has-sub">
                                <a href="javascript:;" class="">
                                <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">UI Features</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub">
                                    <li><a class="" href="elements.html"><span class="sub-menu-text">Elements</span></a></li><li><a class="" href="notifications.html"><span class="sub-menu-text">Hubspot Notifications</span></a></li>
                                    <li><a class="" href="buttons_icons.html"><span class="sub-menu-text">Buttons & Icons</span></a></li>
                                    <li><a class="" href="sliders_progress.html"><span class="sub-menu-text">Sliders & Progress</span></a></li>
                                    <li><a class="" href="typography.html"><span class="sub-menu-text">Typography</span></a></li>
                                    <li><a class="" href="tabs_accordions.html"><span class="sub-menu-text">Tabs & Accordions</span></a></li>
                                    <li><a class="" href="treeview.html"><span class="sub-menu-text">Treeview</span></a></li>
                                    <li><a class="" href="nestable_lists.html"><span class="sub-menu-text">Nestable Lists</span></a></li>
                                    <li class="has-sub-sub">
                                        <a href="javascript:;" class=""><span class="sub-menu-text">Third Level Menu</span>
                                        <span class="arrow"></span>
                                        </a>
                                        <ul class="sub-sub">
                                            <li><a class="" href="#"><span class="sub-sub-menu-text">Item 1</span></a></li>
                                            <li><a class="" href="#"><span class="sub-sub-menu-text">Item 2</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> -->
							<?php if($_SESSION['usertype']=="admin"):?>
                            <li class="has-sub">
                                <a href="javascript:;" class="">
                                <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">Recipe</span>
                                <span class="arrow"></span>
                                </a>

                                <ul class="sub">
                                    <li><a class="" href="<?php echo URL; ?>recipe/new_recipe"><span class="sub-menu-text">Add New Recipe</span></a></li>

                                    <li><a class="" href="<?php echo URL; ?>recipe/index"><span class="sub-menu-text">View All Recipe</span></a></li>

                                    <li><a class="" href="<?php echo URL; ?>recipe/category"><span class="sub-menu-text">Category</span></a></li>

                                    <li><a class="" href="<?php echo URL; ?>recipe/sub_category"><span class="sub-menu-text">Sub-Category</span></a></li>
                                    <li><a class="" href="<?php echo URL; ?>recipe/recipecomment"><span class="sub-menu-text">Recipe Comments</span></a></li>
                                </ul>

                            </li>
							<?php
								endif;
								?>
                            <li class="has-sub">
                                <a href="javascript:;" class="">
                                <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">Blog</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub">

                                    <li><a class="" href="<?php echo URL; ?>blog/index"><span class="sub-menu-text">Posts</span></a></li>

                                    <li><a class="" href="<?php echo URL; ?>blog/new_post"><span class="sub-menu-text">New Post</span></a></li>
								<?php if($_SESSION['usertype']=="admin"):?>	
<li><a class="" href="<?php echo URL; ?>blog/blogcomment"><span class="sub-menu-text">Blog Comment</span></a></li>
<?php
  endif;
?>

                                </ul>
                            </li>
                            <li class="has-sub">
                                <a href="javascript:;" class="">
                                <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">Orders</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub">
                                    <li><a class="" href="<?php echo URL; ?>order/all_orders"><span class="sub-menu-text">All Orders</span></a></li>

                                    <li><a class="" href="<?php echo URL; ?>order/delivered_order"><span class="sub-menu-text">Delivered</span></a></li>

                                    <li><a class="" href="<?php echo URL; ?>order/pending_order"><span class="sub-menu-text">Pending</span></a></li>

                                    <li><a class="" href="javascript:void(0);"><span class="sub-menu-text">Paid</span></a></li>

                                    <li><a class="" href="javascript:void(0);"><span class="sub-menu-text">UnPaid</span></a></li>

                                </ul>
                            </li>
                            <?php if($_SESSION['usertype']=="admin"):?>
							<li>
                                <a href="<?php echo URL;?>user/index">
                                    <i class="fa fa-book fa-fw"></i> <span class="menu-text">Users</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);">
                                    <i class="fa fa-book fa-fw"></i> <span class="menu-text">LogBook</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo URL;?>dashboard/newsletter">
                                    <i class="fa fa-book fa-fw"></i> <span class="menu-text">NewsLetter</span>
                                </a>
                            </li>

							<li class="has-sub">
                                <a href="javascript:;" class="">
                                <i class="fa fa-bookmark-o fa-fw"></i> <span class="menu-text">Message</span>
                                <span class="arrow"></span>
                                </a>
                                <ul class="sub">
                                    <li>
                                <a href="<?php echo URL;?>dashboard/message">
                                    <i class=""></i> <span class="sub-menu-text">View Message</span>
                                </a>
                            </li>
							<li>
                                <a href="<?php echo URL;?>dashboard/addmessage">
                                    <i class=""></i> <span class="sub-menu-text">Add Message</span>
                                </a>
                            </li>
                            <?php endif;?>

                                </ul>
                            </li>


                        </ul>
                        <!-- /SIDEBAR MENU -->
                    </div>
                </div>
                <!-- /SIDEBAR -->
