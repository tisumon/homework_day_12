<?php


namespace App\classes;
use App\classes\User;
class Calculator
{

    public $min;
    public $max;
    public $result='';

    public function __construct($data){

        if($data['first_number']!='' && $data['second_number']!='' && $data['operator']!='') {

            $this->operator = $data['operator'];
            $this->min = min((int)$data['first_number'],(int)$data['second_number']);
            $this->max = max((int)$data['first_number'],(int)$data['second_number']);

            for($i= $this->min; $i< $this->max; $i++){
                $this->result.=(string)$i;
            }

        }else{
            $this->result='';
        }

    }

    public function index(){
        return $this->result;
    }





}