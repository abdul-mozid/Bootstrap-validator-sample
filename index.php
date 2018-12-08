<?php 
 $conn=mysql_connect("localhost","root","");
 $db=mysql_select_db("bsvalidator", $conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrapValidator.min.css" rel="stylesheet">
	
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="padding:15px 0px 15px 13px;">
				<a href="index.php" class="btn btn-sm btn-success">Click here to Registration</a>
			</div>
			<div class="col-md-8 col-md-offset-2">
				<form class="well form-horizontal" action="submit.php" method="post" id="contact_form" enctype="multipart/form-data">
					<fieldset>

						<!-- Form Name -->
						<legend>Member Registration</legend>

						<!-- Text input-->
						<?php if(!empty($msg)){?>
						<div class="col-md-6 col-md-offset-4">
							<div class="alert alert-success" role="alert"><?php echo $msg; ?></div>
						</div>
						<?php } ?>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label">First N.</label>  
							<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input  name="first_name" id="first_name" placeholder="Enter Your First Name" class="form-control"  type="text" value="">
							</div>
						  </div>
							<label class="col-md-1 control-label">L. N.</label>  
							<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input  name="last_name" id="last_name" placeholder="Enter Your Last Name" class="form-control"  type="text" value="">
							</div>
						  </div>
						</div>
							   
						<div class="form-group">
						  <label class="col-md-2 control-label">Email</label>  
							<div class="col-md-9 inputGroupContainer">
							<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input  name="email" id="email" placeholder="Enter Your Email Address" class="form-control"  type="text" value="">
							</div>
						  </div>
						</div>

						<div class="form-group">
						  <label class="col-md-2 control-label">Phone No</label>  
						  <div class="col-md-9 inputGroupContainer">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							  <input  name="phone_no" id="phone_no" placeholder="Enter Your Phone No" class="form-control"  type="text" value="<?php if(!empty($edit_image_path)){echo $edit_image_path;}?>">
								
							</div>
							<div id="img_path" class="validate"></div>
						  </div>
						</div>
						<div class="form-group">
						  <label class="col-md-2 control-label">Password</label>  
						  <div class="col-md-9 inputGroupContainer">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							  <input  name="password" id="password" placeholder="Enter Your Password" class="form-control"  type="text" value="<?php if(!empty($edit_image_path)){echo $edit_image_path;}?>">
								
							</div>
							<div id="img_path" class="validate"></div>
						  </div>
						</div>
						<div class="form-group">
						  <label class="col-md-2 control-label">Re-Password</label>  
						  <div class="col-md-9 inputGroupContainer">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
							  <input  name="re_password" id="re_password" placeholder="Please Retype Password" class="form-control"  type="text" value="<?php if(!empty($edit_image_path)){echo $edit_image_path;}?>">
								
							</div>
							<div id="img_path" class="validate"></div>
						  </div>
						</div>
						<div class="form-group">
						  <label class="col-md-2 control-label">Zip Code</label>  
						  <div class="col-md-9 inputGroupContainer">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							  <input  name="zip_code" id="zip_code" placeholder="Please Enter Your Zip Code" class="form-control"  type="text" value="<?php if(!empty($edit_image_path)){echo $edit_image_path;}?>">	
							</div>
							<div id="img_path" class="validate"></div>
						  </div>
						</div>
						<div class="form-group">
						  <label class="col-md-2 control-label">Date Of Birth</label>  
						  <div class="col-md-9 inputGroupContainer">
							<div class="input-group">
							  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							  <input  name="date_of_birth" id="date_of_birth" placeholder="Please Retype Password" class="form-control"  type="date" value="<?php if(!empty($edit_image_path)){echo $edit_image_path;}?>">	
							</div>
						  </div>
						</div>
						<!-- Text area -->
						<div class="form-group">
						  <label class="col-md-2 control-label">Address</label>
							<div class="col-md-9 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
								<textarea class="form-control" name="address" id="address" placeholder="Please Enter Your Address" rows="9" cols="50"><?php if(!empty($edit_description)){echo $edit_description;}?></textarea>
						  </div>
						  </div>
						</div>

						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-2 control-label">Sex</label>  
							<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<select class="form-control" name="sex" id="sex">
								  <option value="">Please Select Sex</option>
								  <option value="M"<?php if(!empty($edit_active)){if($edit_active==5){echo "selected";}}?>>Male</option>
								  <option value="F"<?php if(!empty($edit_active)){if($edit_active==0){echo "selected";}}?>>Female</option>
								</select>
							</div>
						  </div>
							<label class="col-md-1 control-label">Country</label>  
							<div class="col-md-4 inputGroupContainer">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
								<select class="form-control" name="country" id="country">
									<option value="" >Please Select Country</option><option value="AF" >Afghanistan</option><option value="AX" >�land Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" selected>Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="VG" >British Virgin Islands</option><option value="BN" >Brunei</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="CV" >Cape Verde</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo - Brazzaville</option><option value="CD" >Congo - Kinshasa</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >C�te d�Ivoire</option><option value="HR" >Croatia</option><option value="CU" >Cuba</option><option value="CY" >Cyprus</option><option value="CZ" >Czech Republic</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard &amp; McDonald Islands</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong SAR China</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IR" >Iran</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Laos</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macau SAR China</option><option value="MK" >Macedonia</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia</option><option value="MD" >Moldova</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar (Burma)</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="AN" >Netherlands Antilles</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="KP" >North Korea</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestinian Territories</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn Islands</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >R�union</option><option value="RO" >Romania</option><option value="RU" >Russia</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barth�lemy</option><option value="SH" >Saint Helena</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin</option><option value="PM" >Saint Pierre and Miquelon</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >S�o Tom� and Pr�ncipe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia &amp; South Sandwich Islands</option><option value="KR" >South Korea</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="VC" >St. Vincent &amp; Grenadines</option><option value="SD" >Sudan</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="SY" >Syria</option><option value="TW" >Taiwan</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US">United States</option><option value="UY" >Uruguay</option><option value="UM" >U.S. Outlying Islands</option><option value="VI" >U.S. Virgin Islands</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VA" >Vatican City</option><option value="VE" >Venezuela</option><option value="VN" >Vietnam</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
								</select>
							</div>
						  </div>
						</div>

						<!-- Button -->
						<div class="form-group">
						  <label class="col-md-2 control-label"></label>
						  <div class="col-md-6">
							<input  type="submit" id="btnSubmit" name="btnSubmit" value="Save" class="btn btn-lg btn-success " />
																
						  </div>
						</div>

					</fieldset>
				</form>
			</div>
		</div>
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrapValidator.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  <script>
$(document).ready(function() {
    // Generate a simple captcha

    $('#contact_form').bootstrapValidator({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
				row: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            last_name: {
				row: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            phone_no: {
                validators: {
                    notEmpty: {
                        message: 'The phone no is required'
                    },
                    stringLength: {
                        min: 11,
                        max: 11,
                        message: 'Please Enter your 11 Digit Phone no'
                    },
					numeric:{
						message: 'Charecter is not allowed'
					}
                    
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    },
					regexp: {
                        regexp: /^[a-zA-Z0-9_@.]+$/,
                        message: 'The email addres can only consist of alphabetical, number, dot,underscore and @'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    different: {
                        field: 'phone_no',
                        message: 'The password cannot be the same as phone no'
                    }
                }
            },
			sex: {
				row: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'Sex is required'
                    }
                }
            },
			country: {
				row: '.col-md-4',
                validators: {
                    notEmpty: {
                        message: 'The country is required'
                    }
                }
            },
            zip_code: {
                validators: {
                    notEmpty: {
                        message: 'Zip code is required'
                    }
                }
            },
			date_of_birth: {
                validators: {
                    notEmpty: {
                        message: 'Date of birth is required'
                    }
                }
            },
			address: {
                validators: {
                    notEmpty: {
                        message: 'Address is required'
                    }
                }
            }
        }
    });
});
</script>
  </body>
</html>