
<html>
<head>
<title>Page Title</title>
<!-- Latest compiled and minified CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> 
</head>
<body>
<div class="container bg-secondary p-5 ">
  <h2 class="text-dark"><center>Student details form</center></h2>
  <form action="sub.php"  method="POST" class="was-validated">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="stu_name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>  
    <div class="form-group">
      <label for="date" >DOB</label>
      <input type="date" class="form-control" id="date"name="dob" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div> 
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control"id="email" name="email" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div> 
    <div class="form-group">
      <label for="phone">Enter a phone number:</label><br>
      <input type="tel" id="phone" name="phone" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <label for="form-check-label">Gender</label><br>
    <div class="form-check">
      <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" >male
    </div>
    <div class="form-check ">
     <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">female
     <label class="form-check-label" for="radio2"></label>
    </div>
    <div class="form-check">
     <input type="radio" class="form-check-input"id="radio3" name="gender" value="other">other
     <label class="form-check-label"for="radio3"></label>
    </div> 
     <label for="form-check-label">Languages knowns</label>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="radio1" name="languages[]" value="html">html
      <label class="form-check-label" for="radio1"></label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="radio2" name="languages[]"value="css" >css
      <label class="form-check-label" for="radio2"></label>
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="radio3" name="languages[]" value="php">php
      <label class="form-check-label" for="radio3"></label>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

