<!DOCTYPE html>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="signup_page.css">
    <link rel="stylesheet" href="Bootstrap/CSS/bootstrap.min.css">
    <script src="Bootstrap/JS/bootstrap.min.js"></script>
</head>
<body class="entire-bg">
<div class="signup-fullsection">
  <div class="intro-section">
    <div class="logo-container">
      <img class="logo" src="sv_full_logo.png"/>
    </div>
  </div>
  <div class="signup-section">
    <div class="step" id="step-1">
      <form method="post" action="new_user.php" class="signup_form" onsubmit="return validateForm();">
        <div class="hdn_section">
          <div class="error-message "></div>
        <h1 class="signup_hdn">SIGN UP</h1>
      </div>
      <div class="un_section">
        <div class="form-floating mb-3">
          <input type="text" name="full_name" class="form-control border-0 border-bottom" id="fullname" placeholder="Enter your Username">
          <label for="fullname">Full Name:</label>
      </div>
        </div>
          <div class="dob_gender">
              <div class="form-group dob-group">
                <div class="form-floating mb-3">
                  <input name="dob" type="date" class="form-control" id="dob" placeholder="Enter your DOB">
                  <label for="dob">Date Of Birth</label>
              </div>
              </div>
              <div class="form-group gender-group">
                <div class="form-floating">
                    <select name="gender" class="form-select" id="gender" aria-label="Floating label select example">
                      <option selected>Select your Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                    </select>
                    <label for="gender">Gender</label>
                    </div>
              </div>
          </div>
          <div class="weight_height">
              <div class="form-group weight-group">
                <div class="form-floating mb-3">
                  <input name="weight" type="text" class="form-control" id="weight" placeholder="Enter your Weight">
                  <label for="weight">Weight (in kgs):</label>
              </div>
              </div>
              <div class="form-group height-group">
                <div class="form-floating mb-3">
                  <input name="height" type="text" class="form-control" id="height" placeholder="Enter your Height">
                  <label for="height">Height (in cm):</label>
              </div>
              </div>
          </div>
          <div class="form-group activity-group">
            <div class="form-floating">
                <select name="activity_level" class="form-select activity-level" id="activitylevel" aria-label="Floating label select example">
                  <option selected>Select your Activity Level</option>
                  <option value="Sedentary">Sedentary</option>
                  <option value="Lightly Active">Lightly Active</option>
                  <option value="Moderately Active">Moderately Active</option>
                  <option value="Very Active">Very Active</option>
                </select>
                <label for="activitylevel" class="ac_label">Activity Level: </label>
                </div>
          </div>
          <div class="form-group goals-group">
            <div name="fitness_goal" class="form-floating">
                <select name="fitness_goal" class="form-select fitness-goals" id="fitnessgoal" aria-label="Floating label select example">
                  <option selected>Choose your Fitness Goal</option>
                  <option value="Weight Loss">Weight Loss</option>
                  <option value="Maintain">Maintain</option>
                  <option value="Weight Gain">Weight Gain</option>
                </select>
                <label for="fitnessgoal" class="goals_label">Fitness Goal: </label>
                </div>
          </div>
        <div class="un_section">
          <div class="form-floating mb-3">
            <input name="username" type="text" class="form-control border-0 border-bottom" id="username" placeholder="Enter your Username">
            <label for="username">Username</label>
        </div>
          </div>
            <div class="mail_section">
              <div class="form-floating mb-3">
                <input  name="email" type="email" class="form-control" id="mail" placeholder="example@gmail.com">
                <label for="mail">Email address </label>
            </div>
          </div>
          <div class="pw_section">
            <div class="form-floating mb-3">
              <input name="password" type="password" class="form-control" id="password" placeholder="Enter your Password">
              <label for="password">Password</label>
          </div>
          </div>
          <div class="cpw_section">
            <div class="form-floating mb-3">
              <input name="confirm_password" type="password" class="form-control" id="confirmpassword" placeholder="Re-enter your Password">
              <label for="confirmpassword">Confirm Password</label>
          </div>
        </div>
        <div class="btn_si">
        <div class="btn_section">
          <a href="Welcome.php"><input type="submit" name="submit-btn" class="signup-btn" value="Submit"></a>
        </div>
        <div class="su_section">
          <p> Have an account already?  </p>
          <a class="signin_link"  href="sign_in.html"></t>Log in</a>
        </div>
      </div>
      </form>
    </div>
  </div>
</div>
<script src="new_user.js"></script>
</body>
</html>
