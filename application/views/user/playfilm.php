<header id="main-header">
   <div class="main-header">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <a href="#" class="navbar-toggler c-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <div class="navbar-toggler-icon" data-toggle="collapse">
                        <span class="navbar-menu-icon navbar-menu-icon--top"></span>
                        <span class="navbar-menu-icon navbar-menu-icon--middle"></span>
                        <span class="navbar-menu-icon navbar-menu-icon--bottom"></span>
                     </div>
                  </a>
                  <a class="navbar-brand" href="<?= base_url('dashboard'); ?>"> <img class="img-thumbnail" src="<?= base_url('assets_user/'); ?>images/user/logo.png" /> </a>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <div class="menu-main-menu-container">
                        <ul id="top-menu" class="navbar-nav ml-auto">
                           <li class="menu-item">
                              <a href="<?= base_url('dashboard'); ?>">Film</a>
                           </li>

                           <li class="menu-item">
                              <a href="<?= base_url('allfilm'); ?>"> Semua Film</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="mobile-more-menu">
                     <a href="javascript:void(0);" class="more-toggle" id="dropdownMenuButton" data-toggle="more-toggle" aria-haspopup="true" aria-expanded="false">
                        <i class="ri-more-line"></i>
                     </a>
                     <div class="more-menu" aria-labelledby="dropdownMenuButton">
                        <div class="navbar-right position-relative">
                           <ul class="d-flex align-items-center justify-content-end list-inline m-0">
                              <li>
                                 <a href="#" class="iq-user-dropdown search-toggle d-flex align-items-center">
                                    <img src="<?= base_url('assets_user/'); ?>images/user/user.png" class="img-fluid avatar-40 rounded-circle" alt="user">
                                 </a>
                                 <div class="iq-sub-dropdown iq-user-dropdown">
                                    <div class="iq-card shadow-none m-0">
                                       <div class="iq-card-body p-0 pl-3 pr-3">
                                          <a href="<?= base_url('auth'); ?>" class="iq-sub-card setting-dropdown">
                                             <div class="media align-items-center">
                                                <div class="right-icon">
                                                   <i class="ri-logout-circle-line text-primary"></i>
                                                </div>
                                                <div class="media-body ml-3">
                                                   <h6 class="mb-0">Logout</h6>
                                                </div>
                                             </div>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="navbar-right menu-right">
                     <ul class="d-flex align-items-center list-inline m-0">
                        <li class="nav-item nav-icon">
                           <a href="#" class="iq-user-dropdown search-toggle p-0 d-flex align-items-center" data-toggle="search-toggle">
                              <h6> <?php echo ($_SESSION['nama']); ?></h6>
                              <img src="<?= base_url('assets_user/'); ?>images/user/user.png" class="img-fluid avatar-40 rounded-circle" alt="user">
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 pl-3 pr-3">
                                    <a href="<?= base_url('auth'); ?>" class="iq-sub-card setting-dropdown">
                                       <div class="media align-items-center">
                                          <div class="right-icon">
                                             <i class="ri-logout-circle-line text-primary"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Logout</h6>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
               <div class="nav-overlay"></div>
            </div>
         </div>
      </div>
   </div>
</header>
<div class="video-container iq-main-slider">
   <iframe class="video d-block" width="100%" height="100%" src="<?php echo $data['yt_link']; ?>" frameborder="0" allowfullscreen>
   </iframe>
</div>
<!--isi konten-->
<div class="main-content movi">
   <section class="movie-detail container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="trending-info g-border">
               <h1 class="trending-text big-title text-uppercase mt-0"><?php echo $data['name']; ?></h1>
               <ul class="p-0 list-inline d-flex align-items-center movie-content">
                  <?php
                  if ($data['fiction'] == 1) {
                     echo "<li class='text-white'> fiction </li>";
                  }
                  if ($data['adventure'] == 1) {
                     echo "<li class='text-white'>adventure </li>";
                  }
                  if ($data['horror'] == 1) {
                     echo "<li class='text-white'>horror </li>";
                  }
                  if ($data['action'] == 1) {
                     echo "<li class='text-white'>action </li>";
                  }
                  if ($data['thriller'] == 1) {
                     echo "<li class='text-white'>thriller </li>";
                  }
                  if ($data['comedy'] == 1) {
                     echo "<li class='text-white'>comedy </li>";
                  }
                  if ($data['criminal'] == 1) {
                     echo "<li class='text-white'>criminal </li>";
                  }
                  if ($data['fantasy'] == 1) {
                     echo "<li class='text-white'>fantasy </li>";
                  }
                  if ($data['anime'] == 1) {
                     echo "<li class='text-white'>anime </li>";
                  }
                  if ($data['sci-fi'] == 1) {
                     echo "<li class='text-white'>sci-fi </li> ";
                  }
                  if ($data['mystery'] == 1) {
                     echo "<li class='text-white'>mystery </li> ";
                  }
                  if ($data['drama'] == 1) {
                     echo "<li class='text-white'>drama </li> ";
                  }
                  if ($data['romance'] == 1) {
                     echo "<li class='text-white'>romance </li> ";
                  }

                  ?>
               </ul>

               <div class="d-flex align-items-center text-white text-detail">
                  <span class="trending-year">Rating <?php echo $data['rating']; ?></span>
                  <span class="ml-3">Tahun <?php echo $data['rdate']; ?></span>
               </div>
               <div class="description"><?php echo $data['description']; ?>
               </div>

            </div>
            </li>
            </ul>
         </div>
      </div>
</div>
</section>
<section id="iq-favorites" class="s-margin">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
               <h4 class="main-title"><a href="#">Rekomendasi Film</a></h4>
            </div>
            <div class="favorites-contens">
               <ul class="list-inline favorites-slider row p-0 mb-0">
                  <?php
                  $i = 1;
                  foreach ($recommend as $row) {
                     if ($i != 1) {
                        //print_r($row);
                        echo '<li class="slide-item">
                              <a href="' . base_url() . 'playfilm/index/' . $row[13] . '">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="' . base_url('gambar/') . $row[14] . '" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>' . $row[13] . '</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">' . $row[14] . '</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Tonton 
                                             Trailer</span>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </li>';
                     }
                     $i = 0;
                  }
                  ?>

               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
<section id="iq-upcoming-movie">
   <div class="container-fluid">
      <div class="row">
         <div class="col-sm-12 overflow-hidden">
            <div class="iq-main-header d-flex align-items-center justify-content-between">
               <h4 class="main-title"><a href="#">Rating Film</a></h4>
            </div>
            <div class="upcoming-contens">
               <ul class="favorites-slider list-inline  row p-0 mb-0">
                  <?php
                  foreach ($data2 as $row) {
                     // print_r($row);
                     echo '<li class="slide-item">
                              <a href="' . base_url() . 'playfilm/index/' . $row['name'] . '">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="' . base_url('gambar/') . $row['dir'] . '" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>' . $row['name'] . '</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">' . $row['rdate'] . '</span>
                                       </div>
                                       <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                             Tonton 
                                             Trailer</span>
                                       </div>
                                    </div>
                                 </div>
                              </a>
                           </li>';
                  }
                  ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>
</div>
<footer class="mb-0">
   <div class="copyright py-2">
      <div class="container-fluid">
         <p class="mb-0 text-center font-size-14 text-body">MOOFY - 2021 All Rights Reserved</p>
      </div>
   </div>
</footer>