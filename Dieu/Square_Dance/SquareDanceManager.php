<?php
include_once "Dancer.php";

class SquareDanceManager
{
    public $listMale;
    public $listFemale;

    public function __construct()
    {
        $this->listMale = new SplQueue();
        $this->listFemale = new SplQueue();
    }

    public function add($dancer){
        if($dancer->gender == MALE)
            $this->listMale->enqueue($dancer);
        else
            $this->listFemale->enqueue($dancer);
    }

    public function creatCouple(){
            $infoCreatCouple = $this->listMale->dequeue()->name . ' va ' . $this->listFemale->dequeue()->name . '<br>';
        return $infoCreatCouple;

    }

    public function creatMultiCouple(){
        $listCouple = '';
        while (!$this->listMale->isEmpty() && !$this->listFemale->isEmpty())
            $listCouple .=$this->creatCouple();
        $listCouple .=  $this->waiting().'<br>';

        return $listCouple;
    }

    public function waiting(){
        if($this->listMale->isEmpty())
            return $this->listFemale->count().' female is waiting' ;
        else if($this->listFemale->isEmpty())
            return $this->listMale->count().' male is waiting' ;
    }


}