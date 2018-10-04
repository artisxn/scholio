<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Schol.io Form</title>
		<link rel="shortcut icon" href="../favicon.ico">

		<!-- Bootstrap -->
		{{--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css">--}}

		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
        <script src="js/modernizr.custom.js"></script>
        
        <!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('new/img/test-black.png')}}" type="image/x-icon" />


		<style>
			/* ======  avoid filled autocomplete input yellow background on chrome ============ */
			input:-webkit-autofill,
			input:-webkit-autofill:hover,
			input:-webkit-autofill:focus,
			input:-webkit-autofill:active{
				-webkit-box-shadow: 0 0 0 30px #FFFFFF inset;
				-webkit-text-fill-color: #555;
			}
			/* =========================================================== */

			.text-cyan{color: #49A6FE!important;;}
			.text-blue{color: #6D63FF!important;}
			.text-magenta{color: #BE3D74!important;;}
			.text-white{color: #ffffff!important;;}
			.text-orange{color: #FFDD4C!important;}

			/*.set1{position: absolute; border: 1px solid #aaa; border-radius: 10px; background-color: #fafafa; box-shadow: 0 0 15px #888; height: 400px; top: -220px; padding: 12px;}*/
			/*.set2{position: absolute; top:220px; left: 0; right: 0; margin-right: auto; margin-left: auto;}*/

			/*.fs-anim-lower:focus{background-color: transparent!important;}*/

			/*.fs-anim-lower{font-size: 100%!important;}*/
			/*.subTitle{text-align: center; margin: auto auto 40px auto; font-size: 80%;}*/
			/*.imgTrophy{ opacity: 0.9; height: 220px;  margin: 20px auto; display: block;}*/
			/*.imgContainer{position: relative;}*/
			/*.upperTitle {text-align: center; margin: auto auto 20px auto; font-size: 90%}*/

			/*@media(max-width: 480px){*/
				/*.imgTrophy{ top: -180px;}*/
				/*.upperTitle{margin-top: 60px; font-size: 90%!important;}*/
				/*!*.fs-fields{margin-left: 32px; width: 100%}*!*/


			}

		</style>
	</head>
	<body>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>
						<img src="/new/img/logoNX.webp" width="170px">
					</h1>
				</div>
				<form id="myform" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li style="position: relative">
							{{--<div class="set1">--}}
								{{--<div class="imgContainer">--}}
									{{--<img class="imgTrophy" src="new/img/form/image05.png" alt="trophy">--}}
								{{--</div>--}}
								{{--<label class="fs-field-label fs-anim-upper text-blue upperTitle" for="q1">Είσαι απόφοιτος λυκείου και αναζητάς σπουδές σε δημοφιλή κολλέγια και επαγγελματικές σχολές;</label>--}}

							{{--</div>--}}

							<div class="set2">
								<div class="subTitle fs-anim-upper text-cyan">συμπλήρωσε τα στοιχεία σου και διεκδίκησε προνομιακές τιμές </div>
								<input class="fs-anim-lower" name="q1" type="text" placeholder="Ονοματεπώνυμο" required/>
							</div>

						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q2" data-info="We won't send you spam, we promise...">Email:</label>
							<input class="fs-anim-lower" name="q2" type="email" placeholder="name@provider.com" required/>
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
								<span><input id="q3a" name="q3" type="radio" value="mobile"/><label for="q3a" class="radio-mobile">Ιδιωτικό Σχολείο - Φροντιστήριο</label></span>
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