<style type="text/css">
	#scholarshipcalculator {
		position: relative;
		top: 0px;
		left: 0px;
		border: 4px solid #c4e4f7;
		margin: 48px;
		padding: 48px;
	}

	#scholarshipform {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	#scholarshipform img {
		width: 40%;
		margin-right: 2%;
	}

	#scholarshipform > div {
		margin-bottom: 12px;
	}

	#scholarshipform #formCT h2 {
		font-family: 'Oswald';
		color: #004b8d;
		text-transform: uppercase;
		letter-spacing: 2px;
		font-size: 2em;
	}

	#scholarshipform #formCT .field {
		margin-bottom: 12px;
	}

	#scholarshipform #formCT label {
		font-size: 1.1em;
		color: #666;
		font-weight: bold;
	}

	#scholarshipform #formCT select {
		margin: 12px 0px;
		padding: 8px 12px;
		width: 80%;
	}

	#scholarshipform #formCT button {
		background-color: #004b8d;
		border: none;
		color: #ffffff;
		font-size: 0.9em;
		cursor: pointer;
		padding: 12px 18px;
	}

	#scholarshipcongrats {
		display: none;
		text-align: center;
	}

	#scholarshipcongrats h3 {
		font-family: 'Oswald';
		color: #004b8d;
		text-transform: uppercase;
		letter-spacing: 2px;
		font-size: 1.5em;
	}

	#scholarshipcongrats img {
		width: 80%;
	}

	#scholarshipcongrats button {
		background-color: #fed000;
		border: none;
		color: #000000;
		font-size: 0.9em;
		cursor: pointer;
		padding: 12px 18px;
	}

	#scholarshiptransition {
		display: flex;
		width: 0%;
		align-items: center;
		justify-content: space-around;
		height: 100%;
		background-color: #c4e4f7;
		color: #ffffff;
		font-family: 'Oswald';
		font-size: 2.5em;
		text-transform: uppercase;
		letter-spacing: 2px;
		line-height: 100%;
		text-align: center;
		overflow: hidden;
		white-space: nowrap;
		position: absolute;
		top: 0px;
	}

	@media screen and (max-width: 767px) {
		#scholarshipcalculator {
			margin: 24px 20px;
			padding: 32px;
		}

		#scholarshipform {
			display: block;
		}

		#scholarshipform img {
			margin: 0px;
			width: 100%;
		}

		#scholarshipform #formCT {
			text-align: center;
		}

		#scholarshipform #formCT h2 {
			font-size: 1.5em;
		}

		#scholarshipform #formCT .field {
			text-align: left;
		}

		#scholarshipform #formCT select {
			width: 100%;
		}

		#scholarshipform #formCT button {
			display: inline-block;
			margin: 0px auto;
		}

		#scholarshipcongrats h3 {
			font-size: 1.5em;
		}
	}
</style>
<div id="scholarshipcalculator">
	<div id="scholarshipform">
		<t4 type="media" id="101701" formatter="imagebasic/*"/>
		<div id="formCT">
			<h2>See your big scholarship!</h2>
			<div class="field">
				<label>
					What type of student are you?<br/>
					<select id="levelselect" onchange="setScholarshipGPAs()">
						<option value="" selected>Select one</option>
						<option value="0">Freshman</option>
						<option value="1">Early College or Dual Enrollment</option>
						<option value="2">Transfer</option>
					</select>
				</label>
			</div>
			<div class="field">
				<label>
					Your GPA<br/>
					<select id="gpaselect" disabled></select>
				</label>
			</div>
			<div>
				<button onclick="scholarshipTransition()">Get My Estimate</button>
			</div>
		</div>
	</div>
	<div id="scholarshipcongrats">
		<t4 type="media" id="101702" formatter="imagebasic/*"/>
		<h3>Your yearly estimated scholarship is <span id="scholarshipamount"></span>*</h3>
		<p>Submit your info to find out how you can add up to an extra $3,000 to your scholarship per year.</p>
		<button onclick="toggleForm();">Send Me Info</button>
		<p style="font-size:0.7em;"><em>*This estimate is based on your self-reported information. Official
			scholarship awards will be determined after you submit your application and supporting documents.</em>
		</p>
	</div>
	<div id="scholarshiptransition">
		<div>Calculating...</div>
	</div>
