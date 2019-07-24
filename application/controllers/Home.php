<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

 public function __construct() {

    parent::__construct();

 $this->load->helper('url','form');
  $this->load->model('Login_Model');
  $this->load->library('session','form_validation');
  }

	public function index()
	{
		$this->load->view('Home');
	}
	
		public function home()
	{
		echo "Hiiii";
	}
	
	public function login()
	{
		$data = $this->input->post();
		//print_r($data);
		$res=$this->Login_Model->login_select('login','*','',$data);
		
		if($res)
		{
				
			$this->session->set_userdata('un',1);
			echo "1";
		}
		else
		{
			echo "0";
		}	
	}
	
	public function Dash()
	{
		$session=$this->session->userdata('un');	
			if(!$session)
			{
				redirect('/');
			}
		else
		{	
		
	$this->load->view('dashboard');
	}
}
public function Book_stock_manage()
	{
	$this->load->view('Book_stock_manage');
	}



public function Book_Issue_Submit()
	{
	$this->load->view('Book_Issue_Submit');
	}


public function add_book()
	{
	$authors=$this->Login_Model->login_select("authors","*");	
	$publisher=$this->Login_Model->login_select("publisher","*");

$data['authors']=$authors;
$data['publisher']=$publisher;

$this->load->view('add_book',$data);	

	}
	
public function book()
	{
		
		$this->form_validation->set_rules('book_name', 'Book Name', 'required');
		$this->form_validation->set_rules('price', 'Price', 'required');
		
if ($this->form_validation->run())
                {
		$data=$this->input->post();
		unset($data['add']);
		$res=$this->Login_Model->dataops('book','insert',$data);
	
	if($res)
	{
			$this->session->set_flashdata("msg","1");
			redirect('home/add_book');
	}
	else
		{
			$this->session->set_flashdata("msg","0");
			redirect('home/add_book');
		}
		}
else
	{
		$authors=$this->Login_Model->login_select("authors","*");	
	$publisher=$this->Login_Model->login_select("publisher","*");

$data['authors']=$authors;
$data['publisher']=$publisher;
	 $this->load->view('add_book',$data); 
	}	
}	
	
public function book_list()
	{
	$data=$this->Login_Model->login_select('book','*');			
	$this->load->view('book_list',['data'=>$data]);
	
	}
	
	
	public function add_publisher()
	{
	$up=$this->Login_Model->login_select('publisher','*');	
	$this->load->view('add_publisher',['up'=>$up]);
	}
	
	public function publisher()
	{
	
	$this->form_validation->set_rules('pub_name', 'Publisher Name', 'required');
	 if ($this->form_validation->run())
                {
				 $data=$this->input->post();
						unset($data['submit']);
						$res=$this->Login_Model->dataops('publisher','insert',$data);
                if($res)
				{
					$this->session->set_flashdata('msg','1');
					 //$this->load->view('add_author');
					 redirect('home/add_publisher');
				}
				else
				{
					
					  redirect('home/add_publisher');
				}
                   
                }
                else
                {
                       redirect('home/add_publisher');
					 //$this->load->view('add_author');
				
				
				}
	
	
	}
	
	public function del_publisher($id)
{
	
	$delete = $this->Login_Model->dataops("publisher","delete","",array('pub_id'=>$id));
	if($delete)
		{
				
			$this->session->set_flashdata('msg','debug');
		redirect('home/add_publisher');
		}
		else
		{
			redirect('home/add_publisher');
		}	
	
}
	
	public function update_publisher($id)
{
	
$up1 = $this->Login_Model->login_select("publisher","*","",array('pub_id'=>$id));
$up= $this->Login_Model->login_select("publisher","*");
$data['up1']=$up1;
$data['up']=$up;

$this->load->view('add_publisher',$data);
}


public function update_publisher1()
{
$data=$this->input->post();
$id=$this->input->post('id');

unset($data['id']);
unset($data['udate']);

$res=$this->Login_Model->dataops("publisher","update",$data,array('pub_id'=>$id));
if($res)
{
	$this->session->set_flashdata("msg","update");
	redirect('home/add_publisher');
}
else
{
	redirect('home/add_publisher');
}

}
	
	
	
	
	public function add_author()
	{
		$up=$this->Login_Model->login_select('authors','*');	
	$this->load->view('add_author',['up'=>$up]);
	}

public function author()
	{

	$this->form_validation->set_rules('author_name', 'AUTHOR NAME', 'required');
	 if ($this->form_validation->run())
                {
				 $data=$this->input->post();
						unset($data['submit']);
						$res=$this->Login_Model->dataops('authors','insert',$data);
                if($res)
				{
					$this->session->set_flashdata('msg','1');
					 //$this->load->view('add_author');
					 redirect('home/add_author');
				}
				else
				{
					
					  redirect('home/add_author');
				}
                   
                }
                else
                {
                       redirect('home/add_author');
					 //$this->load->view('add_author');
				
				
				}
	
	}

