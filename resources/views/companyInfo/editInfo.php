<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $info['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ویرایش اطلاعات شرکت</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/updateInfo/<?php echo $info['id']; ?>" enctype="multipart/form-data">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">اسم شرکت:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="company_name" value="<?php echo $info['company_name']; ?>"  class="form-control" required>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">تلفن همراه:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="company_cell_phone" value="<?php echo $info['company_cell_phone']; ?>" placeholder="0xxx-xxx-xxxx" data-mask="0999-999-9999" class="form-control" dir="ltr"  required style="text-align: right">
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">تفلن ثابت:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="company_phone" value="<?php echo $info['company_phone']; ?>"  placeholder="0xx-xxxx-xxxx" data-mask="099-9999-9999" class="form-control" dir="ltr"  required style="text-align: right">
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">ایمیل:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="email" name="company_email" value="<?php echo $info['company_email']; ?>" class="form-control" required>
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">وب سایت:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="company_website" value="<?php echo $info['company_website']; ?>" class="form-control" required>
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">آدرس:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="company_address" value="<?php echo $info['company_address']; ?>" class="form-control" required>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-sm-2">
                      <label class="control-label modal-label">لوگو:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="hidden" name="logo" value="<?php echo $info['logo']; ?>">
                      <input type="file" name="logo" id="input-file-now-custom-1" class="dropify" data-default-file="/UploadedImages/about/<?php echo $info['logo']; ?>" />
                    </div>
                  </div>



                </div>
          			</div>
                <div class="modal-footer">
                    <button type="submit" name="edit" class="btn btn-success"><span class="fa fa-check"></span> بروزرسانی</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
                </div>
          	</form>
        </div>
    </div>
</div>
