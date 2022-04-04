
<?php include ("include/head.php");?>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">







      <!-- Menu -->

      <?php include("include/aside.php");?>
      <!-- / Menu -->



      <!-- Layout container -->
      <div class="layout-page">



        <!-- Navbar -->


        <?php include("include/nav.php");?>




        <!-- / Navbar -->



        <!-- Content wrapper -->
        <div class="content-wrapper">

          <!-- Content -->

          <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>

<div class="card">
  <h5 class="card-header">ادارة العروض</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>عنوان العرض</th>
            <th>الخصم</th> 
            <th>تاريخ بدء العرض</th> 
            <th>تاريخ انتهاء العرض</th> 
            <th>اسم الكتاب</th> 
            <th>اسم القسم</th> 
            <th>الحالة</th>
            <th>العمليات</th>
          </tr>
        </thead>
        <tbody>
       
         
          <tr>
            <td>;lk;lj;</td>
            <td>;lkj;lj;lk</td>
            <td>lm;l/m;lk</td>
            <td>kl;olkj;</td>
            <td>knlk;nmjkl</td>
            <td>;ljk;lj;</td>
            <td>
              <a href="noActive_offers/" class="badge bg-label-success me-1">مفعل</a>
            </td>
            <td>
              <a href="edit_offers/" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <a href="delete_offers/" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-trash me-1"></i>
              </a>
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
          </div>
          <!-- / Content -->



<?php include "include/footer.php"; ?>