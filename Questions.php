<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questions extends CI_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function quizdisplay()
	{
		$this->load->model('quizmodel');
		$this->data['questions'] = $this->quizmodel->getQuestions();
		$this->load->view('play_quiz', $this->data);
	}
	
		public function resultdisplay()
	{
		$this->data = array(
		     'ques1' => $this->input->post('quizid1'),
		     'ques2' => $this->input->post('quizid2'),
			 'ques3' => $this->input->post('quizid3'),
			 'ques4' => $this->input->post('quizid4'),
		     'ques5' => $this->input->post('quizid5'),
			 /*'ques6' => $this->input->post('quizid6'),
			 'ques7' => $this->input->post('quizid7'),
			 'ques8' => $this->input->post('quizid8'),
		    // 'ques9' => $this->input->post('quizid9'),*/
			 //'ques10' => $this->input->post('quizid10'),
		);
		$total = 0;
if($this->data['ques1'] == "D")
{
	$total++;
}
if($this->data['ques2']== "D")
{
	$total++;

}
if($this->data['ques3']== "A")
{
	$total++;

}
if($this->data['ques3']== "B")
{
	$total++;
	
}
if($this->data['ques3']== "B")
{
	$total++;
	
}
       /* $this->load->model('quizmodel');
		$this->data['results'] = $this->quizmodel->getQuestions();
		$this->load->view('result_display', $this->data);*/
		$data['result']=$total;
$this->load->view('ans2',$data);
	}
}

