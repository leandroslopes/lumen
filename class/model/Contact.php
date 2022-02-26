<?

class Contact {

	private $name;
	private $email;
	private $phone;
	private $message;
	
	
	public function Contact() {
	}
	
	function getName() {
		return $this->name;
	}
	
	function getEmail() {
		return $this->email;
	}
	
	function getPhone() {
		return $this->phone;
	}
	
	function getMessage() {
		return $this->message;
	}
	
	function setName($name) {
		$this->name = $name;
	}
	
	function setEmail($email) {
		$this->email = $email;
	}
	
	function setPhone($phone) {
		$this->phone = $phone;
	}
	
	function setMessage($message) {
		$this->message = $message;
	}
}