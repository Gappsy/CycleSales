<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <?php include '../views/html_resources.php';?>
    <link rel="stylesheet" href="../assets/css/shop_forms.css">
</head>
<body class="bg_white">
    <div class="bg_dark_blue container-fluid position-absolute">
        <div class="container text_logo">
            <p class="m-0 text-white py-3"><strong>CYCLE</strong>SALES</p>
        </div>
    </div>
    <div class="bg_gray bg_gray_width container p-3">
        <div class="container pt-5 mt-4">
            <div class="btn_text m-0">
                <button class="btn btn-secondary pe-4 rounded-1"><i class="bi bi-chevron-left me-2"></i>Back</button>
            </div>
            <div class="form_shadow card col-md-3 p-4 mx-auto mt-3 rounded-1 border-0">
                <form action="" class="py-2">
                    <div class="bg_white">
                        <h4 class="text_header_1 m-0 pb-3 text-center">LOG IN</h4>
                    </div>
                    <div class="text_input">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-1 focus-ring" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-1 focus-ring" id="password" name="password" required>

                            <div class="text_link mb-4 mt-2 text-end">
                                <p><a href="../views/click_and_collect/recovery_send_code.php">Forgot Password</a></p>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-1 p-2">Login</button>
                        </div>
                        <div class="text_link mb-3 text-center">
                            <p>Don't have an account? <a href="shop_register.php">Create an Account</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>