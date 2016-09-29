<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="A web application created to help C.O.G volunteers find opportunities">
	<meta name="author" content="Miciaha Ivey">
	<link rel="icon" href="favicon.ico">

  <title>Community Outreach Group</title>

  <h2>Registration Form</h2>

  <form id="registrationForm" method="post" class="form-horizontal" action="add_student_process.php">

    <div class="form-group">
      <label class="col-sm-3 control-label">First Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="fName" placeholder="John" />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">Last Name:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="lName" placeholder="Doe" />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">FSU ID:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="fsuId" placeholder="Ex:'jbd12e'" />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">Primary Email:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="email" placeholder="Ex:'Johndoe@gmail.com'"  />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">Major:</label>
      <div class="col-sm-5">
        <input type="text" class="form-control" name="major" placeholder="Ex:'Information Technology'"  />
      </div>
    </div>

    <div class="form-group">
      <label class="col-sm-3 control-label">Year:</label>
      <div class="col-sm-5">
        <select name="year">
          <option value="Freshman">Freshman</option>
          <option value="Sophomore">Sophomore</option>
          <option value="Junior">Junior</option>
          <option value="Senior">Senior</option>
          <option value="Graduate">Graduate</option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <label class="col-sm-3 control-label">Primary Interest:</label>
      <div class="col-sm-5">
        <select name="interest">
          <option value="Teaching">Teaching</option>
          <option value="Mentoring">Mentoring</option>
          <option value="Senior Outreach">Senior Outreach</option>
          <option value="Other">Other</option>
        </select>
      </div>
    </div>

    <div class="form-group">
				<div class="col-sm-9 col-sm-offset-3">
          	<button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
					</div>
    	</div>
    </form>
