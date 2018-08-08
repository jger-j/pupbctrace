<div class="col-lg-10">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">
                Degree
            </h3>
            <a href="" class="btn btn-success pull-right" data-toggle="modal" data-target="#addmodal"> New Degree</a>
        </div>
        <div class="box-body no-padding">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px"> # </th>
                    <th style="width: 100px"> Code </th>
                    <th>Description</th>
                    <th style="width: 30px">Action</th>
                </tr>
                <?php $number = 0;
                foreach ($tblcontent as $data) {
                    ?>
                    <tr>
                        <td> <?= ++$number ?> </td>
                        <td> <?= $data->code ?>   </td>
                        <td>  <?= $data->description ?>   </td>
                        <td> <a class="btn btn-primary" href="edit/<?= $data->degree_No ?> " >Edit</a> </td>
                    </tr>
<?php } ?>


            </table>

        </div>


        <!--Modal-->
        <div class="modal fade" id="addmodal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <form action="insert_degree" method="POST">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Academic Degree</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="box">

                                <div class="form-group">
                                    <div class="col-md-6">
                                        <div class="form-row ">
                                            <input type="text" name="code" class="form-control" placeholder="Code">
                                        </div></div>
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <input type="text" name="description" class="form-control" placeholder="Description">
                                        </div></div>
                                </div>



                            </div>

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <input type="submit" name="submit" class="btn btn-primary" value="Add">

                        </div>
                    </form>
                </div>
            </div>
        </div>


