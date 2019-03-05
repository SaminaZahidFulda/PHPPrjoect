<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Generate Barcodes</title>
        <script src="<?php echo base_url()?>js/jquery.js"></script>
        <script>
        $(document).ready(function(){
//           window.print(); 
        });
        </script>
    </head>
    <style type="text/css">
        .body {
            width:4cm;
            height:3cm;
        }
        .print {
            width:4cm;
            height:3cm;
            margin:auto;
            margin-top:1px;
        }
    </style>
    <body style="margin: 0; font-family:calibri; font-size:10pt">
        <div class="print">
            <table width='50%' align='center' cellpadding='20'>
                <tr>
                    <?php
                        $barcode = $item['id'];
                        $text = $item['pname'];
                        $controller = base_url().'Product_controller';
                        $style = 'text-align:center;font-size: 9pt;page-break-after: always; margin-top: -2px;text-transform: uppercase;line-height: 10px;';
                        echo "<div style='text-align:center;'>Malik Silk Emporium<br>
		   <img src='$controller/barcode?barcode=$barcode&scale=$scale' /> </div>
		  <div style='$style'> $text </div>";
                    ?>
                </tr>
            </table>
        </div>
    </body>
</html>