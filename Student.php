<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Rocky
 */

class Student {
    function __construct() 
{ $this->surname = '';
$this->first_name = '';
$this->emails = array(); 
$this->grades = array();
} 

function add_email($which,$address) { 
$this->emails[$which] = $address;
} 

function add_grade($grade) {
$this->grades[] = $grade; 
} 

function toString() {
$result = $this->first_name . ' ' . $this->surname; 
$result .= ' ('.$this->average().")\n"; 
foreach($this->emails as $which=>$what) 
$result .= $which . ': '. $what. "\n";
$result .= "\n"; return '<pre>'.$result.'</pre>'; 
} 

}

$first = new Student(); 
$first->surname = "Doe";
$first->first_name = "John";
$first->add_email('home','john@doe.com');
$first->add_email('work','jdoe@mcdonalds.com'); 
$first->add_grade(65); 
$first->add_grade(75); 
$first->add_grade(55);
$students['j123'] = $first;

$second = new Student(); 
$second->surname = "Einstein";
$second->first_name = "Albert";
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
$third->add_email('home','707946518@qq.com');
$third->add_email('work1','707946518@qq.com');
$third->add_email('work2','707946518@qq.com');
$third->add_grade(93);
$third->add_grade(81);
$third->add_grade(51);
$students['a789'] = $second;

ksort($students);
