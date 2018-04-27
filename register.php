<?php
error_reporting(0);
if(isset($_GET['new_user'])) {
	$student_id = './data/student/'.$_POST['id_number'];
	
	$student_data->first_name = $_POST['first_name'];
	$student_data->middle_name = $_POST['middle_name'];
	$student_data->last_name = $_POST['last_name'];
	$student_data->name_suffix = $_POST['name_suffix'];
	$student_data->student_level = $_POST['student_level'];
	$student_data->student_section = $_POST['student_section'];
	$student_data->student_adviser = $_POST['student_adviser'];
	$student_data->life_motto = $_POST['life_motto'];
	$student_data->life_ambition = $_POST['life_ambition'];
	$student_data->hobbies = $_POST['hobbies'];
	$student_data->religion = $_POST['religion'];
	$student_data->nationality = $_POST['nationality'];
	$student_data->height = $_POST['height'];
	$student_data->weight = $_POST['weight'];
	$student_data->birth_month = $_POST['birth_month'];
	$student_data->birth_day = $_POST['birth_day'];
	$student_data->birth_year = $_POST['birth_year'];
	$student_data->address = $_POST['address'];
	$student_data->mother_name = $_POST['mother_name'];
	$student_data->mother_occupation = $_POST['mother_occupation'];
	$student_data->mother_contact_number = $_POST['mother_contact_number'];
	$student_data->father_name = $_POST['father_name'];
	$student_data->father_occupation = $_POST['father_occupation'];
	$student_data->father_contact_number = $_POST['father_contact_number'];
	$student_data->email = $_POST['email'];
	$student_data->contact_number = $_POST['contact_number'];
	$student_data->pass_hash = md5($_POST['password']);
	
	$student_data = json_encode($student_data);
	
	if(!file_exists($student_id)) {
		mkdir($student_id);
		file_put_contents($student_id.'/main', $student_data);
		file_put_contents($student_id.'/schedule', '');
		echo 'User has been created';
	} else {
		echo 'Username already exists.';
	}
	
	exit;
}
?>

<form method="post" action="?new_user">
	<input type="text" name="id_number" placeholder="id number"/>
	<input type="text" name="password" placeholder="password for user"/>
	<hr>
	<input type="text" name="first_name" placeholder="first name"/>
	<input type="text" name="middle_name" placeholder="middle name"/>
	<input type="text" name="last_name" placeholder="last name"/>
	<input type="text" name="name_suffix" placeholder="name suffix [Jr,Sr,I,II,III]"/>
	<br>
	<input type="text" name="address" placeholder="address"/>
	<br>
	<input type="text" name="birth_month" placeholder="month"/>
	<input type="text" name="birth_day" placeholder="day"/>
	<input type="text" name="birth_year" placeholder="year"/>
	<br>
	<input type="text" name="email" placeholder="email"/>
	<input type="text" name="contact_number" placeholder="contact number"/>
	<br>
	<input type="text" name="religion" placeholder="religion"/>
	<input type="text" name="nationality" placeholder="nationality"/>
	<br>
	<input type="text" name="height" placeholder="height"/>
	<input type="text" name="weight" placeholder="weight"/>
	<hr>
	<input type="text" name="student_level" placeholder="level"/>
	<input type="text" name="student_section" placeholder="section"/>
	<input type="text" name="student_adviser" placeholder="adviser"/>
	<hr>
	<input type="text" name="life_motto" placeholder="life motto"/>
	<input type="text" name="life_ambition" placeholder="life ambition"/>
	<input type="text" name="hobbies" placeholder="hobbies"/>
	<hr>
	<input type="text" name="mother_name" placeholder="mother's name"/>
	<input type="text" name="mother_occupation" placeholder="mother's occupation"/>
	<input type="text" name="mother_contact_number" placeholder="mother's contact number"/>
	<br>
	<input type="text" name="father_name" placeholder="father's name"/>
	<input type="text" name="father_occupation" placeholder="father's occupation"/>
	<input type="text" name="father_contact_number" placeholder="father's contact number"/>
	<br>
	<input type="submit"/>
</form>


