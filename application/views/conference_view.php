<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url('CSS/SayItRight.css'); ?>">
	
<title>Conference</title>
</head>
<body>
	<div class="wrapper">
		<div class="start">
				<img src="<?php echo base_url();?>CSS\images\logo.jpg" height="50" width="50">
				<div class="onlyforli">
				<li><a href="<?php echo site_url('Ind_home_control/indi_home_loading'); ?>">HOME</a></li>
				<li><a id="active" href="<?php echo site_url('Conference_control/conference_calling'); ?>">CONFERENCES</a></li>
				<li><a href="<?php echo site_url('Event_control/event_calling'); ?>">EVENTS</a></li>
				<li><a href="<?php echo site_url('Myconference_control/myconference_calling'); ?>">MY CONFERENCES</a></li>
				<li><a href="<?php echo site_url('Myevent_control/myevent_calling'); ?>">MY EVENTS</a></li>
				<li><a href="<?php echo site_url('Settings_control/settings_loading'); ?>">SETTINGS</a></li>
				</div>
		</div>

<?php echo $this->session->userdata('email_id'); ?>

<div class="confercontainer">
	<div class="innerconfercontainer">
		<h1>List of Conferences</h1>
		<table>
				<tr>
					<th>conferences</th>
					<th>Description</th>
					<th>Date</th>
					<th>sede</th>
					<th>Confirmation</th>
				</tr>



				<?php 

				echo form_open('Conference_control/adding_to_myconference');

				$i = 1;
				foreach($conferences as $it)
				{
					echo '<tr><td>'.$it->event_name.'</td>
						  	  <td>'.$it->description.'</td>
						  	  <td>'.$it->date.'</td>
						  	  <td>'.$it->location.'</td>
						  	  <td>'.form_submit(['type' => 'submit', 'name' => 'add'.$i, 'value' => 'ADD']).'</td>
						  	  <td>'.form_input(['type' => 'hidden', 'name' => 'id'.$i, 'value' => $it->event_id, 'style' => 'border: 0']).'</td>

						  	</tr>';

						  	$i++;
				}

				echo form_input(['type' => 'hidden', 'name' => 'count', 'value' => $i]);				

				echo form_close();
				?>


		</table>



	</div>
</div>


				<?php include APPPATH.'views\footer.php'; ?>
	</div>
</body>
</html>

