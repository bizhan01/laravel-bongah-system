<!-- Add New -->
<div class="modal fade" id="dateConverter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h4 class="modal-title" id="myModalLabel">تبدیل تاریخ هجری شمسی به میلادی</h4></center>
          </div>
          <div class="modal-body">
      		<div class="container-fluid">
            <section id="gregorianDate">
                <center>
                  <div class="col-lg-6"></div>
                  <input type="text" id="pdpGregorian" placeholder="تاریخ را مشخص کنید"  class="form-control" style="text-align: center"/>
                </center>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
                <br></br>
            </section>
          </div>
		    </div>
      </div>
  </div>
</div>

<script src="Persian_Date_Picker_Master/js/jquery-1.10.1.min.js"></script>
<script src="Persian_Date_Picker_Master/js/persianDatepicker.js"></script>
<script>
    $(function () {
        //usage
        $(".usage").persianDatepicker();

        //Gregorian date
        $("#pdpGregorian").persianDatepicker({cellWidth: 77, cellHeight: 30, fontSize: 15 , showGregorianDate: true });
    });
</script>
