<?php
global $current_user, $wpdb, $username,$gender, $email, $technical_stack,$job_type,$mobile,
       $experience, $current, $expected , $message, $reg_errors;


if (isset($_POST['submit'])) {

if (!empty($_POST['username']) && !empty($_POST['emailid']) && !empty($_POST['mobile']) ){

$username = esc_html( $_POST['username'] );
$gender = esc_html( $_POST['gender'] );
$technical_stack = esc_html( $_POST['technical-stack'] );
$email 	= 	sanitize_email($_POST['emailid']);
$mobile = esc_html( $_POST['mobile'] );
$job_type = esc_html( $_POST['job-type'] );
$experience = 	sanitize_text_field($_POST['experience']);
$current 	= 	sanitize_text_field($_POST['current-ctc']);
$expected  	= 	sanitize_text_field($_POST['expected']);
$message 	= 	esc_textarea($_POST['message']);

$table_name = $wpdb->prefix . 'newplugin';
$insertQuery = $wpdb->query('INSERT INTO ' . $table_name. ' VALUES ( NULL,
																		"' . $username . '",
																		"' . $gender . '",
																		"' . $technical_stack . '",
																		"' . $email . '",
																		"' . $mobile . '",
																		"' . $job_type . '",
																		"' . $experience . '",
																		"' . $current . '",
																		"' . $expected . '",
																		"' . $message . '")' );

if($insertQuery) {
	echo "submitted";
}

} else { echo "Some required Fields Missing";}
}


echo '
<h2>Apply here for job</h2> <br>
<form  action="' . $_SERVER['REQUEST_URI'] . '" method="post" class="form" enctype="form-data/multipart" autocomplete="off">
<div>
	<label for="username">Name <strong>*</strong></label>
	<input type="text" name="username" value="' . (isset($_POST['username']) ? $username : null) . '">
</div><br>

<div>
	<label for="gender">Gender <strong>*</strong></label>
	<select name="gender">
	<option value="male ' . (isset($_POST['gender']) ? $gender : null) . '">Male </option>
	<option value="female ' . (isset($_POST['gender']) ? $gender : null) . '">Female</option>
    </select>
</div><br>
<div>
	<label for="technical-stack">Technical Stack <strong>*</strong></label>
	<select name="technical-stack">
	<option value="Web Development ' . (isset($_POST['technical-stack']) ? $technical_stack : null) . '">Web Development </option>
	<option value="Mobile Development ' . (isset($_POST['technical-stack']) ? $technical_stack : null) . '">Mobile Development</option>
	<option value="Designing ' . (isset($_POST['technical-stack']) ? $technical_stack : null) . '">Designing</option>
    </select>
</div><br>

<div>
	<label for="emailid">Email-ID <strong>*</strong></label>
	<input type="text" name="emailid"  value="' . (isset($_POST['emailid']) ? $email : null) . '">
</div><br>
<div>
	<label for="mobile_num">Mobile Number <strong>*</strong></label>
	<input type="tel" name="mobile"  value="' . (isset($_POST['mobile']) ? $mobile : null) . ' ">
</div><br>
<div>
	<label for="job-type">Job Type <strong>*</strong></label>
	<select name="job-type">
	<option value="Full-Time ' . (isset($_POST['job-type']) ? $job_type : null) . '">Full Time </option>
	<option value="Internship ' . (isset($_POST['job-type']) ? $job_type : null) . '">Internship</option>
    </select>
</div><br>
<div>
	<label for="Experience">Experience <strong>*</strong></label>
	<input type="text" name="experience" value="' . (isset($_POST['experience']) ? $experience : null) . '">
</div><br>
<div>
	<label for="current-ctc">Current CTC <strong>*</strong></label>
	<input type="text" name="current-ctc" value="' . (isset($_POST['current-ctc']) ? $current : null) . '">
</div><br>
<div>
	<label for="expected-ctc">Expected CTC <strong>*</strong></label>
	<input type="text" name="expected" value="' . (isset($_POST['expected']) ? $expected : null) . '">
</div><br>

<div>
	<label for="message">Message<strong></strong></label>
	<textarea name="message" value="' . (isset($_POST['message']) ? $message : null) . '"></textarea>
</div><br>
<center>
<input type="submit" name="submit" value="Apply" /><br></center>
	</form>
	';