<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Snippet - GoSNippets</title>
    <link rel="stylesheet" href="../css/login.css">
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>


</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="wrapper bg-white">
        <img style="display: block;margin-left: auto; margin-right: auto;" src="..\img\Logo Trafoindo.png" width="230px" alt="">
        <div style="font-family: poppins; font-weight: bold;" class="h1 text-center"><strong>Task Tracker</strong></div>
        <div class="h2 text-muted text-center pt-2"><strong>LOG IN</strong></div>
        <form method="post" action="<?= base_url("/checklogin"); ?>" class="pt-3">
            <?php if (session()->has('error')) : ?>
                <div class="alert alert-danger">
                    <?= session('error') ?>
                </div>
            <?php endif; ?>
            <div class="form-group py-2">
                <div class="input-field"> <span class="far fa-user p-2"></span>
                    <input name="email_user" id="email_user" type="email" placeholder="Email Address" required class="">
                </div>
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field"> <span class="fas fa-lock p-2"></span>
                    <input name="password_user" type="password" placeholder="Enter your Password" required class=""></button>
                </div>
            </div>
            <div class="d-flex align-items-start mt-3">
                <div class="remember"> <label class="option text-muted"> Remember me <input type="radio" name="radio"> <span class="checkmark"></span> </label> </div>
                <div class="ml-auto"> <a style="text-decoration:none; color:#c82424;" href="#" id="forgot">Forgot Password?</a> </div>
            </div> <button class="btn btn-block text-center my-3 mt-5"><b>Log in</b></button>
            <div class="text-center pt-3 text-muted">Belum punya akun? <a style="text-decoration:none; color:#c82424;" href="#">Sign up</a></div>
        </form>
    </div>
    <script type='text/javascript'></script>
</body>

</html>