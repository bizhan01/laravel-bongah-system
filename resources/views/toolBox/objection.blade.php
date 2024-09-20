<!-- Add New -->
<div class="modal fade" id="objection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">با انتقادات نیک تان ما را در بهبود کیفیت مان یاری کنید</h4></center>
            </div>
            <div class="modal-body">
	      		<div class="container-fluid">
              <form method="POST" action="#" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">موضوع:</label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" name="title"  class="form-control" required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-sm-2">
                    <label class="control-label modal-label">توضیحات:</label>
                  </div>
                  <div class="col-sm-10">
                    <textarea name="description" rows="5" cols="60"></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="row">
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
                        <i class="fa fa-send"></i>
                        <span>ارسال</span>
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
