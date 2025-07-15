<?php
include_once "header.php";
?>

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

<link rel="stylesheet" href="login.css">

<section class="vh-100 section1" style="background-color: #9A616D;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0 loginImageOutterContainer">
                        <div class="col-md-6 col-lg-5 d-none d-md-block loginImageContainer">
                            <img src="assets/loginBack4.jpg" alt="login form" class="img-fluid loginImage" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                                <div class="d-flex align-items-center mb-3 pb-1">
                                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                    <span class="h1 fw-bold mb-0">MyHostel</span>
                                </div>

                                <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                                <form action="includes/login.inc.php" method="POST">
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required />
                                        <label class="form-label" for="form2Example17">Email address</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required />
                                        <label class="form-label" for="form2Example27">Password</label>
                                    </div>

                                    <div class="pt-1 mb-4">
                                        <button class="btn btn-dark btn-lg btn-block" style="background-color: #449866; border: none; width: 100%;" type="submit" name="submit">Login</button>
                                    </div>
                                </form>
                                <a class="small text-muted" href="#!">Forgot password?</a>
                                <p class="mb-5 pb-lg-2" style="color: #000000;">Don't have an account? <a href="signupStudent.php" style="color: #449866;">Register here as a student</a> / <a href="signupOwner.php" style="color: #449866;"> a Owner</a></p>
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
include_once "footer.php";
?>