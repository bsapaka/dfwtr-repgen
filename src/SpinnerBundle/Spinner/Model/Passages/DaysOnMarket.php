<?php namespace SpinnerBundle\Spinner\Model\Passages;

use SpinnerBundle\Spinner\Model\NounPhrases\DaysOnMarket as Subject;

class DaysOnMarket extends TemplatePassage{

	protected $subjectField = 'daysOnMarket';

	protected $aggregation = 'total';

	protected $adjectives = array(
		'days'
	);

	public function subject() {
		return Subject::phrase();
	}

}