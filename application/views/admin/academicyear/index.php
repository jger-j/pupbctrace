<div class="container col-md-8 center-block">


    <div class="row">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                    Year
                </h3>
                <a href="" class="btn btn-success pull-right" data-toggle="modal" data-target="#addmodal"> New Batch</a>
            </div>
            <div class="box-body no-padding">
                <table class="table table-bordered">
                    <tr>
                        <th > Batch </th>
                        <th style="width: 30px">Action</th>
                    </tr>
                    <?php foreach ($tblcontent as $data) {
                        ?>
                        <tr>
                            <td>
                                <?= $data->batch_year ?>
                            </td>
                            <td>
                                <a class="btn btn-primary" >Edit</a>
                            </td>
                        </tr>
                    <?php } ?>


                </table>
            </div>


        </div>


    </div>
    <!-- /.col -->
</div>

</div>

<!--Modal-->
<div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Batch</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <input class="text ">
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="user/Logout">Add</a>
            </div>
        </div>
    </div>
</div>
