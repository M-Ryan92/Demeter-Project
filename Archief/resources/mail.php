<?php


class Mail{

	private $to;
	private $subject;
	private $body;
	private $headers = 'From: welzijn@demetervoeding.nl';

	public function __construct($subject = "test", $body = "test", $email = "info@tvsloten.com"){
		$this->subject = $subject;
		$this->body = $body;
		$this->to   = $email;
	}

	public function sendMail(){
		mail($this->to, $this->subject, $this->body, $this->headers);
	}
}

?>