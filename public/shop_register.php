<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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
                        <h4 class="text_header_1 m-0 pb-3 text-center">SIGN UP</h4>
                    </div>
                    <div class="text_input">
                        <div class="mb-3 row">
                            <div class="col-md-6 m-0">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control rounded-1 focus-ring" id="first_name" name="first_name" required>
                            </div>
                            <div class="col-md-6 m-0">
                                <label for="first_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control rounded-1 focus-ring" id="first_name" name="first_name" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="contact_num" class="form-label">Contact Number</label>
                            <input type="text" class="form-control rounded-1 focus-ring" id="contact_num" name="contact_num" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control rounded-1 focus-ring" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-1 focus-ring" id="password" name="password" required>

                            <div class="mt-3">
                                <p class="text_header_2 m-0">Must contain</p>
                                <div class="text_requirements mb-4 ms-3">
                                    <p class="m-0"><i class="bi bi-circle-fill"></i> At least 8 characters</p>
                                    <p class="m-0"><i class="bi bi-circle-fill"></i> At least 1 number</p>
                                    <p class="m-0"><i class="bi bi-circle-fill"></i> At least 1 special character</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-1 p-2">Create Account</button>
                        </div>
                        <div class="text_link mb-3 text-center">
                            <p>Already have an account? <a href="shop_login.php">Log in</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>