<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">افزودن یاداشت جدید</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="{{route('saveInfo')}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">اسم شرکت:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="company_name"  class="form-control" required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">تلفن همراه:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="company_cell_phone"  placeholder="0xxx-xxx-xxxx" data-mask="0999-999-9999" class="form-control" dir="ltr"  required style="text-align: right">
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">تفلن ثابت:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="company_phone"  placeholder="0xx-xxxx-xxxx" data-mask="099-9999-9999" class="form-control" dir="ltr"  required style="text-align: right">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">ایمیل:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="email" name="company_email"  class="form-control" required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">وب سایت:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="company_website"  class="form-control" required>
                  </div>
                </div>


                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">آدرس:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="company_address"  class="form-control" required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">لوگو:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="file"  name="logo" accept="image/*"  id="input-file-now" class="dropify" />
                  </div>
                </div>

                <div class="modal-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
                        <i class="ti-save"></i>
                        <span>ذخیره</span>
                      </button>
                      <button type="reset" class="btn btn-outline-danger mb-0-25 waves-effect waves-light">
                        <i class="ti-loop"></i>
                        <span>لغو</span>
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
			    </div>
        </div>
    </div>
</div>
