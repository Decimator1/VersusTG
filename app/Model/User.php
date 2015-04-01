<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'user';

	public $validate = array(
		'username' => array(
			'nonEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required',
				'allowEmpty' => false
			),
			'between' => array(
				'rule' => array('between', 5, 15),
				'required' => true,
				'message' => 'Usernames must be between 5 to 15 characters'
			),
			 'unique' => array(
                'rule'    => array('isUniqueUsername'),
                'message' => 'This username is already in use'
            ),
            'alphaNumericDashUnderscore' => array(
                'rule'    => array('alphaNumericDashUnderscore'),
                'message' => 'Username can only be letters, numbers and underscores'
            )
        ),

        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            ),
            'min_length' => array(
                'rule' => array('minLength', '6'),  
                'message' => 'Password must have a mimimum of 6 characters'
            )
        ),

         'email' => array(
            'required' => array(
                'rule' => array('email', true),    
                'message' => 'Please provide a valid email address.'   
            ),
             'unique' => array(
                'rule'    => array('isUniqueEmail'),
                'message' => 'This email is already in use',
            ),
            'between' => array( 
                'rule' => array('between', 6, 60), 
                'message' => 'Usernames must be between 6 to 60 characters'
            )
        ),

        'fname' => array(
           'required' => array(
               'rule' => array('notEmpty'),
               'message' => 'A first name is required'
            )
        ),

        'state' => array(
           'between' => array(
               'rule' => array('maxLength, 2'),
               'message' => 'Only state abbreviations of two characters are allowed',
               'allowEmpty' => true,
               'required' => false
            )
        ),

        'zip' => array(
            'rule' => array('postal', null, 'us'),
            'message' => 'Please enter a valid ZIP code',
            'allowEmpty' => true,
            'required' => false
        ),

        'phone' => array(
            'rule' => array('phone', null, 'us'),
            'message' => 'Please enter a valid phone number',
            'allowEmpty' => true,
            'required' => false
        ),

        'role' => array(
           'valid' => array(
               'rule' => array('inList', array('admin', 'employee', 'customer')),
               'message' => 'Please enter a valid role',
               'allowEmpty' => false
           )
        ),

        'password_update' => array(
            'min_length' => array(
                'rule' => array('minLength', '6'),   
                'message' => 'Password must have a mimimum of 6 characters',
                'allowEmpty' => true,
                'required' => false
            )
        ),
	);

	/**
     * Before isUniqueUsername
     * @param array $options
     * @return boolean
     */
	function isUniqueUsername($check) {

		$username = $this->find(
			'first',
			array(
				'fields' => array(
					'id',
					'username'
				),
				'conditions' => array(
					'username' => $check['username']
				)
			)
		);

		if(!empty($username)){
            if($this->data[$this->alias]['id'] == $username['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
	}

	/**
     * Before isUniqueEmail
     * @param array $options
     * @return boolean
     */
    function isUniqueEmail($check) {
 
        $email = $this->find(
            'first',
            array(
                'fields' => array(
                    'id'
                ),
                'conditions' => array(
                    'email' => $check['email']
                )
            )
        );
 
        if(!empty($email)){
            if($this->data[$this->alias]['id'] == $email['User']['id']){
                return true; 
            }else{
                return false; 
            }
        }else{
            return true; 
        }
    }

	public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
    }

    public function NumericDash($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[0-9- \-]*$/', $value);
    }


    public function equaltofield($check,$otherfield) 
    { 
        //get name of field 
        $fname = ''; 
        foreach ($check as $key => $value){ 
            $fname = $key; 
            break; 
        } 
        return $this->data[$this->name][$otherfield] === $this->data[$this->name][$fname]; 
    }
}
