<!-- Archive  -->
<div class="modal fade" id="archive_<?php echo $customer['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">بایگانی/آرشیو</h4></center>
            </div>
            <div class="modal-body">
        			<div class="container">
          			<form method="POST" action="/archiveCustomer/<?php echo $customer['id']; ?>">
                  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                  <center class="modal-body">
                  	<p class="text-center">آیا مطمین به بایگانی این مورد استید؟</p>
            				<h2 class="text-center"><?php echo $customer['name']; ?></h2>
            			</center>
                  <input type="hidden" name="status" value="2">
                </div>
          			</div>
                <div class="modal-footer">
                    <button type="submit" name="edit" class="btn btn-info"><span class="fa fa-check"></span> بایگانی نمودن</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> لغو</button>
                </div>
          	</form>
        </div>
    </div>
</div>
