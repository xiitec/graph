<?php
App::uses('AppController', 'Controller', 'Security', 'Utility');
 
 /*
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

	public function beforeFilter() {
	    parent::beforeFilter();
	    $this->Auth->allow('index', 'join');
	}
	
	public function beforeSave($options = array()) {
	        if (isset($this->data['User']['password'])) {
	            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	        }
	        return true;
	}
   

	public $components = array(
	    'Auth' => array(
	        'loginAction' => array(
	            'controller' => 'users'
	        ),
	        'authError' => 'Did you really think you are allowed to see that?',
	        'authenticate' => array(
	            'Form' => array(
	                'fields' => array('username' => 'email')
	            )
	        )
	    )
);
	



	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}


	 public function join() {
		
	    //$this->set('ip', $client_ip);
	
	    if ($this->request->is('post')) {
	    	//$this->request->data['User']['ip'] = $client_ip;
	
			$this->request->data['User']['password'] = md5($this->request->data['User']['password']);
	    	
	    	$this->User->create();

			if ($this->User->save($this->request->data)) {
	    		$this->Session->setFlash(__('Welcome pledgebay'));


	    			$this->redirect(array('action' => 'home'));
	            } else {
	            	$this->Session->setFlash(__('Please fix the problems below and try again'));
	            }
		}
	  }
	 
	public function login() {
		//$this->Session->setFlash('Username or password is incorrect');
	    if ($this->request->is('post')) {
	    	
	        if ($this->Auth->login()) {
	            echo "worked";
	        } else {
	            $this->Session->setFlash(__('Username or password is incorrect'));
	        }
	    }
	
	//echo debug($this);
	}

	public function home() {
		
		
	}  


	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The employment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employment could not be saved. Please, try again.'));
			}
		}
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
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
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
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
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
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
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
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
?>