public function del_author($id)
{
	
	$delete = $this->Login_Model->dataops("authors","delete","",array('id'=>$id));
	if($delete)
		{
				
			$this->session->set_flashdata('msg','debug');
		redirect('home/add_author');
		}
		else
		{
			redirect('home/add_author');
		}	
	
}

public function update_author($id)
{
	
$up1 = $this->Login_Model->login_select("authors","*","",array('id'=>$id));
$up= $this->Login_Model->login_select("authors","*");
$data['up1']=$up1;
$data['up']=$up;

$this->load->view('add_author',$data);
}


public function update_author1()
{
	$data=$this->input->post();
	$id=$this->input->post('id');
	unset($data['id']);
	unset($data['udate']);

	$res=$this->Login_Model->dataops("authors","update",$data,array('id'=>$id));
	if($res)
	{
	$this->session->set_flashdata("msg","update");
	redirect('home/add_author');
	}
	else
	{
	redirect('home/add_author');
	}

}
	
public function issue_book_list()
{	
	$data=$this->Login_Model->login_select("issue_book","*");
	$this->load->view('issue_book_list',['data'=>$data]);
}

public function sub_book($id)
	{
		$data=$this->Login_Model->login_select("issue_book",array('name','book_name','email'),'',array('id'=>$id));
		$res1=$this->Login_Model->dataops('issue_book','delete','',array('id'=>$id));
		$res=$this->Login_Model->dataops('submit','insert',$data[0]);
		if($res)
	{
	$this->session->set_flashdata("msg1","Book Submitted successfully");
	redirect('home/issue_book_list');
	}
	else
	{
	$this->session->set_flashdata("msg1","Book Not Submitted");
	redirect('home/issue_book_list');
	}
		
		
	//$this->load->view('sub_book');
	}


public function submit_book_list()
	{
		$sub_book=$this->Login_Model->login_select("submit","*","","");
	$this->load->view('submit_book_list',['sub_book'=>$sub_book]);
	}


public function member_manage()
	{
	$this->load->view('member_manage');
	}

public function member_list()
	{
	$data=$this->Login_Model->login_select("members","*");
	$this->load->view('member_list',['data'=>$data]);
	}
	
public function product_filter()
{
	$data= $this->input->post();
	$mem_id= $this->input->post('mem_id');
	unset($data['AUTHOR']);
	$res=$this->Login_Model->login_select("members","*","",array('mem_id'=>$mem_id));
	 if($res)
				{
					$book=$this->Login_Model->login_select("book","book_name");
					$this->load->view('Book_Issue_Submit',['res'=>$res,'book'=>$book]);
					 //$this->load->view('add_author');
					
				}
				else
				{
					$this->session->set_flashdata('msg1','User Not Found');
					  redirect('home/Book_Issue_Submit');
				}
}

public function issue_book()
{
			$data=$this->input->post();
			unset($data['button']);
			$userid=$this->input->post('userid');
			$book_name=$this->input->post('book_name');
			
			$check = $this->Login_Model->login_select('issue_book','*','',array('userid'=>$userid,'book_name'=>$book_name));
			$check2 = $this->Login_Model->login_select('issue_book','*','',array('userid'=>$userid));
			if($check)
				{
					$this->session->set_flashdata('msg1','Book Already Issued To Member');
					  redirect('home/Book_Issue_Submit');
				}
				else if(sizeof($check2)>=2)
					{
					$this->session->set_flashdata('msg1','2 Books Already Issued To Member');
					  redirect('home/Book_Issue_Submit');	
					}
					
				else
					{
						$res=$this->Login_Model->dataops('issue_book','insert',$data);
						if($res)
						{
						$this->session->set_flashdata('msg1','Book Issued');
						redirect('home/Book_Issue_Submit');
						}
						else
						{
						$this->session->set_flashdata('msg1','Book Not Issued');
						redirect('home/Book_Issue_Submit');
					  
						}
					}
}	



public function member_add()
	{
$this->form_validation->set_rules('mem_name', 'Member Name', 'required');
$this->form_validation->set_rules('mem_Address', 'Member Address', 'required');
$this->form_validation->set_rules('mem_email', 'Member Email', 'required');
$this->form_validation->set_rules('mem_phone', 'Member Phone No.', 'required');

 if ($this->form_validation->run())
                {
				 $data=$this->input->post();
				
				 
						unset($data['button']);
						$res=$this->Login_Model->dataops('members','insert',$data);
                if($res)
				{
					$this->session->set_flashdata('msg','1');
					 //$this->load->view('add_author');
					 redirect('home/member_manage');
				}
				else
				{
					
					  redirect('home/member_manage');
				}
                   
                }
                else
                {
                      
					 $this->load->view('member_manage');
				
				
				}

	}

	
}


