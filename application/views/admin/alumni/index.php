<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-group"></i>Alumni</h3>
                <a class="btn btn-success pull-right" data-toggle="modal" data-target="#addmodal">New Alumni</a>

            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example-1" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th width="10px">#</th>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Batch</th>
                            <th width="30px">Actions</th>

                        </tr>
                    </thead>
                    <tbody><tr>
                            <td>1</td>
                            <td>Jeff</td>
                            <td>BSIT</td>
                            <td>2018</td>
                            <td>
                                <a class="btn btn-bitbucket">View</a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>teff</td>
                            <td>BSIT</td>
                            <td>2018</td>
                            <td>
                                <a class="btn btn-bitbucket">View</a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>

                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <!-- page script -->
<!--        <script>
            $(function () {
            $('#example1').DataTable
                    ({
                    'paging'      : true,
                            'lengthChange': false,
                            'searching'   : false,
                            'ordering'    : true,
                            'info'        : true,
                            'autoWidth'   : false

                    });
        </script>-->


        <!--Modal-->
        <div class="modal fade" id="addmodal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-aqua">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">New Alumni</h4>
                    </div>
                    <div class="modal-body">
                        <p>Adding new Alumni</p>
                        <div class="box-body">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="firstname">First name</label>
                                    <input type="text" class="form-control"  id="firstname" name="firstname" placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="middlename">Middle name</label>
                                    <input type="text" class="form-control"  id="middlename" name="middlename" placeholder="Middle name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="lastname">Last name</label>
                                    <input type="text" class="form-control"  id="lastname" name="lastname" placeholder="Last name">
                                </div>
                            </div>

                            

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="yeargraduated">Year graduted</label>
                                    <input type="text" class="form-control"  id="yeargrduated" name="yeargraduated" placeholder="Year graduted">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="degree"> Academic Degree </label>
                                    <input type="text" class="form-control"  id="degree" name="degree" placeholder="Academic Degree">
                                    
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control"  id="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="alumninumber">Alumni Number</label>
                                    <input type="text" class="form-control"  id="alumninumber" name="alumninumber" placeholder="Alumni number">
                                </div>
                            </div>





                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

