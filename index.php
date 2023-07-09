<?php

class BMI
{
  private $weight;
  private $height;


  public function calculateBMI($weight, $height)
  {
    $heightInMeters = $height / 100; // แปลงค่าส่วนสูงเป็นเมตร
    $bmi = $weight / ($heightInMeters * $heightInMeters); // คำนวณค่า BMI
    return number_format($bmi, 2);
  }
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $weight = $_POST['weight'];
  $height = $_POST['height'];

  $obj_name = new BMI();
  $rs2 = $obj_name->calculateBMI($weight, $height);


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medilab Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medilab
  * Updated: Jun 23 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to BMI</h1>

<br>

      <form method="POST" action="">
  <label for="weight">น้ำหนัก (kg):</label>
  <input type="number" name="weight" required>
  <br>
  <br>
  <label for="height">ส่วนสูง (cm):</label>
  <input type="number" name="height" required>
  <br>
  <br>

  <input type="submit" value="คำนวณ BMI">
</form>

    </div>
  </section><!-- End Hero -->

  <main id="main">



    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">



        <div class="row">




          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="fas fa-user-md"></i>
              <span data-purecounter-start="0" data-purecounter-end="<?php echo $rs2  ?>" data-purecounter-duration="1" class="purecounter"></span>
              <p>BMI</p>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="fas fa-award"></i>
             <h2> <?php 

  if ($rs2 < 18.5) {
    echo "น้ำหนักตัวน้อย/ผอม ";
  } else if ($rs2 > 18.5 && $rs2 < 22.9) {
    echo "น้ำหนักตัวปกติ ";
  } else if ($rs2 > 23.0 && $rs2 < 24.9) {
    echo "น้ำหนักเกินมีภาวะเสี่ยง ";
  } else if ($rs2 > 25.0 && $rs2 < 29.9) {
    echo "อ้วนระดับ1 ";
  } else if ($rs2 >= 30.0) {
    echo "อ้วนระดับ2 ";
  }?> </h2>

              <p>รูปร่าง</p>
            </div>
          </div>

        </div>



      </div>

    </section><!-- End Counts Section -->


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

