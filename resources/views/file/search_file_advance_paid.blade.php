<script src="js/jquery.min.js"> </script>
<div class="box box-block bg-white">
    <div class="row">
      <div class="col-md-4">
        <label  style="color: black">مبلغ ابتدایی<span style="color: red">*</span></label>
          <input type="number" name="apfrom" class="form-control apfrom" value="{{old('from')}}" required>
      </div>
      <div class="col-md-4">
        <label  style="color: black">مبلغ نهایی<span style="color: red">*</span></label>
        <input type="number" name="apto" class="form-control apto"   required>
      </div>
      <div class="col-md-4">
        <h6>&nbsp;</h6>
        <a href="">
          <button class="btn btn-success btn-block"  id="btnGetOrderByDate2">
            <a href="" class="text-black">جستجو</a>
          </button>
        </a>
      </div>
    </div>
</div>


<script type="text/javascript" src="{{ asset('../vendors/jquery/jquery-1.12.3.min.js') }}"></script>
<script type="text/javascript">


  $(document).on('click','#btnGetOrderByDate2',function(e){
    e.preventDefault();
    var from = $('.apfrom').val();
    var to = $('.apto').val();
    if (from.indexOf('/') > -1) {
      from = from.replace(/\//g,'-');
    }
    if (to.indexOf('/',to) > -1) {
      var to = to.replace(/\//g,'-');
    }
    if (from.length > 0 && to.length > 0) {
      window.location.href = '<?= url('file_advance_paid') ?>'+'/'+from+'/'+to;
    }else{
      alert('لطفا مبلغ نهایی را مشخص کنید!');
    }
  });
</script>
