<?php 
	/**
	* 
	*/
	class calculator
	{
				
		function __construct()
		{
		}

        private  $sum=0;
		private  $difference=0;
		private  $product=1;
		private  $quotient=0;
		
		
		

		public function addnumber($x,$y){
			$this->sum = $x + $y;
			echo $this->sum;
		}

		public function dividenumber($x,$y){
			$this->quotient = $x/$y;
			echo $this->quotient;
		}

		public function subtractnumber($x,$y){
			$this->difference = $x-$y;
			echo $this->difference;
		}

		public function multiplynumber($x,$y){
			$this->product = $x*$y;
			echo $this->product;
		}
	}

	$calc = new calculator();
	
	$calc->addnumber(5,5);
	$calc->dividenumber(5,5);
	$calc->subtractnumber(5,5);
	$calc->multiplynumber(5,5);
?>.