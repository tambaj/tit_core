<?php 

class Offer_Model extends Model {

	public function __construct(){

		parent::__construct();
		// print_r($_SESSION);
	}

	public function offerList(){
		return $this->db->select('SELECT * FROM tit_offers');
	}
	public function offerSingleList($offerid){

		return $this->db->select('SELECT * FROM tit_offers WHERE offer_id = :offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function singleOffer($offerid){
		return $this->db->select('SELECT * FROM tit_offers WHERE offer_id = :offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function singleSubscription($offerid){
		return $this->db->select('SELECT tit_offer_subscriptions.subscription_id,tit_offer_subscriptions.units_subscribed,tit_offer_subscriptions.amount_subscribed,tit_offer_subscriptions.subscription_status FROM tit_offer_subscriptions INNER JOIN tit_offers ON tit_offer_subscriptions.offer_id = tit_offers.offer_id WHERE tit_offers.offer_id= :offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function singlePay($offerid){
		return $this->db->select('SELECT tit_payment_transactions.transaction_id,tit_payment_transactions.transaction_date,tit_payment_transactions.transaction_amount,tit_payment_transactions.transaction_status FROM tit_payment_transactions INNER JOIN tit_offers ON tit_payment_transactions.offer_id = tit_offers.offer_id WHERE tit_offers.offer_id= :offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function countSubscription($offerid){
		return $this->db->select('SELECT COUNT(subscription_id) AS subscription_id FROM tit_offer_subscriptions INNER JOIN tit_offers ON tit_offer_subscriptions.offer_id = tit_offers.offer_id WHERE tit_offers.offer_id =:offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function countPaying($offerid){
		return $this->db->select('SELECT COUNT(transaction_id) AS transaction_id FROM tit_payment_transactions INNER JOIN tit_offers ON tit_payment_transactions.offer_id = tit_offers.offer_id WHERE tit_offers.offer_id =:offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function sumPaying($offerid){
		return $this->db->select('SELECT SUM(transaction_amount) AS transaction_amount FROM tit_payment_transactions INNER JOIN tit_offers ON tit_payment_transactions.offer_id = tit_offers.offer_id WHERE tit_offers.offer_id =:offer_id', 
			array(':offer_id' =>$offerid));
	}
	public function create($data){

		$this->db->insert('tit_offers',array(
			'date_created' => date('Y-m-d:i:s'),
			'offer_id' => $data['offer_id'],
			'offer_name' => $data['offer_name'],
			'min_units' => $data['min_units'],
			'max_units' => $data['max_units'],
			'offer_unit_price' => $data['offer_unit_price'],
			'offer_target' => $data['offer_target'],
			'units_offered' => $data['units_offered'],
			'subscription_start_date' => $data['subscription_start_date'],
			'units_subscribed' => $data['units_subscribed'],
			'amount_subscribed' => $data['amount_subscribed'],
			'subscription_end_date' => $data['subscription_end_date'],
			'offer_status' => $data['offer_status'],
			'last_updated' => date('Y-m-d:i:s')
		));
	}
	public function editSave($data){
		
		$postData = array(
			'offer_id' => $data['offer_id'],
			'offer_name' => $data['offer_name'],
			'min_units' => $data['min_units'],
			'max_units' => $data['max_units'],
			'offer_unit_price' => $data['offer_unit_price'],
			'offer_target' => $data['offer_target'],
			'units_offered' => $data['units_offered'],
			'subscription_start_date' => $data['subscription_start_date'],
			'units_subscribed' => $data['units_subscribed'],
			'amount_subscribed' => $data['amount_subscribed'],
			'subscription_end_date' => $data['subscription_end_date'],
			'offer_status' => $data['offer_status']
		);
		$this->db->update('tit_offers', $postData, "`offer_id` = '{$data['offer_id']}'");
		
	}
	public function delete($id){

		$this->db->delete('note', "noteid = '$id' AND userid = '{$_SESSION['userid']}'");
	}
}