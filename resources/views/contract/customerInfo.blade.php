@extends('layouts.master')
@section('content')

<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">
      <div class="col-lg-2"></div>
      <div class="navbar  bg-white mb-2 col-lg-8">
          <div class="modal-content ">
              <div class="modal-header">
                  <center><h4 class="modal-title" id="myModalLabel">اطلاعات مشتری</h4></center>
              </div>
              <div class="modal-body">
                <div class="container">
                  <form>

                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">عنوان:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $customer[0]->prefix; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">نام:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $customer[0]->name; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">نام پدر/همسر:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $customer[0]->father_name; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">کد ملی:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $customer[0]->national_code; ?>">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">شماره تلفن:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $customer[0]->phone; ?>"  style="text-align: right; direction: ltr">
                      </div>
                    </div>
                    <div class="row form-group">
                      <div class="col-sm-2">
                        <label class="control-label modal-label">آدرس:</label>
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" readonly value="<?php echo $customer[0]->address; ?>">
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
@endsection
