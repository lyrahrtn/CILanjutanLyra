<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>URI INTERIOR</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?= base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>assets/css/style-responsive.css" rel="stylesheet">

    <script src="<?= base_url()?>assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="<?= base_url()?>index.php" class="logo"><b>Uri Interior</b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- settings start -->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index#">
                            <i><img src="<?= base_url()?>assets/img/list.png" style="width:20px;height:20px;" alt=""></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 4 pending tasks</p>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <div class="task-info">
                                        <div class="desc">Booking Interior</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <div class="task-info">
                                        <div class="desc">Database Update</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <div class="task-info">
                                        <div class="desc">Product Development</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <div class="task-info">
                                        <div class="desc">Payments Sent</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="<?= base_url()?>#">See All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- settings end -->
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index#">
                            <i><img src="<?= base_url()?>assets/img/email.png" style="width:20px;height:20px;" alt=""></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">You have 5 new messages</p>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/img/friends/fr-04.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Arum Puspa</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Lyr, cepet ndang dibayar
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/img/friends/fr-08.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Aghna Zalila</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     makasii
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/img/friends/fr-01.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Enoph</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Ndang dikirim.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>index#">
                                    <span class="photo"><img alt="avatar" src="<?= base_url()?>assets/img/friends/fr-03.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ambon</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        ok lyr.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url()?>">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="<?= base_url()?>profile"><img src="<?= base_url()?>assets/img/me.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Lyra Hertin</h5>
              	  	
                  <li class="mt">
                      <a class="" href="<?= base_url()?>index.php">
                          <i><img src="<?= base_url()?>assets/img/home.png" style="width: 22px; height: 22px;"></i>
                          <span>Home</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?= base_url()?>index.php/user/gallery" >
                          <i><img src="<?= base_url()?>assets/img/gal.png" style="width: 22px; height: 22px;"></i>
                          <span>Gallery</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="<?= base_url()?>index.php/user/event" >
                          <i><img src="<?= base_url()?>assets/img/event.png" style="width: 22px; height: 22px;"></i>
                          <span>Event</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                          <a class="" href="<?= base_url()?>index.php/user/data_diri">
                          <i><img src="<?= base_url()?>assets/img/develop.png" style="width: 22px; height: 22px;"></i>
                          <span>About Developer</span>
                      </a>
                  </li>
                      
                 
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <?php
    $this->load->view($konten);
  ?>



      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              1994 - sehun.ooh
              <a href="<?= base_url()?>index#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url()?>assets/js/jquery.js"></script>
    <script src="<?= base_url()?>assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?= base_url()?>assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?= base_url()?>assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?= base_url()?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?= base_url()?>assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?= base_url()?>assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?= base_url()?>assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?= base_url()?>assets/js/sparkline-chart.js"></script>    
	<script src="<?= base_url()?>assets/js/zabuto_calendar.js"></script>	
	

	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
