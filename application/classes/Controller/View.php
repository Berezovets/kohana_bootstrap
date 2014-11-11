<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_View extends Controller_Template {    
 
    public function action_index()
    {   
		$this->template->script = HTML::script('assets/js/addscript.js');
        
        $data = array();
 
        $articles = new Model_Articles();
        $data['articles'] = $articles->getcustomer();  // берем массив клиентов из модели
 
        $this->template->table = View::factory('Getcustomer',$data); // и отправляем его в вид
        $this->template->content = View::factory('Addcustomer'); // выводим форму добавления клиентов
    }
   
     public function action_update()
    {   
		$this->template->script = HTML::script('assets/js/upscript.js'); 
        
        $data = array();
 
        $articles = new Model_Articles();
        $data['articles'] = $articles->getcustomer(); 
 
        $this->template->table = View::factory('Getcustomer',$data);
        $this->template->content = View::factory('Upcustomer'); 
    }
    
    public function action_delete()
    {    
        $this->template->script = HTML::script('assets/js/delscript.js');
       
        $data = array();
 
        $articles = new Model_Articles();
        $data['articles'] = $articles->getcustomer();  
 
        $this->template->table = View::factory('Getcustomer',$data); 
        $this->template->content = View::factory('Delcustomer');
    }
}
