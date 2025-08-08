<?php

class Pagination {

private $max;


private $limit;

private $total;

private $currentPage;

private $index;


public function __construct($total, $currentPage, $index, $limit) {
    
    $this->total = $total;
    $this->limit = $limit;

    $this->setCurrentPage($currentPage);
    $this->index = $index;
    $this->amount = $this->amount();

}


private function setCurrentPage($currentPage){

    $this->currentPage = $currentPage;


    if($this->currentPage > 0) {
        if($this->$currentPage > $this->amount){
            $this->$currentPage = $this->amount;
        }
    }
    else{
        $this->currentPage = 1;
    }

       

        



}


private function amount(){
    return ceil($this->total/$this->limit);
}







}