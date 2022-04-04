
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

           


            <!-- Multi Column with Form Separator -->
            <!-- Bordered Table -->
<div class="card">
  <h5 class="card-header">ادارة الكتاب</h5>
  <div class="card-body">
    <div class="table-responsive text-nowrap">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>الصورة</th>
            <th>اسم دار النشر</th>
            <th>رقم الهاتف</th> 
            <th>رقم الهاتف البديل</th> 
            <th>رقم الفكس</th> 
            <th>البريد الالكتروني</th> 
            <th>العنوان</th> 
            <th>الدولة</th> 
            <th>الحالة</th>
            <th>العمليات</th>
          </tr>
        </thead>
        <tbody>
       
         
          <tr>
            
            <td>
                <div class="avatar avatar-xs pull-up">
                    <img class="rounded-circle" src="images/<?= $publisher['image'];?>" alt="">
                </div>
            </td>
            <td>lk;lk;</td>
            <td>kjlsfhvl</td>
            <td>ksmjdvk;lds</td>
            <td>lsfkmvj;lfs</td>
            <td>ldsvfk;ldsjvm;</td>
            <td>lsvk;lsdfkg;</td>
            <td>;lwkfg;lwjgf;</td>
            <td>
              <a href="noActive_publisher/" class="badge bg-label-success me-1">مفعل</a>
              
            </td>
            <td>
              <a href="edit_publisher/" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <a href="delete_publisher/" class="btn btn-icon btn-outline-dribbble">
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


