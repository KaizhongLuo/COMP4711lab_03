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
$this->status='';
$this->emails = array(); 
$this->grades = array();
} 

function add_email($which,$address) { 
$this->emails[$which] = $address;
} 

function add_grade($grade) {
$this->grades[] = $grade; 
} 

function average() { 
    $total = 0; 
    foreach ($this->grades as $value)
        $total += $value; return $total / count($this->grades);
        } 

function toString() {
$result = "<li>".$this->first_name . ' ' . $this->surname; 
$result .= ' ('.$this->average().")"."</li>"; 
$result .="<li>"."Status : ". $this->status.""."</li>";
foreach($this->emails as $which=>$what) 
$result .= "<li>".$which . ': '. $what."</li>";
$result .= "\n"; return '<pre>'.$result.'</pre>'; 
} 



}


