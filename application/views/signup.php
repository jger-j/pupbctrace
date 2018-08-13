<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header"> Register an Admin Account <sub>Testing of inserting data using validator</sub></div>
        <div class="card-body">
            <?php echo form_open('../signup'); ?>

            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-label-group">
                            <input type="text" id="firstName" name="firstname" class="form-control" placeholder="First name" value="<?php echo set_value('firstname'); ?>" >
                            <label for="firstName">First name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group">
                            <input type="text" id="middleName" name="middlename" class="form-control" placeholder="Middle name" value="<?php echo set_value('middlename'); ?>">
                            <label for="middleName">Middle name</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-label-group">
                            <input type="text" id="lastName" name="lastname" class="form-control" placeholder="Last name" value="<?php echo set_value('lastname'); ?>">
                            <label for="lastName">Last name</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="email" name="email" class="form-control" placeholder="email" value="<?php echo set_value('email'); ?>">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="text" id="alumniNo" name="alumni_number" class="form-control" placeholder="Alumni number" value="<?php echo set_value('alumni_number'); ?>">
                            <label for="alumniNo">Alumni number</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" name='password' class="form-control" placeholder="Password" value="<?php echo set_value('password'); ?>">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-label-group">
                            <input type="password" id="confirmPassword" name='passconf' class="form-control" placeholder="Confirm password" value="<?php echo set_value('passconf'); ?>">
                            <label for="confirmPassword">Confirm password</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="Register"/>


            </form>
            <div class="form-group form-row">
                   
                <?php echo validation_errors('<div>
          ', '</div>'); ?>
            </div>
            <div class="text-center">
               
                <a class="d-block small mt-3" href="login">Login?</a>
                <a class="d-block small" href="forgot-password">Forgot Password?</a>

            </div>


        </div>
    </div>
</div>
echo "<script>alert('Warning: This pasge is not functional')</script>";

