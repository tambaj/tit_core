<?php 

class Memb_Model extends Model {

	public function __construct(){

		parent::__construct();
		// print_r($_SESSION);
	}

	public function memberList(){

		return $this->db->select('SELECT member_id,member_name,member_nid,member_dob,member_gender,linked_msisdn,member_status,source FROM tit_members');
	}
	public function memberDash($memberid){

		return $this->db->select('SELECT member_id,member_name,member_nid,member_dob,member_gender,linked_msisdn,member_status,source FROM tit_members WHERE member_id = :member_id', 
			array(':member_id' =>$memberid));

	}
	public function offerDash($memberid){
		return $this->db->select('SELECT tit_offer_subscriptions.subscription_id,tit_offer_subscriptions.units_subscribed,tit_offer_subscriptions.amount_subscribed,tit_offer_subscriptions.subscription_status FROM tit_offer_subscriptions INNER JOIN tit_members ON tit_offer_subscriptions.member_id = tit_members.member_id WHERE tit_members.member_id= :member_id', 
			array(':member_id' =>$memberid));
	}
	public function paymentDash($memberid){
		return $this->db->select('SELECT tit_payment_transactions.transaction_id,tit_payment_transactions.transaction_date,tit_payment_transactions.transaction_amount,tit_payment_transactions.transaction_status FROM tit_payment_transactions INNER JOIN tit_members ON tit_payment_transactions.member_id = tit_members.member_id WHERE tit_members.member_id=:member_id', 
			array(':member_id' =>$memberid));
	}
	public function membEdit($memberid){
		return $this->db->select('SELECT * FROM tit_members WHERE member_id = :member_id', 
			array(':member_id' =>$memberid));
	}
		public function editSave($data){
		
		$postData = array(
		   'member_id' => $data['member_id'],
		   'member_name' => $data['member_name'],
		   'member_nid' => $data['member_nid'],
		   'member_dob' => $data['member_dob'],
		   'member_gender' => $data['member_gender'],
		   'linked_msisdn' => $data['linked_msisdn'],
		   'member_status' => $data['member_status'],
		   'active_pin' => $data['active_pin'],
		   'last_updated' => date('Y-m-d:i:s')
		);
		$this->db->update('tit_members', $postData, "`member_id` = '{$data['member_id']}'");
		
	}
}