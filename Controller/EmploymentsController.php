<?php
App::uses('AppController', 'Controller');
/**
 * Employments Controller
 *
 * @property Employment $Employment
 */
class EmploymentsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employment->recursive = 0;
		$this->set('employments', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employment->exists($id)) {
			throw new NotFoundException(__('Invalid employment'));
		}
		$options = array('conditions' => array('Employment.' . $this->Employment->primaryKey => $id));
		$this->set('employment', $this->Employment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employment->create();
			if ($this->Employment->save($this->request->data)) {
				$this->Session->setFlash(__('The employment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment could not be saved. Please, try again.'));
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
		if (!$this->Employment->exists($id)) {
			throw new NotFoundException(__('Invalid employment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employment->save($this->request->data)) {
				$this->Session->setFlash(__('The employment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employment.' . $this->Employment->primaryKey => $id));
			$this->request->data = $this->Employment->find('first', $options);
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
		$this->Employment->id = $id;
		if (!$this->Employment->exists()) {
			throw new NotFoundException(__('Invalid employment'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employment->delete()) {
			$this->Session->setFlash(__('Employment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
