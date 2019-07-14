<?php
	$hello = "General Settings";
?>
<style>
	#moresettings {
		display: none;
		text-align: center;
		padding: 10;
		margin-left: 10%;
	}
	#hideset {
		text-align: left;
		margin-left: -10%;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-10">
			<div class="row">
				<label for="" class="label">Change location</label>
			</div>
			<div class="row">
				<label for="" class="label">Manage your devices</label>
			</div>
			<div class="row">
				<label for="" class="label">Security Settings</label>
			</div>
			<div class="row">
				<label for="" class="label"><p onclick="displaySetInfo2()" class="stretched-link text-primary">More Settings <span class="Dat"></span></p></label>
			</div>
			<div class="row" id="moresettings" >
				<div class="row">
					<div class="well">
						Advance General Settings Which can be useful for some basic settings related to our service and your needs.
					</div>
					<div class="well">
						You can customize our service as per your requirements.
					</div>
				</div>
				<div class="row">
					<label for="" class="label"><p id="hideset" onclick="displaySetInfo()" class="stretched-link text-primary">Hide More Settings <span class="Dat"></span></p></label>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	function displaySetInfo2(){
		document.getElementById("moresettings").style.display = "block";
	}
	function displaySetInfo(){
		document.getElementById("moresettings").style.display = "none";
	}
</script>