<?php
class ModelAccountEmail extends Model {
	public function setFrogotEmail($customer_id, $code,$createtime) {
		$query = $this->db->query("INSERT INTO " . DB_PREFIX . "email SET event = 'forgot' , cid = '" . (int)$customer_id . "', code = '" . $code . "', createtime = '" . $createtime . "'");

		if ($query){
            $result = $this->db->getLastId();
        }else{
            $result = 0;
        }

		return $result;
	}

	public function getForgotEmail($eid){
        $query = $this->db->query("SELECT code, cid, createtime FROM `" . DB_PREFIX . "email` WHERE eid = '" . $eid . "' AND event = 'forgot'ORDER BY createtime DESC LIMIT 1");
	    return $query->row;
    }

    public function setAccountPwd($id,$pwd){
        $query = $this->db->query("UPDATE " . DB_PREFIX . "customer SET salt = '', password = '" . $this->db->escape(password_hash($pwd, PASSWORD_DEFAULT)) . "', code = '' WHERE customer_id = '" . (int)$id . "'");
        return $query;
    }
}
