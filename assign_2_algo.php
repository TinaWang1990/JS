<?php
/*
*   Fill the three blank slots to make the class run.
*/
// echo "<h2>Question 2</h2><br>";
// class demo_stack
// {
//     protected $stack;
//     protected $limit;
    
//     public function __construct($limit = 10) {
//         // initialize the stack
//         $this->stack = array();
//         // stack can only contain this many items
//         $this->limit = $limit;
//     }

//     public function push($item) {
//         // trap for stack overflow
//         if (count($this->stack) < $this->limit) {
//             // prepend item to the start of the array
//             // 1. write code here.
//             array_unshift($this->stack,$item);

//         } else {
//             throw new RunTimeException('Stack is full!'); 
//         }
//     }

//     public function pop() {
//         if ($this->isEmpty()) {
//             // trap for stack underflow
// 	      throw new RunTimeException('Stack is empty!');
// 	  	} else {
//             // pop item from the start of the array
//             // 2. write code here.
//             return array_shift($this->stack);
//         }

//     }

//     public function top() {
//         return current($this->stack);
//     }

//     public function isEmpty() {
//     	// check if stack is empty;
//         // 3. write code here.
//         return empty($this->stack);
        
//     }
// }

// $myBooks = new demo_stack();
// $myBooks->push('A Dream of Spring');
// $myBooks->push('The Winds of Winter');
// echo $myBooks->pop(); 
// echo $myBooks->pop();
// echo $myBooks->isEmpty();



// echo "<br><br><h2>Question 3</h2>";
// function insertion_Sort($my_array)
// {
// 	for($i=1;$i<count($my_array);$i++){
//         $temp = $my_array[$i];
//         for($j=$i-1;$j>=0 && $my_array[$j]>$temp;$j--){
//             $my_array[$j+1]=$my_array[$j];
//             $my_array[$j]=$temp;

//             }

//     }
    
//   return $my_array;

// }
// $test_array = array(3, 0, 2, 5, -1, 4, 1);
// echo "Original Array :\n";
// echo implode(', ',$test_array);
// echo '<br>';
// echo "\nSorted Array :\n";
// print_r(insertion_Sort($test_array));
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<p id="change">this is a is test</p>
<button type='button' onclick="A()">UpperCase</button>

<script type="text/javascript">
    
function A(){
    var x=document.getElementById('change').innerHTML;
    var i;
    ss=x.split(" ");
    for(i=0;i<ss.length;i++){
        ss[i]=ss[i].slice(0,1).toUpperCase()+ss[i].slice(1);
    }
    document.getElementById('change').innerHTML=ss.join(' ');
}

</script>

</body>
</html>