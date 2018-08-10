<div class="modal-header">
    
    Add Alumni
</div>
<div class="modal-body">
    <div class="box">

        <div class="box-header">
            <p><b>Enter new Alumni info:</b>Name,Year Graduated,Degree Accomplished,Email,and Alumni Number</p>
            </div>
            <div class="box-body">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control"  id="firstname" name="firstname" placeholder="First name" value="<?=set_value('firstname')?>">
                        <?php echo form_error('firstname', "<span class='bg-warning '>", '</span>'); ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="middlename">Middle name</label>
                        <input type="text" class="form-control"  id="middlename" name="middlename" placeholder="Middle name" value="<?=set_value('middlename')?>">
                        <?php echo form_error('middlename', "<span class='bg-warning'>", '</span>'); ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control"  id="lastname" name="lastname" placeholder="Last name" value="<?=set_value('lastname')?>">
                        <?php echo form_error('lastname', "<span class='bg-warning'>", '</span>'); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="yeargraduated">Year graduted</label>
                        <select class="form-control" id="yeargraduated" name="yeargraduated" value="<?=set_value('yeargraduated')?>">
                            <option value="">Select Year Graduated</option>
                            <?php
                            $year = date('Y');
                            for ($year; $year >= 2012; $year--) {
                                ?>
                                <option value="<?= $year ?>"><?= $year ?></option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('yeargraduated', "<span class='bg-warning'>", '</span>'); ?>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="degree"> Academic Degree </label>
                        <select class="form-control chosen span2"  id="degree" name="degree" value="<?=set_value('degree')?>">
                            <option value="">Select degree</option>
                            <?php foreach ($degreelist as $item) {
                                ?>
                                <option value="<?= $item->degree_No ?>">
                                    <?= $item->code . " / " . $item->description ?> 
                                </option>
                                <?php
                            }
                            ?>
                        </select>
                        <?php echo form_error('degree', "<span class='bg-warning '>", '</span>'); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control"  id="email" name="email" placeholder="Email" value="<?=set_value('email')?>">
                        <?php echo form_error('email', "<span class='bg-warning '>", '</span>'); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alumninumber">Alumni Number</label>

                        <input type="text" class="form-control"  id="alumni_number" name="alumni_number" placeholder="Alumni number" value="<?=set_value('alumni_number')?>">
                        <?php echo form_error('alumni_number', "<span class='bg-warning '>", '</span>'); ?>

                    </div>
                </div>
            
        </div>
       
</div>
<div class="modal-footer">
     <div class="pull-right">
                <button type="button" class="btn btn-default " data-dismiss="modal">View List</button>
                <button type="submit" class="btn btn-primary ">Save</button></div>
        </div>
</div>