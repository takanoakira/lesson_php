<?php
 function myGen(){
     yield "あいうえお";
     yield "あいうえお";
     yield "あいうえお";
 }
 foreach(myGen()as $value){
     print $value."<br />";
 }