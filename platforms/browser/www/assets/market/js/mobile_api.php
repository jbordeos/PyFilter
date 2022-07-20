<?php 
error_reporting(0);
class Mobile_Api extends CI_Controller {	
	public function __construct() {
        parent::__construct();
		$this->load->library('session');
		$this->load->helper('url');
        $this->load->model('mobile_model');
        $this->load->model('fetch_model');
        $this->load->database();
    }
	public function transactionCode() {
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$pass = array(); 
		$alphaLength = strlen($alphabet) - 1; 
		for ($i = 0; $i < 8; $i++) {
			$n = rand(0, $alphaLength);
			$pass[] = $alphabet[$n];
		}
		static $result;
		if ( $result !== null ) 
			return $result;
		$result = implode($pass);
		return $result;
	}
	public function index() {
			$user = $_SERVER['REMOTE_ADDR'];
			$this->load->view('market/header');
			$this->load->view('market/nav', array('user'=>$user));
				if(isset($_GET['page'])){
					$decoded_id     = base64_decode(urldecode($_GET['data']));
					$data['result'] = $this->fetch_model->getviewproduct($decoded_id);
					$this->load->view('market/viewproduct', $data);
				} else if(isset($_GET['register'])){
					$this->load->view('market/register');
				}  else if(isset($_GET['login'])){
					$this->load->view('market/login');
				} else {
					$this->load->view('market/index', array('user'=>$user));
				}
			$this->load->view('market/footer');
	}
	
    public function getDashboardItems(){
    	echo json_encode($this->mobile_model->getviewproduct());
    }

    public function login_user_account() {
		echo json_encode($this->mobile_model->login_user($_POST));
	}

	public function get_category() {
		echo json_encode($this->mobile_model->get_category($_POST));
	}

	public function get_item_details() {
		echo json_encode($this->mobile_model->get_item_details($_POST));
	}

	public function get_item_cart() {
		echo json_encode($this->mobile_model->get_item_cart($_POST));
	}
}