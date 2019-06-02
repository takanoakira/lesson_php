<?php
 require_once 'MySmarty.class.php';
 $s = new MySmarty();
 $s->assign('books',[
     [
         'isbn' => '978-4-7981-4402-3',
         'title' => '独習ASP.NET第　5版',
         'price' => 3800,
         'published' => '2016-01-21',
     ],
 ]);
 $s->d();
 ?>
 