</div>

<script type="text/javascript">
	var scholarships = [
		[   // High School GPA
			{
				"gpa": "3.95 or Higher",
				"amount": "$22,000"
			},
			{
				"gpa": "3.50 - 3.94",
				"amount": "$21,000"
			},
			{
				"gpa": "3.00 - 3.49",
				"amount": "$19,000"
			},
			{
				"gpa": "2.75 - 2.99",
				"amount": "$17,000 - $18,000"
			},
			{
				"gpa": "Under 2.75",
				"amount": "$16,000 - $17,000"
			}
		],
		[   // College GPA
			{
				"gpa": "3.75 or Higher",
				"amount": "$22,000"
			},
			{
				"gpa": "3.5 - 3.74",
				"amount": "$21,000"
			},
			{
				"gpa": "3.0 - 3.49",
				"amount": "$19,000"
			},
			{
				"gpa": "2.75 - 2.99",
				"amount": "$17,000 - $18,000"
			},
			{
				"gpa": "2.0 - 2.74",
				"amount": "$16,000 - $17,000"
			}
		],
		[   // Transfer GPA
			{
				"gpa": "3.5 or Higher",
				"amount": "$20,000"
			},
			{
				"gpa": "3.00 - 3.49",
				"amount": "$19,000"
			},
			{
				"gpa": "2.50 - 2.99",
				"amount": "$17,000 - $18,000"
			},
			{
				"gpa": "Under 2.50",
				"amount": "$16,000 - $17,000"
			}
		]
	];

	function setScholarshipGPAs() {
		var level = $('#levelselect').val();
		$("#gpaselect").empty();
		$("#gpaselect").removeAttr('disabled');
		for (var x = 0; x < scholarships[level].length; x++) {
			$("#gpaselect").append('<option value="' + x + '">' + scholarships[level][x].gpa + '</option>')
		}
	}

	function getScholarship() {
		var level = $('#levelselect').val();
		var gpa = $('#gpaselect').val();
		return scholarships[level][gpa];
	}

	function setScholarshipText() {
		$('#scholarshipamount').html(getScholarship().amount);
	}

	function scholarshipTransition() {
		setScholarshipText();
		$('#scholarshiptransition').css({
			'width': '0%',
			'right': '0px'
		});
		$('#scholarshipcalculator').css('height', $('#scholarshipform').outerHeight() + 'px');
		$('#scholarshiptransition').animate({
			'width': '100%'
		}, {
			duration: 500,
			easing: "swing",
			complete: function () {
				$('#scholarshiptransition').css({
					'right': '',
					'left': '0px'
				});
				$('#scholarshipcongrats').css({'position': 'absolute', 'top': '0px', 'left': '0px'});
				$('#scholarshipcongrats').show();
				$('#scholarshipcalculator').animate({
					'height': $('#scholarshipcongrats').outerHeight() + 'px'
				}, {
					duration: 500,
					easing: "swing",
					complete: function () {
						$('#scholarshipcongrats').css({'position': '', 'top': '', 'left': ''});
						$('#scholarshipform').hide();
						$('#scholarshipcalculator').css({'height': ''})
					}
				});
				window.setTimeout(function () {
					$('#scholarshiptransition').animate({
						'width': '0%'
					}, {
						duration: 500,
						easing: "swing",
						complete: function () {
							$('#scholarshiptransition').css("display", "none");
							$('#scholarshipcalculator').css({'height': ''});
						}
					})
				}, 2000);
			}
		});
	}
</script>