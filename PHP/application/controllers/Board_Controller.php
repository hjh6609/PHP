<?php
    class Board_Controller extends CI_Controller{

        function Board_Controller()
        {
            parent::__construct();
        }
        //디폴트 호출자
        function index(){
            //Model Load
            $this->load->database();
            $this->load->model('Board_model');
            //$data['total_rows']= $this->Board_model->All();
            $data= $this->Board_model->CountAll();
            //foreach($data as $test)
            //{
            //    print_r($test);
            //}
            //return;    
            //view load  --/application/views/Board_view/ListView.php
            //$this->load->view('Board_view/ListView',$data);
            $this->load->view('Board_view/ListView',array('Dataa'=>$data));
        }

        //쓰기화면
        function write(){
            //echo "888888";
            //return;
            $this->load->view('Board_view/WriteView');
        }

        function writepost(){
            $this->load->database();
            $this->load->model('Board_model');
            $data['result'] = $this->Board_model->WritePost();
            
            if($data['result'] == 1)
            {
                //echo "666";
                echo "<script>alert('Thank you'); location.href='./';</script>";
            }
        }

        //$this->media_model->media_contract_list($config['per_page']);

        //글보기화면
        function Detaile($Nseq){
            //echo $Nseq; return;
            $this->load->database();
            $this->load->model('Board_model');
            $data=$this->Board_model->Detail_model($Nseq);
            //foreach($data as $test)
            //{
            //    print_r($test->Nname);
            //}
            //return;
            //$this->load->view('Board_view/Detaile',$data);
            $this->load->view('Board_view/Detaile',array('dtdt'=>$data));
        }

        function Delete($Nseq){
            //echo $Nseq;
            $this->load->database();
            $this->load->model('Board_model');
            $data=$this->Board_model->Delete_model($Nseq);

            //echo $data;
            //return;

             if($data == 1)
            {
                //echo "666";
                echo "<script>alert('Success.'); location.href='/index.php/board_controller';</script>";
            }
        }

        function UpdatePost($Nseq){
            //$this->load->database();
            //$this->load->model('Board_model');
            //$data=$this->Board_model->UpdatePost_model($Nseq);
            $this->load->view('Board_view/UpdatePost_view',array('Nseq'=>$Nseq));
        }
    }

?>