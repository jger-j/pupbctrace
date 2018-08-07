<div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Admin Account</div>
        <div class="card-body">
        	<form action='user/register' method="POST">
        		<div class="form-group">
              <div class="form-row">
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="middleName" name="middlename" class="form-control" placeholder="Middle name" >
                    <label for="middleName">Middle name</label>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-label-group">
                    <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div>
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="email" name="email" class="form-control" placeholder="email" required="required">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="alumniNo" name="alumni_number" class="form-control" placeholder="Alumni number" required="required">
                    <label for="alumniNo">Alumni number</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name='password' class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name='passconf' class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Register"/>
          
            
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="login">Login?</a>
          <a class="d-block small" href="forgot-password">Forgot Password?</a>
          
        </div>


        </div>
    </div>
</div>

