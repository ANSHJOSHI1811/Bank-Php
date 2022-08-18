<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <!-- <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css"> -->
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500;600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <!-- font awesome ICON -->
    <script src="https://kit.fontawesome.com/1367876d04.js" crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <!-- Bootstrap JS  -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <style>
        #registration-step {
            margin: 0;
            padding: 0;
        }

        #registration-step ul {
            width: 100%;
        }

        #registration-step li {
            list-style: none;
            width: 14%;
            float: left;
            padding: 5px 10px;
            border-top: #EEE 1px solid;
            border-left: #EEE 1px solid;
            border-right: #EEE 1px solid;
            border-bottom: #09F 1px solid;
            cursor: pointer;
        }

        #registration-step li.highlight {
            background-color: #5271ff;
            font-weight: 550;
            font-size: 14px;
            color: white;
            border-radius: 3pxs;
            padding: 0.5% 0.5%;
        }

        #registration-step li.highlight:hover {
            background: linear-gradient(230deg, #5271ff, #3b168c);
            ;
        }

        #registration-step li:hover {
            background-color: #EFFFFD;

        }

        #registration-form {
            clear: both;
            border: 1px #EEE solid;
            padding: 20px;
        }

        .demoInputBox {
            padding: 10px;
            border: #F0F0F0 1px solid;
            border-radius: 4px;
            background-color: #FFF;
            width: 50%;
        }

        .registration-error {
            color: tomato;
            padding-left: 15px;
        }

        .message {
            color: #00FF00;
            font-weight: bold;
            width: 100%;
            padding: 10;
        }

        .btnAction[name="next"] {
            padding: 5px 45px 5px 45px;
            background: #5271ff;
            border: 0;
            color: #FFF;
            cursor: pointer;
            margin-top: 15px;
            width: max-content;
            border-radius: 8px;
            margin-left: 75%;

        }


        .btnAction[name="finish"] {
            padding: 5px 45px 5px 45px;
            background: #1363DF;
            border: 0;
            color: #FFF;
            cursor: pointer;
            margin-top: 15px;
            width: max-content;
            border-radius: 8px;
            margin-left: 75%;

        }

        .btnAction[name="finish"]:disabled {
            padding: 5px 45px 5px 45px;
            background: grey;
            border: 0;
            color: #FFF;
            cursor: pointer;
            margin-top: 15px;
            width: max-content;
            border-radius: 8px;
            margin-left: 75%;

        }


        .btnAction[name="back"] {
            padding: 5px 45px 5px 45px;
            background: #3b168c;
            border: 0;
            color: #FFF;
            cursor: pointer;
            margin-top: 15px;
            width: max-content;
            border-radius: 8px;
        }

        .btnAction:hover {
            background: linear-gradient(135deg, #5271ff, #3b168c);
        }

        .li {
            width: 100%;
            padding: 20px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 30px;
            border: 5px;
            border-color: #EEE;
            outline: none;
            background-color: #5271ff;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
        }

        label.upload {
            background: #5271ff;
            color: white;
            padding: 0.5rem;
            font-family: sans-serif;
            border-radius: 0.3rem;
            cursor: pointer;
            margin-top: 1rem;
            width: 60%;
            padding-left: 15px;
        }

        #file-chosen {
            margin-left: 0.3rem;
            font-family: sans-serif;
        }
        .capbox {
    margin-top: 2%;
    background-color: white;
    width: 500px;
    border-width: 1px 1px 1px 20px;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    display: inline-block;
    padding: 5px 8px;
    border-radius: 4px;
}

.capbox-inner {
    font-size: 12px;
    color: #000000;
    background-color: #E8F9FD;
    margin: 0px auto;
    padding: 3px 10px 3px 10px;
    display: inline-block;
    vertical-align: middle;
    width: 200px;
    border: #ccc 1px solid;
}

#CaptchaDiv {
    color: #92B4EC;
    background-image: url("cap.png");
    font: normal 25px Impact, Charcoal, 'Rubik', sans-serif;
    font-style: italic;
    text-align: center;
    vertical-align: middle;
    user-select: none;
    display: inline-block;
    padding: 3px 14px 3px 8px;
    margin-right: 4px;
    border-radius: 4px;
}

