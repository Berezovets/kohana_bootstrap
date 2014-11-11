<?php defined('SYSPATH') or die('No direct script access.');
 
class Controller_Ajax extends Controller {
 
    public function action_getarticles() // метод вывода данных
    {
        if (Request::initial()->is_ajax()) // выполняем только если запрос был через Ajax
        {
            $articles = new Model_Articles();
            $data['articles'] = $articles->getcustomer(); // получаем массив с данными
            echo View::factory('Getcustomer',$data)->render(); // и выводим
        }
    }
 
    public function action_addarticle()
    {
        if (Request::initial()->is_ajax()) // только если запрос был через Ajax
        {
            sleep(3); 
            $result = array('code'=>'error'); // по умолчанию возвращаем код с ошибкой
 
            $post = Validation::factory($_POST); // готовимся к проведению валидации
            $post-> rule('first_name', 'alpha')
                 -> rule('email', 'email')               
                 -> rule('last_name', 'alpha')
                 -> rule('adress', 'alpha')
                 -> rule('city', 'alpha')
                 -> rule('country', 'alpha');
      
                 
                   
            if($post -> check()) // проводим валидацию
            {
                $first_name = Arr::get($_POST, 'first_name', '');
                $last_name = Arr::get($_POST, 'last_name', '');
                $email = Arr::get($_POST, 'email', '');
                $adress = Arr::get($_POST, 'adress', '');
                $city = Arr::get($_POST, 'city', '');
                $country = Arr::get($_POST, 'country', '');
                
                $articles = new Model_Articles();
                if ($articles->addcustomer($first_name, $last_name, $email, $adress, $city, $country)) // если валидация прошла успешно и запись в БД новой статьи прошла успешно
                {
                    $result['code'] = 'success'; // возвращаем код успеха
                }
            }
 
            echo json_encode($result); // на выходе отдаем код в формате JSON
        }
    }
    
     public function action_uparticle()
    {
        if (Request::initial()->is_ajax()) 
        {
            sleep(3); 
            $result = array('code'=>'error'); 
 
            $post = Validation::factory($_POST); 
            $post -> rule('first_name', 'alpha')
                 -> rule('email', 'email')               
                 -> rule('last_name', 'alpha')
                 -> rule('adress', 'alpha')
                 -> rule('city', 'alpha')
                 -> rule('country', 'alpha')
                  -> rule('id', 'alpha_numeric');
                  
            if($post -> check()) 
            {
                $id = Arr::get($_POST, 'id', '');
                $first_name = Arr::get($_POST, 'first_name', '');
                $last_name = Arr::get($_POST, 'last_name', '');
                $email = Arr::get($_POST, 'email', '');
                $adress = Arr::get($_POST, 'adress', '');
                $city = Arr::get($_POST, 'city', '');
                $country = Arr::get($_POST, 'country', '');
                
                
                $articles = new Model_Articles();
                if ($articles->upcustomer($first_name, $last_name, $email, $adress, $city, $country, $id)) 
                {
                    $result['code'] = 'success';
                }
            }
 
            echo json_encode($result); 
        }
    }
    
     public function action_delarticle()
    {
        if (Request::initial()->is_ajax()) 
        {
            sleep(3); 
            $result = array('code'=>'error');
 
            $post = Validation::factory($_POST); 
            $post -> rule('id', 'alpha_numeric')
                  -> rule('id', 'not_empty');
             if($post -> check()) 
             {
                $id = Arr::get($_POST, 'id', '');
                
                $articles = new Model_Articles();
                if ($articles->delcustomer($id)) 
                {
                    $result['code'] = 'success';
                }
            }
 
            echo json_encode($result);
        }
    }
 
}
