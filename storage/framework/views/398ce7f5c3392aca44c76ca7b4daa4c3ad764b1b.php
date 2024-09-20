<?php $__env->startSection('content'); ?>

<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <div class="col-lg-2"></div>
      <div class="navbar  bg-white mb-2 col-lg-8">
          <div class="modal-content ">
              <div class="modal-header">
                  <center><h4 class="modal-title" id="myModalLabel">اطلاعات فایل</h4></center>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">مدل فایل:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->file_model; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">نوع فایل:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->file_type; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">قیمت</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->price; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">پول پیش</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->advance_paid; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">کرایه</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->rent; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">موقعیت</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->location; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">مساحت</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->space; ?>">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">پارکنیگ</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->parking; ?>">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">آسانسور</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->lift; ?>">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">طبقه</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->stage; ?>">
                      </div>
                    </div>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">تاریخ ساخت</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $file[0]->manufacture_date; ?>">
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