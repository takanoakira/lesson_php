<?php
class MyMail {
  public $to;
  public $subject;
  public $message;
  private $headers = [];

  public function __isset($name) {
    return isset($this->headers[$name]);
  }

  public function __unset($name) {
    unset($this->headers[$name]);
  }

  public function send() {
    foreach ($this->headers as $key => $value) {
      $key = str_replace('_', '-', $key);
      $others .= "{$key}: {$value}\n";
    }
    mb_send_mail($this->to, $this->subject, $this->message, $others);
  }
}
?>
