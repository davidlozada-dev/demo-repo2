<?php 

class Movie{

	public $title;
	private $rating;

	function __construct($mTitle, $mRating){

		$this->title = $mTitle;
		$this->setRating($mRating);

	}

	function getRating(){
		return $this->rating;
	}

	function setRating($mRating){
		if($mRating == 'A' || $mRating == 'B'){
			$this->rating = $mRating;
		} else{
			$this->rating = 'NR';
		}
	
		
	}
}


?>
