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
      $query_fruits = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 24 ";

      $query_driedfruit = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 7 OFFSET 24";

      $query_vegetables = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 34 OFFSET 31";

      $query_sausage = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 48 OFFSET 65";

      $query_cheese = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 11 OFFSET 113";

      $query_fish_processing = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 35 OFFSET 124";

      $query_fish_sm = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 10 OFFSET 159";

      $query_ovis = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 24 OFFSET 169";

      $query_radema = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_page' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_page' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_page' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_page' ORDER BY t1.id LIMIT 8 OFFSET 193";
    } 
    else {
     $query_fruits = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 24 ";

     $query_driedfruit = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 7 OFFSET 24"; 

     $query_vegetables = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 34 OFFSET 31";  

     $query_sausage = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 48 OFFSET 65";  

     $query_cheese = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 11 OFFSET 113";  

     $query_fish_processing = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 35 OFFSET 124";  

     $query_fish_sm = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 10 OFFSET 159";  

     $query_ovis = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 24 OFFSET 169";  

     $query_radema = "SELECT t1.id, t1.label, t2.number as t2number, t2.date as t2date, t3.number as t3number, t3.date as t3date, t4.number as t4number, t4.date as t4date, t5.number as t5number, t5.date as t5date from name_tovar as t1 left join distribution_bochka as t2 on t1.id = t2.tovar_id and t2.date = '$date_today' left join distribution_fish_terminal as t3 on t1.id = t3.tovar_id and t3.date = '$date_today' left join distribution_gurtovnya as t4 on t1.id = t4.tovar_id and t4.date = '$date_today' left join distribution_center as t5 on t1.id = t5.tovar_id and t5.date = '$date_today' ORDER BY t1.id LIMIT 8 OFFSET 193";             
   }
   $result_fruits = mysqli_query($db, $query_fruits);
   $num_fruits = mysqli_num_rows($result_fruits);
   $template->set('result_fruits', $result_fruits);
   $template->set('num_fruits', $num_fruits);

   $result_driedfruit = mysqli_query($db, $query_driedfruit);
   $num_driedfruit = mysqli_num_rows($result_driedfruit);
   $template->set('result_driedfruit', $result_driedfruit);
   $template->set('num_driedfruit', $num_driedfruit);

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