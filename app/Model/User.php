<?php
App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
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
	public $useTable = 'users';

	public $validate = array(
		'username' => array(
			'nonEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'A username is required',
				'allowEmpty' => false
			),
			'between' => array(
				'rule' => array('between', 5, 15),
				'message' => 'Usernames must be between 5 to 15 characters'
			),
			 'unique' => array(
                'rule'    => array('isUnique'),
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

        'confirm_password' => array(
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
                'rule'    => array('isUnique'),
                'message' => 'This email is already in use'
            ),
            'between' => array( 
                'rule' => array('between', 6, 60), 
                'message' => 'Emails must be between 6 to 60 characters'
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
               'rule' => array('maxLength', 2),
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

        'email_update' => array(
            'required' => array(
                'rule' => array('email', true),    
                'message' => 'Please provide a valid email address.'   
            ),
             'unique' => array(
                'rule'    => array('isUnique'),
                'message' => 'This email is already in use'
            ),
            'between' => array( 
                'rule' => array('between', 6, 60), 
                'message' => 'Emails must be between 6 to 60 characters'
            )
        ),

        'password_update' => array(
            'min_length' => array(
                'rule' => array('minLength', '6'),   
                'message' => 'Password must have a mimimum of 6 characters',
            ),
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Passwords cannot be blank'
            )
        ),

        'old_password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Your current password is required to change to a new one'
            )
        ),

        'pass_reset' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'You must enter a security code to proceed'
            )
        ),
	);

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash(
                $this->data[$this->alias]['password']
            );
        }
        return true;
    }
    
	public function alphaNumericDashUnderscore($check) {
        // $data array is passed using the form field name as the key
        // have to extract the value to make the function generic
        $value = array_values($check);
        $value = $value[0];
 
        return preg_match('/^[a-zA-Z0-9_ \-]*$/', $value);
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
