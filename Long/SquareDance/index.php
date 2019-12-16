<?php
include_once "Dancer.php";
$dancer1 = new Dancer("Hai", "Male");
$dancer2 = new Dancer("Dan", "Male");
$dancer3 = new Dancer("Nga", "Female");
$dancer4 = new Dancer("An", "Female");
$dancer5 = new Dancer("Ngoc", "Female");
$maleQueue = new SplQueue();
$femaleQueue = new SplQueue();
CheckAndAddToRow($dancer1, $maleQueue, $femaleQueue);
CheckAndAddToRow($dancer2, $maleQueue, $femaleQueue);
CheckAndAddToRow($dancer3, $maleQueue, $femaleQueue);
CheckAndAddToRow($dancer4, $maleQueue, $femaleQueue);
CheckAndAddToRow($dancer5, $maleQueue, $femaleQueue);
function CheckAndAddToRow($dancer, $maleQueue, $femaleQueue)
{
    if ($dancer->gender === "Male") $maleQueue->enqueue($dancer->name);
    if ($dancer->gender === "Female") $femaleQueue->enqueue($dancer->name);
}

function getCouple($maleQueue, $femaleQueue)
{
    if (!$maleQueue->isEmpty() && !$femaleQueue->isEmpty()) {
        $male = $maleQueue->dequeue();
        $female = $femaleQueue->dequeue();
        return "Couple: " . $male . " and " . $female . "<br>";
    } else {
        if ($maleQueue->isEmpty()) return "No man in row <br>";
        if ($femaleQueue->isEmpty()) return "No woman in row <br>";
        return "No man and woman in row <br>";
    }

}

echo getCouple($maleQueue, $femaleQueue);
echo getCouple($maleQueue, $femaleQueue);
echo getCouple($maleQueue, $femaleQueue);
function displayCount($list1,$list2){
    if ($list1->isEmpty() && !$list2->isEmpty()) echo "Number of women must wait: ".$list2->count();
    if (!$list1->isEmpty() && $list2->isEmpty()) echo "Number of man must wait: ".$list1->count();
}
displayCount($maleQueue,$femaleQueue);


?>