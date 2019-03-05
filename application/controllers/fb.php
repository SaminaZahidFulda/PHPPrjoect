<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fb extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	
    public function __construct() {
       parent::__construct();
	   $this->load->library('facebook',array('appId'=>'1248023905208548','secret'=>'629f1c08518bcb245f00c6be910788de'));
		 $this->load->helper(array('url','html')); // load url and html hlpers
   
	 }
	public function index()
	{
		
		   $user= $this->facebook->getUser();
		  if($user==0){
			 $login= $this->facebook->getLoginUrl(array(
			 'scope' =>'user_friends,manage_pages,publish_actions,user_managed_groups')
			 );
			 echo "<a href='$login' >Login with facebook</a>";
			 exit();
		  }
		  else
		  {
			  echo "you are logged in ";
			   $this->facebook->setExtendedAccessToken();
                           $access_token = $this->facebook->getAccessToken();
                  $pages=   $this->facebook->api('me/accounts', 'GET', array(
               'access_token' => $access_token));
			   
			   $groups= $this->facebook->api('me/groups');
			  // echo '<pre>';
			  // print_r($groups);
			   try {
		             $id= $pages['data'][0]['id'];
					 $token =$pages['data'][0]['access_token'];
					 echo $token;
		  $api= $this->facebook->api($id.'/feed','POST',  
		  array('access_token'=> $token ,'link'=> 'https://www.facebook.com/ubqari/?fref=ts','message'=>'myyyyyyyyyyyy Pic',
		  'picture'       =>  base_url().'/uploads/spildecor.jpg'));
		    $publish = $this->facebook->api('/'.$id.'/feed', 'POST',
            array('access_token' => $token,
            'message'=> 'ergffteygfweh',
            
            'link' => 'http://www.example.com/',
            'picture' => 'http://www.phpgang.com/wp-content/themes/PHPGang_v2/img/logo.png',
            'description' => ' via demo.PHPGang.com'
            ));
                 
                 
                 $publish = $this->facebook->api('/'.$id.'/feed', 'post',
            array('access_token' => $token,
            'message'=> 'Testing',
            'from' => $config['App_ID'],
            'to' => $id,
            'caption' => 'PHP Gang',
            'name' => 'PHP Gang',
            'link' => 'http://www.phpgang.com/',
            'picture' => 'http://www.phpgang.com/wp-content/themes/PHPGang_v2/img/logo.png',
            'description' => 'Testing with PHPGang.com Demo'
            ));
		 // $api= $this->facebook->api('me/feed','POST',array('link'=> 'google.com','message'=>'Search'));
		
		  }
		   
    catch (FacebookApiException $e) {
       $result = $e->getResult();
       echo '<pre>';
       print_r($result);
       exit;
            
    }
		  
		$this->load->view('index');
		
		  }}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */