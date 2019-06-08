<?php
 trait MyTrait1{
      public function hoge(){
          print 'Mytrait1';
      }
 }

 trait Mytrait2{
     public function hoge(){
         print 'MyTrait2';
     }
 }

 class Myclass{
     use MyTrait1, Mytrait2{
         MyTrait1::hoge insteadOf MyTrait2;
     }
 }

 $cls = new MyClass();
 $cls->hoge();
 ?>
 