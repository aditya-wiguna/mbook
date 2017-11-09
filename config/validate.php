<?php

class validate
{
	// complete:6 membuat validasi field kosong
	public function empty($data, $fields)
	{
		$message = null;
		foreach ($fields as $filed) {
			if (empty($data[$field])) {
				$message .= "Please check the form and please required";
			}
		}
		return $message;
	}
	// complete:7 membuat fungsi untuk validasi email
	public function email($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			return true;
		}
		return false;
	}
}