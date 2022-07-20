
    <script src="<?php echo base_url();?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/slick.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.barrating.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.counterup.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.nice-select.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery-ui.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/lightgallery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/scroll-top.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/theia-sticky-sidebar.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/owl.js"></script>
    <script src="<?php echo base_url();?>assets/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/js/functions.js"></script>
	<?php if($this->uri->segment(2)=='login'){ ?>
    <script src="<?php echo base_url();?>assets/js/user_login.js"></script>
	<?php } if($this->uri->segment(2)=='auction'){ ?>
    <script src="<?php echo base_url();?>assets/js/auction_login.js"></script>
	<?php } ?>
	</body>
	<script src="<?php echo base_url();?>assets/js/fotorama.js"></script>

	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-gauge.min.js"></script>
	<?php if($this->uri->segment(2)=='myaccount'){ ?>
	<script src="<?php echo base_url();?>assets/plugins/datatable/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url();?>assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>
	<script>
		$(document).ready( function () {
			$('#carttable').DataTable();
		} );
		$(function(e) {
			$('#auctiontable').DataTable();
			$('#sellcar').DataTable();
			$('#sellmarine').DataTable();
			$('#myorder').DataTable();
		} );
		
	</script>
	<?php } ?>
			<script type="text/javascript">
			window.onload = function(){
				if(!document.location.hash){
					$('#indexselections').load('https://souq.car/index/carlistingdata'); 
				}
			}
			
		   function googleTranslateElementInit() {
				new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'ar,en,es,jv,ko,pa,pt,ru,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
			};
			$(function () {
				$.getScript("//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit");
			});
			
			// var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
			// (function(){
			// var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			// s1.async=true;
			// s1.src='https://embed.tawk.to/5e2ac29a8e78b86ed8aadd9e/default';
			// s1.charset='UTF-8';
			// s1.setAttribute('crossorigin','*');
			// s0.parentNode.insertBefore(s1,s0);
			// })();


			$(window).on("load", function () {
			  $(".loader").fadeOut("slow");
			});
			$(document).ready(function() {
				$(function() {
				  $(".progressgauge").each(function() {
					var vv     = $(this).attr('data-data') / 10;
					var id     = $(this).attr('data-prodid');
					var flash  = $(this).attr('data-flash');
					var tosold = $(this).attr('data-tosold');
					 $('.gauge'+id).gauge({
							values: {
								0 : '0',
								20:  tosold * .2,
								40:  tosold * .4,
								60:  tosold * .6,
								80:  tosold * .8,
								100: ''
							},
							colors: {
								
								0 :  '#008000',
								25 : '#008000',
								26:  '#FFA500',
								50:  '#FFA500',
								51:  'red',
								100: 'red'
							},
							angles: [
								90,
								450
							],
							lineWidth: 15,
							arrowWidth: 10,
							arrowColor: '#c49c85',
							inset:false,
							value: vv
						});
					
				  });
				<?php 
				$useragent=$_SERVER['HTTP_USER_AGENT'];
				if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
				
				?>
					$('circle.b-gauge__center').attr('r', '5');
				<?php } else { ?>
					$('circle.b-gauge__center').attr('r', '5');
				<?php } ?>
					  function percentageToDegrees(percentage) {
						return percentage / 100 * 360
					  }

					});
			});
	$(document).ready(function() {
	$('#checkoutorder').submit(function(e){
		e.preventDefault();
		$("#buttonpayment").hide();
		$("#checkout-process").html('<div class="alert alert-warning"> <i class="fa fa-spinner fa-spin"></i> Processing Checkbox ... Please Wait ... </div>');
		// setTimeout(function() {
			 $.ajax({
				url: 'https://souq.car/payment_api/submitPayment',
				type: 'post',
				dataType: 'json',
				contentType: 'application/x-www-form-urlencoded',
				async:false,
				success: function(json) {
					window.location = json;
				},
			});
		// }, 5000);
	});
     screenWidth = window.screen.width,
     screenHeight = window.screen.height;
	 $('#extcolor').on('change', function () {
              if($( this ).val() =='Other Color'){
				  $("#resexcolor").show();
				  $("#resexcolor").html('<input type="text" name="excolor"  placeholder="Enter Color">');
			  } else {
				  $("#resexcolor").hide();
			  }
     });	
	 $('#intcolor').on('change', function () {
              if($( this ).val() =='Other Color'){
				  $("#resintcolor").show();
				  $("#resintcolor").html('<input type="text" name="intcolor"  placeholder="Enter Color">');
			  } else {
				  $("#resintcolor").hide();
			  }
     });	
	
	$('.owl-carousel').owlCarousel({
		loop:false,
		stagePadding: 0,
		margin:20,
		items : 1, // THIS IS IMPORTANT
		responsiveClass:true,
		nav:true,
		responsive:{
			 0:{
				  items:1
			 },
			 1000:{
				  items:3
			 }
		}
  });
  
   $('#myCarousel').carousel({
    interval: 3000,
 }); 
 $('#carouselpromo').carousel({
    interval: 3000,
 });
 });
