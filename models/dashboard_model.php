<?php

 class Dashboard_Model extends Model {

 	function __construct(){
 		parent::__construct();
 	}

 	public function countMember(){
 		return $this->db->select('SELECT COUNT(member_id) AS member_id FROM tit_members');
 	}
 	public function countOffer(){
 		return $this->db->select('SELECT COUNT(offer_id) AS offer_id FROM tit_offers');
 	}
 	public function countPayment(){
 		return $this->db->select('SELECT COUNT(transaction_id) AS transaction_id FROM tit_payment_transactions');
 	}
 }