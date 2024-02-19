<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="sign-in.css">
  <title>Sign Up</title>
</head>
<body>
  <div class="header">
    <div class="gso-logo">
      <img src="gsoo.png" alt="GSO Logo">
    </div>
    <div class="gso-title">
      <h1><span>G</span>eneral <span>S</span>ervices <span>O</span>ffice</h1>
    </div>
    <div class="urs-logo">
      <img src="urs.png" alt="URS Logo">
    </div>
  </div>

  <div class="sign-up-form">
    <form>
      <input type="text" name="student_number" placeholder="Student Number">
      <input type="text" name="fullname" placeholder="Full Name">
      <input type="text" name="emailAddress" placeholder="Email Address">
      <input type="text" name="yearsection" placeholder="Year and Section">
      <select name="courses" class="courses" placeholder="Course">
        <option value="" disabled selected hidden>Course</option>
        <option>BS Civil Engineering</option>
        <option>BS Computer Engineering</option>
        <option>BS Electrical Engineering</option>
        <option>BS Electronics Engineering</option>
        <option>BS Mechanical Engineering</option>
        <option>BS Hospitality Management</option>
        <option>BS Biology - Microbiology</option>
        <option>BS Mathematics</option>
        <option>BS Psychology</option>
        <option>BS Computer Science</option>
        <option>Bachelor in Human Services</option>
        <option>Bachelor of Elementary Education</option>
        <option>Bachelor of Secondary Education - Science</option>
        <option>Bachelor of Secondary Education - English</option>
        <option>Bachelor of Secondary Education - Mathematics</option>
        <option>Bachelor of Livelihood Education - Home Economics</option>
        <option>Bachelor of Livelihood Education - Industrial Arts</option>
        <option>Bachelor of Livelihood Education - Information and Communication Technology</option>
        <option>Bachelor of Technical Vocational Teacher Education - Drafting Technology</option>
        <option>Bachelor of Industrial Technology - Automotive Technology</option>
        <option>Bachelor of Industrial Technology - Architectural Drafting Technology</option>
        <option>Bachelor of Industrial Technology - Construction Technology</option>
        <option>Bachelor of Industrial Technology - Electrical Technology</option>
        <option>Bachelor of Industrial Technology - Electronics Technology</option>
        <option>Bachelor of Industrial Technology - Heating, Ventilating and Air-conditioning</option>
        <option>Bachelor of Industrial Technology - Mechanical Technology</option>
      </select>
      <select name="vehicle-type" class="vehicle-type">
      <option value="" disabled selected hidden>Type of Vehicle</option>
        <option>Motorcycle</option>
        <option>Tricycle</option>
        <option>FourWheels</option>
      </select>
      <input type="text" name="plateNumber" placeholder="Plate Number">
      <input type="password" name="password" placeholder="Password">
      <div class="files">
      <label>Picture of Driver's License: </label>
      <input type="file" name="license">
      <label>Picture of OR/CR: </label>
      <input type="file" name="orcr">
      </div>
      <button type="submit" name="submit">Register</button>
    </form>
  </div>
</body>
</html>