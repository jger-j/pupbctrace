<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title"><i class="fa fa-group"></i>Alumni</h3>
               <!-- <a class="btn btn-success pull-right" data-toggle="modal" data-target="#addmodal">New Alumni</a>-->
                <?=$this->session->flashdata('message')?>
               <div class="pull-right">
                  
                   <a class="btn btn-primary " href="<?= base_url('admin/alumni/add')?>" >Add</a>
               <!--<a class="btn btn-default" >Add Modal</a>-->
               
               </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body" id="records">
                
            </div>
            
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>


     