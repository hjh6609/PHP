<?php
Class Board_model extends CI_Model{
    //생성자
    public function Board_model() 
    {
        //echo "test";
        parent::__construct();
    }
    //전체 게시물 건수
    function CountAll(){
        //echo "ddd";
        //return $this->db->count_all('dbnm');
        return $this->db->query('SELECT * FROM dbnm')->result();
    }
   
    //전체 게시물에서 몇번째부터 몇개(페이지당 표시개수) 가져오기
    function GetLimit($tlimit,$toffset){
        $query= $this->db->get('dbnm',$tlimit,$toffset);
        if($query->num_rows()>0)
            return $query->result();
        else
            return FALSE;

    }
    //입력 post 등록하기
    function WritePost(){
        date_default_timezone_set('Asia/Seoul');
        $this->Ntitle= $_POST['txtTitle'];
        $this->Nname= $_POST['txtNm'];
        $this->Ncontent= $_POST['txtCon'];
        //$this->Ndate= 'sysdate()';
        $this->Ndate= date("Y-m-d H:i:s",time());

        return $this->db->insert('dbnm', $this);
    }

    function Detail_model($Nseq){
        //echo "111"; return;
        //echo $Nseq; return;
        //$maWhere = " AND media_agency = '".$Nseq."'";
        $sql="SELECT * FROM dbnm WHERE Nseq= '".$Nseq."'";
        //$this->db->query($sql)->result();
        return $data= $this->db->query($sql)->result(); 
        //foreach($data as $test)
        //{
        //    var_dump($test->Nname);
        //}
        //return;
    }

    function Delete_model($Nseq){
        //echo $Nseq;
        //$sql="DELETE FROM dbnm WHERE Nseq= '".$Nseq."'";
        //echo "ddd";
        //echo $data= $this->db->query($sql)->result(); 
        //return $data= $this->db->query($sql)->result(); 

        //return $data = $this->db->delete('dbnm', $Nseq);
        //return $result;
        //echo $data;


        $this->db->where('Nseq', $Nseq);
        return $data= $this->db->delete('dbnm'); 
    }

    function UpdatePost_model($Nseq){
        
    }
}
?>