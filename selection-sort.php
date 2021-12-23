<?php
class SelectionSort{
    
    private $sorted_array = [];

    public function __construct($array){
        $this->selectionSort($array);
        return $this->sorted_array;
    } 

    public function selectionSort($array){
        foreach($array as $element){
            $smallest_element = $this->findSmallestElement($array);
            array_push($this->sorted_array,$smallest_element);
            
            $smallest_element_key = array_search($smallest_element,$array);
            array_splice($array,$smallest_element_key,1);
        }
    }

    public function findSmallestElement($array){
        $smallest_element = $array[0];
        foreach($array as $element){
            if ($element < $smallest_element){
                $smallest_element = $element;
            }
        }

        return $smallest_element;
    }
}


$testingObject = new SelectionSort([5,3,7,2,1,9,4,8]);

print_r($testingObject);
?>