</script>
<script>

		function removeParam(key, sourceURL) {
			var rtn = sourceURL.split("?")[0],
				param,
				params_arr = [],
				queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
			if (queryString !== "") {
				params_arr = queryString.split("&");
				for (var i = params_arr.length - 1; i >= 0; i -= 1) {
					param = params_arr[i].split("=")[0];
					if (param === key) {
						params_arr.splice(i, 1);
					}
				}
				rtn = rtn + "?" + params_arr.join("&");
			}
			return rtn;
		}

		
			$('#sortselect').on('change', function() {
				var url = document.location.href+"&sort="+this.value;
				document.location = url1;
			});
		
		
		$(document).ready(function () {
            $imgSrc = $('#imgProfile').attr('src');
            function readURL(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#imgProfile').attr('src', e.target.result);
                    };

                    reader.readAsDataURL(input.files[0]);
                }
            }
            $('#btnChangePicture').on('click', function () {
                // document.getElementById('profilePicture').click();
                if (!$('#btnChangePicture').hasClass('changing')) {
                    $('#profilePicture').click();
                }
                else {
                    // change
                }
            });
            $('#profilePicture').on('change', function () {
                readURL(this);
                $('#btnChangePicture').addClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnDiscard').removeClass('d-none');
                // $('#imgProfile').attr('src', '');
            });
            $('#btnDiscard').on('click', function () {
                // if ($('#btnDiscard').hasClass('d-none')) {
                $('#btnChangePicture').removeClass('changing');
                $('#btnChangePicture').attr('value', 'Change');
                $('#btnDiscard').addClass('d-none');
                $('#imgProfile').attr('src', $imgSrc);
                $('#profilePicture').val('');
                // }
            });
        });
		//**  PLATE SCRIPT **//
		var base_url = 'http://localhost/souq';
		
			$( "#plate_code_abu" ).change(function() {
				var code = $( this ).val();
				if(code=='Blue' || code=='Gray' || code=='Green' || code=='Red' || code=='White'){
				} else {
				$("#platecodeabu").html(code);
				$("#platecodeabunew").html(code);
				$("#platecodemc").html(code);
				$("#platecodeajman").html(code);
				$("#platecodedubai").html(code);
				$("#platecodedubainew").html(code);
				}
			});
			// $( "#plate_code_abu-new" ).change(function() {
				// var code = $( this ).val();
				// $("#platecodeabunew").html(code);
			// });
			$('input[name=platenumber]').on('input', function (e) {
				var plate = $( this ).val();
				$("#platenumberabu").html(plate);
				$("#platenumberabunew").html(plate);
				$("#platenumbermc").html(plate);
				$("#platenumberajman").html(plate);
				$("#platenumberajmanmotor").html(plate);
				$("#platenumberdubai").html(plate);
				$("#platenumberdubainew").html(plate);
				$("#platenumberdubaiclassics").html(plate);
			});

			$('input[type=radio][name=design]').change(function() {
			if (this.value == 'Classic') {
				$(".divplate").html('<div id="platecodeabu" style="display: inline;"></div><div id="platenumberabu" style="display: inline;"></div><img src=<?php echo base_url();?>assets/images/img/plates/abuclassic.png></img>');
			}
			else if (this.value == 'New') {
				$(".divplate").html('<div id="platecodeabunew" style="display: inline;"></div><div id="platenumberabunew" style="display: inline;"></div><img src=<?php echo base_url();?>assets/images/img/plates/abunew.png></img>');
			}
			});
			$('input[type=radio][name=designdubai]').change(function() {
			if (this.value == 'Classic') {
				$(".divplate").html('<div id="platecodedubai" style="display: inline;"></div><div id="platenumberdubai" style="display: inline;"></div><img src=<?php echo base_url();?>assets/images/img/plates/dubaiclassic.png></img>');
			}
			else if (this.value == 'New') {
				$(".divplate").html('<div id="platecodedubainew" style="display: inline;"></div><div id="platenumberdubainew" style="display: inline;"></div><img src=<?php echo base_url();?>assets/images/img/plates/dubainew.png></img>');
			}
			});
			
			//** Add Minus Function **//
			$('#qty_input1').prop('disabled', true);
			$('#qty_input2').prop('disabled', true);
			$('#qty_input3').prop('disabled', true);
			$('#qty_input4').prop('disabled', true);
			$('#qty_input5').prop('disabled', true);
			
			$('#plus-btn1').click(function(){
					var productid1 = $("#productid1").val();
					$.ajax({
						 data: {'productid': productid1 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/plusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
					$('#qty_input1').val(parseInt($('#qty_input1').val()) + 1 );
			});
			$('#minus-btn1').click(function(){
				var productid1 = $("#productid1").val();
					$.ajax({
						 data: {'productid': productid1 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/minusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
				$('#qty_input1').val(parseInt($('#qty_input1').val()) - 1 );
					if ($('#qty_input1').val() == 0) {
						$('#qty_input1').val(1);
					}
			});
			
			$('#plus-btn2').click(function(){
					var productid2 = $("#productid2").val();
					$.ajax({
						 data: {'productid': productid2 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/plusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
					$('#qty_input2').val(parseInt($('#qty_input2').val()) + 1 );
			});
			$('#minus-btn2').click(function(){
				var productid2 = $("#productid2").val();
					$.ajax({
						 data: {'productid': productid2 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/minusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
				$('#qty_input2').val(parseInt($('#qty_input2').val()) - 1 );
					if ($('#qty_input2').val() == 0) {
						$('#qty_input2').val(1);
					}
			});
			
			$('#plus-btn3').click(function(){
					var productid3 = $("#productid3").val();
					$.ajax({
						 data: {'productid': productid3 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/plusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
					$('#qty_input3').val(parseInt($('#qty_input3').val()) + 1 );
			});
			$('#minus-btn3').click(function(){
				var productid3 = $("#productid3").val();
					$.ajax({
						 data: {'productid': productid3 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/minusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
				$('#qty_input3').val(parseInt($('#qty_input3').val()) - 1 );
					if ($('#qty_input3').val() == 0) {
						$('#qty_input3').val(1);
					}
			});
			
			$('#plus-btn4').click(function(){
					var productid4 = $("#productid4").val();
					$.ajax({
						 data: {'productid': productid4 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/plusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
					$('#qty_input4').val(parseInt($('#qty_input4').val()) + 1 );
			});
			$('#minus-btn4').click(function(){
				var productid4 = $("#productid4").val();
					$.ajax({
						 data: {'productid': productid4 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/minusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
				$('#qty_input4').val(parseInt($('#qty_input4').val()) - 1 );
					if ($('#qty_input4').val() == 0) {
						$('#qty_input4').val(1);
					}
			});
			$('#plus-btn5').click(function(){
					var productid5 = $("#productid5").val();
					$.ajax({
						 data: {'productid': productid5 , 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/plusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
					$('#qty_input45').val(parseInt($('#qty_input5').val()) + 1 );
			});
			$('#minus-btn5').click(function(){
				var productid5 = $("#productid5").val();
					$.ajax({
						 data: {'productid': productid5, 'count':1 },
						 type: "post",
						 url: "https://souq.car/app/minusorder",
						 success: function(response){
							window.location.href="https://souq.car/index/checkout";
						}
					});
				$('#qty_input5').val(parseInt($('#qty_input5').val()) - 1 );
					if ($('#qty_input5').val() == 0) {
						$('#qty_input5').val(1);
					}
			});
			 $('#switch1').change(function() {
				if(this.checked) {
					// var returnVal = confirm("Are you sure?");
					$("#option1").show();
					$("#donatetocharityxt").show();
					$("#donatetocharity").val('Donate to Charity');
					$("#donatetocharityxt").html('Donate to Charity');
					$("#deliveryoption").hide();
					// $(this).prop("checked", returnVal);
					var forraffle = $("#forrafflecount").val();
					$("#forraffle").html(forraffle * 2);
				} else {
					// var returnVal = confirm("Are you sure?");
					$("#deliveryoption").show();
					$("#option1").hide();
					$("#donatetocharity").val('');
					$("#donatetocharityxt").hide();
					// $(this).prop("unchecked", returnVal);
					var forraffle = $("#forrafflecount").val();
					$("#forraffle").html(forraffle);
				}
			});
</script>

</html>