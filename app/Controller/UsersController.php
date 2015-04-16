<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

	public function beforeFilter() {
	    parent::beforeFilter();
	    // Allow users to register and logout.
	    $this->Auth->allow('register', 'logout');
	}

	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            return $this->redirect(array('controller' => 'posts', 'action' => 'index'));
	        }
	        $this->Session->setFlash(__('Invalid username or password, try again'));
	    }
	    if($this->Session->check('Auth.User.id')){
			$this->Session->setFlash(__('Already logged in'), 'default', array('class' => 'alert alert-info'));
	    	$this->redirect($this->referer());
	    }
	}

	public function logout() {
	    return $this->redirect($this->Auth->logout(array('controller' => 'posts', 'action' => 'index')));
	}
/**
 * add method
 *
 * @return void
 */
	public function register() {
		if ($this->request->is('post')) {
			$this->User->create();
			$this->User->set('group_id', 3);
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('controller' => 'posts', 'action' => 'index'));
			} 
			else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function emailedit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->User->id = $this->Session->read('Auth.User.id');
			if ($this->User->saveField('email', $this->request->data['User']['email_update'], true)) {
				$this->Session->setFlash(__('Your email has been updated'));
				return $this->redirect(array('controller' => 'posts', 'action' => 'index'));
			} else {
				$this->Session->setFlash(__('Your email could not be updated. Please try again'));
			}
		} 
		else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function passwordedit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}	
		if ($this->request->is(array('post', 'put'))) {
			$this->User->id = $this->Session->read('Auth.User.id');
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('Your password has been updated'));
				return $this->redirect(array('action' => 'index'));
			} 
			else {
				$this->Session->setFlash(__('Your password has not been updated. Please, try again.'));
			} 
		}
		else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function shippingedit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

	public function sendusernameemail() {
		if ($this->request->is(array('post', 'put'))) {
			$accountEmail = $this->request->data['User']['email'];
			if ($this->User->findByEmail($accountEmail))
			{
				$user = $this->User->findByEmail($accountEmail);
				$username = $user['User']['username'];
				$firstname = $user['User']['fname'];
				$message = 'Hello ' . $firstname . ',' . "\r\n" . "\r\n" . 'Your request to find your username has been processed. Your username is ' . $username . '. Thank you for being a valued member of the VSTG community.';

				$Email = new CakeEmail('gmail');
				$Email->from(array('helperbot@vstg.com' => 'VS Tournament Gaming'))
    			->to($accountEmail)
    			->subject('Your VSTG Account Username');
				if ($Email->send($message))
				{
					$this->Session->setFlash(__('An email containing your username was sent to the entered email address'));
				} 
			}
			else {
				$this->Session->setFlash(__('This email address has no account associated with it'));
			}
		}
	}

	public function sendpasswordemail() {
		if ($this->request->is(array('post', 'put'))) {
			$accountUserName = $this->request->data['User']['username'];
			if ($this->User->findByEmail($username))
			{
				$user = $this->User->findByEmail($username);
				$username = $user['User']['username'];
				$message = 'Hello ' . $username . ',' . "\r\n" . "\r\n" . 'Your request to reset your password has been processed. Please click the link to reset your password:'

				$Email = new CakeEmail('gmail');
				$Email->from(array('helperbot@vstg.com' => 'VS Tournament Gaming'))
    			->to($accountEmail)
    			->subject('Your VSTG Account Username');
				if ($Email->send($message))
				{
					$this->Session->setFlash(__('An email containing a link to reset your password was sent to your email address'));
				} 
			}
			else {
				$this->Session->setFlash(__('This username has no account associated with it'));
			}
		}
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
