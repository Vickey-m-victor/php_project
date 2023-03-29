<?php
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
     
    public function calculateMedian(){
      $oddRange = array_merge($this->range, ['result'=>'array', 'type'=>'odd']);
      $evenRange = array_merge($this->range, ['result'=>'array', 'type'=>'even']);
      $primeRange = array_merge($this->range, ['result'=>'array', 'type'=>'prime']);
      $odd = $this->evenOddPrimeNumbers($oddRange);
      $even = $this->evenOddPrimeNumbers($evenRange);
      $prime = $this->evenOddPrimeNumbers($primeRange);

      /*$count = (count($odd)) - 1;
      if ($count%2==0){
        $median = ($count/2 ) + 1;
      }else{
        $median = (($count +1)/2);
      }
      return $odd[$median];
               */
       $count = count($odd);
       if($count%2==1){
        $median = (($count + 1)/2)-1;
        $answer = $odd[$median];
        return $answer;
       }else{
        $median = $count/2;
        $answer = ($odd[$median-1]+$odd[$median])/2;
        return $answer;
       }
        
     // $count = count($odd) ;
      //$median = $count/2 + 1;
      //return $median;

      /*
      $middle = floor($count / 2);
      $median= ($count % 2 == 0) ? ($odd[$middle - 1] + $odd[$middle]) / 2 : $odd[$middle];
      return [$median, 'odd'=>$median];

     /*
      sort($even);
      $count = count($even);
      $middle = floor($count / 2);
      $median_a= ($count % 2 == 0) ? ($even[$middle - 1] + $even[$middle]) / 2 : $even[$middle];
      return [$median_a, 'even'=>$median_a];

  
      sort($prime);
      $count = count($prime);
      $middle = floor($count / 2);
      $median_b= ($count % 2 == 0) ? ($prime[$middle - 1] + $prime[$middle]) / 2 : $prime[$middle];
      return [$median_b, 'even'=>$median_b];
      */
    }
}
?>