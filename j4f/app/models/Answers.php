<?php

class Answers extends \Phalcon\Mvc\Model {

	/**
	 *
	 * @var string
	 */
	public $id;

	/**
	 *
	 * @var string
	 */
	public $content;

	/**
	 *
	 * @var string
	 */
	public $photo;

	/**
	 *
	 * @var integer
	 */
	public $questions_id;

	/**
	 *
	 * @var integer
	 */
	public $users_id;

	/**
	 *
	 * @var integer
	 */
	public $upvotes;

	/**
	 *
	 * @var integer
	 */
	public $downvotes;

	/**
	 * Initialize method for model.
	 */
	public function initialize() {
		$this->belongsTo( 'questions_id', 'Questions', 'id', array( 'alias' => 'Questions' ) );
		$this->belongsTo( 'users_id', 'Users', 'id', array( 'alias' => 'Users' ) );
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource() {
		return 'answers';
	}

	/**
	 * Allows to query a set of records that match the specified conditions
	 *
	 * @param mixed $parameters
	 *
	 * @return Answers[]
	 */
	public static function find( $parameters = null ) {
		return parent::find( $parameters );
	}

	/**
	 * Allows to query the first record that match the specified conditions
	 *
	 * @param mixed $parameters
	 *
	 * @return Answers
	 */
	public static function findFirst( $parameters = null ) {
		return parent::findFirst( $parameters );
	}

}
