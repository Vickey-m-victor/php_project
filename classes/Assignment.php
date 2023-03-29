<?php
/**
 * 
 */
class Assignment
{
   public function evenOddPrimeNumbers($range=['start'=>0,'stop'=>100,'result'=>'sum','type'=>'even'],$answer = null)
   {
      if(is_array($range)){
         if(!is_int($range['start']) || !is_int($range['stop'])){
            return "The function only accepts integers";
         }elseif($range['start']>$range['stop']){
            return 'Start number can not be grater than stop number';
         }else{
         for($i=$range['start']; $i<=$range['stop']; $i++){
               if($this->comparison($i, $range['type'])){
                  if($range['result']==='sum'){
                     $answer += $i;
                  }elseif($range['result']==='list'){
                     $answer .= $i." ";
                  }elseif($range['result']==='array'){
                     $answer[] = $i;
                  }else{
                     return 'Unknown results';
                     exit();
                  }
               }
         }
         return $answer;
        }
      }
      return 'Range provided is invalid';      
     }

     //a protected function to switch between odd,even,prime

     protected function comparison($i,$type,$answer = 0){
      if($i%2==0 && $type ==='even'){
        return true; 
      }elseif($i%2!==0 && $type ==='odd'){
       return true;
     }else{
      for($j=2;$j<=$i/2;$j++){
          if($i%$j==0){
          $answer++;
         break;
        }
      }
       return ($answer==0 && $type === 'prime') ? true : false;
     }
   }
}
/*
trait MyAssignment {
  public function calculateMean(){
    $oddRange = array_merge($this->range, ['result'=>'sum', 'type'=>'odd']);
    $evenRange = array_merge($this->range, ['result'=>'sum', 'type'=>'even']);
    $primeRange = array_merge($this->range, ['result'=>'sum', 'type'=>'prime']);
    $total= $this->evenOddPrimeNumbers($oddRange)+
    $this->evenOddPrimeNumbers($evenRange)+
    $this->evenOddPrimeNumbers($primeRange);
    $mean = number_format($total/3,2);

    return ['sum'=>$total, 'mean'=>$mean];
  }

   /*public function calculateMean($numbers) {
     return array_sum($numbers) / count($numbers);
   }
 
   public function calculateMode($numbers) {
     $counted = array_count_values($numbers);
     $max = max($counted);
     return array_keys($counted, $max);
   }
 
   public function calculateMedian($numbers) {
     sort($numbers);
     $count = count($numbers);
     $middle = floor($count / 2);
     return ($count % 2 == 0) ? ($numbers[$middle - 1] + $numbers[$middle]) / 2 : $numbers[$middle];
   }
 }
 
 class childAssignment extends Assignment {
   use MyAssignment;
   public $range;
 
   public function __construct($range=['stop'=>100,'start'=>0]) {
   $this->range= $range;
   }

 
   public function sumNumbers($range=['start'=>0,'stop'=>100]) {
     $numbers = $this->evenOddPrimeNumbers($range, []);
     $totalSum = array_sum($numbers);
     $oddSum = array_sum(array_filter($numbers, function($n) { return $n % 2 !== 0; }));
     $primeSum = array_sum(array_filter($numbers, function($n) { 
       for($j=2;$j<=$n/2;$j++){
         if($n%$j==0){
           return false;
         }
       }
       return true;
     }));
   }


}
    */