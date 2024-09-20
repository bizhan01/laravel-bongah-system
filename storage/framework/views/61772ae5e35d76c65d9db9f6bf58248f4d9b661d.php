<?php $__env->startSection('content'); ?>
<script src="js/jquery.min.js"> </script>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <nav class="navbar navbar-light bg-white b-a mb-2">
      <center><h3>ثبت پروژه جدید</h3></center> <br>
      <form method="POST" action="<?php echo e(route('saveProject')); ?>" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

          <div class="row form-group">
            <div class="col-md-4">
              <label  style="color: black">تاریخ ثبت<span style="color: red">*</span></label>
              <input type="text" name="date"  class="form-control " placeholder="روز-ماه-سال" id="pdpF2" autocomplete="off">
            </div>
            <div class="col-md-4">
              <label  style="color: black">مشتری/واگذار کننده<span style="color: red">*</span></label>
							<select class="form-control" name="customer_id" id='searchOptions' required>
								<option value="">انتخاب کنید</option>
                <?php $__currentLoopData = $customers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								  <option value="<?php echo e($customer->id); ?>"><?php echo e($customer->prefix); ?> <?php echo e($customer->name); ?> </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</select>
            </div>
            <div class="col-md-4">
              <label  style="color: black">نوع پروژه<span style="color: red">*</span></label>
              <input type="text"  name="project_type" value=""  class="form-control"  placeholder="نوع پروژه" required>
            </div>
          </div>

					<div class="row form-group">
            <div class="col-md-3">
              <label  style="color: black">موقعیت<span style="color: red">*</span></label>
              <input type="text"  name="location" value=""  class="form-control"  placeholder="موقعیت" required>
            </div>
            <div class="col-md-3">
              <label  style="color: black">مساحت<span style="color: red">*</span></label>
							<input type="number" min="1" name="space" value=""  class="form-control" placeholder="مساحت فایل به متر مربع درج کنید."  required>
            </div>
            <div class="col-md-3">
              <label  style="color: black">شروع پروژه<span style="color: red">*</span></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="text" name="start_date"  class="form-control pdate" placeholder="روز-ماه-سال" id="pdpF22" autocomplete="off">
              </div>
            </div>

            <div class="col-md-3">
              <label  style="color: black">ختم پروژه<span style="color: red">*</span></label>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input type="text" name="end_date"  onblur="ValidateDate()" class="form-control pdate" placeholder="روز-ماه-سال" id="pdpF222" autocomplete="off">
              </div>
            </div>
          </div>


          <div class="row form-group">
            <div class="col-md-6">
              <input type="submit" name="submit" value="ذخیره" class="btn btn-success ">
            </div>
         </div>
        <?php echo $__env->make('layouts.errors', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      </form>
    </nav>
  </div>
</div>




<!-- Search Options  -->
<script>
$(document).ready(function(){

    // Initialize select2
    $("#searchOptions").select2();

    // Read selected option
    $('#but_read').click(function(){
        var username = $('#selUser option:selected').text();
        var userid = $('#selUser').val();

        $('#result').html("id : " + userid + ", name : " + username);
    });
});
</script>



<script type="text/javascript">
  let startInput = document.getElementById('start');
  let endInput = document.getElementById('end');
  let messageDiv = document.getElementById('message');
  let submitButton = document.getElementById('submit');

  let compare = () => {
    let startValue = (new Date(startInput.value)).getTime();
    let endValue = (new Date(endInput.value)).getTime();

    if (endValue < startValue) {
      messageDiv.innerHTML = 'تاریخ ورود باید قبل از تاریخ فراغت باشد.';
      submitButton.disabled = true;
    } else {
      messageDiv.innerHTML = '';
      submitButton.disabled = false;
    }
  };

  startInput.addEventListener('change', compare);
  endInput.addEventListener('change', compare);
</script>

<script src="Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
<script src="Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
<script>
    $(function () {
        //usage
        $(".usage").persianDatepicker();

        //themes
        $("#pdpDefault").persianDatepicker({ alwaysShow: true, });
        $("#pdpLatoja").persianDatepicker({ theme: "latoja", alwaysShow: true, });
        $("#pdpLightorang").persianDatepicker({ theme: "lightorang", alwaysShow: true, });
        $("#pdpMelon").persianDatepicker({ theme: "melon", alwaysShow: true, });
        $("#pdpDark").persianDatepicker({ theme: "dark", alwaysShow: true, });

        //size
        $("#pdpSmall").persianDatepicker({ cellWidth: 14, cellHeight: 12, fontSize: 8 });
        $("#pdpBig").persianDatepicker({ cellWidth: 78, cellHeight: 60, fontSize: 18 });

        //formatting
        $("#pdpF1").persianDatepicker({ formatDate: "YYYY/MM/DD 0h:0m:0s:ms" });
        $("#pdpF2").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF22").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF222").persianDatepicker({ formatDate: "YYYY-0M-0D" });
        $("#pdpF3").persianDatepicker({ formatDate: "YYYY-NM-DW|ND", isRTL: !0 });

        //startDate & endDate
        $("#pdpStartEnd").persianDatepicker({ startDate: "1394/11/12", endDate: "1395/5/5" });
        $("#pdpStartToday").persianDatepicker({ startDate: "today", endDate: "1410/11/5" });
        $("#pdpEndToday").persianDatepicker({ startDate: "1397/11/12", endDate: "today" });

        //selectedBefor & selectedDate
        $("#pdpSelectedDate").persianDatepicker({ selectedDate: "1404/1/1", alwaysShow: !0 });
        $("#pdpSelectedBefore").persianDatepicker({ selectedBefore: !0 });
        $("#pdpSelectedBoth").persianDatepicker({ selectedBefore: !0, selectedDate: "1395/5/5" });

        //jdate & gdate attributes
        $("#pdp-data-jdate").persianDatepicker({
            onSelect: function () {
                alert($("#pdp-data-jdate").attr("data-gdate"));
            }
        });
        $("#pdp-data-gdate").persianDatepicker({
            showGregorianDate: true,
            onSelect: function () {
                alert($("#pdp-data-gdate").attr("data-jdate"));
            }
        });


        //Gregorian date
        $("#pdpGregorian").persianDatepicker({ showGregorianDate: true });

        // jDateFuctions
        // var jdf = new jDateFunctions();
        // var pd = new persianDate();
        // $("#pdpjdf-1").persianDatepicker({
        //     onSelect: function () {
        //         $("#pdpjdf-1").val(jdf.getJulianDayFromPersian(pd.parse($("#pdpjdf-1").val())));
        //         $("#pdpjdf-2").val(jdf.getLastDayOfPersianMonth(pd.parse($("#pdpjdf-1").val())));
        //         $("#pdpjdf-3").val(jdf.getPCalendarDate($("#pdpjdf-1").val()));
        //     }
        // });


        // //convert jalali date to miladi
        // $("#year, #month, #day").on("change", function () {
        //     $("#month").val() > 6 ? $("#day-31").hide() : $("#day-31").show();;
        //     showConverted();
        // });

        // $("#year").keyup(showConverted);
        //
        // function showConverted() {
        //     try{
        //         var pd = new persianDate();
        //         pd.year = parseInt($("#year").val());
        //         pd.month = parseInt($("#month").val());
        //         pd.date = parseInt($("#day").val());
        //
        //         var jdf = new jDateFunctions();
        //         $("#converted").html("Gregorian :  " + jdf.getGDate(pd)._toString("YYYY/MM/DD") + "     [" + jdf.getGDate(pd) + "]<br />Julian:  " + jdf.getJulianDayFromPersian(pd));
        //
        //     } catch (e) {
        //         $("#converted").html("Enter the year correctly!");
        //     }
        // }


        //startDate is tomarrow
        var p = new persianDate();
        $("#pdpStartDateTomarrow").persianDatepicker({ startDate: p.now().addDay(1).toString("YYYY/MM/DD"), endDate: p.now().addDay(4).toString("YYYY/MM/DD") });


    });
</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>