<!-- Change Status -->
<div class="modal fade" id="status_<?php echo $task['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">تغییر وضعیت</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/changeStatus/<?php echo $task['id']; ?>">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <center class="modal-body">
                  	<p class="text-center">آیا مطمین به تغییر وضعیت این مورد استید؟</p>
            				<h2 class="text-center"><?php echo $task['title']; ?></h2>
            			</center>
                  <input type="hidden" name="status" value="2">
                </div>
          			</div>
                <div class="modal-footer">
                    <button type="submit" name="edit" class="btn btn-info"><span class="fa fa-check"></span> تغییر وضعیت</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
                </div>
          	</form>
        </div>
    </div>
</div>
