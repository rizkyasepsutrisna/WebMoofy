<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Sign Up</h3>
                     <form class="mt-4" method="POST" action="<?= base_url('auth/signup_user'); ?>">
                        <div class="form-group">
                           <input type="text" class="form-control mb-0" id="name" name="name" placeholder="Enter Full Name" value="<?= set_value('name'); ?>">
                           <?= form_error('name', '<small class="text-white">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control mb-0" id="email" name="email" placeholder="Enter email" value="<?= set_value('email'); ?>">
                           <?= form_error('email', '<small class="text-white">', '</small>'); ?>
                        </div>
                        <div class=" form-group">
                           <input type="password" class="form-control mb-0" id="password1" name="password1" placeholder="Password">
                           <?= form_error('password1', '<small class="text-white">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                           <input type="password" class="form-control mb-0" id="password2" name="password2" placeholder="Repeat Password">
                           <?= form_error('password2', '<small class="text-white">', '</small>'); ?>
                        </div>
                        <button type="submit" class="btn btn-hover">Sign Up</button>
                     </form>
                  </div>
               </div>
               <div class="mt-3">
                  <div class="d-flex justify-content-center links">
                     Already have an account? <a href="<?= base_url('auth'); ?>" class="text-primary ml-2">Sign In</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>