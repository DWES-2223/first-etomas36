<?php

require_once 'Enterprise.php';
require_once 'Employee.php';
$enterprise = new Enterprise("Coctel Gambino","ma casa");
$worker = new Employee(12,90,"ethan","tomas");

$enterprise->addWorker($worker);
$listOfWorkers =$enterprise->listWorkersHtml();
echo $listOfWorkers;