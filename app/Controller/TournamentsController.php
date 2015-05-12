<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Tournaments Controller
 *
 * @property Tournament $Tournament
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TournamentsController extends AppController {
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public $uses = array(
		'User',
		'Tournament',
		'Registration'
	);
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tournament->recursive = 0;
		$this->set('tournaments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tournament->exists($id)) {
			throw new NotFoundException(__('Invalid tournament'));
		}
		$options = array('conditions' => array('Tournament.' . $this->Tournament->primaryKey => $id));
		$this->set('tournament', $this->Tournament->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tournament->create();
			if ($this->Tournament->save($this->request->data)) {
				$this->Session->setFlash(__('The tournament has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tournament could not be saved. Please, try again.'));
			}
		}
	}

	public function signup() {
		$tournaments = $this->Tournament->find('list', array(
        'fields' => array('Tournament.tournament_name')
    	));

    	$this->set('tournaments', $tournaments);

    	if ($this->request->is(array('post', 'put'))) {
			$user_id = $this->Auth->user('id');
			$tournament_id = $this->request->data['Tournament']['tournament_name'];

			if ($this->Tournament->exists($tournament_id)) {
				
				$reg_conditions = array(
    				'Registration.tournament_id' => $tournament_id,
    				'Registration.registered_user' => $user_id
				);

				if (!($this->Registration->hasAny($reg_conditions))) {
					$regTournament = $this->Tournament->findByTournament_id($tournament_id);
					$current_entries = $this->Registration->find('count', array(
						'conditions' => array('Registration.tournament_id =' => $tournament_id)));
					$max_entries = $regTournament['Tournament']['max_entries'];
					if ($current_entries < $max_entries) {

						$user = $this->User->findById($user_id);
						$username = $user['User']['username'];
						$firstname = $user['User']['fname'];
						$lastname = $user['User']['lname'];
						$email = $user['User']['email'];
						$phone = $user['User']['phone'];
						$tournament_name = $regTournament['Tournament']['tournament_name'];
						$tournament_date = $regTournament['Tournament']['tournament_date'];
						$registration = array(
							'Registration' => array (
								'tournament_id' => $tournament_id,
								'registered_user' => $user_id
						));

						$this->Registration->save($registration);
						

						$message = 'User ' . $username . ' has signed up for ' . $tournament_name . ' on ' . $tournament_date . "\r\n" . "\r\n" . 'User Email: ' . $email . "\r\n" . 'User Name: ' . $firstname . ' ' . $lastname . "\r\n" . 'User Phone Number: ' . $phone . '';

						$Email = new CakeEmail('gmail');
						$Email->from(array('helperbot@vstg.com' => 'VS Tournament Gaming'))
			    		->to('dallostaa@gmail.com')
			    		->subject('Tournament Registration');
						if ($Email->send($message))
						{
							$this->Session->setFlash(__('You have successfully registered for ' . $tournament_name . '.'), 'default', array('class' => 'alert alert-info'));
						} 
						else {
							$this->Session->setFlash(__('There was an error in registering for the tournament. Please try again later.'), 'default', array('class' => 'alert alert-danger'));
						}
					}
					else {
						$this->Session->setFlash(__('This tournament already has the maximum number of participants.'), 'default', array('class' => 'alert alert-danger'));
					}
				}
				else {
					$this->Session->setFlash(__('You have already registered for this tournament'), 'default', array('class' => 'alert alert-danger'));
				}
			}
			else {
				$this->Session->setFlash(__('This tournament is not valid for registration'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function beforeFilter() {
	    parent::beforeFilter();
	    // Allow users to register and logout.
	    $this->Auth->allow('index');
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tournament->exists($id)) {
			throw new NotFoundException(__('Invalid tournament'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tournament->save($this->request->data)) {
				$this->Session->setFlash(__('The tournament has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tournament could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tournament.' . $this->Tournament->primaryKey => $id));
			$this->request->data = $this->Tournament->find('first', $options);
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
		$this->Tournament->id = $id;
		if (!$this->Tournament->exists()) {
			throw new NotFoundException(__('Invalid tournament'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tournament->delete()) {
			$this->Session->setFlash(__('The tournament has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tournament could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
