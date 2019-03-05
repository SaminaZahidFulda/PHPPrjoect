<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Invoice # <?php echo $invoice[0]->sale_id;?> </title>
<script type="text/javascript" language="javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function(){
	//window.print();
});
</script>
<style>
table .basket-bg {
    position: relative;
}
.basket-bg::after {
    content: "";
    background:url(<?php echo base_url(); ?>uploads/bannerPics/1936314_916055855175246_7006325570828397388_n.jpg) center no-repeat;
    opacity: 0.25; 
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
    z-index: -1;
}
.basket th{
    border-right:1px solid #CCC;
    background:#000;
    height:35px;
    color:#FFF;
}
.basket th:last-child{
    border-right:1px solid #000 !important;
}
.basket td{
    border-right:1px solid #CCC;
    border-bottom:1px solid #CCC;
    padding:3px 0;
    text-align:center;
}
.basket td:first-child{
    border-left:1px solid #CCC;
}
.basket .btn_row{
    padding-top:15px;
    border:none;
    border-left:none !important;
}
.basket td:nth-child(3){
    text-align:left;
    padding-left:15px;
}
td.cotton, td.pure_silk{
    text-align:left !important;
    font-size:13.5px;
    padding-left:3px;
}
td.cotton{
    border-bottom:none !important;
    padding-bottom:8px;
}
td.cotton span, td.pure_silk span{
    margin-right:2px;
    padding:2px;
    background:#000;
    color:#FFF;
    display:inline-block;
    width:65px;
    font-weight:bold;
}
td.pure_silk img{
        float:right;
        margin-right:15px;
        margin-top:-6px;
}
td.complain{
    text-align:left !important;
}
td.complain span{
    margin-left:3px;
    display:inline-block;
}
td.complain .phone{
    width:275px !important;
}
td.complain .manager{
    margin-right:25px;
}
tr.no_border td{
    border:none !important;
    text-align:left !important;	
    padding-left:4px !important;
}
.logo{
    background:url(<?php echo base_url(); ?>images/invoice_logo.jpg);
    height:83px;
}
.logo .owner_name{
    display:inline-block;
    position:relative;
    top:25px;
    right:5px;
    float:right;
}
</style>
</head>
<body>
<table cellpadding="0" cellspacing="0" border="0" class="basket">
    <tr>
        <td colspan="4" style="padding-bottom:10px; border-left:none; border-right:none;">
        	<div class="logo"><span class="owner_name"><?php echo $invoice[0]->store_Ownername.' '.$invoice[0]->store_phone; ?></span></div>
            <div style="margin-top:-12px; text-align:right; margin-right:4px;"><?php echo $invoice[0]->store_shopAddress; ?> Tel:<?php echo $invoice[0]->store_phone; ?></div>
        </td>
    </tr>
    <tr>
        <td colspan="4" style="font-size:14.8px; text-align:left !important; padding-left:4px;"><?php echo $invoice[0]->store_description; ?></td>
    </tr>
    <tr class="no_border">
        <td colspan="3">Messrs: <?php echo ucwords($invoice[0]->customer_name); ?></td>
        <td>No: <?php echo $invoice[0]->sale_id; ?></td>
    </tr>
    <tr class="no_border">
        <td style="padding-bottom:10px;" colspan="3">Cell/Tel: <?php echo $invoice[0]->customer_phone; ?></td>
        <td style="padding-bottom:10px;" width="300">Date: <?php echo $invoice[0]->sale_time; ?></td>
    </tr>
    <tr>
        <th width="250">AMOUNT</th>
        <th width="160">RATE</th>
        <th width="500">PARTICULARS</th>
        <th width="70">QTY</th>
    </tr>
    <tbody class="basket-bg">
	<?php foreach($invoice as $key=>$value){ ?>
    <tr>
        <td><?php echo $value->item_unit_price;?></td>
        <td><?php echo $value->item_unit_price;?></td>
        <td><?php echo $value->product_itemname;?></td>
        <td><?php echo $value->item_quantity;?></td>
    </tr>
	<?php
		$key++;
	}
	$remaining_rows = 16-$key;
	if($remaining_rows>0){
		for($i=1; $i<=$remaining_rows; $i++){
	?>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <?php
		}
	}
	?>
	</tbody>
    <tr>
        <td colspan="4" style="text-align:left !important; padding-left:4px;">
        <strong>Total:</strong> <?php echo $invoice[0]->sale_amount;?> &nbsp; &nbsp; &nbsp; &nbsp;
        <strong>Discount:</strong> <?php echo $invoice[0]->sale_discount;?> &nbsp; &nbsp; &nbsp; &nbsp;
        <strong>Amount:</strong> <?php echo $invoice[0]->sale_amount - $invoice[0]->sale_discount;?> &nbsp; &nbsp; &nbsp; &nbsp;
        <strong>Receive:</strong> <?php echo $invoice[0]->recieved_amount;?> &nbsp; &nbsp; &nbsp; &nbsp;
        </td>
    </tr>
    <tr>
        <td colspan="4" class="cotton">
            <span>Cotton</span> <?php echo $invoice[0]->store_CottonCaution; ?>
        </td>
    </tr>
    <tr>
        <td colspan="4" class="pure_silk">
            <div style="float:left;"><span>Pure Silk</span><?php echo $invoice[0]->store_silkcaution; ?></div>
            &nbsp; <img src="/assets/img/guarantee.jpg" />
        </td>
    </tr>
    <tr>
        <td colspan="4" class="complain">
        <span class="phone">Complain if any: 1023</span>
   </tr>
    <tr>
        <td colspan="2">Catch us on facebook www.facebook.com/maliksilk</td>
        <td colspan="2">Whatsapp, viber, imo, instagram: 000</td>
    </tr>
    <tr>
        <td colspan="4" class="btn_row">
            <div style="font-size:12px;">Powered by www.SaminaZahid.com</div>
        </td>
    </tr>
</table>
</body>
</html>