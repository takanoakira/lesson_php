<?php
 interface IFax{
     function send();
 }
 
 interface IPrinter{
     function print();
 }

 trait FaxTrait{
     public function send(){
         print 'sending Fax...sended!';
     }
 }

 trait PrinterTrait{
     public function print(){
      print 'printing...completed!';
 }
}

class FaxPrinter implements IFax, Iprinter{
    use FaxTrait, Printertrait;
}

$fp = new FaxPrinter();
$fp->send();
$fp->print();
?>
