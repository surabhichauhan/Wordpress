<?php

global $current_user, $wpdb;



echo '
    <style>
	div {
		margin-bottom:2px;
	}
	
	input{
		margin-bottom:4px;
	}

	</style>
	';

echo'
<h2> Apply for Job </h2> <br>
<form action="' . $_SERVER['REQUEST_URI'] . '" method="post">
<div>
	<label for="username">Name <strong>*</strong></label>
	<input type="text" name="username" value="' . (isset($_POST['username']) ? $username : null) . '">
</div>

<div>
	<label for="gender">Gender <strong>*</strong></label>
	<select name="gender">
	<option value="male ' . (isset($_POST['gender']) ? $gender : null) . '">Male </option>
	<option value="female ' . (isset($_POST['gender']) ? $gender : null) . '">Female</option>
    </select>
</div>
<div>
	<label for="technical-stack">Technical Stack <strong>*</strong></label>
	<select name="technical-stack">
	<option value="Web Development ' . (isset($_POST['technical-stack']) ? $technical_stack : null) . '">Web Development </option>
	<option value="Mobile Development ' . (isset($_POST['technical-stack']) ? $technical_stack : null) . '">Mobile Development</option>
	<option value="Designing ' . (isset($_POST['technical-stack']) ? $technical_stack : null) . '">Designing</option>
    </select>
</div>

<div>
	<label for="emailid">Email-ID <strong>*</strong></label>
	<input type="text" name="emailid" value="' . (isset($_POST['emailid']) ? $email : null) . '">
</div>
<div>
	<label for="mobile_num">Mobile Number <strong>*</strong></label>
	<input type="text" name="mobile" value="' . (isset($_POST['mobile']) ? $mobile : null) . '">
</div>
<div>
	<label for="job-type">Job Type <strong>*</strong></label>
	<select name="job-type">
	<option value="Full-Time ' . (isset($_POST['job-type']) ? $job_type : null) . '">Full Time </option>
	<option value="Internship ' . (isset($_POST['job-type']) ? $job_type : null) . '">Internship</option>
    </select>
</div>
<div>
	<label for="Experience">Experience <strong>*</strong></label>
	<input type="text" name="experience" value="' . (isset($_POST['experience']) ? $experience : null) . '">
</div>
<div>
	<label for="current-ctc">Current CTC <strong>*</strong></label>
	<input type="text" name="current-ctc" value="' . (isset($_POST['current-ctc']) ? $current : null) . '">
</div>
<div>
	<label for="expected-ctc">Expected CTC <strong>*</strong></label>
	<input type="text" name="expected" value="' . (isset($_POST['expected']) ? $expected : null) . '">
</div>

<input type="submit" name="submit" value="Apply"/>
	</form>
	';

?>