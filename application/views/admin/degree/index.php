<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    <i class="fa fa-graduation-cap"></i>Degree
                </h3>
                    <?php echo $this->session->flashdata('message'); ?>
                <a href="" class="btn btn-success pull-right" data-toggle="modal" data-target="#addmodal"> New Degree</a>
            </div>
            
            <div class="box-body ">
                
                <table class="table table-bordered">
                    <tr>
                        <th class="col col-xs-1"> # </th>
                        <th class="col col-xs-3"> Code </th>
                        <th class="col col-xs-6">Description</th>
                        <th class="col col-xs-2">Action</th>
                    </tr>
                    <?php
                    $number = 0;
                    foreach ($tblcontent as $data) {
                        ?>
                        <tr>
                            <td> <?= ++$number ?> </td>
                            <td> <?= $data->code ?>   </td>
                            <td>  <?= $data->description ?>   </td>
                            <td>
                                <a class="btn btn-primary" href="<?= base_url('admin/degree/edit/').$data->degree_No ?> " >Edit</a>
                                <a class="btn btn-danger" href="<?= base_url('admin/degree/delete/'). $data->degree_No ?> " >Delete</a> 
                            </td>
                        </tr>
                    <?php } ?>


                </table>

            </div>
        </div>
    </div>
</div>


<!--Modal-->


<div class="modal fade" id="addmodal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?= base_url('admin/degree/add') ?>" method="POST">
                <div class="modal-header bg-aqua"><button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="exampleModalLabel">New Academic Degree</h4>
                </div>
                <div class="modal-body">
                    <div class="box-body">

                        <div class="form-group">
                            <label for ="code">Code</label>
                            <input type="text" id="code" name="code" class="form-control" placeholder="e.g. BSIT">
                        </div>
                        <div class="form-group ">

                            <label for ="description">Description</label>
                            <input type="text" id="description" name="description" class="form-control" placeholder="e.g. Bachelor of Science in Infromation Technology">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary pull-left" type="button" data-dismiss="modal">Cancel</button>
                    <input type="submit" name="submit" class="btn btn-primary" value="Save">

                </div>
            </form>
        </div>
    </div>
</div>

