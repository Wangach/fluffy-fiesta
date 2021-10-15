<?php 
include 'scripts/master.php';

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/regular.css">
    <link rel="stylesheet" href="css/solid.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
        <!--/Custom Loaders/-->
        <div class="loader">
          <div class="spinner-border icon-success" role="status">
            <span class="sr-only"></span>
          </div>
          </div>
 
        <!--navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark cus-theme">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="#">
                  <img src="images/logos/mylogo.svg" width="70px" height="70px" alt="my-logo">
              </a>
              
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Transactions <i class="fas fa-dollar-sign"></i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Matches <i class="fas fa-gamepad"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php echo $disp_name; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Limit <span class="badge badge-danger"><?php pataUno(); ?></span></a>
                      <a class="dropdown-item" href="#">My Cash <span class="badge badge-dark"><?php calculateCash(); ?></span></a>
                      <a class="dropdown-item" href="scripts/master.php?logout=1&user=<?php echo $disp_name?>">Logout <i class="fas fa-sign-out-alt"></i></a>
                    </div>
                  </li>
              </ul>
            </div>
          </nav>

          <div class="cont">
            <section id="intro">
                <header id="cusHeader">
                    <div class="row mt-3 mb-5 pt-5" id="customer-prev">
                      <div class="col-sm-4">
                        <div class="f2-card card-success">
                          <div class="f2-card-image image-1">
                            <span class="icon-info">
                              <i class="fas fa-hands-wash"></i>
                            </span>
                          </div>
                          <div class="f2-card-text">
                            <span class="date fas fa-sync"></span>
                            <h2 class="text text-success"><?php getWonGames(); ?></h2>
                            <p>Won Games</p>
                          </div><!--f2-card-text-->
                         
                        </div><!--f2-card-->
                      </div><!--/col-sm-4/-->
          
                      <div class="col-sm-4 p-2">
                        <div class="f2-card card-warning">
                          <div class="f2-card-image image-2">
                            <span class="icon-info">
                              <i class="fas fa-thumbs-down"></i>
                            </span>
                          </div>
                          <div class="f2-card-text">
                            <span class="date fas fa-sync"></span>
                            <h2 class="text text-danger"><?php getLostGames(); ?></h2>
                            <p>Lost Games</p>
                          </div><!--f2-card-text-->
                        </div><!--f2-card-->
                      </div><!--/col-sm-4/-->
          
                      <div class="col-sm-4 p-1">
                        <div class="f2-card card-danger">
                          <div class="f2-card-image image-3">
                            <span class="icon-info">
                              <i class="fas fa-plus"></i>
                            </span>
                          </div>
                          <div class="f2-card-text">
                            <span class="date fas fa-sync"></span>
                            <h2 class="text text-primary"><?php getPlayedMatches(); ?></h2>
                            <p>Total Games</p>
                          </div><!--f2-card-text-->
                        </div><!--f2-card-->
                      </div><!--/col-sm-4/-->
                    </div><!--.row-->
                </header>
            </section><!--intro-->

            <section id="sec">
                <div class="recent-games" id="shape">
                    <h2 class="section-heading">
                        My Games
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                              <a class="nav-item nav-link active" id="nav-wg-tab" data-toggle="tab" href="#nav-won" role="tab" aria-controls="nav-fair" aria-selected="true">Won Games</a>
                              <a class="nav-item nav-link" id="nav-lg-tab" data-toggle="tab" href="#nav-lost" role="tab" aria-controls="nav-looser" aria-selected="false">Lost Games</a>
                            </div>
                          </nav>
                          <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-won" role="tabpanel" aria-labelledby="nav-home-tab">
                              <div class="table-responsive">
                                <table class="table fcus-table">
                                <caption> Recent Won Matches</caption>
                                  <thead>
                                    <tr>
                                      <th scope='col'>H. Player</th>
                                      <th scope='col'>A. Player</th>
                                      <th scope='col'>H. Team</th>
                                      <th scope='col'>A. Team</th>
                                      <th scope='col' class='text text-success'>Winner</th>
                                      <th scope='col'>Date</th>
                                      <th class='text text-warning' scope='col'>Match Id</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php showRecWon(); ?>
                                  </tbody>
                                  </table>
                              </div><!--table-responsive-->
                            </div><!--tab-pane-->
                            <div class="tab-pane fade" id="nav-lost" role="tabpanel" aria-labelledby="nav-profile-tab">
                              <div class="table-responsive">
                                <table class="table fcus-table">
                                <caption> Recent Lost Matches</caption>
                                  <thead>
                                    <tr>
                                      <th scope='col'>H. Player</th>
                                      <th scope='col'>A. Player</th>
                                      <th scope='col'>H. Team</th>
                                      <th scope='col'>A. Team</th>
                                      <th scope='col' class='text text-danger'>Looser</th>
                                      <th scope='col'>Date</th>
                                      <th class='text text-warning' scope='col'>Match Id</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php showRecLost(); ?>
                                  </tbody>
                                  </table>
                              </div><!--table-responsive-->
                            </div><!--tab-pane-->
                          </div><!--tab-content-->
                        </div>
                    </div>
                </div><!--recent-games-->
            </section><!--#sec-->

            <section id="fourth">
                <div class="recent-txns" id="shape">
                    <h2 class="section-heading">
                        Recent Transactions
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                            <div class="table-responsive">
                              <table class="table table-dark f2-table" id="multichange">
                                <caption> <?php echo $disp_name; ?>'s Recent Transactions</caption>
                                  <thead class="thead-light">
                                    <tr>
                                      <th class="text text-primary" scope='col'>Transactor</th>
                                      <th class="text text-primary" scope='col'>Amount</th>
                                      <th class="text text-primary" scope='col'>Reason</th>
                                      <th class="text text-primary" scope='col'>Date</th>
                                      <th class='text text-success' scope='col'>Transaction Id</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php myRecTrans(); ?>
                                  </tbody>
                              </table>
                            </div><!--.table-responsive-->
                        </div><!--col-->
                    </div><!--row-->
                </div><!--recent-txns-->
            </section><!--#fourth-->


            <section id="fifth">
                <div class="recent-txns" id="shape">
                    <h2 class="section-heading">
                        Fifa 21 Data
                    </h2>
                    <div class="row">
                        <div class="col-md-10 col-lg-12 col-sm-10">
                            <div class="fifa-holder">
                              <h2>Games Played
                                <span>1,200</span>
                              </h2>
                            </div><!--fifa holder-->
                        </div><!--col-->
                    </div><!--row-->
                </div><!--recent-txns-->
            </section><!--#fourth-->

            <footer class="customer-footer">
                <p>
                    Made with <i class="far fa-heart crayon"></i> by Johnito. &copy; 
                    <script>
                        let day = new Date;
                        let today  = day.getFullYear();

                        document.write(today);
                    </script>
                </p>
            </footer>
          </div><!--.container-->
   
    <!--/.js files-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/index.js"></script>
</body>
</html>