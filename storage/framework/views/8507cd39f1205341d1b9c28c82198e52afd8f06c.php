<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $info['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">حذف اطلاعات</h4></center>
            </div>
            <center class="modal-body">
            	<p class="text-center">آیا مطمین استید این اطلاعات حذف شود؟</p>
      				<h2 class="text-center"><?php echo $info['company_name']; ?></h2>
      			</center>
            <div class="modal-footer">
                <a href="<?php echo e(url('deleteInfo').'/' .$info->id); ?>" class="btn btn-danger"><span class="fa fa-trash"></span> حذف</a>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
            </div>
        </div>
    </div>
</div>
