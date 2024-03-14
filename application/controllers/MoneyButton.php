<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MoneyButton extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		if (!$this->session->has_userdata('money')) {
			$this->session->set_userdata('money', 500);
		}

		$data['money'] = $this->session->userdata('money');
		$data['bets'] = $this->session->userdata('bets') ?? [];

		$this->load->view('templates/header');
		$this->load->view('money/index', $data);
		$this->load->view('templates/footer');
	}

	public function process()
	{
		if ($this->input->post()) {
			if ($this->input->post('reset')) {
				$this->resetGame();
			}
			elseif ($this->input->post('risk')) {
				$this->processBet();
			}
		}
	}

	public function resetGame()
	{
		$this->session->set_userdata('money', 5000);
		$this->session->unset_userdata('bets');
		redirect('moneybutton/index');
	}

	private function processBet()
	{
		$risk = $this->input->post('risk');
		$moneyChange = 0;

		switch ($risk) {
			case 'low':
				$moneyChange = rand(-25, 100);
				break;
			case 'moderate':
				$moneyChange = rand(-100, 1000);
				break;
			case 'high':
				$moneyChange = rand(-500, 2500);
				break;
			case 'severe':
				$moneyChange = rand(-1000, 5000);
				break;
			default:
				break;
		}

		$currentMoney = $this->session->userdata('money');
		$this->session->set_userdata('money', $currentMoney + $moneyChange);

		$logMessage = "You pushed $risk risk. Value is $moneyChange. Your current balance now is " . $this->session->userdata('money') . ".";
		$isSuccess = ($moneyChange > 0);

		$bets = $this->session->userdata('bets') ?? [];
		$bets[] = array(
			'timestamp' => date('Y-m-d H:i:s'),
			'message' => $logMessage,
			'isSuccess' => $isSuccess
		);
		$this->session->set_userdata('bets', $bets);

		redirect('moneybutton/index');
	}
}
