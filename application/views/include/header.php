<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">

   <title>TMS</title>
	<link rel="icon" href="/logo-small.gif" type="image/gif">
	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/bootstrap-formhelpers.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/font-awesome.css') ?>" rel="stylesheet">
	<!--<link href="<?php echo base_url('assets/css/custom.css') ?>" rel="stylesheet">-->
	<link href="<?php echo base_url('assets/css/ionicons.min.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/css/AdminLTE.css') ?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootgrid/build/jquery.bootgrid.css') ?>" rel="stylesheet">
	<script src="<?php echo base_url('assets/js/jquery/2.0.2/jquery.min.js') ?>"></script>
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-select.css')?>">
	<script src="<?php echo base_url('assets/js/typeahead.js') ?>"></script>
	<script src="<?php echo base_url('assets/bootgrid/build/jquery.bootgrid.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-select.js') ?>"></script>

    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function() {
            $('.menu-module').click(function(){
                var mod = $(this).attr('module');
                $.ajax( {
    				url: mod,
    				data: {
    					
    				},
    				dataType: 'html',
    				type: 'post',
    				success: function ( txt ) {
    					$('section.content').html(txt)
    				}
    			} );
            });
        } );
		$.fn.values = function(data) {
			var els = $(this).find(':input').get();
			if(typeof data != 'object') {
				// return all data
				data = {};

				$.each(els, function() {
					if (this.name && !this.disabled && (this.checked
									|| /select|textarea/i.test(this.nodeName)
									|| /text|hidden|password/i.test(this.type))) {
						data[this.name] = $(this).val();
					}
				});
				return data;
			} else {
				$.each(els, function() {
					if (this.name && data[this.name]) {
						if(this.type == 'checkbox' || this.type == 'radio') {
							$(this).attr("checked", (data[this.name] == $(this).val()));
						} else {
							$(this).val(data[this.name]);
						}
					}
				});
				return $(this);
			}
		};
	</script>
	<!-- Style for jquery TypeAhead-->
	<style>
		.typeahead,
		.tt-query,
		.tt-hint {
		  top:32px;
		  height: 30px;
		  padding: 8px 12px;
		  font-size: 14px;
		  line-height: 30px;
		  border: 2px solid #ccc;
		  -webkit-border-radius: 8px;
			 -moz-border-radius: 8px;
				  border-radius: 8px;
		  outline: none;
		}

		.typeahead {
		  background-color: #fff;
		}

		.typeahead:focus {
		  border: 2px solid #0097cf;
		}

		.tt-query {
		  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
			 -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
				  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
		}

		.tt-hint {
		  color: #999
		}

		.tt-dropdown-menu {
		  margin-top: 12px;
		  padding: 8px 0;
		  background-color: #fff;
		  border: 1px solid #ccc;
		  border: 1px solid rgba(0, 0, 0, 0.2);
		  -webkit-border-radius: 8px;
			 -moz-border-radius: 8px;
				  border-radius: 8px;
		  -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
			 -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
				  box-shadow: 0 5px 10px rgba(0,0,0,.2);
		}

		.tt-suggestion {
		  padding: 3px 20px;
		  font-size: 18px;
		  line-height: 24px;
		}

		.tt-suggestion.tt-cursor {
		  color: #fff;
		  background-color: #0097cf;

		}

		.tt-suggestion p {
		  margin: 0;
		}
	</style>
	<!-- End Jquery TypeAhead Style-->
</head>