<?php
include_once "header.php";
include_once 'includes/dbh.inc.php';
$select1 = mysqli_query($conn, "SELECT * FROM hostels ORDER BY hostelId DESC;");
$cardCount = 3;
$currentCount = 0;
?>

<link rel="stylesheet" href="index.css" />

<style>
  .sectin1Headding {
    color: rgb(255, 255, 255);
  }

  .buttonStyle {
    margin-top: 250px !important;
  }

  @media (max-width: 1500px) {
    .sectin1Headding {
      left: 5%;
    }

    .section1Vector2 {
      right: 6%;
    }

    .section1Vector1 {
      right: 10%;
    }
  }

  @media (max-width: 1300px) {
    .sectin1Headding {
      top: 35%;
      width: 500px;
    }
  }

  @media (max-width: 1050px) {
    .sectin1Headding {
      top: 25%;
      width: 300px;
    }
  }

  @media (max-width: 850px) {
    .sectin1Headding {
      display: none !important;
    }

    .section1Vector1 {
      position: relative;
      width: 80%;
      right: 0%;
      margin: auto;
    }

    .section1Vector2 {
      width: 80%;
      margin: auto;
    }

  }

  @media (max-width: 500px) {}
</style>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<div class="error-handling">
  <?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == 'none_logout') {
  ?>
      <script>
        swal({
          title: "Logout Successfully",
          buttons: ["Done", false],
        });
      </script>

  <?php
    } else if ($_GET['error'] == 'logstd') {
      ?>
          <script>
            swal({
              title: "For contact hostels, please log as a student",
              buttons: ["Done", false],
            });
          </script>
    
      <?php
        }
  }

  ?>
</div>

<section class="section1">
  <div class="sectin1Headding">
    Find your best hostel <br />
    easily.....
  </div>

  <div class="section1Vector2"></div>
  <div class="section1Vector1">

    <?php
    if (isset($_SESSION["userid"])) {
      echo '<div class="section1Vector1Heading headingStyle">Hello ' . $_SESSION["username"] . '!</div>';
    } elseif (isset($_SESSION["adminId"])) {
      echo '<div class="section1Vector1Heading headingStyle">Hello ' . $_SESSION["adminName"] . '!</div>';
    } else {
      echo '<div class="section1Vector1Heading headingStyle"> Get Started !</div>';
    }

    ?>

    <?php
    if (isset($_SESSION["userid"])) {
      echo '<center><a href="hostels.php"><button class=" section1Vector1Button buttonStyle">View Hostels</button></a></center>
      <div class="section1Vector1SubHead">Need a help?</div>
      <a href="#">
        <div class="section1Vector1Link">Help section</div>';
    } elseif (isset($_SESSION["adminId"])) {
      echo '<center><a href="admin/ownerAdmin.php"><button class=" section1Vector1Button buttonStyle">Owner Panel</button></a></center>
      <div class="section1Vector1SubHead">Need a help?</div>
      <a href="#">
        <div class="section1Vector1Link">Help section</div>';
    } else {
      echo '<center><a href="login.php"><button class=" section1Vector1Button buttonStyle">Login</button></a></center>
    <div class="section1Vector1SubHead">Need an account?</div>
    <a href="signupStudent.php">
      <div class="section1Vector1Link">Create Account</div></a>';
    }

    ?>


  </div>
</section>
<section class="section2 vh-100">
  <link rel="stylesheet" href="index2.css">
  <h1 class="t-shirt-heading" style="padding: 20px;">New Hostels</h1>
  <h4 class="t-shirt-heading2" style="padding: 20px;">Transforming Campus Living, Elevating Student Experience in Hostel Communities</h4>
  <div class="card-holder">

    <?php while ($row = mysqli_fetch_assoc($select1)) {
      if ($cardCount == $currentCount) {
        break;
      }
      $currentCount++
    ?>

      <div class="card-inner">
        <div class="card">
          <img class="cardImg" src="assets/uploaded/main/<?php echo $row['mainImagePath']; ?>" alt="Hostel Img" style="">
          <h2 class="headingTees"><?php echo $row['hostelName']; ?></h2>
          <p class="address"><?php echo $row['address']; ?></p>
          <p class="address">0714593872</p>
          <p class="address"> <?php echo $row['ownerEmail']; ?></p>
          <p class="price"><?php echo $row['scale']; ?> Hostel</p>

          <p><a href="contactUs.php?hostel=<?php echo $row['hostelId']; ?>"><button>Contact Owner</button></a></p>
        </div>
      </div>

    <?php  } ?>


  </div>

</section>
<section class="section3 vh-100">
  <link rel="stylesheet" href="index3.css">
  <h1 class="t-shirt-heading" style="padding: 20px;">About Us</h1>
  <div class="aboutTextContainer">
    <h4 class="about-heading2" style="padding: 20px;">Whether you're a first-year student embarking on your college
      journey or a seasoned senior looking for a supportive living
      environment, we invite you to become a part of the community.
      Explore our website to learn more about our accommodation options,
      facilities, and how you can reserve your spot in our vibrant student hostel.
    </h4>
  </div>



</section>

<section>
  <?php
  include_once "footer.php";
  ?>
</section>