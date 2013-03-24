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

	public function beforeFilter() {
	    $this->Auth->allow('index', 'view');
	}

/**
 * index method
 *
 * @return void
 */
        public function search() {
            if($this->request->data) {
                if (empty($this->request->data['Listing']['search'])) {
                    $this->Session->setFlash('Please enter a search string', 'default', array( 'class' => 'alert alert-warning'));
                    return;
                }
            
                $val = $this->request->data['Listing']['search'];  
            
                $this->paginate = array(
                  'conditions' => array('Listing.summary LIKE' => '%'.$val.'%',
                  'Listing.pitcher_or_catcher =' => $this->request->data['Listing']['pitcher_or_catcher']));
               
                
                
                $listing = $this->paginate('Listing');
                $this->set('listings', $listing);
                
            } 
            
                //just search for everything
		//$this->Listing->recursive = 0;
		//$this->set('listings', $this->paginate());
	}
        
        
        
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
		if ($this->request->is('post') ) {
			$this->Listing->create();
			if ($this->Listing->save($this->request->data)) {
				$this->Session->setFlash('The listing has been saved', 'default', array( 'class' => 'alert alert-success'));
				$this->redirect('/users/view/' . $this->Auth->user('id'));
			} else {
				$this->Session->setFlash('The listing could not be saved. Please try again.', 'default', array( 'class' => 'alert alert-danger'));
			}
		}
		$service = 1;
		$services = $this->Listing->Service->find('list');
		$user = $this->Auth->user('id');
		$this->set(compact('service', 'services', 'user'));
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
				$this->redirect('/users/view/' . $this->Auth->user('id'));
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
