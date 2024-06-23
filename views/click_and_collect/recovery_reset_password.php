<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Recovery</title>
    <?php include '../html_resources.php';?>
    <link rel="stylesheet" href="../../assets/css/shop_forms.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
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
                        <h4 class="text_header_3 m-0 pb-3 text-center">RESET PASSWORD</h4>
                    </div>
                    <div class="text_input">
                        <div class="mb-3">
                            <label for="new_password" class="form-label">Enter New Password</label>
                            <input type="password" class="form-control rounded-1 focus-ring" id="new_password" name="new_password" required>

                            <div class="mt-3 ms-2">
                                <p class="text_header_2 m-0">Must contain</p>
                                <div class="text_requirements mb-4 ms-3">
                                    <p class="m-0"><i class="bi bi-circle-fill"></i> At least 8 characters</p>
                                    <p class="m-0"><i class="bi bi-circle-fill"></i> At least 1 number</p>
                                    <p class="m-0"><i class="bi bi-circle-fill"></i> At least 1 special character</p>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Confirm New Password</label>
                            <input type="password" class="form-control rounded-1 focus-ring" id="confirm_password" name="confirm_password" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-1 p-2">Update Password</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>