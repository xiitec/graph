<?php
App::uses('AppController', 'Controller');
/**
 * UsersCharities Controller
 *
 * @property UsersCharity $UsersCharity
 */
class UsersCharitiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UsersCharity->recursive = 0;
		$this->set('usersCharities', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersCharity->exists($id)) {
			throw new NotFoundException(__('Invalid users charity'));
		}
		$options = array('conditions' => array('UsersCharity.' . $this->UsersCharity->primaryKey => $id));
		$this->set('usersCharity', $this->UsersCharity->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersCharity->create();
			if ($this->UsersCharity->save($this->request->data)) {
				$this->Session->setFlash(__('The users charity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users charity could not be saved. Please, try again.'));
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
		if (!$this->UsersCharity->exists($id)) {
			throw new NotFoundException(__('Invalid users charity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UsersCharity->save($this->request->data)) {
				$this->Session->setFlash(__('The users charity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users charity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersCharity.' . $this->UsersCharity->primaryKey => $id));
			$this->request->data = $this->UsersCharity->find('first', $options);
		}
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
		$this->UsersCharity->id = $id;
		if (!$this->UsersCharity->exists()) {
			throw new NotFoundException(__('Invalid users charity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UsersCharity->delete()) {
			$this->Session->setFlash(__('Users charity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Users charity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UsersCharity->recursive = 0;
		$this->set('usersCharities', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UsersCharity->exists($id)) {
			throw new NotFoundException(__('Invalid users charity'));
		}
		$options = array('conditions' => array('UsersCharity.' . $this->UsersCharity->primaryKey => $id));
		$this->set('usersCharity', $this->UsersCharity->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UsersCharity->create();
			if ($this->UsersCharity->save($this->request->data)) {
				$this->Session->setFlash(__('The users charity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users charity could not be saved. Please, try again.'));
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
		if (!$this->UsersCharity->exists($id)) {
			throw new NotFoundException(__('Invalid users charity'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UsersCharity->save($this->request->data)) {
				$this->Session->setFlash(__('The users charity has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users charity could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersCharity.' . $this->UsersCharity->primaryKey => $id));
			$this->request->data = $this->UsersCharity->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->UsersCharity->id = $id;
		if (!$this->UsersCharity->exists()) {
			throw new NotFoundException(__('Invalid users charity'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UsersCharity->delete()) {
			$this->Session->setFlash(__('Users charity deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Users charity was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
