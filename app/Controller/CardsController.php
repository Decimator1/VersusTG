<?php
App::uses('AppController', 'Controller');
/**
 * Cards Controller
 *
 * @property Card $Card
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CardsController extends AppController {

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
	public function cardsList($page = null) {
		$stuffToSortBy = array(
			'name',
			'multiverseid',
			'manaCost',
			'rarity'
		);

		foreach($stuffToSortBy as $field) {
			$this->Card->virtualFields[$field] = true;
		}
		$this->set('cards', $this->paginate('Card'));
		foreach ($stuffToSortBy as $field) {
			unset($this->Card->virtualFields[$field]);
		}
		$this->Card->setDataSource('cards');
		$params = array('limit' => 20, 'page' => $page);
		$results = $this->Card->find('all', array('condtions' => $params));
		$this->set('cards', $results);
		$this->set('page', $page);
		
	}
    
    public function search($page = null) {
    	if($this->request->is(array('post', 'put'))) {
			$stuffToSortBy = array(
				'name',
				'multiverseid',
				'manaCost',
				'rarity'
			);

			foreach($stuffToSortBy as $field) {
				$this->Card->virtualFields[$field] = true;
			}
			$this->set('cards', $this->paginate('Card'));
			foreach ($stuffToSortBy as $field) {
				unset($this->Card->virtualFields[$field]);
			}
			$this->Card->setDataSource('cards');
			$results = $this->Card->find('all', array('conditions' => array('name' => new MongoRegex("/".$this->request->data['Card']['name']."/i"))));
			$this->set('cards', $results);
			$this->set('page', $page);
		}
		else {
			$this->redirect(array('action' => 'index'));
		}
	}

	public function index() {


	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Card->exists($id)) {
			//throw new NotFoundException(__('Invalid card'));
		}
		
		$options = array('conditions' => array('_id' => $id));
		$card = $this->Card->find('first',$options);
		$cardName = urlencode($card['Card']['name']);
		$cardSet = urlencode($card['Card']['sets'][0]);
		$curl = curl_init("http://magictcgprices.appspot.com/api/cfb/price.json?cardname=".$cardName."&cardset=".$cardSet);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		if(empty($result)) {
			$curl = curl_init("http://magictcgprices.appspot.com/api/cfb/price.json?cardname=".$cardName);
			$result = curl_exec($curl);
		}
		$this->set('card', $card);
		$this->set('price', json_decode($result));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Card->create();
			if ($this->Card->save($this->request->data)) {
				$this->Session->setFlash(__('The card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card could not be saved. Please, try again.'));
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
		if (!$this->Card->exists($id)) {
			throw new NotFoundException(__('Invalid card'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Card->save($this->request->data)) {
				$this->Session->setFlash(__('The card has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The card could not be saved. Please, try again.'));
			}
		} else {
            if($this->Session->read('Auth.User.group_id') != 1) {
                $this->redirect(array('controller' => 'posts', 'action' => 'index'));
            }
            $options = array('conditions' => array('_id' => $id));
            $this->request->data = $this->Card->find('first', $options);
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
		$this->Card->id = $id;
		if (!$this->Card->exists()) {
			throw new NotFoundException(__('Invalid card'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Card->delete()) {
			$this->Session->setFlash(__('The card has been deleted.'));
		} else {
			$this->Session->setFlash(__('The card could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
