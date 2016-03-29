<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Topic extends CI_Controller {
    
    function index(){
        //echo "dddd";
        $this->load->database();
        $this->load->model('topic_model');
        $data['Nseq']= $this->topic_model->gets();
        foreach($data as $test)
        {
            print_r($test);
        }
        $this->load->view('head');
        $this->load->view('main',array('topics'=>$data));
        $this->load->view('footer');
    }
    
    function get($id){
       $this->load->database();
       $this->load->model('topic_model');
       $topic= $this->topic_model->get($id);
       $this->load->view('head');
       $data = array('id'=>$id);
       $this->load->view('head');
       $this->load->view('main',array('topic'=>$topic));
       $this->load->view('footer');
    }
}
?>