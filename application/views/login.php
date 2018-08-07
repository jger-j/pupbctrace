<div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">

          <form action="<?php echo base_url(); ?>user/auth" method="POST">
       <div class="form-group"> <div class="form-label-group">
                <?php echo $this->session->flashdata('message'); ?>
               </div></div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email address</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>

            <input type="submit" class="btn btn-primary btn-block" name="Login" value="Login">
           
          </form>
        
         
          <div class="text-center">
            <a class="d-block small mt-3" href="signup">Register an Account</a>
            <a class="d-block small" href="forgot-password">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
