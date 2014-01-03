<?php
App::uses('AppModel', 'Model');
/**
 * Chord Model
 *
 */
class Chord extends AppModel {

	//public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'englishNotation' => array(
			'required' => array(
				'rule' => array('minLength', 1),
				'required' => true,
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
			    'message' => 'The field cannot be empty or only contains white spaces'
			)
		),
		'latinNotation' => array(
			'required' => array(
				'rule' => array('minLength', 1),
				'required' => true,
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
			    'message' => 'The field cannot be empty or only contains white spaces'
			)
		)
	);
	
	
	public function byLanguage($language) {
        $params = array(
            'conditions' => array(
               'language' => $language
            )
        );

        return $this->find('all', $params);
    }
	
}
