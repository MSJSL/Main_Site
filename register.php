<?php
	require('header.php');
?>
	<div class="page-header row">
		<div class="col-xs-12">
			<h1>2016 Fall Registration</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-9">
		    <form action="app/handle_registration.php" method="post">
		    	<div id="form-step-1">
			        <div class="row">
			            <div class="form-group col-lg-5">
			                <label for="player_fname">Player's First Name</label>
			                <input type="text" class="form-control" name="player_fname" id="player_fname">
			            </div>
			            <div class="form-group col-lg-5">
			                <label for="player_lname">Player's Last Name</label>
			                <input type="text" class="form-control" name="player_lname" id="player_lname">
			            </div>
			            <div class="form-group col-lg-2">
			                <label for="player_mname">Middle Initial</label>
			                <input type="text" class="form-control" maxlength="1" name="player_mname" id="player_mname">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-5">
			                <label for="player_dob">Player's Birth Date</label>
			                <input type="text" class="datepicker form-control" id="player_dob" name="player_dob">
			            </div>
			            <div class="form-group col-lg-2">
			                <label>Player's Gender</label>
			                <div class="radio">
			                    <label>
			                        <input type="radio" name="player_gender" id="player_gender_m" value="M">
			                        M
			                    </label>
			                    <label>
			                        <input type="radio" name="player_gender" id="player_gender_f" value="F">
			                        F
			                    </label>
			                </div>
			            </div>
			            <div class="form-group col-lg-5">
			                <label for="parent_email">Parent's Email Address</label>
			                <input type="text" class="form-control" id="parent_email" name="parent_email">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-12">
			                <label for="address">Address</label>
			                <input type="text" class="form-control" id="address" name="address">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-5">
			                <label for="city">City / Town</label>
			                <input type="text" class="form-control" id="city" name="city">
			            </div>
			            <div class="form-group col-lg-2">
			                <label for="state">State</label>
			                <input type="text" class="form-control" disabled value="NH" id="state" name="state">
			            </div>
			            <div class="form-group col-lg-2">
			                <label for="zip">Zip Code</label>
			                <input type="text" class="form-control" id="zip" name="zip">
			            </div>
			            <div class="form-group col-lg-3">
			                <label for="telephone">Telephone</label>
			                <input type="text" class="form-control" id="telephone" name="telephone">
			            </div>
			        </div>
			        <hr>
			        <div class="row">
			            <div class="form-group col-lg-12">
			                <label for="sibling_name">Sibling's Name (if also playing in the league)</label>
			                <input type="text" class="form-control" id="sibling_name" name="sibling_name">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-8">
			                <label for="father_name">Father's Name</label>
			                <input type="text" class="form-control" id="father_name" class="father_name">
			            </div>
			            <div class="form-group col-lg-4">
			                <label for="father_telephone">Telephone</label>
			                <input type="text" class="form-control" id="father_telephone" name="father_telephone">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-8">
			                <label for="mother_name">Mother's Name</label>
			                <input type="text" class="form-control" id="mother_name" class="mother_name">
			            </div>
			            <div class="form-group col-lg-4">
			                <label for="mother_telephone">Telephone</label>
			                <input type="text" class="form-control" id="mother_telephone" name="mother_telephone">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-12">
			                <label for="medical_conditions">Please list any medical conditions or limitations player has</label>
			                <textarea class="form-control" rows="3" id="medical_conditions" name="medical_conditions"></textarea>
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-8">
			                <label for="emergency_name">Person to notify in case of emergency</label>
			                <input type="text" class="form-control" id="emergency_name" class="emergency_name">
			            </div>
			            <div class="form-group col-lg-4">
			                <label for="emergency_phone">Telephone</label>
			                <input type="text" class="form-control" id="emergency_phone" name="emergency_phone">
			            </div>
			        </div>
			        <div class="row">
			            <div class="form-group col-lg-8">
			                <label for="doctor_name">Player's primary care doctor</label>
			                <input type="text" class="form-control" id="doctor_name" class="doctor_name">
			            </div>
			            <div class="form-group col-lg-4">
			                <label for="doctor_phone">Telephone</label>
			                <input type="text" class="form-control" id="doctor_phone" name="doctor_phone">
			            </div>
			        </div>
			        <div class="row">
			        	<div class="form-waiver col-xs-12">
			        		<p>I, the parent/guardian of the registrant, a minor, agree that I and the registrant will abide by the rules of USYSA, its affiliated organizations
		and sponsors. Recognizing the possibility of physical injury associated with soccer and in consideration for the USYSA accepting
		the registrant for its soccer programs and activities (the "Programs"), I hereby release, discharge and/or otherwise indemnify the USYSA,
		its affiliated organizations and sponsors, their employees and associated personnel, including the owners of fields and facilities utilized for
		the Programs, against any claim by or on behalf of the registrant as a result of the registrant's participation in the Programs and/or being
		transported to or from the same, which transportation I hereby authorize. </p>
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="form-group col-lg-6 col-xs-12">
			        		<label for="authorize_name">Parent/Guardian Name:</label>
			        		<input type="text" class="form-control" id="authorize_name" name="authorize_name">
			        	</div>
			        	<div class="form-group col-lg-6 col-xs-12">
			        		<label for="authorize_date">Authorized On:</label>
			        		<input type="text" disabled="true" class="form-control" id="authorize_date" name="authorize_date" value="3/28/2016">
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="form-waiver col-xs-12">
			        		<h2>Consent for Medical Treatment (Minor)</h2>
			        		<p>As the parent or legal guardian of the above-named player,
		I hereby give my consent for emergency medical care prescribed
		by a duly licensed Doctor of Medicine or Doctor of Dentistry
		This care may be given under whatever conditions are necessary
		to preserve the life, limb, or well-being of my dependent</p>
			        	</div> 
			        </div>
			        <div class="row">
			        	<div class="form-group col-lg-6 col-xs-12">
			        		<label for="medical_name">Parent/Guardian Name:</label>
			        		<input type="text" class="form-control" id="medical_name" name="medical_name">
			        	</div>
			        	<div class="form-group col-lg-6 col-xs-12">
			        		<label for="medical_date">Authorized On:</label>
			        		<input type="text" disabled="true" class="form-control" id="medical_date" name="medical_date" value="3/28/2016">
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="form-waiver col-xs-12">
			        		<h2>Parental Support</h2>
							<p>We as for active participation of all parents in our program. Check area(s) in which you would be willing to help. </p>
							<div class="checkbox-list row">
								<div class="col-xs-6">
									<label><input type="checkbox" value="Coach" name="support[]">Coach</label><br>
									<label><input type="checkbox" value="Assistant Coach" name="support[]">Asst. Coach</label><br>
									<label><input type="checkbox" value="Special Projects" name="support[]">Special Projects</label><br> 
									<label><input type="checkbox" value="Fund Raising" name="support[]">Fund Raising</label><br>
									<label><input type="checkbox" value="Field Preparation" name="support[]">Field Preparation</label><br>
									<label><input type="checkbox" value="Referee" name="support[]">Referee</label><br>
								</div>
								<div class="col-xs-6">
									<label><input type="checkbox" value="Team Manager" name="support[]">Team Manager</label><br>
									<label><input type="checkbox" value="Board Member" name="support[]">Board Member</label><br>
									<label><input type="checkbox" value="Newsletter" name="support[]">Newsletter</label><br>
									<label><input type="checkbox" value="Team Parent" name="support[]">Team Parent</label><br>
									<label><input type="checkbox" value="Publicity Donor" name="support[]">Publicity Donor</label><br>
								</div>
							</div>
			        	</div>
			        </div>
			        <div class="row">
			        	<div class="form-group col-xs-12 right">
			        		<button class="btn btn-primary">Continue</button>
			        	</div>
			        </div>
		        </div>
		    </form>
	    </div>
	    <div class="col-xs-12 col-md-3 form-sidebar">
	    	<h3>2016 Registration Details</h3>
	    	<p>Coming Soon</p>
	    </div>
    </div>

<?php
	require('footer.php');
?>