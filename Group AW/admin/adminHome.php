<?php
include_once "headerAdmin.php";
?>

<style>
    .buttonAdmin{
        box-shadow: 3px 3px 2px 1px #4c4c4c;
    }
    .buttonAdmin:hover{
        box-shadow: 0px 1px 2px 1px #747474;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="error-handling">
    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'invalidCredentials') {
    ?>
            <script>
                Swal.fire({
                    title: "SORRY",
                    text: "Invalid username or password",
                    icon: "error"
                });
            </script>

        <?php
        } else if ($_GET['error'] == 'userExcists') {
        ?>
            <script>
                Swal.fire({
                    title: "ERROR",
                    text: "User email already exists. Try different email address",
                    icon: "warning"
                });
            </script>

        <?php
        } else if ($_GET['error'] == 'stmtfaild') {
        ?>
            <script>
                Swal.fire({
                    title: "SYSTEM ERROR",
                    text: "Please contact the developers.",
                    icon: "question"
                });
            </script>

    <?php
        }
    }
    ?>
</div>

<link rel="stylesheet" href="adminHome.css">

<section class="vh-100 section1" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0 loginImageOutterContainer">
                        <div class="col-md-6 col-lg-5 d-none d-md-block loginImageContainer">
                            <img src="../assets/loginBack4.jpg" alt="login form" class="img-fluid loginImage" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <span class="h1 fw-bold mb-0">MyHostel Admin Panel</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Manage System</h5>
                                <h6 class="fw-normal" style="letter-spacing: 1px;">Admin Email: </h6>
                                <h6 class="fw-normal mb-3" style="letter-spacing: 1px;">Admin Name: </h6>


                                <div class="pt-1 mb-4 ">
                                    <a href=""><button class="btn btn-dark btn-lg btn-block buttonAdmin" style="background-color: #449866; border: none; width: 100%;" type="submit" name="submit">Manage Students</button></a>
                                </div>
                                <div class="pt-1 mb-4">
                                    <a href=""><button class="btn btn-dark btn-lg btn-block buttonAdmin" style="background-color: #449866; border: none; width: 100%;" type="submit" name="submit">Manage Owners</button></a>
                                </div>
                                <div class="pt-1 mb-4">
                                    <a href=""><button class="btn btn-dark btn-lg btn-block buttonAdmin" style="background-color: #449866; border: none; width: 100%;" type="submit" name="submit">Manage Hostels</button></a>
                                </div>


                                <a href="#!" class="small text-muted">Terms of use.</a>
                                <a href="#!" class="small text-muted">Privacy policy</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once "footerAdmin.php";
?>