#CaptchaInput {
    font-family: 'Montserrat', sans-serif;
    border: rgba(0, 0, 0, 0.2) 1px solid;
    margin: 3px 25px 1px 0px;
    width: 180px;
}

    </style>
    <script src="https://smtpjs.com/v3/smtp.js"></script>

    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        function validate() {
            var output = true;
            console.log($("#branch_id").value)
            $(".registration-error").html('');
            if(!checkform()){
                output=false;
            }
            if ($("#registration-field").css('display') != 'none') {
                if (document.getElementById('branch_id').value == "Select Branch") {
                    output = false;
                    $("#branch-error").html("*select branch");
                }
                if (document.getElementById('citi').value == "Select City") {
                    output = false;
                    $("#city-error").html("*select city");
                }
                if (document.getElementById('state').value == "Select State") {
                    output = false;
                    $("#state-error").html("*select state");
                }
                if (!($("#email").val())) {
                    output = false;
                    $("#email-error").html("required");
                }
                if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#email-error").html("*invalid email address");
                    output = false;
                }
                if (!($("#Mobile_No").val())) {
                    output = false;
                    $("#mobile-error").html("required");
                }
                if (!$("#Mobile_No").val().match(/((\+*)((0[ -]*)*|((91 )*))((\d{12})+|(\d{10})+))|\d{5}([- ]*)\d{6}/)) {
                    $("#mobile-error").html("*invalid mobile-num must be of 10 digit");
                    output = false;
                }
                if (($("#code").val()!==($("#v_code").val()))) {
                    output = false;
                    $("#verification-error").html("Verification Code is invalid");
                }
            } else if ($("#identity-field").css('display') != 'none') {
                if (!($("#f_name").val())) {
                    output = false;
                    $("#f_name_error").html("*enter name");
                }

                if (!($("#l_name").val())) {
                    output = false;
                    $("#l_name_error").html("*enter last-name");
                }
                if (!($("#other_email").val())) {
                    output = false;
                    $("#oth_email-error").html("required");
                }
                if (!$("#other_email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                    $("#oth_email-error").html("*invalid email address");
                    output = false;
                }
                if (!$("#other_mobile").val().match(/((\+*)((0[ -]*)*|((91 )*))((\d{12})+|(\d{10})+))|\d{5}([- ]*)\d{6}/)) {
                    $("#oth_mobile-error").html("*invalid mobile-num");
                    output = false;
                }
                if (!($("#dob").val())) {
                    output = false;
                    $("#dob_error").html("*d.o.b required");
                }
                if (!($("#gender").val())) {
                    output = false;
                    $("#gender-error").html("*select gender");
                }
            } else if ($("#address-field").css('display') != 'none') {
                if (!($("#house_no").val())) {
                    output = false;
                    $("#house_num_error").html("*enter house no");
                }
                if (!($("#street").val())) {
                    output = false;
                    $("#street_error").html("*enter street");
                }
                if (!($("#area").val())) {
                    output = false;
                    $("#area_error").html("*enter area");
                }
                if (!$("#pincode").val().match(/[0-9]{6}/)) {
                    $("#pincode_error").html("*invalid pincode");
                    output = false;
                }
                if (!($("#poaFile").val())) {
                    output = false;
                    $("#poaFile-error").html("*select document");
                }
                if (!($("#commpoaFile").val())) {
                    output = false;
                    $("#commpoaFile-error").html("*select comm-document");
                }
                if (!($("#identity_front").val())) {
                    output = false;
                    $("#identity_front-error").html("*upload identity-front");
                }
                if (!($("#identity_back").val())) {
                    output = false;
                    $("#identity_back-error").html("*upload back-front");
                }
                if (!($("#comm_house_no").val())) {
                    output = false;
                    $("#comm_house_num_error").html("*enter comm_house no");
                }
                if (!($("#comm_street").val())) {
                    output = false;
                    $("#comm_street_error").html("*enter comm_street");
                }
                if (!($("#comm_area").val())) {
                    output = false;
                    $("#comm_area_error").html("*enter comm_area");
                }
                if (!$("#comm_pincode").val().match(/[0-9]{6}/)) {
                    $("#comm_pincode_error").html("*comm_invalid pincode");
                    output = false;
                }
                if (!document.getElementById("message-box").checked) {
                    $("#message_box_error").html("*Check the check box");
                    output = false;
                }
                if (document.getElementById('h_city').value == "Select City") {
                    output = false;
                    $("#h_city-error").html("*select home-city");
                }
                if (document.getElementById('h_state').value == "Select State") {
                    output = false;
                    $("#h_state-error").html("*select home-state");
                }
                if (document.getElementById('comm_city_id').value == "Select City") {
                    output = false;
                    $("#comm_city_id-error").html("*select comm-city");
                }
                if (document.getElementById('comm_state_id').value == "Select State") {
                    output = false;
                    $("#comm_state_id-error").html("*select comm-state");
                }

            } else if ($("#documents-field").css('display') != 'none') {

                if (!($("#pan").val()) && !(($("#DL").val()) && ($("#dl_dt").val())) && !(($("#PASS").val()) && ($("#pass_dt").val())) && !(($("#OD").val()) && ($("#od_dt").val())) && !($("#VID").val())) {
                    output = false;
                    $("#documents_error").html("*Enter Documents detailes");
                }
                if (!($("#document_image").val())) {
                    output = false;
                    $("#document_image-error").html("*upload document");
                }
                if (!($("#photo").val())) {
                    output = false;
                    $("#photo-error").html("*upload photo");
                }


            } else if ($("#other-field").css('display') != 'none') {
                if (!($("#mother_m_name").val())) {
                    output = false;
                    $("#mother_m_error").html("*enter mmother-madian-name");
                }
                if (!($("#mother_full_name").val())) {
                    output = false;
                    $("#mother_full_error").html("*entermother-full-name");
                }
                if (!($("#father_name").val())) {
                    output = false;
                    $("#father_name_error").html("*enter father-name");
                }
                if (!($("#spouse_name").val())) {
                    output = false;
                    $("#spouse_error").html("*enter spouse-name");
                }

                if (document.getElementById('occupation').value == "Select-occupation") {
                    output = false;
                    $("#occupation-error").html("* please select occupation");
                }
                if (document.getElementById('income').value == "Select-Income") {
                    output = false;
                    $("#income-error").html("* please enter income");
                }
                if (document.getElementById('marrital_status').value == "Select-Matrial-Status") {
                    output = false;
                    $("#marrital_status-error").html("*select marrtial-status");
                }
                if (document.getElementById('form60-select').value == "Select*") {
                    output = false;
                    $("#form60-select-error").html("*select yes/no");
                }

                if (document.getElementById('type_of_acc').value == "Account*") {
                    output = false;
                    $("#type_of_acc-error").html("*select type_of_acc");
                }
                if (document.getElementById('mode_of_operation').value == "Mode-Operation*") {
                    output = false;
                    $("#mode_of_operation-error").html("* select mode of operation");
                }

                if (document.getElementById('no_acc_holder').value == "Number of Holders*") {
                    output = false;
                    $("#no_acc_holder-error").html("*select Number of Holders*");
                }

            }
            if ($("#nominee-field").css('display') != 'none') {
                // 
                if ((document.getElementById('relationship').value == "Other") && !($("#other_relation").val())) {

                    output = false;
                    $("#other_relation_error").html("*Enter other relation");
                }

                if (!($("#nominee_name").val())) {
                    output = false;
                    $("#nominee_name_error").html("*enter nominee_name");
                }

                if (!($("#guardian_name").val())) {
                    output = false;
                    $("#g_name_error").html("*enter spouse-name");
                }
                if (!($("#relation_nominee").val())) {
                    output = false;
                    $("#relation_nominee_error").html("*enter relation with guardian");
                }
                if (!($("#witness_name_1").val())) {
                    output = false;
                    $("#w1_name_error").html("*enter witness name 1");
                }
                if (!($("#witness_name_2").val())) {
                    output = false;
                    $("#w2_name_error").html("*enter witness name 2");
                }
                if (!($("#nominee_dob").val())) {
                    output = false;
                    $("#nominee_dob_error").html("*nominee dob required");
                }
                if (!($("#g_dob").val())) {
                    output = false;
                    $("#g_dob_error").html("*d.o.b required");
                }
                if (document.getElementById('relationship').value == "Select-Relation") {
                    output = false;
                    $("#relationship-error").html("*select relationship");
                }






            }
            return output;
        }
        $(document).ready(function() {
            $("#next").click(function() {
               var output = validate();
                //  var output = true;
                if (output) {
                    var current = $(".highlight");

                    var next = $(".highlight").next("li");
                    if (next.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + next.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").hide();
                        $(".highlight").removeClass("highlight");
                        next.addClass("highlight");
                        if ($(".highlight").attr("id") == "confirmation") {
                            $("#next").hide();
                            $("#finish").show();
                        }
                    }
                }
            });
            $("#back").click(function() {
                var current = $(".highlight");
                var prev = $(".highlight").prev("li");
                if (prev.length > 0) {
                    $("#" + current.attr("id") + "-field").hide();
                    $("#" + prev.attr("id") + "-field").show();
                    $("#next").show();
                    $("#finish").hide();
                    $(".highlight").removeClass("highlight");
                    prev.addClass("highlight");
                    if ($(".highlight").attr("id") == $("li").first().attr("id")) {
                        $("#back").hide();
                    }
                }
            });
        });
    </script>
