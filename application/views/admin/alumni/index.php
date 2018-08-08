<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Alumni</h3>
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
                            <th>#</th>
                            <th>Name</th>
                            <th>Degree</th>
                            <th>Batch</th>
                            <th>Actions</th>
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
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">New Alumni</h4>
              </div>
              <div class="modal-body">
                <p>Adding new Alumni</p>
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputname">Name</label>
                            <input type="text" class="form-control">
                            
                        
                    </div>
                    
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

