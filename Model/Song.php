<?php
App::uses('AppModel', 'Model');
/**
 * Song Model
 *
 */
class Song extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'title' => array(
			'required' => array(
				'rule' => array('minLength', 1),
				'required' => true,
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
			    'message' => 'The field cannot be empty or only contains white spaces'
			)
		),
		'language' => array(
			'enumLanguage' => array(
				'rule' => array('inList', array('es', 'en')),
		        'message' => 'Values accepted: es or en'
			),
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
