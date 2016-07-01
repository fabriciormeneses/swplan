<?php

namespace SwPlan\System;

 abstract class ControllerAbstract
 {
     public function view($name)
     {
         return include_once "views/".$name.".phtml";
     }
 }
 