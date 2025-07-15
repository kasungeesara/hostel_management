<?php
include_once 'header.php';
include_once 'includes/dbh.inc.php';

$select1 = mysqli_query($conn, "SELECT * FROM hostels ORDER BY hostelId DESC;");


?>

<link rel="stylesheet" href="hostels.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="error-handling">
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'stmtfaild') {
    ?>
            <script>
                Swal.fire({
                    title: "SYSTEM ERROR",
                    text: "Please contact the developers.",
                    icon: "question",
                });
            </script>

        <?php
        } else if ($_GET['error'] == 'none_contact_done') {
        ?>
            <script>
                Swal.fire({
                    title: "Done",
                    text: "Owner will contact you soon",
                    icon: "success",
                });
            </script>

    <?php
        }
    }

    ?>
</div>

<h1 class="t-shirt-heading" style="margin-top: 70px; padding: 20px;">HOSTELS</h1>
<div class="card-holder">

    <?php while ($row = mysqli_fetch_assoc($select1)) { ?>

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

    <?php } ?>

</div>


<?php
include_once 'footer.php';
?>