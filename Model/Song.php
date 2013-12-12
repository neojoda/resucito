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
		'language' => array(
			'alphaNumeric' => array(
				'rule' => array('alphaNumeric'),
				'required' => true,
				'allowEmpty' => false
			),
		),
		'title' => array(
			'blank' => array(
				'required' => true,
				'allowEmpty' => false,
				'rule' => array('inList', array('es', 'en')),
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
