<?php
Class Controller_Distribution Extends Controller_Base 
{
  protected function _initTemplate($title)
  {

    return parent::_initTemplate($title);

  }

  public function index() 
  {

    $template = $this->_initTemplate('Розприділення');

    $template->setFile('templates/distribution.phtml');

    $db = $this->_registry->get('db');

    $date_today = date('Y-m-d');
    $date_page = $_POST['date_page'];
    $date_today_format = date_format(date_create($date_today), 'd.m.Y');
    $date_page_format = date_format(date_create($date_page), 'd.m.Y');

    $template->set('date_page', $date_page);
    $template->set('date_today_format', $date_today_format);
    $template->set('date_page_format', $date_page_format);

    if (!empty($date_page)) {
      $query_fruits = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_fruits as t1 left join distribution_bochka_fruits as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_fruits as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_fruits as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_fruits as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ";

      $query_vegetables = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_vegetables as t1 left join distribution_bochka_vegetables as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_vegetables as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_vegetables as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_vegetables as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";

      $query_sausage = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_sausage as t1 left join distribution_bochka_sausage as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_sausage as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_sausage as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_sausage as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";

      $query_cheese = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_cheese as t1 left join distribution_bochka_cheese as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_cheese as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_cheese as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_cheese as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";

      $query_fish_processing = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_fish_processing as t1 left join distribution_bochka_fish_processing as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_fish_processing as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_fish_processing as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_fish_processing as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";

      $query_fish_sm = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_fish_sm as t1 left join distribution_bochka_fish_sm as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_fish_sm as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_fish_sm as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_fish_sm as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";

      $query_ovis = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_ovis as t1 left join distribution_bochka_ovis as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_ovis as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_ovis as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_ovis as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";

      $query_radema = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_radema as t1 left join distribution_bochka_radema as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal_radema as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya_radema as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center_radema as t5 on t1.id = t5.tovar_id and t5.date = '$date_page'";
    } 
    else {
     $query_fruits = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_fruits as t1 left join distribution_bochka_fruits as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_fruits as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_fruits as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_fruits as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' "; 

     $query_vegetables = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_vegetables as t1 left join distribution_bochka_vegetables as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_vegetables as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_vegetables as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_vegetables as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'"; 

     $query_sausage = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_sausage as t1 left join distribution_bochka_sausage as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_sausage as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_sausage as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_sausage as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'"; 

     $query_cheese = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_cheese as t1 left join distribution_bochka_cheese as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_cheese as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_cheese as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_cheese as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'";  

     $query_fish_processing = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_fish_processing as t1 left join distribution_bochka_fish_processing as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_fish_processing as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_fish_processing as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_fish_processing as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'";  

     $query_fish_sm = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_fish_sm as t1 left join distribution_bochka_fish_sm as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_fish_sm as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_fish_sm as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_fish_sm as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'";  

     $query_ovis = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_ovis as t1 left join distribution_bochka_ovis as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_ovis as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_ovis as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_ovis as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'";  

     $query_radema = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from tovar_radema as t1 left join distribution_bochka_radema as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal_radema as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya_radema as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center_radema as t5 on t1.id = t5.tovar_id and t5.date = '$date_today'";             
   }
   $result_fruits = mysqli_query($db, $query_fruits);
   $num_fruits = mysqli_num_rows($result_fruits);
   $template->set('result_fruits', $result_fruits);
   $template->set('num_fruits', $num_fruits);

   $result_vegetables = mysqli_query($db, $query_vegetables);
   $num_vegetables = mysqli_num_rows($result_vegetables);
   $template->set('result_vegetables', $result_vegetables);
   $template->set('num_vegetables', $num_vegetables);

   $result_sausage = mysqli_query($db, $query_sausage);
   $num_sausage = mysqli_num_rows($result_sausage);
   $template->set('result_sausage', $result_sausage);
   $template->set('num_sausage', $num_sausage);

   $result_cheese = mysqli_query($db, $query_cheese);
   $num_cheese = mysqli_num_rows($result_cheese);
   $template->set('result_cheese', $result_cheese);
   $template->set('num_cheese', $num_cheese);

   $result_fish_processing = mysqli_query($db, $query_fish_processing);
   $num_fish_processing = mysqli_num_rows($result_fish_processing);
   $template->set('result_fish_processing', $result_fish_processing);
   $template->set('num_fish_processing', $num_fish_processing);

   $result_fish_sm = mysqli_query($db, $query_fish_sm);
   $num_fish_sm = mysqli_num_rows($result_fish_sm);
   $template->set('result_fish_sm', $result_fish_sm);
   $template->set('num_fish_sm', $num_fish_sm);

   $result_ovis = mysqli_query($db, $query_ovis);
   $num_ovis = mysqli_num_rows($result_ovis);
   $template->set('result_ovis', $result_ovis);
   $template->set('num_ovis', $num_ovis);

   $result_radema = mysqli_query($db, $query_radema);
   $num_radema = mysqli_num_rows($result_radema);
   $template->set('result_radema', $result_radema);
   $template->set('num_radema', $num_radema);        

   $this->_renderLayout($template);
 }
}