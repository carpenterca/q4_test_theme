<?php
	session_start();
	// session_destroy();

// 	if (!isset($_SESSION['page'])) {$_SESSION['page'] = array();} //session
// 	if (!isset($new_info)) {$new_info = array();} //build title time array
// 	if (!isset($info)) {$info = array();} //add array title time array to empty key
// 	if (!isset($time_buffer)) {$time_buffer = "";} //add array title time array to empty key

// foreach($_SESSION['page'] as $page){
// 	if ($page['title'] === ""){ continue; } //there was a problem with a blank page title showing up this eliminates any blank page titles in the array
// 	$new_info['title'] = $page['title']; //build $new_info array
// 	echo "[$new_info]";
	// $new_info['time'] = $page['time']; //build $new_info array
	// $datetime1 = new DateTime($page['time']);//start time
	// if ($datetime1 !== $time_buffer && isset($time_buffer)) {
	// 	print_r($time_buffer['date']);
	// 	echo $time = $time_buffer[0]['date'] . "] \n";
	// 	// echo $time = $time->format('Y-m-d H:i:s') . "] \n";
	// 	// echo $datetime1->format('Y-m-d H:i:s') . "\n";
	// 	// $interval = $datetime1->diff($time_buffer);
	// 	// echo $interval->format('%Y years %m months %d days %H hours %i minutes %s seconds');//00 years 0 months 0 days 08 hours 0 minutes 0 seconds
	// }

	// $info[] = $new_info; //add array to $info
	// $time_buffer = new DateTime($page['time']);//end time
// }

	//build new entry for $info array
	$time  = date('Y-m-d H:i:s', time() );
	$title = get_the_title();
	$new_info['title'] = $title;
	$new_info['time'] = $time;
	$info[] = $new_info; //add to the $info array built in the foreach
	$_SESSION['page'] = $info; //set

		// echo '=============================================<br><pre>';
		// foreach($_SESSION['page'] as $page){
		// 	if ($page['title'] === ""){ continue; }
		// 	 echo "Page: " . $page['title'] . " was visited on " . $page['time'] . " \n";
		// }
		// echo '</pre>';

?>
