<?php 

//a function that will generate unsorted int number
function unsorted_num_generator($amount_of_number){
	
	for($i=0; $i<$amount_of_number; $i++){
	
	$random_num[] = rand(1,10);
	
	}
	
	return $random_num;
	
}

//$amount_of_number = 10;


/*
Tell this function how many number you want to sort 
first, this function will show you the unsorted list of numbers
then it will show the list of sorted numbers.
*/
function sorting_by_insertion_sort_algo($amount_of_number){
	
	//=========================
	
	//get a collection of unsorted numbers
	$unsorted_number_arr = unsorted_num_generator($amount_of_number);

	//print those unsorted number
	echo "Unsorted state <br/>";
	echo "<pre>";
	print_r($unsorted_number_arr);


	for($i=1; $i<$amount_of_number; $i++){
		$counter = $i;
		
		//sorting will take place here
		while($counter > 0 && $unsorted_number_arr[$counter] < $unsorted_number_arr[$counter-1]){
			$smallest_num = $unsorted_number_arr[$counter];
			
			$unsorted_number_arr[$counter] = $unsorted_number_arr[$counter-1];
			
			$unsorted_number_arr[$counter-1] = $smallest_num;
			
			
			$counter--;
			
		}
	}

	echo "Sorted state <br/>";
	echo "<pre>";
	print_r($unsorted_number_arr);


	
	//=========================
	
	
}


sorting_by_insertion_sort_algo(10)

?>