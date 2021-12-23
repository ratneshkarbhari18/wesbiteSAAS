<style>
    header,footer{
        display: none !important;
    }
</style>
<main class="page-content" id="login">

    <div class="container">

        <div class="row" style="margin-top: 2em;">
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
            <div class="col-lg-4 col-md-12 col-sm-12">

                <div class="text-center">

                    <a href="<?php echo site_url(); ?>">Go Back to Website</a>

                    <h1 class="page-title">Login</h1>
                    <p class="text-danger" id="errorMessage"></p>

                </div>

                <?php
                    echo form_open("login-exe");
                ?>

                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="customer-email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <a class="d-none d-xl-block" style="position: absolute; right:37%;" href="<?php echo site_url("forgot-password"); ?>"><small>Forgot Password?</small></a>
                        <a class="d-block d-xl-none" style="position: absolute; right:1em;" href="<?php echo site_url("forgot-password"); ?>"><small>Forgot Password?</small></a>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="customer-password" class="form-control">
                    </div>

                    <!-- <div class="mb-3">
                        <input class="form-check-input" type="checkbox" id="showPwdCustomerLogin">
                        <label class="form-check-label" for="showPwdCustomerLogin">
                            Show Password
                        </label>
                    </div> -->
                    <a href="#" id="showHidePassword">Show Password</a>
                    <br><br>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>


                <?php echo form_close(); ?>
                <div class="text-center" style="margin: 2em 0 0 0;">
                    <h4>Don't have an Account?</h4>
                    <a style="text-decoration: underline;  font-size: 1.6em;" href="<?php echo site_url("register"); ?>">Register here</a>
                </div>

            </div>
            <div class="col-lg-4 col-md-12 col-sm-12"></div>
        </div>

    </div>


</main>
<script>
    $("a#showHidePassword").click(function (e) {
        e.preventDefault();
        if ($("input#customer-password").attr("type") == "password") {
            $("input#customer-password").attr("type", "text");
            $(this).html("Hide Password?");
        } else {
            $("input#customer-password").attr("type", "password");
            $(this).html("Show Password?");
        }
    });
</script>