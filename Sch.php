<?php
use Phppot\Member;
if (! empty($_POST["signup-btn"])) {
    require_once './Model/Member.php';
    $member = new Member();
    $registrationResponse = $member->registerMember();
}
?>
<HTML>
<HEAD>
<TITLE>User Registration</TITLE>
<img src="vol.jpeg"style="width:35%" class = "center" style="height: 35%">

<link href="assets/css/phppot-style.css" type="text/css"
	rel="stylesheet" />
<link href="assets/css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
</HEAD>
<BODY>
	<div class="phppot-container">
		<div class="sign-up-container">
			<div class="login-signup">
				<a href="index.php">Login</a>
			</div>
			<div class="">
				<form name="sign-up" action="" method="post"
					onsubmit="return signupValidation()">
					<div class="signup-heading">Registration</div>
				<?php
    if (! empty($registrationResponse["status"])) {
        ?>
                    <?php
        if ($registrationResponse["status"] == "error") {
            ?>
				    <div class="server-response error-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        } else if ($registrationResponse["status"] == "success") {
            ?>
                    <div class="server-response success-msg"><?php echo $registrationResponse["message"]; ?></div>
                    <?php
        }
        ?>
				<?php
    }
    ?>
				<div class="error-msg" id="error-msg"></div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								First Name<span class="required error" id="FirstName-info"></span>
							</div>
							<input class="input-box-330" type="text" name="FirstName"
								id="FirstName">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Last Name<span class="required error" id="LastName-info"></span>
							</div>
							<input class="input-box-330" type="text" name="LastName"
								id="LastName">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Phone Number<span class="required error" id="PhoneNumber-info"></span>
							</div>
							<input class="input-box-330" type="text" name="PhoneNumber"
								id="PhoneNumber">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Email<span class="required error" id="email-info"></span>
							</div>
							<input class="input-box-330" type="email" name="email" id="email">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Corporation Name<span class="required error" id="CorporationName-info"></span>
							</div>
							<input class="input-box-330" type="text" name="CorporationName"
								id="CorporationName">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Date Of Birth<span class="required error" id="DateOfBirth-info"></span>
							</div>
							<input class="input-box-330" type="text" name="DateOfBirth"
								id="DateOfBirth">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Country / Region<span class="required error" id="CountryRegion-info"></span>
							</div>
							<input class="input-box-330" type="text" name="CountryRegion"
								id="CountryRegion">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Street Address<span class="required error" id="StreetAddress-info"></span>
							</div>
							<input class="input-box-330" type="text" name="StreetAddress"
								id="StreetAddress">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								City<span class="required error" id="City-info"></span>
							</div>
							<input class="input-box-330" type="text" name="City"
								id="City">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								State / Province<span class="required error" id="State-info"></span>
							</div>
							<input class="input-box-330" type="text" name="State"
								id="State">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Zip / Postal<span class="required error" id="Zip-info"></span>
							</div>
							<input class="input-box-330" type="text" name="Zip"
								id="Zip">
							
						</div>
					</div>



				
	
				



				</form>
			</div>
		</div>
	</div>
	<a href = "New.php">
    	<button class="block" class="center">Done</button>
    </a>
    <a href = "Hoome.php">
    	<button class="block" class="center">Cancel</button>
    </a>

	<script>
function signupValidation() {
	var valid = true;

	$("#username").removeClass("error-field");
	$("#email").removeClass("error-field");
	$("#password").removeClass("error-field");
	$("#confirm-password").removeClass("error-field");

	var UserName = $("#username").val();
	var email = $("#email").val();
	var Password = $('#signup-password').val();
    var ConfirmPassword = $('#confirm-password').val();
	var emailRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	$("#username-info").html("").hide();
	$("#email-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (email == "") {
		$("#email-info").html("required").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (email.trim() == "") {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000").show();
		$("#email").addClass("error-field");
		valid = false;
	} else if (!emailRegex.test(email)) {
		$("#email-info").html("Invalid email address.").css("color", "#ee0000")
				.show();
		$("#email").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#signup-password-info").html("required.").css("color", "#ee0000").show();
		$("#signup-password").addClass("error-field");
		valid = false;
	}
	if (ConfirmPassword.trim() == "") {
		$("#confirm-password-info").html("required.").css("color", "#ee0000").show();
		$("#confirm-password").addClass("error-field");
		valid = false;
	}
	if(Password != ConfirmPassword){
        $("#error-msg").html("Both passwords must be same.").show();
        valid=false;
    }
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>
