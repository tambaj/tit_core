<?php 

class Payment_Model extends Model {

	public function __construct(){

		parent::__construct();
		// print_r($_SESSION);
	}

	public function paymentList(){

		return $this->db->select('SELECT tit_payment_transactions.transaction_date,tit_payment_transactions.transaction_id, tit_members.member_name,tit_offers.offer_name,tit_offers.offer_id,tit_payment_transactions.linked_msisdn,tit_payment_transactions.transaction_amount,tit_payment_transactions.transaction_status,tit_payment_transactions.lastupdated FROM tit_payment_transactions INNER JOIN tit_members ON tit_payment_transactions.member_id = tit_members.member_id INNER JOIN tit_offers ON tit_payment_transactions.offer_id=tit_offers.offer_id');
	}

	public function singlePayment($transactionid){
		return $this->db->select('SELECT tit_payment_transactions.transaction_id,tit_payment_transactions.transaction_date,tit_payment_transactions.transaction_id, tit_members.member_name,tit_offers.offer_name,tit_offers.offer_id,tit_payment_transactions.linked_msisdn,tit_payment_transactions.transaction_amount,tit_payment_transactions.transaction_status,tit_payment_transactions.lastupdated FROM tit_payment_transactions INNER JOIN tit_members ON tit_payment_transactions.member_id = tit_members.member_id INNER JOIN tit_offers ON tit_payment_transactions.offer_id=tit_offers.offer_id WHERE transaction_id = :transaction_id', 
			array(':transaction_id' =>$transactionid));
	}
}