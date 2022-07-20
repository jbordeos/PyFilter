<style>

.img-top{
	width: 25%;
    position: absolute;   
    right: 0px;
    top: -40px;	
    left: 10px;	
	
}
.circle-badge {
  height: 200px;
  width: 200px;
  line-height:100px;
  text-align: center;
  border-radius: 50px;
  background: #1ACAC0;
  color:white;
  margin-left:auto;
  margin-right:auto;
  	-moz-border-radius:50%;
	-webkit-border-radius:50%;
	border:5px solid rgba(255,255,255,.10);
}

.car-carousel{
	 background-color: #fff;	
}
.progres-bar{	
	width:100%;	
	height: auto;
}
.red-bar{
	background-color:#ed1c24;
	height:25px;
}
.yellow-bar{
	background-color:#fdb819;
	height:14px;
}
.progress-bar-green{
	background-color:#00a651;
	height:24px;
}
.gray-bar{
	background-color:#e6e7e8;
	height:14px;
}
</style>    
	<?php foreach($product as $row => $val){ 
						$prodid =  $val->productID;
								
	?>
        <div class="sp-area">
		
            <div class="container-fluid" >
                <div class="sp-nav">
				 <div class="row justify-content-center">
				
				 
				 <div class="col-lg-10" >
				 
                    <div class="row">
						<div class="col-lg-12" > 
							<div style="margin-top:-30px;color:#000;font-size:16px;"> MARINE LISTING > <?php echo $val->souqmarine_category;?> > <?php echo $val->productname;?> </div>
						</div>
						<div class="col-lg-6" >
                                <div class="sp-img_area">
                                <div class="sp-img_slider slick-img-slider ">
									<div class="single-slide  ">
										<div class="fotorama" data-width="700" data-ratio="3/2" data-nav="thumbs" data-thumbheight="48">
										<a href="<?php echo base_url();?>assets/product/<?php echo $val->productimg;?>"> <img src="<?php echo base_url();?>assets/product/<?php echo $val->productimg;?>" ></a>
										<?php $test =  json_decode($val->productimgmore,true);
											  foreach($test as $trow =>  $tval){
												$useragent=$_SERVER['HTTP_USER_AGENT'];
												if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
										?> 
										<a href="<?php echo base_url();?>assets/product/<?php echo $tval;?>"> <img src="<?php echo base_url();?>assets/product/<?php echo $tval;?>" ></a>
										<?php } else { ?>
										<a href="<?php echo base_url();?>assets/product/<?php echo $tval;?>"> <img src="<?php echo base_url();?>assets/product/<?php echo $tval;?>" ></a>
										<?php } ?>
									
									 <?php } ?>
									 </div>
									</div>
                            </div> 
                            </div>
                       </div>
                        <div class="col-lg-6">
                            <div class="sp-content">
									<?php
											$useragent=$_SERVER['HTTP_USER_AGENT'];
											if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
									?> 
									<h5><?php echo $val->souqmarine_category;?></h5>
										<?php } else { ?>
										<div class="color-list_heading">
										   <h4><?php echo $val->souqmarine_category;?>   <font color="black" size="5px">  <small> | <strong><?php if($val->regprice ==0){ echo 'Ask for Price';} else{ echo number_format($val->regprice,2) .' AED';}?></font> &nbsp; &nbsp; <font color="black" size="3px">  <i class="ion-android-checkmark-circle"></i> Marine Listing  </font></strong></small> </h4>
										</div>
										
										<?php }
											$useragent=$_SERVER['HTTP_USER_AGENT'];
											if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4))) {
										?>
										<div class="quantity">
											<button type="button" class="btn zoombutton1" data-toggle="modal" data-target="#myModal"> <img src="<?php echo base_url();?>assets/images/img/button1.png" height="45px" width="200px"> </button>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="https://api.whatsapp.com/send?phone=<?php echo $val->cnowner; ?>" data-toggle="tooltip" target="_blank" title="Whatsapp">
                                       <img src="<?php echo base_url();?>assets/images/img/Whatsapp.png">
                                       </a>
									</div>
										<br>
										<strong><font size="4px">DETAILS:</font></strong><hr>
										<center>
										
										<table width="100%">
										<tr>
											<td> <strong><font size="3px"> Posted On</font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px">
											 <?php 
											 $date = new DateTime($val->posteddate);
											 $dd = $date->format('F d , Y');
											 echo $dd;?> 
											 </font></td>
										</tr>
										<tr>
											<td> <strong><font size="3px"> Price </font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php if($val->regprice ==0){ echo 'Ask for Price';} else{ echo number_format($val->regprice,2) .' AED';}?></font> </td>
										</tr>
										<tr>
											<td> <strong><font size="3px"> Age </font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_age);?></font> </td>
										</tr>
										<tr>
											<td> <strong><font size="3px"> Usage </font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->marine_usage);?></font> </td>
										</tr>
										<tr>
											<td> <strong><font size="3px"> Condition </font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_condition);?></font> </td>
										</tr>
										<tr>
											<td> <strong><font size="3px"> Length </font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_length);?></font> </td>
										</tr>
										<tr>
											<td> <strong><font size="3px">Seller Type </font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->sellertype);?></font> </td>
										</tr>
										
										<tr>
											<td> <strong><font size="3px">Warranty</font></strong> </td>
											<td> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_warranty);?></font> </td>
										</tr>
										</table>
									</center>
									<?php } else { ?>
										<div class="quantity" style="margin-left:-10px !important;">
											<button type="button" class="btn zoombutton1" data-toggle="modal" data-target="#myModalmarine"> <img src="<?php echo base_url();?>assets/images/img/button1.png" height="45px" width="220px"> </button>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<a href="https://api.whatsapp.com/send?phone=<?php echo $val->cnowner; ?>" data-toggle="tooltip" target="_blank" title="Whatsapp">
                                       <img src="<?php echo base_url();?>assets/images/img/Whatsapp.png">
                                       </a>
									</div>
										<br>
										<div class="row">
										<div class="col-lg-12">
											
											Date Posted : 
											<font size="2px">
											 <?php 
											 $date = new DateTime($val->posteddate);
											 $dd = $date->format('F d , Y');
											 echo $dd;?> 
											 </font>
										</div>
										</div>
										
										
										</div>
                                   <div class="qty-">
								   <br>
                                   <table width="100%">
										<tr>
											<td colspan=4> <strong><font size="3px"> Posted On</font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px">
											 <?php 
											 $date = new DateTime($val->posteddate);
											 $dd = $date->format('F d , Y');
											 echo $dd;?> 
											 </font></td>
										</tr>
										<tr>
											<td colspan=4 > <strong><font size="3px"> Price </font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->regprice);?></font> </td>
										</tr>
										<tr>
											<td colspan=4 > <strong><font size="3px"> Age </font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_age);?></font> </td>
										</tr>
										<tr>
											<td colspan=4 > <strong><font size="3px"> Usage </font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->marine_usage);?></font> </td>
										</tr>
										<tr>
											<td colspan=4 > <strong><font size="3px"> Condition </font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_condition);?></font> </td>
										</tr>
										<tr>
											<td colspan=4 > <strong><font size="3px"> Length </font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_length);?></font> </td>
										</tr>
										<tr>
											<td colspan=4 > <strong><font size="3px">Seller Type </font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->sellertype);?></font> </td>
										</tr>
										
										<tr>
											<td colspan=4 > <strong><font size="3px">Warranty</font></strong> </td>
											<td> &nbsp; </td>
											<td> &nbsp; </td>
											<td colspan=2> &nbsp; </td>
											<td><font size="3px"><?php echo strtoupper($val->souqmarine_warranty);?></font> </td>
										</tr>
										</table>
									<?php } ?>
									<div class="modal fade" id="myModalmarine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									<div class="modal-center">
									<div class="modal-dialog .modal-align-center">
										<br><br><br><br>
										<div class="modal-content">
											<div class="modal-header">
												<h6 class="modal-title" id="myModalLabel">CONTACT DETAILS</h6>
												<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
												</button>
											</div>
											<div class="modal-body">
											<font size="3px">
											Name    : <?php echo $val->fnowner .' '. $val->lnowner; ?> <br>
											Contact : <?php echo $val->cnowner; ?><br>
											Email   : <?php echo $val->emailowner; ?>
											</font>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								</div>
									<br><hr>
									DESCRIPTION : <p>
													<?php echo $val->description;?>
												</p>
									</div>
							
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>

		
			<?php } ?>

		<br>
		<br>
		<br>
