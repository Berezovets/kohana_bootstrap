<?php defined('SYSPATH') or die('No direct script access.');
 
class Model_Articles extends Model
{
    public function getcustomer() // функция получения 
    {
        return DB::select('id', 'first_name', 'last_name', 'email', 'adress', 'city', 'country')
                ->from('articles')
                ->execute()
                ->as_array(); 
    }
 
    public function addcustomer($first_name, $last_name, $email, $adress, $city, $country) // функция добавления 
    {
        return DB::insert('articles', array('first_name', 'last_name', 'email', 'adress', 'city', 'country'))
                ->values(array($first_name, $last_name, $email, $adress, $city, $country))
                ->execute();
    }
    
    public function upcustomer($first_name, $last_name, $email, $adress, $city, $country, $id) // функция обновления
    {
         return DB::update('articles')
        ->set(array('first_name' => $first_name))
        ->set(array('last_name' => $last_name))
        ->set(array('email' => $email))
        ->set(array('adress' => $adress))
        ->set(array('city' => $city))
        ->set(array('country' => $country))
        ->where('id', '=', $id)
        ->execute();
    }
    
    public function delcustomer($id) // функция удаления
    {
        return DB::delete('articles')
        ->where('id', '=', $id)
        ->execute();
    }
    
   
}
