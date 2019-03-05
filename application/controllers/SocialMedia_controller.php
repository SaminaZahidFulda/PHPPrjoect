<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class SocialMedia_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->general_model->check_admin();
        $this->load->library('facebook');
        $this->load->model('SocialMedia_model');
        $this->load->model('general_model');
    }

    public function index() {

        // $data['users']=$this->dbusers_model->allUsers();
        $this->load->view('SocialMedia\uploadPost');
        // $this->load->view('myform');
    }

    public function uploadPost() {
        echo '<pre>';
        print_r($_FILES);
 $file = $_FILES['product_image']['name'];
        if(empty($_FILES))
        {
    $this->load->view('uploadPost');
        }
        else
        {
        $user = $this->facebook->getUser();
        if ($user == 0) {
            $login = $this->facebook->getLoginUrl(array(
                'scope' => '  user_photos,publish_actions')
            );
            echo "<a href='$login' >Login with facebook</a>";
            exit();
        } else {
            if (is_null($this->facebook->getUser())) {
                $params = array('scope' => 'user_photos,publish_actions');
                $my = $this->facebook->getLoginUrl($params);
                echo '<pre>';
                print_r($permissions);
                exit;
            }
            echo "you are logged in123232222323 ";
            $permissions = $this->facebook->api('me/permissions');
            echo '<pre>';
            print_r($permissions);
            
  $this->facebook->setFileUploadSupport(true);
            $this->facebook->setExtendedAccessToken();
            $access_token = $this->facebook->getAccessToken();
            $pages = $this->facebook->api('me/accounts', 'GET', array(
                'access_token' => $access_token));
            echo '<pre>';
            print_r($pages);
            $groups = $this->facebook->api('me/groups');
            // echo '<pre>';
            // print_r($groups);
            $id = $pages['data'][0]['id'];

                 $api = $this->facebook->api($id.'/feed', 'POST', array('link' => 'google.com', 'message' => 'Search'));
  
            try {
                $id = $pages['data'][0]['id'];

                $token = $pages['data'][0]['access_token'];
                echo $token;


              
                $publish = $this->facebook->api($id . '/photos', 'post', array(
                    'message' => 'edbashdbsdsdbsbbbbbbbbbbbbbbbbbbb',
                    'caption' => 'PHP Gang',
                    'source'=> '@' . base_url() . 'uploads/spildecor.jpg'
                 //   'url' => base_url() . 'uploads/spildecor.jpg',
                ));
           } catch (FacebookApiException $e) {
                $result = $e->getResult();
                echo '<pre>';
                print_r($result);
                exit;
            }

            $this->load->view('index');
        }

        // if(empty($Post)){
        //  $this->load->view('Personnal\myform');
        //       
    }

}}