<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hem extends CI_Controller {

	public  $message;
    
	public function index()
	{
        $this->home();
	}

    public function home() {
        $main = 'view_home'; // Uniqu for every controller and view
        // Start Head image data
        $data['headImg'] = $this->model_pages->getHead();
        // End Head image data
        
         // If no db table is missing create
        if (    !$this->db->table_exists('pagedata')    || 
                !$this->db->table_exists('blogs')       || 
                !$this->db->table_exists('users')     
                )
            { 
                
            
              $page_tbl = !$this->db->table_exists('pagedata') ? 'Tabell för "sida" saknas, <a href="' . base_url() . 'admin/skapa_sida"> Skapa tabell!</a>' : 'Tabell för sida - OK!';
              $blog_tbl = !$this->db->table_exists('blogs') ? 'Tabell för "blog" saknas, <a href="' . base_url() . 'admin/skapa_blog"> Skapa tabell!</a>' : 'Tabell för blog - OK!';
              $user_tbl = !$this->db->table_exists('users') ? 'Tabell för "medlem" saknas, <a href="' . base_url() . 'admin/skapa_user"> Skapa tabell!</a>' : 'Tabell för medlem - OK!';
            
              $content =  '<p>'. $page_tbl .'</p>';
              $content .= '<p>'. $blog_tbl .'</p>';
              $content .= '<p>'. $user_tbl .'</p>';
              
              $data['content'] = $content;
           //  echo '<p><a href="' . base_url() . 'admin/skapawebsida">Klicka här!</a><p />';
              
              $data['footData'] = NULL;
              $data["result"]   = NULL;
                  //  exit;
        } else {
                
        // Start Foot data
        $data['footData'] = $this->model_pages->getFootData();
        // End Foot  data
        
        // Get hem content from db
        // Parameter in getData('hem')is from 'page' field in 'pagedata' table
        $data["result"] = $this->model_pages->getData('hem'); 
        
        }
        
        // Development controller - 
        // Just temporary, When done developing remove this
            $array = $this->controllerlist->getControllers();
            $data['controller'] = $array;
        // End development controller
        
        // Load View
        $this->load->view('includes/header', $data);
        $this->load->view($main, $data);
        $this->load->view('includes/dev_footer');
        $this->load->view('includes/footer', $data);

        
        } // End func home
} // End class Hem


