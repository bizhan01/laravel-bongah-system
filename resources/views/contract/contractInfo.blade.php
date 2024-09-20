@extends('layouts.master')
@section('content')
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="box bg-white product-view mb-2">
      <div class="box-block">
        <div class="row">
          <div class="col-md-4 col-sm-5">
            <div class="pv-images mb-1 mb-sm-0">
              <div class="mb-1">
                <a class="active" href="..\uploadedImages\contracts\<?php echo $contract[0]->contract_scan; ?>"><img class="img-fluid" src="..\uploadedImages\contracts\<?php echo $contract[0]->contract_scan; ?>" alt=""></a>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-7">
            <div class="pv-content">
              <div class="pv-title">
                اطلاعات کامل قرارداد
                <a class="text-danger" href="#"><i class="fa fa-star"></i></a>
              </div>
              <table class="table mb-md-0">
                <tr class="table-success">
                  <td>تاریخ ثبت قرارداد</td>
                  <th><?php echo $contract[0]->date; ?></th>
                  <td>کد قرارداد</td>
                  <th><?php echo $contract[0]->contract_code; ?></th>
                </tr>
                <tr class="table-info">
                  <td>مشتری</td>
                  <th><?php echo $contract[0]->customer_name; ?></th>
                  <td>شروع قرارداد</td>
                  <th><?php echo $contract[0]->startDate; ?></th>
                </tr>
                <tr class="table-success">
                  <td>کد فایل</td>
                  <th><?php echo $contract[0]->file_id; ?></th>
                  <td>ختم قرارداد</td>
                  <th><?php echo $contract[0]->endDate; ?></th>
                </tr>
                <tr class="table-info">
                  <td>نوع قرارداد</td>
                  <th><?php echo $contract[0]->contract_type; ?></th>
                  <td>کمیسیون</td>
                  <th><?php echo $contract[0]->commission; ?></th>
                </tr>
                <tr class="table-success">
                  <td>قیمت</td>
                  <th colspan="3">{{ number_format($contract[0]->price)}}  <span style="color: blue">تومان</span></th>
                </tr>
                <tr class="table-info">
                  <td>پول پیش</td>
                  <th colspan="3">{{ number_format($contract[0]->advance_paid)}} <span style="color: blue">تومان</span></th>
                </tr>
                <tr class="table-success">
                  <td>کرایه</td>
                  <th colspan="3">{{ number_format( $contract[0]->rent)}} <span style="color: blue">تومان</span></th>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
