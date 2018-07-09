<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Schol.io Form</title>
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
        <script src="js/modernizr.custom.js"></script>
        
        <!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>
						<img src="/new/img/logoNX.png" width="250px">
					</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
							<label class="fs-field-label fs-anim-upper" for="q1">Ονοματεπώνυμο:</label>
							<input class="fs-anim-lower" name="q1" type="text" placeholder="Ονοματεπώνυμο" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">Email:</label>
							<input class="fs-anim-lower" name="q2" type="email" placeholder="sakis@rouvas.gr" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">Τηλέφωνο:</label>
							<input class="fs-mark fs-anim-lower" name="q5" type="number" placeholder="69" required/>
						</li>
						<li data-input-trigger>
							<label class="fs-field-label fs-anim-upper" for="q3" data-info="This will help us know what kind of service you need">Τι είδος εκ. Ιδρύματος ψάχνεις;</label>
							<div class="fs-radio-group fs-radio-custom clearfix fs-anim-lower">
								<span><input id="q3b" name="q3" type="radio" value="conversion"/><label for="q3b" class="radio-conversion">Κολλέγιο</label></span>
								<span><input id="q3c" name="q3" type="radio" value="social"/><label for="q3c" class="radio-social">ΙΕΚ - Επαγγελματικές Σχολές</label></span>
								<span><input id="q3a" name="q3" type="radio" value="mobile"/><label for="q3a" class="radio-mobile">Ιδιωτικό Σχολέιο - Φροντηστήριο</label></span>
							</div>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4">Περιέγραψε τη σχολή που θες να σπουδάσεις:</label>
							<textarea class="fs-anim-lower" name="q4" placeholder="πχ. Διοικηση Επιχειρησεων, Μάρκετινγκ" required></textarea>
						</li>
                    </ol><!-- /fs-fields -->
                    <div class="fs-submit">
                            <label class="fs-field-label fs-anim-upper">Αποδέχομαι τους <a href="{{ url('/terms') }}" target="_blank">όρους χρήσης</a>:</label>
                        <input type="checkbox" name="gdpr">
                    </div>
                    <br>
                    <br>
					<button class="fs-submit" type="submit">Αποστολή Στοιχείων</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->

		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
	</body>
</html>