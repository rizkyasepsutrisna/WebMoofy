<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Login</h3>
                     <form class="mt-4" method="POST" action="<?= base_url('auth/signin_user'); ?>">
                        <div class="form-group">
                           <input type="email" name="email" class="form-control mb-0" id="email" placeholder="Enter email" value="<?= set_value('email'); ?>">
                           <?= form_error('email', '<small class="text-white">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <input type="password" name="password" class="form-control mb-0" id="password" placeholder="Password">
                           <?= form_error('password', '<small class="text-white">', '</small>'); ?>
                        </div>
                        <div class=" sign-info">
                           <button type="submit" class="btn btn-hover">Sign in</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Don't have an account? <a href="<?= base_url('auth/signup_user'); ?>" class="text-primary ml-2">Sign Up</a>
                  </div>
                  <div class="d-flex justify-content-center links">
                     <a href="<?= base_url('auth/signin_admin'); ?>" class="text-primary ml-2">Sign In Admin</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>