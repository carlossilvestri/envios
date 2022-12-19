<!-- JS -->
<script type="text/javascript">
	function saveOption(element, key) {
		var el = $(element),
			value = '';
		value = el.html();
		if (key == 'conversion') {
			value = 'SI';
		}
		$.ajax({
			type: "POST",
			url: "./config_inc/conversion_set.php",
			data: {
				key: key,
				value: value,
				codigo: ''
			},
			beforeSend: function() {

			},
			success: function(dataResponse) {
				dataContent = dataResponse;
			},
			complete: function() {

			}
		});
	}
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript" src="./../js/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="./../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="./../js/jquery.waypoints.min.js"></script>
<script type="text/javascript" src="./../js/jquery.countTo.js"></script>
<script type="text/javascript" src="./../js/main.js"></script>
<script type="text/javascript" src="./../js/custom.js"></script>