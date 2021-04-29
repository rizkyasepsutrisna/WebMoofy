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
                           </li>
                           <li class="menu-item">
                              <a href="<?= base_url('allfilm'); ?>">Semua Film</a>
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
<!-- Isi Konten -->
<section class="iq-main-slider p-0">
   <div id="tvshows-slider">
      <?php
      foreach ($data3 as $row) {
         echo '<div>
         <a href="' . base_url() . 'playfilm/index/' . $row['name'] . '">
            <div class="shows-img">
               <img src="' . base_url('gambar/') . 'movie_banner/' . $row['dir'] . '" class="w-100" alt="">
               <div class="shows-content">
                  <h4 class="text-white mb-1">' . $row['name'] . '</h4>
                  <div class="movie-time d-flex align-items-center">
                     <span class="text-white">' . $row['rdate'] . '</span>
                  </div>
               </div>
            </div>
         </a>
      </div>';
      }

      ?>

   </div>
</section>
<div class="main-content">
   <section id="iq-upcoming-movie">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 overflow-hidden">
               <div class="iq-main-header d-flex align-items-center justify-content-between">
                  <h4 class="main-title">Rekomendasi Film</h4>
               </div>
               <div class="upcoming-contens">
                  <ul class="favorites-slider list-inline row p-0 mb-0">
                     <?php
                     $i = 1;
                     foreach ($data as $row) {
                        if ($i != 1) {
                           // print_r($row);
                           echo '<li class="slide-item">
                              <a href="' . base_url() . 'playfilm/index/' . $row[13] . '">
                                 <div class="block-images position-relative">
                                    <div class="img-box">
                                       <img src="' . base_url('gambar/') . $row[14] . '" class="img-fluid" alt="">
                                    </div>
                                    <div class="block-description">
                                       <h6>' . $row[13] . '</h6>
                                       <div class="movie-time d-flex align-items-center my-2">
                                          <span class="text-white">' . $row[15] . '</span>
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
               </div>
            </div>
         </div>
      </div>
   </section>
   <section id="iq-suggestede">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 overflow-hidden">
               <div class="iq-main-header d-flex align-items-center justify-content-between">

                  <h4 class="main-title">Rating Film</h4>
               </div>
               <div class="suggestede-contens">
                  <ul class="list-inline favorites-slider row p-0 mb-0">
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