<?php
App::uses('AppController', 'Controller', 'Security', 'Utility');
App::uses('CakeEmail', 'Network/Email');
 
 /*
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {
    
 
	//public $components = array('Auth');
	public $components = array(
	    'Auth' => array(
	        'authenticate' => array(
	            'Form' => array(
	                'fields' => 
	                	array('username' => 'email', 
                                      'password' => 'password')
	            )
	        )
    	)
	);


	public function beforeFilter() {
	    $this->Auth->allow('index', 'join', 'logout', 'resetpass', 'forgotpass');
	}


	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}


	 public function join() {
	    if ($this->request->is('post')) {
	    	if ($this->request->data['User']['password'] == $this->request->data['User']['password_confirm']) {
	    		$this->User->create();	
	    	} else {
	    		$this->Session->setFlash(__('Your passwords do not match, please try again'));
				return;
			}

			if ($this->User->save($this->request->data)) {
	    		$this->Session->setFlash('Welcome to ProDono', 'default', array( 'class' => 'alert alert-success'));
	    			$this->Auth->login();
	    			$this->redirect('/users/view/' . $this->User->id);
	            } else {
	            	$this->Session->setFlash(__('Please fix the problems below and try again'));
	            }
		}
		$charities = $this->User->Charity->find('list');
		$this->set(compact('charities'));
                $this->set('join','1');
	  }

	public function login() {
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->Session->setFlash('Welcome back', 'default', array( 'class' => 'alert alert-success'));
	            $this->redirect('/users/view/' . $this->Auth->user('id'));
	        } else {
	            $this->Session->setFlash(__('Username or password is incorrect'));
	        }
		
	    }
	
	//echo debug($this);
	}

	public function logout() {
		if($this->Auth->logout()) {
			$this->Session->setFlash('You have been logged out', 'default', array('class' => 'alert alert-success'));
                        return true;	
		};
		
	}
	
	//this is where you request your key
	public function resetpass() {
		if ($this->Auth->login()) {
			$this->Session->setFlash('You have been logged out', 'default', array('class' => 'alert alert-success'));
                        $this->Auth->logout();
                        return;
		}
		if ($this->request->is('post')) {		
			$this->User->id = $this->User->find('first', array('conditions' => array('email' => $this->request->data['User']['email']))); //find the user based on email
			if(!$this->User->id) {
                            $this->Session->setFlash('Email not found', 'default', array('class' => 'alert alert-danger'));
                            return;
                        }
                        $key = md5(date('H:i:s').'7ff7dsad34');
			$s1 = $this->User->saveField('hashdate', date('Y-m-d H:i:s'));

			$s2 = $this->User->saveField('resetkey', $key);
		
			//email the user	
			if ($s1 && $s2) {
				$emailcontent = 'Please go to <a href="http://prodono.co/users/forgotpass/'.$key.'">This Link</a> to reset your password';
                                
                            $Email = new CakeEmail();
				$Email->from(array('admin@prodono.co' => 'ProDono'))
				    ->to($this->request->data['User']['email'])
				    ->subject('Password reset from Prodono')
				    ->send($emailcontent);
                        
                            if($Email) {
                                $this->Session->setFlash('Please check your email for instructions', 'default', array('class' => 'alert alert-success'));
                            } else {
                                $this->Session->setFlash('The email failed to send, please try again', 'default', array('class' => 'alert alert-danger'));

                            }
                        }
			
		}
	}  

        
	//this is where you come with your key
	public function forgotpass($hash = null) {
		$hash = mysql_escape_string($hash);
		if ($hash == null) {
			$this->Session->setFlash('Must have a hash', 'default', array('class' => 'alert alert-danger'));
			$this->set('nohash', 1);			
		} else {
			$user = $this->User->find('first', array('conditions' => array('resetkey' => $hash)));
			if($user) {
				$this->set('nohash', 0);
				if ($this->request->is('post')) { //if data is submitted
					$this->User->id = $user['User']['id'];
						if($this->data['User']['password'] == $this->data['User']['password_confirm']) {
							$q = $this->User->saveField('password', $this->data['User']['password']);
								if($q) {
									$this->Session->setFlash('Your password has been reset, please log in', 'default', array('class' => 'alert alert-danger'));
                                                                        $this->redirect(array('action'=>'login'));                                                                        
                                                                }
                                                }
                                }
                                
				$this->set('nohash', 0);	
				
				if ($this->request->is('post')) { //if form is submitted
					$this->User->id = $user['User']['id'];
				
					if ($this->time_diff($user['User']['hashdate']) > 5) {
						$this->Session->setFlash(__('Your hash is older than 5 days, please request a new one'));	
						return;
					}
				
						if($this->data['User']['password'] == $this->data['User']['password_confirm']) {
							$q = $this->User->saveField('password', $this->data['User']['password']);
								if($q) {
									$this->Session->setFlash(__('your password has been reset'));
								}
						}					
				}	
				
			} else {
				$this->Session->setFlash(__('bad hash'));
				$this->set('nohash', 1);	
			}					
		}		
	}


	function time_diff($dt1,$dt2=null){
		if ($dt2==null) {
			$dt2 = date('Y-m-d H:i:m');		
		}
		$seconds_diff = strtotime($dt2) - strtotime($dt1);	
		return floor($seconds_diff/3600/24);
	
	}

	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->User->create();
	// 		if ($this->User->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The employment has been saved'));
	// 			$this->redirect('/users/view/' . $this->User->id);
	// 		} else {
	// 			$this->Session->setFlash(__('The employment could not be saved. Please, try again.'));
	// 		}
	// 	}
	// 	$charities = $this->User->Charity->find('list');
	// 	$this->set(compact('charities'));
	// }




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
		$this->paginate = array(
		    'conditions' => array('Listing.user_id =' => $id,
		    	'Listing.active =' => 0)
		);
		$archived_listings = $this->paginate('Listing');
		$this->paginate = array(
		    'conditions' => array('Listing.user_id =' => $id,
		    	'Listing.active =' => 1)
		);
    	$current_listings = $this->paginate('Listing');
		$this->set('user', $this->User->find('first', $options));
		$this->set('archived_listings', $archived_listings);
		$this->set('current_listings', $current_listings);
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
				$this->Session->setFlash('Success', 'default', array('class' => 'alert alert-danger'));
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
			$this->Session->setFlash('Account Deleted', 'default', array('class' => 'alert alert-success'));
			$this->Auth->logout();
			$this->redirect("/");
		}
			$this->Session->setFlash('Error: Contact Site Admin', 'default', array('class' => 'alert alert-danger'));
		$this->redirect(array('action' => 'index'));
	}

}
?>