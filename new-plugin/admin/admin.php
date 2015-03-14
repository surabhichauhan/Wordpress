<?php
echo '
<div class="wrap">
<h2>Plugins Admin Page </h2>
</div>';
?>
<form action="" method="post">
<div>
<input type="submit" id="button1" name="view" class="button-primary" value="Show Table"/>
<input type="button" id="button" class="button-primary" value="Hide Table"/><br> <br>
<script type="text/javascript">
jQuery(document).ready(function($)
{ 
  $("#button1").click(function(){
  	
    $("#job-1").show(1000); });

  $("#button").click(function(){
  	
    $("#job-1").hide(1000); });
});
</script>
</div>
</form>

<br />
      <table class="widefat" id="job-1">
   
   	<thead>
   		<tr>
   			<th>Name</th>
   			<th>Gender</th>
   			<th>Technical Stack</th>
   			<th>Email ID</th>
   			<th>Contact Number</th>
   			<th>Job Type</th>
   			<th>Experience</th>
   		</tr>
   	</thead>
   	
   	<tbody> 
<?php
 if(isset($_POST['view']))
   {
   	  global $wpdb;
   	  $mytestposts = array();

   	 $mytestposts = $wpdb-> get_results(
   	 	"SELECT *
   	 	FROM wp_newplugin
   	 	"
   	 	);
   	 update_option('newplugin_posts',$mytestposts);//store the results in wp option table
   	}
   	else if(get_option('newplugin_posts'))
   	{
   		$mytestposts = get_option('newplugin_posts');
   	}
   	  foreach($mytestposts as $mytestpost)
   	  {
  
   	  	echo '<tr>';
   
   	  	  echo"<td>".$mytestpost->user_name."</td>";
   	  	  echo"<td>".$mytestpost->gender."</td>";
   	  	  echo"<td>".$mytestpost->technical_stack."</td>";
   	  	  echo"<td>".$mytestpost->email."</td>";
   	  	  echo"<td>".$mytestpost->contact_number."</td>";
   	  	  echo"<td>".$mytestpost->job_type."</td>";
   	  	  echo"<td>".$mytestpost->experience."</td>";
   	 
   	  echo '</tr>'; 
  
}
?>
</tbody>
<br>
</div>