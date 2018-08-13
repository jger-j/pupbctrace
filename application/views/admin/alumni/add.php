<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="">
    <?php echo form_open(base_url('admin/alumni/add'), array('id' => 'addform')); ?>

    <div class="box">

        <div class="box-header">
            <p><b>Enter new Alumni info:</b>Name,Year Graduated,Course Accomplished,Email,and Alumni Number</p>
        </div>
        <div class="box-body">
            <div class="form-group">

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="surname">Surname</label>
                        <input type="text" class="form-control"  id="surname" name="surname" placeholder="Surname" value="<?= set_value('surname') ?>">
                        <?php echo form_error('surname', "<span class='text-danger'>", '</span>'); ?>

                    </div>
                </div>
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
                        <label for="course">Course </label>

                        <select class="form-control select2" style="width: 100%;" data-placeholder="Select Course" id="course" name="course">
                            <option value="" >---Select---</option>
                            <?php foreach ($courselist as $item) {
                                ?>
                                <option  value="<?= $item->course_no ?>" <?php
                                if ($item->course_no == set_value('course')) {
                                    echo $selected;
                                }
                                ?>>
                                             <?= $item->code . ' (' . $item->description . ')' ?> 
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('course', "<span class='text-danger'>", '</span>'); ?>

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
                <?= $this->session->flashdata('message') ?> 
            </div>

            <div class="pull-right">
                <input type="reset" class="btn btn-default " value="Reset">
                <button type="submit" class="btn btn-primary ">Save</button></div>
        </div>

    </div>
</form>

</div>