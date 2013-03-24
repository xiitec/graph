<?php
App::uses('AppController', 'Controller');
/**
 * Listings Controller
 *
 * @property Listing $Listing
 * @property AuthComponent $Auth
 */
class ListingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Auth');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Listing->recursive = 0;
		$this->set('listings', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Listing->exists($id)) {
			throw new NotFoundException(__('Invalid listing'));
		}
		$options = array('conditions' => array('Listing.' . $this->Listing->primaryKey => $id));
		$this->set('listing', $this->Listing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Listing->create();
			if ($this->Listing->save($this->request->data)) {
                                
                                $this->Listing->user_id = $this->Auth->user('id'); //so we dont need the dropdown
                                
				$this->Session->setFlash(__('The listing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listing could not be saved. Please, try again.'));
			}
		}
		$services = $this->Listing->Service->find('list');
		$users = $this->Listing->User->find('list');
		$this->set(compact('services', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Listing->exists($id)) {
			throw new NotFoundException(__('Invalid listing'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Listing->save($this->request->data)) {
				$this->Session->setFlash(__('The listing has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The listing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Listing.' . $this->Listing->primaryKey => $id));
			$this->request->data = $this->Listing->find('first', $options);
		}
		$services = $this->Listing->Service->find('list');
		$users = $this->Listing->User->find('list');
		$this->set(compact('services', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Listing->id = $id;
		if (!$this->Listing->exists()) {
			throw new NotFoundException(__('Invalid listing'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Listing->delete()) {
			$this->Session->setFlash(__('Listing deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Listing was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}