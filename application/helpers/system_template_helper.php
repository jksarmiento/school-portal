<?php
function main_header($sidebar = [])
{
  defined('BASEPATH') or exit('No direct script access allowed');
  $session = (object)get_userdata(USER);
  $ci = &get_instance();
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8" />
    <title><?= SYSTEM_NAME ?></title>
    <meta name="description" content="Admin Monitoring, COVID-19 Contact Tracing System ">
    <meta name="keywords" content="Admin Monitoring, Contracovid, COVID-19, Contact Tracing System, Contact Tracing application, Contact Tracing Software, Contact Tracing QR Code, Contact Tracing ID System, Fight against Covid-19, Filipino made, Bacolod Contact Tracing, Bacolod City, Philippines">
    <meta name="author" content="Let's Talk Information Technology Solutions">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- for ios 7 style, multi-resolution icon of 152x152 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
    <link rel="apple-touch-icon" href="<?= base_url() ?>assets/images/students_profile/5.PNG">
    <meta name="apple-mobile-web-app-title" content="Flatkit">
    <!-- for Chrome on Android, multi-resolution icon of 196x196 -->
    <meta name="mobile-web-app-capable" content="yes">

    <!-- style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/animate.css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/glyphicons/glyphicons.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/font-awesome/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/material-design-icons/material-design-icons.css" type="text/css" />

    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
    <!-- build:css <?= base_url() ?>assets/theme/styles/app.min.css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/styles/app.css" type="text/css" />
    <!-- endbuild -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/print.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" type="text/css" /> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/styles/font.css" type="text/css" />
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/Logo/dental_logo.png">
    <!-- <script src='<?= $ci->config->item('server_url') ?>src/assets/js/socket.io.js'></script> -->

    <link rel="stylesheet" href="<?php echo base_url() ?>assets/theme/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/alert.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/jquery-confirm/dist/jquery-confirm.min.css">
    <!-- MATERIAL TIME PICKER -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/theme/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css">
    <link rel="icon" href="<?php echo base_url() ?>assets/images/Logo/dental_logo.png">

  </head>

  <body>
    <div class="app" id="app">

      <!-- ############ LAYOUT START-->

      <!-- aside -->
      <div id="aside" class="app-aside modal fade nav-dropdown">
        <!-- fluid app aside -->
        <div class="left navside light-blue-700 dk" layout="column">

          <div class="navbar no-radius">
            <!-- brand -->
            <!-- <div class="navbar-brand text-center">
              <img src="<?php echo base_url() ?>assets/images/Logo/dental_logo.png" style="max-height: 80px;" circle alt=".">
            </div> -->
            <a class="navbar-brand text-center">
              <!-- <img src="<?php echo base_url() ?>assets/images/Logo/dental_logo.png" alt="."> -->
              <!-- <span class="hidden-folded inline"> -->
                <!-- <h6 ><b><?="Hello "."".ucwords(@$session->Fname)?></b></h6> -->
              <!-- </span> -->
            </a>
            <!-- / brand -->
          </div>
        
          <div flex class="hide-scroll">
            <nav class="scroll nav-light" style="color: white;">

              <ul class="nav" ui-nav>
                <li class="nav-header hidden-folded">
                  <small class="text-muted"><?= SYSTEM_MODULE?></small>
                </li>

                <li class='<?= (sidebar($sidebar, ['students'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>students">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> STUDENTS </span>
                  </a>
                </li>

                <li class="nav-header hidden-folded">
                  <small class="text-muted">ADMIN</small>
                </li>

                <li class='<?= (sidebar($sidebar, ['school'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>school">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> School </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['college'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>college">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> College </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['department'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>department">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Department </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['course'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>course">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Course </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['subject'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>subject">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Subject </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['annual_year'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>annual_year">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Annual Year </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['term'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>term">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Term </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['curriculum'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>curriculum">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Curriculum </span>
                  </a>
                </li>
                <li class='<?= (sidebar($sidebar, ['studcurr'])) ? 'active' : '' ?>'>
                  <a href="<?= base_url() ?>studcurr">
                    <span class="nav-icon">
                      <i class="fa fa-book">
                      </i>
                    </span>
                    <span class="nav-text"> Student Curriculum </span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div flex-no-shrink class="b-t">
            <div class="nav-fold">
              <a href="#">
                <span class="pull-left">
                  <?php if (!empty(@$session->picture)) : ?>
                    <div id="person-image-profile" style="background-image: url('<?php echo base_url() ?>assets/images/Logo/Profile/<?= @$session->picture . '?' . time() ?>')"></div>
                  <?php endif; ?>
                  <?php if (empty(@$session->picture)) : ?>
                    <div id="person-image-profile" style="background-image: url('<?php echo base_url() ?>assets/images/Logo/Profile/default.png<?= '?' . time() ?>')"></div>
                  <?php endif; ?>
                  <i class="on b-white bottom"></i>
                </span>
                <span class="clear hidden-folded p-x">
                  <span class="block _500"><?= ucwords(@$session->first_name . ' ' . @$session->middle_name[0] . '. ' . @$session->last_name) ?></span>
                  <small class="block text-muted"><i class="fa fa-circle text-success m-r-sm"></i>ONLINE</small>
                </span>
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- / -->
      <!-- content -->
      <div id="content" class="app-content box-shadow-z0" role="main">
       
        <div class="app-header white box-shadow">
         
          <div class="navbar">

            <!-- <div class="navbar-item pull-left h5">
              <span>&nbsp;<b><?=SYSTEM_NAME." - ". ucwords(@$session->Fname." ".@$session->Lname."  (".ucwords(@$session->User_type).")")?></b></span>
            </div> -->

            <!-- Open side - Naviation on mobile -->
            <a data-toggle="modal" data-target="#aside" class="navbar-item pull-left hidden-lg-up">
              <i class="material-icons">&#xe5d2;</i>
            </a>
            <!-- / -->
                  
            <!-- Page title - Bind to $state's title -->
            <div class="navbar-item pull-left h5" ng-bind="$state.current.data.title" id="pageTitle">
              <span class="text-muted text-xs">&nbsp;<?= @$session->first_name . ' ' . @$session->middle_name[0] . '. ' . @$session->last_name; ?></span>
            </div>

            <!-- navbar right -->
            <ul class="nav navbar-nav pull-right">
              <li class="nav-item dropdown pos-stc-xs" style="margin-top: 20px">
                  <h5><b><?=date('M d, Y - h:i A');?></b></h5>
              </li>
              
              <li class="nav-item dropdown pos-stc-xs">
                <a class="nav-link" href="" data-toggle="dropdown">
                  <i class="material-icons"><i class="fa fa-bell"></i></i>
                  <span class="label label-sm up danger" style="display:none;" id="notif-count"></span>
                </a>
                <!-- dropdown -->
                <div class="dropdown-menu pull-right w-xl animated fadeInUp no-bg no-border no-shadow">
                  <div class="scrollable" style="max-height: 320px">
                    <ul class="list-group list-group-gap m-a-0" id="notif-lists">

                    </ul>
                  </div>
                </div>
                <!-- / dropdown -->
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link clear" href data-toggle="dropdown">
                  <span class="avatar w-32">
                    <?php if (!empty(@$session->picture)) : ?>
                      <img src="<?php echo base_url() ?>assets/images/Logo/Profile/<?= @$session->picture . '?' . time() ?>" alt="<?= base_url() ?>">
                    <?php endif; ?>
                    <?php if (empty(@$session->picture)) : ?>
                      <img src="<?php echo base_url() ?>assets/images/Logo/Profile/default.png<?= '?' . time() ?>" alt="<?= base_url() ?>">
                    <?php endif; ?>
                    <i class="on b-white bottom"></i>
                  </span>
                </a>
                <div ui-include="'<?= base_url() ?>assets/theme/views/blocks/dropdown.user.php'"></div>
              </li>
              <li class="nav-item hidden-md-up">
                <a class="nav-link" data-toggle="collapse" data-target="#collapse">
                  <i class="material-icons">&#xe5d4;</i>
                </a>
              </li>
            </ul>
            <!-- / navbar right -->

          </div>
        </div>
        <div class="app-footer">
          <div class="p-a text-xs">
            <div class="pull-right text-muted">
              <strong><?= SYSTEM_NAME ?></strong> <?= FOOTER_NAME ?> <span class="hidden-xs-down"></span>
              <a ui-scroll-to="content"><i class="fa fa-long-arrow-up p-x-sm"></i></a>
            </div>
            <div class="nav">
            </div>
          </div>
        </div>
        <div ui-view class="app-body" id="view">



        <?php
      }

      function main_footer()
      {
        $ci = &get_instance();
        ?>
        </div>
      </div>
      <!-- / -->

      <!-- ############ LAYOUT END-->

    </div>
    <!-- build:js scripts/app.html.js -->
    <script type="text/javascript">
      var base_url = '<?= base_url() ?>';
    </script>
    <script>
      var baseUrl = '<?php echo base_url(); ?>';
    </script>

    <!-- jQuery -->
    <script src="<?= base_url() ?>assets/theme/libs/jquery/jquery/dist/jquery.js"></script>
    <script src="<?= base_url() ?>assets/js/service.js"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url() ?>assets/theme/libs/jquery/tether/dist/js/tether.min.js"></script>
    <script src="<?= base_url() ?>assets/theme/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
    <!-- core -->
    <script src="<?= base_url() ?>assets/theme/libs/jquery/underscore/underscore-min.js"></script>
    <script src="<?= base_url() ?>assets/theme/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
    <script src="<?= base_url() ?>assets/theme/libs/jquery/PACE/pace.min.js"></script>

    <script src="<?= base_url() ?>assets/theme/html-version/scripts/config.lazyload.js"></script>

    <script src="<?= base_url() ?>assets/theme/html-version/scripts/palette.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-load.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-jp.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-include.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-device.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-form.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-nav.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-screenfull.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-scroll-to.js"></script>
    <script src="<?= base_url() ?>assets/theme/html-version/scripts/ui-toggle-class.js"></script>


    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script> -->
    <script src="<?php echo base_url() ?>assets/theme/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>

    <!-- load global js -->
    <script src="<?= base_url() ?>assets/js/global.js"></script>

    <script src="<?= base_url() ?>assets/theme/html-version/scripts/app.js"></script>
    <script src="<?= base_url() ?>assets/js/noPostBack.js"></script>
    <!-- ajax -->
    <script src="<?= base_url() ?>assets/theme/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
    <script src="<?= base_url() ?>assets/js/alert.js"></script>
    <script src="<?= base_url() ?>assets/theme/jquery-confirm/dist/jquery-confirm.min.js"></script>
    <!-- endbuild -->
    <!-- MATERIAL TIME PICKER -->
    <script type="text/javascript" src="<?= base_url() ?>assets/theme/bootstrap-material-datetimepicker/js/moment-with-locales.min.js"></script>
    <script src="<?= base_url() ?>assets/theme/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="<?= base_url() ?>assets/js/sound.js"></script>
  </body>

  </html>

<?php
      }
