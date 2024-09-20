<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">ویرایش اطلاعات</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/updateTask/<?php echo $task['id']; ?>">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
          				<div class="row form-group">
          					<div class="col-sm-2">
          						<label class="control-label modal-label">عنوان:</label>
          					</div>
          					<div class="col-sm-8">
          						<input type="text" class="form-control" name="title" value="<?php echo $task['title']; ?>">
          					</div>
          				</div>
                  <div class="row form-group">
          					<div class="col-sm-2">
          						<label class="control-label modal-label">توضیحات</label>
          					</div>
          					<div class="col-sm-8">
          						<input type="text" class="form-control" name="description" value="<?php echo $task['description']; ?>">
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
