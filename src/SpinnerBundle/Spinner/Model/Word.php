<?php namespace SpinnerBundle\Spinner\Model;

use SpinnerBundle\Spinner\Spinner;

class Word implements Spinnable {
	/**
	 * @var Spinner
	 */
	protected $spinner;

	/**
	 * @var array
	 */
	protected $synonyms = array();

	public function __construct() {
		$this->spinner = new Spinner();
	}

	/**
	 * @return string
	 */
	public function spin() {
		return $this->spinner->spinArray($this->synonyms);
	}



}