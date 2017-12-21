<?php
/* *
 * @package	usermodel
 * @author	Leah FUentes
 * @copyright	Copyright (c) 2017 , Kapemg (https://kapemug.com)
 * @license	http://opensource.org/licenses/MIT	MIT License]
 * @since	Version 1.0.0
 * @filesource
 */
class User_model extends CI_Model {
    

    /**
     * User model Constructor
     **/
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * THis functions Create User
     * returns id int
     * array $data
     **/
    public function create_user($data){
        return $this->db->insert('ks_user', $data);
    }
    /**
     * THis functions updates User
     * returns user object 
     * array $data
     *      username
     *      email
     *      id
     **/
    public function update_user($data){

    }
    /**
     * THis functions updates User
     * returns user object 
     * array $data
     *      username
     *      email
     *      id
     **/
    public function get_user($data){

    }
        /**
     * THis functions updates User
     * returns user object 
     * array $data
     *      username
     *      email
     *      id
     **/
    public function get_users($data){
        
    }
    
}

?>