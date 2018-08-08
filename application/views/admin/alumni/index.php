<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Alumni</h3>
                <a class="btn btn-success pull-right">New Alumni</a>

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
        <script>
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
        </script>

