<?php

class Finance extends CI_Controller
{
	//constructor
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('FinanceModel');

	}

	//display record finance page
	public function recordFinance()
	{
		$this->template->content->view('record-finance');

		// Publish the template
		$this->template->publish();
	}

	public function submitClosing()
	{
		$financeDet = $this->input->post();


		if ($this->FinanceModel->saveFinance($financeDet) != $this->db->error()) {
			$this->session->set_flashdata('status', 'Closing Details Recorded Successfully!');
			redirect('Finance/recordFinance');
		} elseif ($this->FinanceModel->saveFinance($financeDet) == $this->db->error()) {
			$this->session->set_flashdata('error', 'Closing Details for selected date already exist!');
			redirect('Finance/recordFinance');
		}

	}

	//display financial history
	public function financialHistory()
	{
		//get data from fetchAllFinance in Finance Model
		$data['financehist'] = $this->FinanceModel->fetchAllFinance();
		$this->template->content->view('financial-history', $data);

		// Publish the template
		$this->template->publish();
	}


	public function delete($closingID)
	{
		$this->FinanceModel->deleteFinance($closingID);

		if ($this->db->affected_rows() > 0) {
			$response = array(
				'status' => true,
				'message' => 'Data deleted successfully'
			);
		} else {
			$response = array(
				'status' => false,
				'message' => 'Error deleting data'
			);
		}
		echo json_encode($response);
	}

	public function updateFinance()
	{
		$updateFin = $this->input->post();


		if ($this->FinanceModel->updFinance($updateFin)) {
			$response = array(
				'status' => true,
				'message' => 'Data deleted successfully'
			);
		} else {
			$response = array(
				'status' => false,
				'message' => 'Error deleting data'
			);
		}
		echo json_encode($response);
	}

}