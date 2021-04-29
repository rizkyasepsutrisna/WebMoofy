   <div class="wrapper">
      <div class="iq-sidebar">
         <div class="iq-sidebar-logo d-flex justify-content-between">
            <a href="<?= base_url('admin'); ?>" class="header-logo">
               <div class="logo-title">
                  <span class="text-primary text-uppercase">Moofy</span>
               </div>
            </a>
            <div class="iq-menu-bt-sidebar">
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
               </div>
            </div>
         </div>
         <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
               <ul id="iq-sidebar-toggle" class="iq-menu">
                  <li class="active">
                     <a href="<?= base_url('admin'); ?>" class="iq-waves-effect collapsed" aria-expanded="true"><i class="las la-list-ul"></i><span>Daftar Film</span></a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <!-- TOP Nav Bar -->
      <div class="iq-top-navbar">
         <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
               <div class="iq-menu-bt d-flex align-items-center">
                  <div class="wrapper-menu">
                     <div class="main-circle"><i class="las la-bars"></i></div>
                  </div>
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="<?= base_url('admin'); ?>" class="header-logo">
                        <img src="<?= base_url('assets_admin/'); ?>images/logo.png" class="img-fluid rounded-normal" alt="">
                        <div class="logo-title">
                           <span class="text-primary text-uppercase">Moofy</span>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="iq-search-bar ml-auto">
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto navbar-list">
                     <li class="nav-item nav-icon search-content">
                     </li>
                     <li class="line-height pt-3">
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="<?= base_url('assets_admin/'); ?>images/user/user.png" class="img-fluid rounded-circle mr-3" alt="user">
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="d-inline-block w-100 text-center p-3">
                                 <a class="bg-primary iq-sign-btn" href="<?= base_url('auth/signin_admin'); ?>" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                              </div>
                           </div>
                        </div>
               </div>
               </li>
               </ul>
         </div>
         </nav>
      </div>
   </div>
   <!-- ISI KONTEN -->
   <div id="content-page" class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12">
               <div class="iq-card">
                  <div class="iq-card-header d-flex justify-content-between">
                     <div class="iq-header-title">
                        <h4 class="card-title">Daftar Film</h4>
                     </div>
                     <div class="iq-card-header-toolbar d-flex align-items-center">
                        <a href="<?= base_url('admin/tambahfilm'); ?>" class="btn btn-primary">Add movie</a>
                     </div>
                  </div>
                  <div class="iq-card-body">
                     <div class="table-responsive">
                        <table class="data-tables table movie_table " style="width:100%">
                           <thead>
                              <tr>
                                 <th style="width: 20%;">Judul Film</th>
                                 <th>Poster</th>
                                 <th>Tahun Rilis</th>
                                 <th style="width: 30%;">Deskripsi</th>
                                 <th style="width: 15%;">Link Youtube</th>
                                 <th>Rating</th>
                                 <th style="width: 10%;">Action</th>
                              </tr>
                           </thead>

                           <tbody>
                              <?php foreach ($dataMovie as $key => $film) { ?>
                                 <tr>
                                    <td><?= $film->name; ?></td>
                                    <td><img src="<?= base_url(); ?>/gambar/<?= $film->dir; ?>" alt="Poster" width="50" height="100"></td>
                                    <td><?= $film->rdate; ?></td>
                                    <td>
                                       <p class="mb-0"><?= $film->description; ?></p>
                                    </td>
                                    <td>
                                       <p class="mb-0"><?= $film->yt_link; ?></p>
                                    </td>
                                    <td><i class="las la-star text-primary mr-2"></i><?= $film->rating; ?></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                          <a class="iq-bg-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="<?= base_url('admin/editfilm/') . $film->id_movies; ?>"><i class="ri-pencil-line"></i></a>
                                          <a class="iq-bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="<?= base_url('admin/hapusFilm/') . $film->id_movies; ?>"><i class="ri-delete-bin-line"></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              <?php } ?>
                           </tbody>

                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
   <footer class="iq-footer">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 text-right">
               Copyright 2021 Moofy All Rights Reserved.
            </div>
         </div>
      </div>
   </footer>