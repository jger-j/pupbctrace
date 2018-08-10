<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="">
    <?php echo form_open(base_url('admin/alumni/add'), array('id' => 'addform')); ?>

    <div class="box">

        <div class="box-header">
            <p><b>Enter new Alumni info:</b>Name,Year Graduated,Degree Accomplished,Email,and Alumni Number</p>
        </div>
        <div class="box-body">
            <div class="form-group">
                
            
            <div class="col-md-4">
                <div class="form-group">
                    <label for="firstname">First name</label>
                    <input type="text" class="form-control"  id="firstname" name="firstname" placeholder="First name" value="<?= set_value('firstname') ?>">
                    <?php echo form_error('firstname', "<span class='text-danger'>", '</span>'); ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="middlename">Middle name</label>
                    <input type="text" class="form-control"  id="middlename" name="middlename" placeholder="Middle name" value="<?= set_value('middlename') ?>">
                    <?php echo form_error('middlename', "<span class='text-danger'>", '</span>'); ?>

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="lastname">Last name</label>
                    <input type="text" class="form-control"  id="lastname" name="lastname" placeholder="Last name" value="<?= set_value('lastname') ?>">
                    <?php echo form_error('lastname', "<span class='text-danger'>", '</span>'); ?>

                </div>
                </div>
            </div><div class="form-group">


                <div class="col-md-4">
                    <div class="form-group">
                        <label for="yeargraduated">Year graduted</label>
                        <select class="form-control select2" style="width: 100%;" data-placeholder="Select the year graudated in PUPBC" id="yeargraduated" name="yeargraduated" >
                            <option value="">---Select---</option>
                            <?php
                            $year = date('Y');
                            $selected = "selected='selected'";
                            for ($year; $year >= 2012; $year--) {
                                ?>
                                <option value="<?= $year ?>" <?php
                                if ($year == set_value('yeargraduated')) {
                                    echo $selected;
                                }
                                ?>><?= $year ?></option>
                                        <?php
                                    }
                                    ?>
                        </select>
                        <?php echo form_error('yeargraduated', "<span class='text-danger'>", '</span>'); ?>

                    </div>
                </div>

                <div class="col-md-8">
                    <div class="form-group">
                        <label for="degree"> Academic Degree </label>

                        <select class="form-control select2" style="width: 100%;" data-placeholder="Select academic degree finished in PUPBC" id="degree" name="degree">
                            <option value="" >---Select---</option>
                            <?php foreach ($degreelist as $item) {
                                ?>
                                <option  value="<?= $item->degree_no ?>" <?php
                                if ($item->degree_no == set_value('degree')) {
                                    echo $selected;
                                }
                                ?>>
                                             <?= $item->code . ' (' . $item->description . ')' ?> 
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('degree', "<span class='text-danger'>", '</span>'); ?>

                    </div>
                </div>
            </div>
            <div class="form-group">


                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"  id="email" name="email" placeholder="Email" value="<?= set_value('email') ?>">
                        <?php echo form_error('email', "<span class='text-danger'>", '</span>'); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alumninumber">Alumni Number</label>
                        <input type="text" class="form-control"  id="alumni_number" name="alumni_number" placeholder="Alumni number" value="<?= set_value('alumni_number') ?>">
                        <?php echo form_error('alumni_number', "<span class='text-danger'>", '</span>'); ?>
                    </div>
                </div>
            </div>


        </div>
        <div class="box-footer">
            <div class="pull-left">
               <?=$this->session->flashdata('message')?> 
            </div>
            
            <div class="pull-right">
                <input type="reset" class="btn btn-default " value="Reset">
                <button type="submit" class="btn btn-primary ">Save</button></div>
        </div>

    </div>
</form>

</div>