<?php $__env->startSection('content'); ?>

<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <div class="col-lg-2"></div>
      <div class="navbar  bg-white mb-2 col-lg-8">
          <div class="modal-content ">
              <div class="modal-header">
                  <center><h4 class="modal-title" id="myModalLabel">اطلاعات کاربر</h4></center>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">عنوان:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $user[0]->title; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">نام:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $user[0]->name; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">نام خانوادگی:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $user[0]->lastName; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">ایمیل آدرس:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $user[0]->email; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">شماره تلفن:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $user[0]->phone; ?>"  style="text-align: right; direction: ltr">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">آدرس:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $user[0]->address; ?>">
                      </div>
                    </div>
                  </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>