<?php include_once('./core/partials/html.panel.head.php'); ?>

  <body>

    <div class="perm-one d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal" style="font-family: Anton;">Guidance Services</h5>
	  <div>
	  <nav class="my-2 my-md-0 mr-md-3" style="position: relative; display: flex; overflow-x: auto; overflow-y: hidden; max-width: 100%;">
        <a class="nav-item-spacing p-2 text-dark<?=basename($_SERVER["SCRIPT_FILENAME"])=='panel.php'?' active':'';?>" href="/index.php">Panel</a>
        <a class="nav-item-spacing p-2 text-dark" href="#">Edit</a>
        <a class="nav-item-spacing p-2 text-dark" href="#">Settings</a>
      </nav></div>
      <a class="btn btn-outline-primary" href="./signout.php">Sign out</a>
    </div>

    <div class="swamp-main px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1><?=trim($user_data->first_name.(!empty($user_data->middle_name)?' <i>'.$user_data->middle_name.'</i> ':' ').$user_data->last_name.' '.$user_data->name_suffix);?></h1>
      <span class="badge badge-primary">STUDENT</span>
	  <p class="lead"><?=$_SESSION['id_no'];?></p>
	  <!--<p class="lead"><?=trim(strtoupper($user_data->student_level.' '.$user_data->student_section));?></p>-->
    </div>

	<div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <span onclick="kebabProp('kebabPropID')" style="cursor: pointer;" data-toggle="collapse" data-target="#PerInfCOLLAPSE" aria-expanded="false">
		  <div class="card-header">
            <h4 id="personal-information" class="my-0 font-weight-normal" title="your confidential and important info">Personal Information</h4>
          </div>
		  <img title="expand" id="kebabPropID" src="/core/assets/octicons-7.2.0/build/svg/kebab-horizontal.svg">
		  <!--<img src="/core/assets/octicons-7.2.0/build/svg/chevron-down.svg">-->
		  </span>
          <div class="card-body collapse" id="PerInfCOLLAPSE">

  
   <div class="card-deck">
   <div class="card mb-4 box-shadow">
 <table style="text-align: left; margin-bottom: 0px;" class="table table-striped table-sm">
   <tr>
    <td>Address</td>
    <td><b><?=trim($user_data->address);?></b></td>
  </tr>
  <tr>
    <td>Birthdate</td>
    <td><b><?=trim($user_data->birth_month.'/'.$user_data->birth_day.'/'.$user_data->birth_year);?></b></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><b><?=trim($user_data->email);?></b></td>
  </tr>
  <tr>
    <td>Contact Number</td>
    <td><b><?=trim($user_data->contact_number);?></b></td>
  </tr>
  <tr>
    <td>Religion</td>
    <td><b><?=trim($user_data->religion);?></b></td>
  </tr>
  <tr>
    <td>Nationality</td>
    <td><b><?=trim($user_data->nationality);?></b></td>
  </tr>
  <tr>
    <td>Height</td>
    <td><b><?=trim($user_data->height);?></b></td>
  </tr>
  <tr>
    <td>Weight</td>
    <td><b><?=trim($user_data->weight);?></b></td>
  </tr>
  </table>
  </div>
  
  
   <div class="card mb-4 box-shadow">
 <table style="text-align: left; margin-bottom: 0px;" class="table table-striped table-sm">
  <tr>
    <td>Level</td>
    <td><b><?=trim($user_data->student_level);?></b></td>
  </tr>
  <tr>
    <td>Section</td>
    <td><b><?=trim($user_data->student_section);?></b></td>
  </tr>
  <tr>
    <td>Adviser</td>
    <td><b><?=trim($user_data->student_adviser);?></b></td>
  </tr>
  <tr>
    <td>Life Motto</td>
    <td><b><?=trim($user_data->life_motto);?></b></td>
  </tr>
  <tr>
    <td>Life Ambition</td>
    <td><b><?=trim($user_data->life_ambition);?></b></td>
  </tr>
  <tr>
    <td>Hobbies</td>
    <td><b><?=trim($user_data->hobbies);?></b></td>
  </tr>
  </table>
 </div>
 </div>
 
 
 <div class="card-deck">
 <div class="card mb-4 box-shadow">
 
 <table style="text-align: left; margin-bottom: 0px;" class="table table-striped table-sm">
   <tr>
  <td>Mother's Name</td>
    <td><b><?=trim($user_data->mother_name);?></b></td>
  </tr>
   <tr>
  <td>Mother's Occupation</td>
    <td><b><?=trim($user_data->mother_occupation);?></b></td>
  </tr>
  <td>Mother's Contact Number</td>
    <td><b><?=trim($user_data->mother_contact_number);?></b></td>
  </tr>
 </table>
 </div>
  <div class="card mb-4 box-shadow">
 <table style="text-align: left; margin-bottom: 0px;" class="table table-striped table-sm">
  <td>Father's Name</td>
    <td><b><?=trim($user_data->father_name);?></b></td>
  </tr>
   <tr>
  <td>Father's Occupation</td>
    <td><b><?=trim($user_data->father_occupation);?></b></td>
  </tr>
  <td>Father's Contact Number</td>
    <td><b><?=trim($user_data->father_contact_number);?></b></td>
  </tr>
</table>


</div>

</div>
<i>Note: Please contact the counselor/admin to make changes to your personal profile.</i>
          </div>
        </div>
		

		
    
      </div>

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  <div class="card-deck mb-3 text-center">
        <div class="card mb-4 box-shadow">
          <span onclick="kebabProp('kebabPropID2')" style="cursor: pointer;" data-toggle="collapse" data-target="#AnnCOLLAPSE"  aria-expanded="true">
		  <div class="card-header">
            <h4 class="my-0 font-weight-normal" title="important broadcasts from the admin">Announcements</h4>
          </div>
		  <img title="expand" id="kebabPropID2" style="display: none;" src="/core/assets/octicons-7.2.0/build/svg/kebab-horizontal.svg">
		  </span>
          <div class="card-body collapse show" id="AnnCOLLAPSE">



<?php
$scan = scandir('./data/public_announcements/');
$f_count = count($scan)-2;
if($f_count > 0) {
	$i = 0;
	foreach ($scan as $pa_file) {
		$file = './data/public_announcements/' . $pa_file;
		if(!is_dir($file)) {
			echo '<h4>'.json_decode(file_get_contents($file))->title.'</h4>';
			echo json_decode(file_get_contents($file))->body;
			if(++$i < $f_count) {
				echo '<hr>';
			}
		} elseif($pa_file != '.' && $pa_file != '..') {
			//rmdir($file);
			$f_count = $f_count-1;
		}
	}
} else {
	echo '<span class="badge badge-secondary">NONE</span>';
}
?>





          </div>
        </div>
      </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
	  <p class="text-muted">&copy; St. Paul University Dumaguete <?=date('Y');?></p>
        <!--<div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="./core/assets/spud.svg" alt="" width="24" height="24">
            <small class="d-block mb-3 text-muted">&copy; St. Paul University Dumaguete 2018</small>
          </div>
          <div class="col-6 col-md">
            <h5>Features</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Cool stuff</a></li>
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>-->
      </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script>
		function kebabProp(idDef) {
			if(document.getElementById(idDef).parentNode.getAttribute("aria-expanded") == 'false') {
				document.getElementById(idDef).style.cssText = 'display: none;';
			}
			if(document.getElementById(idDef).parentNode.getAttribute("aria-expanded") == 'true') {
				document.getElementById(idDef).style.cssText = 'display: initial;';
			}
		}
	</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="./core/assets/bootstrap.min.js"></script>
  </body>
</html>
