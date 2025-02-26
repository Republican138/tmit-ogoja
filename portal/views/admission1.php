<?php
require_once ("../../includes/auth/authController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/student_addmission_form.css">
    <title>Admission Form</title>
</head>

<body>
    <main>
        <section class="admission-form">
            <div class="form-container">
                <div class="logo-container">
                    <img src="../../assets/images/logo.png" alt="School Logo">
                </div>
                <h1>Admission Form</h1>
                <form id="admissionForm" action="" method="post">
                    <div class="form_input_div">
                        <div class="form-scroll">
                            <div class="form-group">
                                <label for="sname">Surname</label>
                                <input type="text" id="sname" name="sname" placeholder="Surname" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" placeholder="Firstname" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" placeholder="Lastname" required required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="gender">Gender</label>
                                <select id="gender" name="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="dob">Date of Birth</label>
                                <input type="date" id="dob" name="dob" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Age</label>
                                <input type="text" id="age" name="age" placeholder="Age" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Place of Birth</label>
                                <input type="text" id="place_of_birth" name="place_of_birth" placeholder="Place of birth" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Religion</label>
                                <input type="text" id="lname" name="lname" placeholder="Religion" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="marital_status">Marital Status</label>
                                <select id="marital_status" name="marital_status" required>
                                    <option value="single">Single</option>
                                    <option value="male">MMarried</option>
                                    <option value="female">Divorced</option>
                                    <option value="female">Widowed</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="lname">Number Of Children</label>
                                <input type="text" id="lname" name="lname" placeholder="Number Of children (if not single)" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="state_of_origin">State Of Origin</label>
                                <select>
                                    <option disabled selected>--Select State--</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="FCT">Federal Capital Territory</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                </select>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Local Government Area</label>
                                <input type="text" id="lga" name="lname" placeholder="Local government area" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Nationality</label>
                                <input type="text" id="lga" name="lname" placeholder="Nationality" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Permanent Home address</label>
                                <input type="text" id="lga" name="lname" placeholder="Permanent home address" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Contact address</label>
                                <input type="text" id="lga" name="lname" placeholder="Contact address" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Phone number</label>
                                <input type="text" id="lga" name="lname" placeholder="Phone number" required>
                                <p class="err_msg">pls</p>
                            </div>

                            <h1 class="next_of_kin">Next of Kin Details</h1>

                            <div class="form-group">
                                <label for="lname">Fullname</label>
                                <input type="text" id="lga" name="lname" placeholder="Fullname" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Occupation</label>
                                <input type="text" id="lga" name="lname" placeholder="Occupation" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Telephone Number</label>
                                <input type="text" id="lga" name="lname" placeholder="Phonenumber" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Email</label>
                                <input type="email" id="lga" name="lname" placeholder="Email" required>
                                <p class="err_msg">pls</p>
                            </div>
                            <div class="form-group">
                                <label for="lname">Relationship with Candidate</label>
                                <input type="text" id="lga" name="lname" placeholder="Relationship with Candidate" required>
                                <p class="err_msg">pls</p>
                            </div>
                        </div>
                    </div>
                    <div class="submit-button">
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
</body>
</html>


