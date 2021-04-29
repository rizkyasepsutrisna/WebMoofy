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
                    <li>
                        <a href="<?= base_url('admin'); ?>" class="iq-waves-effect collapsed" aria-expanded="false"><i class="las la-list-ul"></i><span>Daftar Film</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
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
<!-- Tambah Film -->
<div id="content-page" class="content-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="iq-card">
                    <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                            <h4 class="card-title">Edit Film</h4>
                        </div>
                    </div>
                    <div class="iq-card-body">
                        <?= form_open_multipart('admin/prosesEditFilm'); ?>

                        <div class="row">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-12 form-group">
                                        <input type="hidden" value="<?= $this->uri->segment(3); ?>" name="idMovie">
                                        <label for="">* Judul Film</label>
                                        <input type="text" class="form-control" placeholder="Judul Film" id="judulfilm" name="judulfilm" value="<?= $movie->name; ?>">
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">* Deskripsi Film</label>
                                        <textarea id="deskripsifilm" name="deskripsifilm" rows="5" class="form-control" placeholder="Deskripsi film"><?= $movie->description; ?></textarea>
                                    </div>
                                    <div class="col-12 form-group">
                                        <label for="">* Link</label>
                                        <input type="text" class="form-control" placeholder="Youtube Link" id="linkvideo" value="<?= $movie->yt_link; ?>" name="linkvideo">
                                        <label for=""> Contoh : https://youtube.com/embed/xjDjIWPwcPU<br>
                                            * Harus ditambahkan embed perhatikan contoh </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="d-block position-relative">
                                    <div class="form_video-upload">
                                        <input type="file" id="gambar" name="gambar">
                                        <p>Upload Gambar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="">* Tahun Rilis</label>
                                <input type="text" id="tahunrilis" name="tahunrilis" class="form-control" value="<?= $movie->rdate; ?>" placeholder="Tahun rilis">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="">* Rating</label>
                                <input type="text" id="rating" name="rating" class="form-control" value="<?= $movie->rating; ?>" placeholder="Rating">
                            </div>
                            <div class="col-12 form-group ">
                                <!-- <button type="submit"></button> -->
                                <input type="submit" class="btn btn-primary" value="Submit" />
                            </div>
                        </div>
                        </form>
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