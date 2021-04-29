<section class="sign-in-page">
   <div class="container">
      <div class="row justify-content-center align-items-center height-self-center">
         <div class="col-lg-5 col-md-12 align-self-center">
            <div class="sign-user_card ">
               <div class="sign-in-page-data">
                  <div class="sign-in-from w-100 m-auto">
                     <h3 class="mb-3 text-center">Reset Password</h3>
                     <form class="mt-4" method="POST" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                           <input type="password" name="password" class="form-control mb-0" id="password" placeholder="Password lama" required>
                        </div>
                        <div class="form-group">
                           <input type="password" name="password" class="form-control mb-0" id="password" placeholder="Password Baru" required>
                        </div>
                        <div class="sign-info">
                           <button type="submit" class="btn btn-hover">Reset Password</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>