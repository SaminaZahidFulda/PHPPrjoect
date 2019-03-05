<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class purchase_model extends CI_Model {

        public function getcategorysupplierFinish(){
            
                $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `supplier_type` = 'Finished Material' && `category_sp`.deleted = 0");
    //$rs = $this->db->select('category_name')->from('category_sp')->join('mse_supplier', 'mse_supplier.supplier_id = category_sp.supplier_id')->where(array('supplier_type'=>'Finish Material'));
             // echo $this->db->last_query();
               return $rs->result();
       }
       public function addproduct($data){
		$rs = $this->db->insert('add_product', $data['add_product']);
                return $this->db->affected_rows()>0? true:false;
            
	}
        public function getcategorysupplierFinish1($supplierid){
            
                $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `mse_supplier`.`supplier_id` =".$supplierid);
    //$rs = $this->db->select('category_name')->from('category_sp')->join('mse_supplier', 'mse_supplier.supplier_id = category_sp.supplier_id')->where(array('supplier_type'=>'Finish Material'));
             // echo $this->db->last_query();
               return $rs->result();
       }
         public function getcategorysupplierRAW1($supplierid){
            
                $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `mse_supplier`.`supplier_id` =".$supplierid);
    //$rs = $this->db->select('category_name')->from('category_sp')->join('mse_supplier', 'mse_supplier.supplier_id = category_sp.supplier_id')->where(array('supplier_type'=>'Finish Material'));
             // echo $this->db->last_query();
               return $rs->result();
       }
       public function getcategorysupplierRaw(){
               $rs= $this->db->query("SELECT * FROM (`category_sp`) 
                     JOIN `mse_supplier` ON `mse_supplier`.`supplier_id` = `category_sp`.`supplier_id` WHERE `supplier_type` = 'Raw Material' && `category_sp`.deleted = 0");
                 return $rs->result();
       }
        public function getsupplierFinish(){
               $rs = $this->db->get_where('mse_supplier',array('supplier_type'=>'Finished Material'));
                 return $rs->result();
       }
       public function getsupplierRAW(){
               $rs = $this->db->get_where('mse_supplier',array('supplier_type'=>'Raw Material'));
                 return $rs->result();
       }
       
         public function getpurchases(){
            
                $rs= $this->db->query("SELECT mse_supplier.`supplier_fname`,
finish_purchase.fpurchase_id,finish_purchase.`fpurchase_subtotal`,finish_purchase.`fpurchase_discount`,
purchase_payment.`fpurchase_balance`
,finish_purchase.`fpurchase_dateAdded`
FROM finish_purchase
INNER JOIN mse_supplier ON finish_purchase.`fpurchase_supplierid`=mse_supplier.`supplier_id`
INNER JOIN purchase_payment ON finish_purchase.`fpurchase_id`=purchase_payment.`purchase_id` where finish_purchase.deleted=0 && finish_purchase.Store_id=".$this->session->userdata('store_id'));
               return $rs->result();
       }
        public function getpurchase($id){
            
                $rs= $this->db->query("SELECT mse_supplier.`supplier_fname`,
finish_purchase.`fpurchase_supplierid`,purchase_payment.`fDpurchase_typepaid`,
finish_purchase.`fpurchase_netTotal`,purchase_payment.`fpurchase_pay`,
finish_purchase.fpurchase_id,finish_purchase.`fpurchase_subtotal`,
finish_purchase.`fpurchase_discount`,purchase_payment.`fpurchase_balance`
,finish_purchase.`fpurchase_dateAdded`
FROM finish_purchase
INNER JOIN mse_supplier ON finish_purchase.`fpurchase_supplierid`=mse_supplier.`supplier_id` 
INNER JOIN purchase_payment ON finish_purchase.`fpurchase_id`=purchase_payment.`purchase_id`Where fpurchase_id =".$id );
               return $rs->result();
       }
        public function getpurchase1($id){
            
                $rs= $this->db->query("SELECT mse_supplier.`supplier_fname`,
finish_purchase.`fpurchase_supplierid`,purchase_payment.`fDpurchase_typepaid`,
finish_purchase.`fpurchase_netTotal`,purchase_payment.`fpurchase_pay`,
finish_purchase.fpurchase_id,finish_purchase.`fpurchase_subtotal`,
finish_purchase.`fpurchase_discount`,purchase_payment.`fpurchase_balance`
,finish_purchase.`fpurchase_dateAdded`
FROM finish_purchase
INNER JOIN mse_supplier ON finish_purchase.`fpurchase_supplierid`=mse_supplier.`supplier_id` 
INNER JOIN purchase_payment ON finish_purchase.`fpurchase_id`=purchase_payment.`purchase_id`  Where fpurchase_id =".$id." LIMIT 1");
               return $rs->row();
       }
         public function getpurchasedetail($eid){
            
                $rs= $this->db->query("SELECT category_sp.`category_name`,color_detail.`ColorName`,fpurchase_detail.`fDpurchase_unitprice`,fpurchase_detail.`fDpurchase_saleprice`,
fpurchase_detail.`fDpurchase_quantity`,fpurchase_detail.`fDpurchase_quantity`*fpurchase_detail.`fDpurchase_unitprice` AS totalprice,
fpurchase_detail.`fDpurchase_dateAdded`
FROM fpurchase_detail
INNER JOIN category_sp ON fpurchase_detail.`fDpurchase_catname`=category_sp.`category_id`
INNER JOIN color_detail ON color_detail.`colorid`=fpurchase_detail.`fDpurchase_color` WHERE fDpurchase_purchaseID =".$eid);
               return $rs->result();
       }
	public function Addpurchase($data){
		$rs = $this->db->insert('finish_purchase', $data['purchase_record']);
              $this->db->affected_rows()>0? true:false;
            
             return $this->db->insert_id();
	}
        public function Addpurchasedetail($data){
		$rs = $this->db->insert('fpurchase_detail', $data['purchasedetail_record']);
                return $this->db->affected_rows()>0? true:false;
            
	}
        
        public function addpaymentpurchase($data){
		$rs = $this->db->insert('purchase_payment', $data['paymentadd']);
                return $this->db->affected_rows()>0? true:false;
            
	}
        
        
        public function AddRawpurchase($data){
		$rs = $this->db->insert('raw_purchase', $data['purchaseRaw_record']);
            $this->db->affected_rows()>0? true:false;
            
             return $this->db->insert_id();
	}
        
        
        public function AddpurchaseRawdetail($data){
		$rs = $this->db->insert('rmpurchase_detail', $data['purchaseRawdetail_record']);
              $bool =$this->db->affected_rows()>0? true:false;
             
             return $bool;
	}
        
         public function deletepurchase($id)
	{
		$rs=   $this->db->update('finish_purchase',array('deleted'=>'1'),array('fpurchase_id'=>$id));
                 echo $this->db->last_query();
		$bool= $this->db->affected_rows()>0? true:false;
                return $bool;	
	}
         public function deletepurchasedetail($id)
	{
              $rs=   $this->db->update('fpurchase_detail',array('deleted'=>'1'),array('fDpurchase_purchaseID'=>$id));
		$bool= $this->db->affected_rows()>0? true:false;
                return $bool;	
	}
         public function deletepurchasepayment($id)
	{
              $rs=   $this->db->update('purchase_payment',array('deleted'=>'1'),array('purchase_id'=>$id));
		$bool= $this->db->affected_rows()>0? true:false;
                return $bool;	
	}
       public function singlesupplier($id){
               $rs = $this->db->where('supplier_id',$id)->get('mse_supplier');
                 return $rs->row();
       }
       
       
       public function AddsupplierCategory($data){
               $rs = $this->db->insert('category_sp',$data['supplier_category']);
                 $bool= $this->db->affected_rows()>0? true:false;
             if($bool==1){
                 echo "Savedcategoryy..";
             }
             else 
             {
                 
                 echo "Not Savedcategoryy..";
             }
       }
        
       public function updatesupplier($data,$id){
       $rs=   $this->db->update('mse_supplier', $data, array('supplier_id'=>$id));
		 $bool= $this->db->affected_rows()>0? true:false;
                 if($bool==1){
                     echo "Updated..";
                 }
                 else{ 
                     echo "Not Updated..";
                 }
}


  public function deletesupplier($id)
	{
		 $rs=   $this->db->delete('mse_supplier', array('supplier_id'=>$id));
		$bool= $this->db->affected_rows()>0? true:false;
                 if($bool==1){
                     echo "Deleted..";
                 }
                 else{ 
                     echo "Not Deleted..";
                 }	
	}
        
        
}
