<?php

require_once(APPPATH . 'libraries/barcode/BCGFontFile.php');
require_once(APPPATH . 'libraries/barcode/BCGColor.php');
require_once(APPPATH . 'libraries/barcode/BCGDrawing.php');
require_once(APPPATH . "libraries/barcode/BCGcode128.barcode.php");

class Product_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('general_model');
         $this->general_model->check_admin();
        $this->load->model('Product_model');
    }

    
    public function index() {
        $result = array();
        $data['products'] = $this->Product_model->allproducts();
        // $data['cash']=$this->Product_model->allrecordcash();
        $this->load->view('products/allproducts', $data);
    }

    
   
    
    public function showgallery() {
        $data['images'] = $this->Product_model->allimages();

        $this->load->view('products/gallery', $data);
    }
    
    public function generate_barcode($id) {
        $row = $this->db->where('product_id', $id)->get('add_product')->row();
        $product_id = str_pad((int) $row->product_id, 11, "0", STR_PAD_LEFT);
        $data['item'] = array('pname' => $row->product_itemname . '<br>Rs ' . $row->product_saleprice, 'id' => $product_id);
        $data['scale'] = 1;
        $this->load->view('generate_barcode', $data);
    }
    
    public function barcode() {
        $text = $this->input->get('text');
        $barcode = $this->input->get('barcode');
        $scale = $this->input->get('scale') ? $this->input->get('scale') : 1;
        $thickness = $this->input->get('thickness') ? $this->input->get('thickness') : 30;

        $font = new BCGFontFile(APPPATH . 'libraries/barcode/font/calibrib.ttf', 14);
        $color_black = new BCGColor(0, 0, 0);
        $color_white = new BCGColor(255, 255, 255);

        // Barcode Part
        $code = new BCGcode128();
        $code->setScale($scale);
        $code->setThickness($thickness);
        $code->setForegroundColor($color_black);
        $code->setBackgroundColor($color_white);
        $code->setFont($font);
        $code->setLabel($text);
        $code->parse($barcode);

        // Drawing Part
        $drawing = new BCGDrawing('', $color_white);
        $drawing->setBarcode($code);
        $drawing->draw();
        header('Content-Type: image/png');
        $drawing->finish(BCGDrawing::IMG_FORMAT_PNG);
    }

}
