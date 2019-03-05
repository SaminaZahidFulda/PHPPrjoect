<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sale_controller extends CI_Controller {

    public function __construct(){
		parent::__construct();
	   $this->load->model('general_model');
            $this->general_model->check_admin();
	   $this->load->model('Sale_model');
           $this->load->library('cart');
       }
	public function index()
	{
                  $data['sale'] =$this->Sale_model->getsale();
           $this->load->view('Sale/ListSale',$data);
		
	}
	public function generateInvoice($id)
	{
                  $data['invoice'] =$this->Sale_model->generateinvoice($id);
                 // echo '<pre>';
                 // print_r($data['invoice']);
                 // exit;
           $this->load->view('Sale/invoice',$data);
		
	}
	public function Add()
	{
           $row = $this->db->where('product_id', $this->input->post('item'))->where('Store_id', $this->session->userdata('store_id'))->get('add_product')->row();
         
            if($row){
                $item = array(
                    'id' => $row->product_id,
                    'name' =>$row->product_itemname,
                    'price' =>$row->product_saleprice,
                    'qty' =>1,
                    'options' =>array('Color' =>$row->color_name,'Category'=>$row->category_name
                            ,'image'=>$row->product_image,'article #'=>$row->product_article)
                );
            
                echo    $this->cart->insert($item);
                
            }
            
        $this->load->view('Sale/Addsale');
		
	}
       
      
    public function item_search() {
       
        $result = $this->Sale_model->item_search($this->input->get('term'));
       
        foreach ($result as $row) {
            $items[] = array(
                'label' => $row->product_itemname,
                'value' => $row->product_id
            );
        }
        echo json_encode($items);
    }
     
    
    public function detail($id) {
        
        $data['item'] = $this->Sale_model->getdetail($id);
        
       $this->load->view('Sale/detailsale',$data);
    }
    
    
   public function deleteCart($id) {
        $this->cart->update(array('rowid'=>$id, 'qty'=>0));
        $this->load->view('Sale/Addsale');
    } 
    
    public function destroycart() {
        $this->cart->destroy();
        $this->load->view('Sale/Addsale');
    }
    
    public function AddSaledata(){
      
       $data['items']= $this->input->post('b');
       if(empty($data['items'])){
           
          $this->load->view('Sale/Addsale'); 
       }
       else{
       $bool =$this->Sale_model->addsale($data);
         $itemid =$this->input->post('item_id');
        $itemid1 =$this->input->post('item_unit_price');
         $itemid3 =$this->input->post('item_quantity');
         $itemid2 =$this->input->post('item_total_price');
         $itemid4 =$this->input->post('sale_time');
          $i =$data['items']['Store_id'];
        
         foreach ($itemid1 AS $key => $val){
                $data['item']= array('Store_id'=>$i,'sale_id'=>$bool,'item_id'=>$itemid[$key],'item_unit_price'=>$itemid1[$key],
                    'item_quantity'=>$itemid3[$key],'item_total_price'=>$itemid2[$key],'sale_time'=>$itemid4);
           $bool1 =$this->Sale_model->addsaleitems($data);
       if($bool1>0 ){
           echo "saved";
          
       }
                }
      if($bool>0 && $bool1>0 ){
           echo "saved";
           exit;
       }
       
    }}
}


