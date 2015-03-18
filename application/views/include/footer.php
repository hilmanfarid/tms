	<script src="<?php echo base_url('assets/js/jquery-ui-1.10.3.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/lodash.min.js')?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<!--<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>-->
	<script src="<?php echo base_url('assets/js/AdminLTE/app.js') ?>"></script>
	<link href="<?php echo base_url('assets/bootstrap-dialog/css/bootstrap-dialog.min.css'); ?>" rel="stylesheet" type="text/css" />
	<script src="<?php echo base_url('assets/bootstrap-dialog/js/bootstrap-dialog.min.js') ?>"></script>
	<link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
	<script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
	<script>
		var currenttime = '<? print date("F d, Y H:i:s", time())?>' //PHP method of getting server date

		var serverdate=new Date(currenttime)

		function padlength(what){
			var output=(what.toString().length==1)? "0"+what : what
			return output
		}

		function displaytime(){
				serverdate.setSeconds(serverdate.getSeconds()+1)
				var timestring=padlength(serverdate.getDay())+"/"+padlength(serverdate.getMonth())+"/"+padlength(serverdate.getFullYear())+" <i class='fa fa-clock-o'></i> "+padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds());
				document.getElementById("server_time").innerHTML=timestring
			}

		setInterval("displaytime()", 1000);
		
		$(document).ready(function(){
			$(".bfh-number").keydown(function (e) {
				// Allow: backspace, delete, tab, escape, enter and .
				if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
					 // Allow: Ctrl+A
					(e.keyCode == 65 && e.ctrlKey === true) || 
					 // Allow: home, end, left, right
					(e.keyCode >= 35 && e.keyCode <= 39)) {
						 // let it happen, don't do anything
						 return;
				}
				// Ensure that it is a number and stop the keypress
				if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
					e.preventDefault();
				}
			});
		});
	</script>
</body>
</html>
