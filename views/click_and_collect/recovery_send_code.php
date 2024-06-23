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
                        <h4 class="text_header_3 m-0 pb-3 text-center">ACCOUNT RECOVERY</h4>
                    </div>
                    <div class="text_input">
                        <div class="mb-3">
                            <div class="mt-3 text-center">
                                <p class="text_header_2 mb-2">Enter Contact Number</p>
                                <p class="text_requirements">A verification code will be sent to your registered contact number.</p>
                            </div>
                            <input type="contact_num" class="form-control rounded-1 focus-ring" id="contact_num" name="contact_num" placeholder="09123456789" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary w-100 rounded-1 p-2">Send Code</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>