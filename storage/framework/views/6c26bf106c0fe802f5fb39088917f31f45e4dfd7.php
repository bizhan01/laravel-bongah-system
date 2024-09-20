<script src="js/jquery.min.js"> </script>
<div class="box box-block bg-white">
    <div class="row">
      <div class="col-md-4">
        <label  style="color: black">مبلغ ابتدایی<span style="color: red">*</span></label>
          <input type="number" name="rentfrom" class="form-control rentfrom" value="<?php echo e(old('from')); ?>" required>
      </div>
      <div class="col-md-4">
        <label  style="color: black">مبلغ نهایی<span style="color: red">*</span></label>
        <input type="number" name="rentto" class="form-control rentto"   required>
      </div>
      <div class="col-md-4">
        <h6>&nbsp;</h6>
        <a href="">
          <button class="btn btn-success btn-block"  id="btnGetOrderByDate3">
            <a href="" class="text-black">جستجو</a>
          </button>
        </a>
      </div>
    </div>
</div>


<script type="text/javascript" src="<?php echo e(asset('../vendors/jquery/jquery-1.12.3.min.js')); ?>"></script>
<script type="text/javascript">


  $(document).on('click','#btnGetOrderByDate3',function(e){
    e.preventDefault();
    var from = $('.rentfrom').val();
    var to = $('.rentto').val();
    if (from.indexOf('/') > -1) {
      from = from.replace(/\//g,'-');
    }
    if (to.indexOf('/',to) > -1) {
      var to = to.replace(/\//g,'-');
    }
    if (from.length > 0 && to.length > 0) {
      window.location.href = '<?= url('file_rent') ?>'+'/'+from+'/'+to;
    }else{
      alert('لطفا مبلغ نهایی را مشخص کنید!');
    }
  });
</script>
