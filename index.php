<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            li
  {
  width: 13%;
  border: 1px solid blue;
  }
        </style>
    </head>
    <body>
        <h6>Stuedent Massage</h6>
        <?php 
        include('Student.php');
        $students = array();
        
        $first = new Student(); 
$first->surname = "Doe";
$first->first_name = "John";
$first->status = "Freshman";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com'); 
$first->add_grade(65); 
$first->add_grade(75); 
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student(); 
$second->surname = "Einstein";
$second->first_name = "Albert";
$second->status = "Junior ";
$second->add_email('home','albert@braniacs.com');
$second->add_email('work1','a_einstein@bcit.ca');
$second->add_email('work2','albert@physics.mit.edu');
$second->add_grade(95);
$second->add_grade(80);
$second->add_grade(50);
$students['a456'] = $second;

$third= new Student(); 
$third->surname = "Kaizhong";
$third->first_name = "Luo";
$third->status = "Senior ";
$third->add_email('home','707946518@qq.com');
$third->add_email('work1','707946518@qq.com');
$third->add_email('work2','707946518@qq.com');
$third->add_grade(93);
$third->add_grade(81);
$third->add_grade(51);
$students['a789'] = $third;

$fouth= new Student(); 
$fouth->surname = "Renhong";
$fouth->first_name = "Zhen";
$fouth->status = "Senior ";
$fouth->add_email('home','1691461679@qq.com');
$fouth->add_email('work1','1691461679@qq.com');
$fouth->add_grade(93);
$fouth->add_grade(81);
$fouth->add_grade(51);
$students['a101'] = $fouth;

ksort($students);
echo '<table>';

        foreach($students as $student) {
            echo '<tr>';
            echo $student->toString(); 
            echo '</tr>';
        }
echo '<table>';        
        ?> 
    </body>
</html>