</head>

<body>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa-solid fa-caret-up"></i></button>
    <?php
        $conn = new mysqli("localhost","root","", "bank");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else {
            $sql = "Select id,state_name from state";
            $states = mysqli_query($conn, $sql);
            $h_states = mysqli_query($conn, $sql);
            $c_states = mysqli_query($conn, $sql);
        }

        $conn->close();
    ?>

    <nav class="navbar fixed-top navbar-light shadow">
        <a class="navbar-brand" href="#">Polygon <i class="fa-solid fa-draw-polygon"></i> Bank</a>

    </nav>


    <div class="container shadow p-3 mb-5 bg-white rounded" style="margin-top:5%;">

        <div class="message"><?php if (isset($message)) echo $message; ?></div>
        <ul id="registration-step">
            <li onclick="clickfunction('registration') " id="registration" class="highlight">Registration</li>
            <li onclick="clickfunction('identity') " id="identity">Identity Details</li>
            <li onclick="clickfunction('address') " id="address">Address Verification</li>
            <li onclick="clickfunction('documents') " id="documents">Documents Upload</li>
            <li onclick="clickfunction('other') " id="other">Other Information</li>
            <li onclick="clickfunction('nominee') " id="nominee">Nominee Detail</li>
            <li onclick="clickfunction('confirmation')" id="confirmation">Confirmation</li>
        </ul>

        <br><br>

        <form name="signup-form" id="signup-form" enctype="multipart/form-data" method="post" action="update.php" style="padding: 20px;">
            <input type="text" id="id" name="id" hidden>
            <div id="registration-field">
                <div class="fieldset-content">
                    <div class="title1">
                        <h4>Lets Get Started</h4>
                    </div>
                    <p class="desc" style="color:5271ff ;font-weight:600">Please enter your infomation and proceed to next step so we can build your account *</p>
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group">
                                <label class="form-label">State</label>
                                <select name="state" id="state" class="form-select">
                                    <option value="Select State" disabled selected>Select State</option>
                                    <?php while ($state = mysqli_fetch_array($states, MYSQLI_ASSOC)): ?>
                                        <option value="<?php echo $state["id"]; ?>" >
                                            <?php echo $state["state_name"]; ?>
                                        </option>
                                    <?php endwhile;?>
                                </select>
                                <span id="state-error" class="registration-error"></span>
                            </div>
                            <div class="form-group ">

                                <label class="form-label">City</label>
                                <select name="city" class="form-select" id="citi">
                                    <option value="Select City">Select City </option>
                                </select>
                                <span id="city-error" class="registration-error"></span>
                            </div>
                            <div class="form-group ">
                                <label class="form-label">Branch</label>
                                <select id="branch_id" name="branch_id" class="form-select" required>
                                    <option value="Select Branch">Select Branch</option>

                                </select>
                            </div>

                        </div>
                        <span id="branch-error" class="registration-error" style="margin-left: 80%;"></span>
                    </div>
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group"style="width:425px">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email" placeholder="Enter Email Address"  />
                                <span id="email-error" class="registration-error"></span>
                                <input type="text" name="code" id="code" value="" hidden>
                            </div>
                            <div class="form-group" id="verifyEmailDiv" style="margin-top:35px">
                            <input type="button" class="btn btn-primary btnAction" style="padding-right:20px;padding-left:20px"name="verifyEmail" id="verifyEmail" value="Verify">
                            </div>
                            <div class="form-group" id="spinnerDiv" hidden>
                                <br><br>
                                <div class="spinner-border text-primary" role="status" id="spinner">
                                <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="form-group" id="verifyDiv"style="width:300px ;margin-left:20px; margin-top:px;font-weight:500" hidden>
                                <label for="v_code" id="lblCheckEmail">Check your mail to verify the code</label>
                                <input type="text" name="v_code" id="v_code" value=""style="margin-top:12px;" placeholder="Enter verification code" >
                                <span id="verification-error" class="registration-error"></span>
                            </div>
                           
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group"style="width:550px">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="Mobile_No" id="Mobile_No" placeholder="Enter Mobile Number" style="width:90%" />

                                <span id="mobile-error" class="registration-error"></span>
                            </div>
                            <div class="col-lg-3"></div>    
                            <div class="capbox" style="margin-left: 10%;">
                            <div id="CaptchaDiv"></div>
                            <div class="capbox-inner">
                                Enter Captcha Code:<br>
                                <input type="hidden" id="txtCaptcha">
                                <input type="text" name="CaptchaInput" id="CaptchaInput" size="15" placeholder="enter captcha" required><br>
                            </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                </div>
                
            <div id="identity-field" style="display:none;">
                <h4>Identity Detailes</h4>

                <p class="desc" style="color:5271ff ;font-weight:600">Please enter your infomation and proceed to next step so we can build your account</p>
                <div class="fieldset-content">
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group">
                                <label for="f_name" class="form-label">First Name</label>
                                <input type="text" name="f_name" id="f_name" placeholder="Enter First Name" />
                                <span id="f_name_error" class="registration-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="m_name" class="form-label">Middle Name</label>
                                <input type="text" name="m_name" id="m_name" placeholder="Enter Middle Name" />
                                <span id="m_name_error" class="registration-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-label">Last Name</label>
                                <input type="text" name="l_name" id="l_name" placeholder="Enter Last Name" />
                                <span id="l_name_error" class="registration-error"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="other_email" id="other_email"  placeholder="Enter Email Address" />
                                <span id="oth_email-error" class="registration-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="other_mobile" id="other_mobile" placeholder="Enter Mobile Number" />
                                <span id="oth_mobile-error" class="registration-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-date" style="margin-left: 1%;">
                                <label for="birth_date" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" style="font-size:18px;text-transform:uppercase; opacity: 0.5;" name="dob" id="dob" value="" style="margin-top:8%">
                                <span id="dob_error" class="registration-error"></span>
                            </div>
                            <div class="col-lg-3"></div>
                            <div class="form-group" style="margin-left: 11%;">
                                <label for="birth_date" class="form-label">Gender</label>
                                <div class="form-check form-check-inline" style="margin-top: 15px">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="m">
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                </div>
                                <div class="form-check form-check-inline " style="margin-top: 15px">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="f">
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                </div>
                                <div class="form-check form-check-inline " style="margin-top: 15px">
                                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="o">
                                    <label class="form-check-label" for="inlineRadio3">Prefer Not to Say</label>
                                </div>
                                <input type="text" hidden name="gender" id="gender" value="">
                                <span id="gender-error" class="registration-error"></span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <div id="address-field" style="display:none;">
                <br>
                <div class="fieldset-content">
                    <h4>Home-Address</h4>
                    <p class="desc" style="color:5271ff ;font-weight:600">Enter your Home Address</p>
                    <br>
                    <div class="form-row">

                        <div class="form-flex">
                            <div class="form-group">
                                <label for="house_no" class="form-label">House No./Apt</label>
                                <input type="text" name="house_no" id="house_no" placeholder="Enter House Number " /><span id="house_num_error" class="registration-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="Street Name" class="form-label">Street Name /Locality</label>
                                <input type="text" name="street" id="street" placeholder="Enter Street Name/Locality" />
                                <span id="street_error" class="registration-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group">
                                <label for="area" class="form-label">Area</label>
                                <input type="text" name="area_id" id="area" placeholder="Enter Area" />
                                <span id="area_error" class="registration-error"></span>
                            </div>
                            <div class="form-group">
                                <label for="Pincode" class="form-label">Pincode</label>
                                <input type="text" name="pincode" id="pincode" style="width:250px" placeholder="Enter Pincode " />
                                <span id="pincode_error" class="registration-error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="form-group">
                                <label class="form-label">State</label>
                                <select name="h_state" id="h_state" class="form-select">
                                    <option value="Select State" disabled selected>Select State</option>
                                    <?php while ($hstate = mysqli_fetch_array($h_states, MYSQLI_ASSOC)) :; ?>
                                        <option value="<?php echo $hstate["id"]; ?>">
                                            <?php echo $hstate["state_name"]; ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                                <span id="h_state-error" class="registration-error"></span>
                            </div>
                            <div class="form-group ">

                                <label class="form-label">City</label>
                                <select name="h_city" id="h_city" class="form-select">
                                    <option value="Select City">Select City </option>
                                </select>
                                <span id="h_city-error" class="registration-error"></span>
                            </div>
                            <div class="form-group">
                                <!-- <label for="actual-btn" class="form-label upload" style="padding-left:20%;margin-top:10%; width:250px">Upload <i class="fa-solid fa-arrow-up-from-bracket"></i></label>
                                <input type="file" name="poa" id="upload" hidden />
                                <span id="file-chosen ">No file chosen</span> -->
                                <label for="poaFile" class="form-label">Proof of Address</label>
                                <input class="form-control" type="file" id="poaFile" name="poaFile">
                                <span id="poaFile-error" class="registration-error"></span>
                            </div>
                        </div>
                        <br>
                        <hr><br>
                        <h4>Communication-Address</h4>
                        <p class="desc" style="color:5271ff ;font-weight:600">Please enter your Communication Address</p>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" onclick="FillAddressInput()" value="" id="flexCheckChecked" #chkDeclaration>
                                <label class="form-check-label addl" for="flexCheckChecked">
                                    Same as Home Address </label>
                            </div>

                        </div>
                        <br>
                        <div class="form-row">
                            <div class="form-flex">
                                <div class="form-group">
                                    <label for="house_no" class="form-label">Comm No./Apt</label>
                                    <input type="text" name="comm_house_no" id="comm_house_no" placeholder="Enter " />
                                    <span id="comm_house_num_error" class="registration-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Street Name" class="form-label">Street Name /Locality</label>
                                    <input type="text" name="comm_street" id="comm_street" placeholder="Enter Street Name/Locality" />
                                    <span id="comm_street_error" class="registration-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-flex">
                                <div class="form-group">
                                    <label for="area" class="form-label">Area</label>
                                    <input type="text" name="comm_area" id="comm_area" placeholder="Enter Area" />
                                    <span id="comm_area_error" class="registration-error"></span>
                                </div>
                                <div class="form-group">
                                    <label for="Pincode" class="form-label">Pincode</label>
                                    <input type="text" name="comm_pincode" id="comm_pincode" style="width:250px;" placeholder="Enter Pincode " />
                                    <span id="comm_pincode_error" class="registration-error"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-flex">
                                <div class="form-group">
                                    <label class="form-label">State</label>
                                    <select name="comm_state_id" id="comm_state_id" class="form-select">
                                        <option value="Select State" disabled selected>Select State</option>
                                        <?php while ($cstate = mysqli_fetch_array($c_states, MYSQLI_ASSOC)) :; ?>
                                            <option value="<?php echo $cstate["id"]; ?>">
                                                <?php echo $cstate["state_name"]; ?>
                                            </option>
                                        <?php endwhile; ?>
                                    </select>
                                    <span id="comm_state_id-error" class="registration-error"></span>
                                </div>
                                <div class=" form-group ">

                                    <label class=" form-label">City</label>
                                    <select name="comm_city_id" id="comm_city_id" class="form-select">
                                        <option value="Select City">Select City </option>
                                    </select>
                                    <span id="comm_city_id-error" class="registration-error"></span>
                                </div>
                                <div class=" form-group">
                                    <!-- <input type="file" name="poa" id="upload1" hidden />
                                    <label for="actual-btn" class="form-label upload" style="padding-left:20%;margin-top:10%; width:250px">Upload <i class="fa-solid fa-arrow-up-from-bracket"></i></label> <span id="file-chosen1">No file chosen</span> -->
                                    <label for="commpoaFile" class="form-label">Communication-address</label>
                                    <input class="form-control" type="file" id="commpoaFile" name="commpoaFile">
                                    <span id="commpoaFile-error" class="registration-error"></span>
                                </div>

                            </div>
                        </div>
                        <br>
                        <hr>
                        <div class="fieldset-content">
                            <div class="form-row">
                                <h5 class="">Message-Box</h5>
                                <div class="form-row">
                                    <div class="form-flex" style="margin-top: 3%;">
                                        <div class="Content-Message">
                                            <ol>
                                                <li> I reside at the communication address shared
                                                </li>
                                                <li>
                                                    This address has been provided by me for the purpose of account opening
                                                </li>
                                                <li>
                                                    I wish to receive all account correspondence at this address
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-flex" style="margin-left: 1%; margin-top:1%">
                                            <input class=" form-check-input" type="checkbox" id="message-box">
                                            <label class="form-check-label ">
                                                <h6 style=" font-weight:300;">I agree above given Terms</h6>
                                            </label>
                                        </div>
                                    </div>
                                    <span id="message_box_error" class="registration-error"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>National ID Card Upload* (Only Image)</h5>

                        <div class="form-row" style="margin-left:10%;">
                            <div class="form-flex">

                                <div class="form-group">

                                    <!-- <label for="actual-btn" class="form-label upload" style="padding-left:12%; width:250px">Front Image <i class="fa-solid fa-arrow-up-from-bracket"></i></label> <input type="file" name="poa" id="actual-btn" hidden />
                                    <span id="file-chosen">No file chosen</span> -->
                                    <label for="formFile" class="form-label">Front Img</label>
                                    <input class="form-control" type="file" id="identity_front" name="identity_front" style="width:350px ;">
                                    <span id="identity_front-error" class="registration-error"></span>
                                </div>
                                <div class="form-group">
                                    <!-- <label for="actual-btn" class="form-label upload" style="padding-left:12%; width:250px">Back Image <i class="fa-solid fa-arrow-up-from-bracket"></i></label> <input type="file" name="poa" id="actual-btn" hidden />
                                    <span id="file-chosen">No file chosen</span> -->
                                    <label for="formFile" class="form-label">Back Img</label>
                                    <input class="form-control" type="file" id="identity_back" name="identity_back" style="width:350px ;">
                                    <span id="identity_back-error" class="registration-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div id="documents-field" style="display:none;">
                <h4>Upload Documents</h4>
                <p class="desc" style="color:5271ff ;font-weight:600">Please enter your infomation and proceed to next step so we can build your account</p>
                <span id="documents_error" class="registration-error"></span>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Number</th>
                            <th scope="col">Expiry-Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr style="vertical-align: centre;">
                            <th scope="row">1</th>
                            <td>PAN Num</td>
                            <td>
                                <div class="input-group">
                                    <input type=" text" class="form-control" name="pan" id="pan" style="margin-top:5%" placeholder="AAAAA1234A" value="" />
                                </div>
                            </td>
                            <td style="padding-top:3%; padding-left:3%; font-size:20px ;font-weight:400">NA</td>

                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Drivng Licence</td>
                            <td>
                                <div class="input-group">
                                    <input pattern=".{16,16}" maxlength="16" type="text" class="form-control" id="DL" style="margin-top:5%" placeholder="DL-0212345678910" value="" name="dl">

                                </div>
                            </td>
                            <td>
                                <input type="date" class="form-control" style="font-size:18px;text-transform:uppercase; opacity: 0.5;" name="pass_exp" value="" style="margin-top:8%" id="dl_dt">
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Passport</td>
                            <td>
                                <div class="input-group">
                                    <input pattern=".{8,8}" maxlength="8" type="text" class="form-control" name="PASS" id="PASS" placeholder="JXXXXXX" value="" name="pass" style="margin-top:5%">
                                </div>
                            </td>
                            <td> <input type="date" class="form-control" style="font-size:18px;text-transform:uppercase; opacity: 0.5;" name="pass_exp" id="pass_dt" value="" style="margin-top:8%">
                            </td>

                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Voter-ID</td>
                            <td>
                                <div class="input-group">
                                    <input pattern=".{10,10}" maxlength="10" type="text" class="form-control" name="VID" id="VID" placeholder="AAAA123456" value="" name="vi" style="margin-top:5%">
                                </div>
                            </td>
                            <td style="padding-top:3%; padding-left:3%; font-size:20px ;font-weight:400">NA</td>

                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td style="margin-top:10%">Others</td>
                            <td>
                                <div class="input-group">
                                    <input pattern=".{10,10}" maxlength="10" type="text" class="form-control" name="other" id="OD" placeholder="ALFA-NUMERIC" value="" style="margin-top:5%">
                                </div>
                            </td>
                            <td> <input type="date" class="form-control" style="font-size:18px;text-transform:uppercase; opacity: 0.5;" name="pass_exp" value="" style="margin-top:8%" id="od_dt">
                            </td>

                        </tr>
                        <tr>
                    </tbody>
                </table>
                <div class="fieldset-content">
                    <div class="form-row">
                        <label for="document_image" class="form-label">Upload Document</label>
                        <input class="form-control" type="file" id="document_image" name="document_image">
                        <span id="document_image-error" class="registration-error"></span>
                        <div>

                        </div>
                        <div class="form-group">
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" id="photo" name="photo">
                            <span id="photo-error" class="registration-error"></span>
                        </div>
                    </div>
                </div>

                <br>
                <hr><br>
                <p>FATCA Declaration</p>
                <div class="form-row">
                    <div class="form-flex"><input type="radio" id="html" name="fav_language" value="HTML">
                        <label for="html" style="margin-left:10px;padding-top:10px"> If you are an Indian citizen and a tax resident of India and of no other country</label><br>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-flex">
                          <input type="radio" id="css" name="fav_language" value="CSS">
                          <label for="css" style="margin-left:10px;padding-top:10px">If you are a tax resident of one or more countries other than India, which includes being a US citizen or Green Card Holder,(View Policy to Click here)</label>
                    </div>
                </div>
            </div>

            <div id="other-field" style="display:none;">
                <h4>Other Information</h4>

                <p class="desc" style="color:5271ff ;font-weight:600">Please enter your infomation </p>
                <div class="fieldset-content">
                    <div class="form-row">
                        <div class="form-flex">
                            <div class="input-box dropdown form-group">
                                <label for="occupation detailes">occupation*</label>
                                <select class="form-select" id="occupation" name="occupation">
                                    <option value="Select-occupation" selected disabled>Select-Occupation</option>
                                    <option value="Private-Job">Private-Job</option>
                                    <option value="Goverment-Job">Goverment-Job</option>
                                    <option value="Business">Business</option>
                                    <option value="Student">Student</option>
                                </select>
                                <span id="occupation-error" class="registration-error"></span>
                            </div>
                            <div class=" input-box dropdown form-group">
                                <label for="Income detailes">Income*</label>
                                <select class="form-select" id="income" name="income">
                                    <option value="Select-Income" selected disabled>Select-Income </option>
                                    <option value="Upto Rs. 2.5lakh">Upto Rs. 2.5lakh</option>
                                    <option value="Rs. 2.5lakh - Rs. 5lakh">Rs. 2.5lakh - Rs. 5lakh</option>
                                    <option value="Rs. 5lakh - Rs. 7.5lakh">Rs. 5lakh - Rs. 7.5lakh</option>
                                    <option value="Rs. 7.5lakh - Rs. 10lakh">Rs. 7.5lakh - Rs. 10lakh</option>
                                    <option value="Rs. 10lakh - Rs. 12.5lakh">Rs. 10lakh - Rs. 12.5lakh</option>
                                    <option value="Rs. 12.5lakh - Rs. 15lakh">Rs. 12.5lakh - Rs. 15lakh</option>
                                    <option value="Above Rs. 15lakh">Above Rs. 15lakh</option>
                                </select>
                                <span id="income-error" class="registration-error"></span>
                            </div>
                            <div class=" input-box dropdown matrial form-group ">
                                <label for=" Matrial">Matrial-status*</label>
                                <select class=" form-select" id="marrital_status" name="marrital_status">
                                    <option value="Select-Matrial-Status" selected disabled>Select-Matrial-Status</option>
                                    <option value="s">Single</option>
                                    <option value="m">Married</option>
                                    <option value="w">Widow/widower</option>
                                </select>
                                <span id="marrital_status-error" class="registration-error"></span>
                            </div>
                        </div>
                        <div class=" form-row">
                            <div class="form-flex">
                                <div class="input-box form60/61 form-group" ">
                                    <label for="Form60/61 detailes">Form 60/61*</label>
                                    <select name="form_sixty" id="form60-select" class="form-select" aria-label="Default select example">
                                        <option value="Select*" style="width:300px" selected disabled >Select*</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>

                                </div>
                                <div class="input-box form-group" id="download_form" hidden>
                                    <a class="btn btn-outline-primary D60" href="https://www.incometaxindia.gov.in/forms/income-tax%20rules/103120000000007944.pdf" role="button">Download-Form 60*</a>
                                </div>
                                <div class="form-group" id="upload_form" hidden>
                                    <label for="formFile" class="form-label">Upload Form-60</label>
                                    <input class="form-control" type="file" id="form_60" name="form_60">
                                    <span id="form60-select-error" class="registration-error"></span>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <h5>Guardian Detailes</h5>
                        <p class=" desc" style="color:5271ff ;font-weight:600">Enter Guardian Name and Detailes</p>
                        <div class="form-row">
                            <div class="form-flex">
                                <div class="input-box form-group">
                                    <span class="detailes">Mother's Maiden Name</span>
                                    <input class="text" type="text" placeholder="Enter Mother's Maiden Name" name="mother_m_name" id="mother_m_name">
                                    <span id="mother_m_error" class="registration-error"></span>

                                </div>
                                <div class="input-box form-group">
                                    <span class="detailes">Mother's Full Name</span>
                                    <input class="text" type="text" placeholder="Enter Mother's Full Name" name="mother_full_name" id="mother_full_name">
                                    <span id="mother_full_error" class="registration-error"></span>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-flex">
                                <div class="input-box form-group">
                                    <span class="detailes">Father's Name</span>
                                    <input class="text" type="text" placeholder="Enter Father's Name" name="father_name" id="father_name">
                                    <span id="father_name_error" class="registration-error"></span>

                                </div>
                                <div class="input-box form-group">
                                    <span class="detailes">Spouse Name</span>
                                    <input class="text" type="text" placeholder="Enter Spouse Name" name="spouse_name" id="spouse_name">
                                    <span id="spouse_error" class="registration-error"></span>

                                </div>
                            </div>

                        </div>
                        <hr>
                        <h5>Bank Account Detailes</h5>
                        <p class="desc" style="color:5271ff ;font-weight:600">Select Type and Nominee</p>
                        <div class="form-row">
                            <div class="form-flex">
                                <div class=" input-box form-group">
                                    <label for="">Type of Account</label>
                                    <select class="form-select" name="type_of_acc" id="type_of_acc">
                                        <option value="Account*" selected disabled>Account*</option>
                                        <option value="SAV">Saving</option>
                                        <option value="CURRENT">Current</option>
                                    </select>
                                    <span id="type_of_acc-error" class="registration-error"></span>
                                </div>

                                <div class=" input-box form-group">
                                    <label for="For">Mode-Operation*</label>
                                    <select class="form-select" name="mode_of_operation" id="mode_of_operation">
                                        <option value="Mode-Operation*" selected disabled>Mode-Operation*</option>
                                        <option value="Joint">Joint</option>
                                        <option value="Single">Single</option>
                                    </select>
                                    <span id="mode_of_operation-error" class="registration-error"></span>
                                </div>
                                <div class=" input-box form-group">
                                    <label for="For"> No of Joint-Holder*</label>
                                    <select class="form-select" name="no_acc_holder" id="no_acc_holder">
                                        <option value="Number of Holders*" selected disabled>Number of Holders*</option>
                                        <option value="J1">1</option>
                                        <option value="J2">2</option>
                                        <option value="J3">3</option>
                                        <option value="J4">4</option>
                                    </select>
                                    <span id="no_acc_holder-error" class="registration-error"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="nominee-field" style="display:none;">
                <h2>Nominee Detailes</h2>
                <p class="desc" style="color:5271ff ;font-weight:600">Please enter your Nominee Name </p>
                <div class="form-row">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="f_name" class="form-label">Nominee Name</label>
                            <input type=" text" name="nominee_name" id="nominee_name" style="width:560px" placeholder="Enter Nominee Name" />
                            <span id="nominee_name_error" class="registration-error"></span>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="form-group ">
                            <div class="form-date ">
                                <label for="birth_date" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" style="font-size:15px;text-transform:uppercase; opacity: 0.5; width:300px" id="nominee_dob" name="nominee_dob" value="">
                                <span id="nominee_dob_error" class="registration-error"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-flex">
                        <div class="form-group ">
                            <label class="form-label">Relationship</label>
                            <select class="form-select" name="relationship" id="relationship" style="width:300px">
                                <option value="Select-Relation" selected disabled>Select-Relation</option>
                                <option value="Husband">Husband</option>
                                <option value="Wife">Wife</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                                <option value="Other">Other</option>
                            </select>
                            <span id="relationship-error" class="registration-error"></span>
                        </div>
                        <div class=" col-lg-1">
                        </div>

                        <div class="form-group ">
                            <label for="if_other" class="form-label">If Other*</label>
                            <input type=" text" class="relation" name="other_relation" id="other_relation" style="width:300px" placeholder="Enter Relation Name" />
                            <span id="other_relation_error" class="registration-error"></span>
                        </div>

                    </div>
                </div>
                <hr>
                <div class="form-row">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="if_other" class="form-label">Guardian Name</label>
                            <input type="text" name="guardian_name" style="width:500px" id="guardian_name" placeholder="Enter Guardian Name" />
                            <span id="g_name_error" class="registration-error"></span>

                        </div>
                        <div class="form-group " style="width:350px">
                            <label for="f_name" class="form-label">Guardian Relation Name</label>
                            <input type="text" name="relation_nominee" style="width:300px" id="relation_nominee" placeholder="Enter Guardian Relation Name" />
                            <span id="relation_nominee_error" class="registration-error"></span>

                        </div>
                        <div class="form-date">
                            <label for="birth_date" class="form-label">D.O.B of Guardian</label>
                            <input type="date" id="g_dob" class="form-control" style="font-size:18px;text-transform:uppercase; opacity: 0.5; width:350px" name="g_dob" value="" style="margin-top:8%">
                            <span id="g_dob_error" class="registration-error"></span>


                        </div>

                    </div>
                </div>
                <br>
                <hr>

                <div class="form-row">
                    <div class="form-flex">
                        <div class="form-group">
                            <label for="if_other" class="form-label">Witness Name 1</label>
                            <input type="text" name="witness_name_1" id="witness_name_1" placeholder="Witness Name" />
                            <span id="w1_name_error" class="registration-error"></span>

                        </div>
                        <div class="form-group">
                            <label for="f_name" class="form-label">Witness Name 2</label>
                            <input type="text" name="witness_name_2" id="witness_name_2" placeholder="Witness Name" />
                            <span id="w2_name_error" class="registration-error"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div id="confirmation-field" style="display:none;">
                <h3>Declaration </h3>
                <div class="form-row">
                    <div class="form-flex" style="margin-top: 3%;">
                        <input class=" form-check-input" type="checkbox" onclick="FillDeclare()" value="false" id="chkDeclaration" name="chkDeclaration">
                        <label class="form-check-label ">
                            <h5 style=" font-weight:300;">Customer Declaration to Close the Request if KYC not Complaint</h5>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <input class="btnAction" type="button" name="back" id="back" value="Back" style="display:none;">&nbsp;
                <input class="btnAction" type="button" name="next" id="next" value="Next">&nbsp;
                <input type="submit" class="btnAction" name="finish" id="finish" value="Finish" style="display:none;" disabled>
            </div>

        </form>
    </div>
    </div>
    <footer class="footer-section" style="border-radius: 0px;">
        <div class="footer-cta pt-5 pb-5">
            <div class="row">
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-map-marker-alt"></i>
                        <div class="cta-text">
                            <h4>Head-Office</h4>
                            <span>310-A,
                                Polygon bank,
                                Surat-395007,
                                Gujarat, India.
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="fas fa-phone"></i>
                        <div class="cta-text">
                            <h4>Call us</h4>
                            <span>+261 654321</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 mb-30">
                    <div class="single-cta">
                        <i class="far fa-envelope-open"></i>
                        <div class="cta-text">
                            <h4>Mail us</h4>
                            <span>polygon@info.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-content pt-5 pb-5">
            <div class="row">

                <div class="col-xl-8 col-lg-8 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html"><img src="Footer-Logo.png" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="#"><i class="fab fa-facebook-f facebook-bg"></i></a>
                            <a href="#"><i class="fab fa-twitter twitter-bg"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g google-bg"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="#">Agent-Services</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Latest Scheme</a></li>
                        </ul>
                    </div>
                </div>
               
            </div>

        </div>

    </footer>
    <div style="background: linear-gradient(135deg, #5271ff, #3b168c); padding: 20px;">
        <div class="row">
            <div class="col-xl-6 col-lg-6 text-lg-left">
                <div class="copyright-text">
                    <p>Copyright &copy; 2022, All Right Reserved <a href="#">Ansh-Joshi</a></p>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 text-right" style="text-align: right;">
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script>

        $("input[name='verifyEmail']").click(function() {
            document.getElementById("spinnerDiv").hidden= false;
            document.getElementById("verifyEmailDiv").hidden= true;
            
            $.ajax({
                url: "verify_email.php",
                dataType: 'Json',
                data: {
                    'email': document.getElementById("email").value
                },
                success: function(data) {
                    document.getElementById("spinnerDiv").hidden= true;
                    document.getElementById("code").value = data['code'];
                    document.getElementById("verifyDiv").hidden= false;
                }
            });
        });

        $("input[name='next']").click(function() {
            console.log("erro")
            if ($(".highlight")[0].id == "registration") {
                $.ajax({
                    url: "crud.php",
                    dataType: 'Json',
                    data: {
                        'operation': 'insert',
                        'branch_id': document.getElementById("branch_id").value,
                        'Mobile_No': document.getElementById("Mobile_No").value,
                        'email': document.getElementById("email").value
                    },
                    success: function(data) {
                        console.log('data: ', data)
                        document.getElementById("id").value = data['id'];
                    }
                });
            }
        });

        $("select[name='state']").change(function() {
            var stateID = $(this).val();

            if (stateID) {
                $.ajax({
                    url: "ajaxpro.php",
                    dataType: 'Json',
                    data: {
                        'id': stateID,
                        'table': 'city'
                    },
                    success: function(data) {
                        console.log('data: ', data)
                        $('select[name="city"]').empty();
                        $('select[name="city"]').append('<option value=""disabled selected>Select City</option>');
                        $.each(data, function(key, value) {

                            $('select[name="city"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });

            } else {
                $('select[name="city"]').empty();
            }

        });

        $("select[name='city']").change(function() {

            var cityId = $(this).val();

            if (cityId) {
                $.ajax({
                    url: "ajaxpro.php",
                    dataType: 'Json',
                    data: {
                        'id': cityId,
                        'table': 'branch'
                    },
                    success: function(data) {
                        $('select[name="branch_id"]').empty();
                        $('select[name="branch_id"]').append('<option value=""disabled selected>Select Branch</option>');

                        $.each(data, function(key, value) {
                            $('select[name="branch_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });

            } else {
                $('select[name="branch"]').empty();
            }

        });

        $("select[name='h_state']").change(function() {
            var stateID = $(this).val();

            if (stateID) {
                $.ajax({
                    url: "ajaxpro.php",
                    dataType: 'Json',
                    data: {
                        'id': stateID,
                        'table': 'city'
                    },
                    success: function(data) {
                        console.log('data: ', data)
                        $('select[name="h_city"]').empty();
                        $('select[name="h_city"]').append('<option value=""disabled selected>Select City</option>');
                        $.each(data, function(key, value) {

                            $('select[name="h_city"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });

            } else {
                $('select[name="h_city"]').empty();
            }

        });

        $("select[name='comm_state_id']").change(function() {
            var stateID = $(this).val();

            if (stateID) {
                $.ajax({
                    url: "ajaxpro.php",
                    dataType: 'Json',
                    data: {
                        'id': stateID,
                        'table': 'city'
                    },
                    success: function(data) {
                        console.log('data: ', data)
                        $('select[name="comm_city_id"]').empty();
                        $('select[name="comm_city_id"]').append('<option value=""disabled selected>Select City</option>');
                        $.each(data, function(key, value) {

                            $('select[name="comm_city_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });

            } else {
                $('select[name="comm_city_id"]').empty();
            }

        });

        $("select[name='form_sixty']").change(function() {
            console.log($(this).val())
            var stateID = $(this).val();

            if ($(this).val() == "no") {
                document.getElementById('download_form').hidden = true;
                document.getElementById('upload_form').hidden = true;

            } else {
                document.getElementById('download_form').hidden = false;
                document.getElementById('upload_form').hidden = false;
            }

        });

        $('input[type=radio][name=gender]').change(function() {
            document.getElementById("gender").value = this.value;
        });

        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        function FillDeclare() {
            let dec = document.getElementById("chkDeclaration");
            if (dec.checked == true) {
                document.getElementById("finish").disabled = false;
            } else {
                document.getElementById("finish").disabled = true;
            }
        }

        function FillAddressInput() {
            let checkBox = document.getElementById('flexCheckChecked');

            if (checkBox.checked == true) {

                document.getElementById("comm_house_no").value = document.getElementById("house_no").value;
                document.getElementById("comm_street").value = document.getElementById("street").value;
                document.getElementById("comm_area").value = document.getElementById("area").value;
                document.getElementById("comm_pincode").value = document.getElementById("pincode").value;
                document.getElementById("comm_state_id").value = document.getElementById("h_state").value;

                $.ajax({
                    url: "ajaxpro.php",
                    dataType: 'Json',
                    data: {
                        'id': document.getElementById("comm_state_id").value,
                        'table': 'city'
                    },
                    success: function(data) {
                        console.log('data: ', data)
                        $('select[name="comm_city_id"]').empty();
                        $('select[name="comm_city_id"]').append('<option value=""disabled selected>Select City</option>');
                        $.each(data, function(key, value) {

                            $('select[name="comm_city_id"]').append('<option value="' + key + '">' + value + '</option>');

                        });
                        document.getElementById("comm_city_id").value = document.getElementById("h_city").value;
                    }
                });


            } else {
                comm_house_no.value = "";
                comm_street.value = "";
                comm_area.value = "";
                comm_pincode.value = "";
                comm_state_id.value = "";
                comm_city_id.value = "";
                upload1.value = "";
            }
        }

        function clickfunction(id) {
            var output = validate();
            if (output) {
                console.log($(".highlight")[0].id);
                $("#" + $(".highlight")[0].id + "-field").hide();
                $("#" + $(".highlight")[0].id).removeClass("highlight");
                $("#" + id).addClass("highlight");

                $("#" + id + "-field").show();
                $("#back").show();
                $("#finish").hide();

                if ($(".highlight").attr("id") == "confirmation") {
                    $("#next").hide();
                    $("#finish").show();
                }
            }
        }
        
    function checkform(){
        var why = "";
        var captchaText=document.getElementById("CaptchaInput");
        if(captchaText.value == ""){
            why = "Enter CAPTCHA Code.";
        }
        if(captchaText.value != ""){
            if(ValidCaptcha(captchaText.value) == false){
                why = "The CAPTCHA Code Does Not Match.";
            }
        }
        if(why != ""){
            alert(why);
            return false;
        }
        return true;
    }

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
    </script>
    

</body>