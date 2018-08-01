<?php
Class Controller_Purchase Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Закупка');
        
        $template->setFile('templates/purchase.phtml');

        $db = $this->_registry->get('db');

        $date_today = date('Y-m-d');
        $date_page = $_POST['date_page'];
        $date_today_format = date_format(date_create($date_today), 'd.m.Y');
        $date_page_format = date_format(date_create($date_page), 'd.m.Y');

        $template->set('date_page', $date_page);
        $template->set('date_today_format', $date_today_format);
        $template->set('date_page_format', $date_page_format);

        if (!empty($date_page)) {
            $query = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join fruits_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result = mysqli_query($db, $query);
        } 
        else {
            $query = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join fruits_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result = mysqli_query($db, $query);
        }
        $num = mysqli_num_rows($result);

        $template->set('result', $result);
        $template->set('num', $num);

        if (!empty($date_page)) {
            $query2 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join driedfruit_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result2 = mysqli_query($db, $query2);
        } 
        else {
            $query2 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join driedfruit_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result2 = mysqli_query($db, $query2);
        }
        $num2 = mysqli_num_rows($result2);

        $template->set('result2', $result2);
        $template->set('num2', $num2);

        if (!empty($date_page)) {
            $query3 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join vegetables_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result3 = mysqli_query($db, $query3);
        } 
        else {
            $query3 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join vegetables_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result3 = mysqli_query($db, $query3);
        }
        $num3 = mysqli_num_rows($result3);

        $template->set('result3', $result3);
        $template->set('num3', $num3);

        if (!empty($date_page)) {
            $query4 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join sausage_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result4 = mysqli_query($db, $query4);
        } 
        else {
            $query4 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join sausage_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result4 = mysqli_query($db, $query4);
        }
        $num4 = mysqli_num_rows($result4);

        $template->set('result4', $result4);
        $template->set('num4', $num4);

        if (!empty($date_page)) {
            $query5 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join cheese_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result5 = mysqli_query($db, $query5);
        } 
        else {
            $query5 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join cheese_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result5 = mysqli_query($db, $query5);
        }
        $num5 = mysqli_num_rows($result5);

        $template->set('result5', $result5);
        $template->set('num5', $num5);

        if (!empty($date_page)) {
            $query6 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join fish_processing_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result6 = mysqli_query($db, $query6);
        } 
        else {
            $query6 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join fish_processing_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result6 = mysqli_query($db, $query6);
        }
        $num6 = mysqli_num_rows($result6);

        $template->set('result6', $result6);
        $template->set('num6', $num6);

        if (!empty($date_page)) {
            $query7 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join fish_sm_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result7 = mysqli_query($db, $query7);
        } 
        else {
            $query7 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join fish_sm_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result7 = mysqli_query($db, $query7);
        }
        $num7 = mysqli_num_rows($result7);

        $template->set('result7', $result7);
        $template->set('num7', $num7);

        if (!empty($date_page)) {
            $query8 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join ovis_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result8 = mysqli_query($db, $query8);
        } 
        else {
            $query8 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join ovis_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result8 = mysqli_query($db, $query8);
        }
        $num8 = mysqli_num_rows($result8);

        $template->set('result8', $result8);
        $template->set('num8', $num8);

        if (!empty($date_page)) {
            $query9 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join radema_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_page'";
            $result9 = mysqli_query($db, $query9);
        } 
        else {
            $query9 = "SELECT t1.label, t2.number, t2.date from name_tovar as t1 join radema_delivery as t2 on t1.id = t2.tovar_id where t2.date = '$date_today'";
            $result9 = mysqli_query($db, $query9);
        }
        $num9 = mysqli_num_rows($result9);

        $template->set('result9', $result9);
        $template->set('num9', $num9);        

        $this->_renderLayout($template);
    }
}