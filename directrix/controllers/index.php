<?php
Class Controller_Index Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        $this->_baseTemplate->addCss('styles/main.css');
		//єто файл templates/index.phtml
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Дирекція HurtovaBaza');
        
        $template->setFile('templates/main.phtml');
        
        $db = $this->_registry->get('db');

        $query_baz = "SELECT * FROM `name_baz`";
        $resultat = mysqli_query($db, $query_baz);
        $roww = mysqli_fetch_array($resultat);

        $template->set('resultat', $resultat);
        $template->set('roww', $roww);

        $date_today = date('Y-m-d');
        $date_page = $_POST['date_page'];
        $date_today_format = date_format(date_create($date_today), 'd.m.Y');
        $date_page_format = date_format(date_create($date_page), 'd.m.Y');

        $template->set('date_page', $date_page);
        $template->set('date_today_format', $date_today_format);
        $template->set('date_page_format', $date_page_format);

        if (!empty($date_page)) {
            $query = "SELECT * FROM vegetables WHERE date='$date_page'";
            $result = mysqli_query($db, $query);
        } 
        else {
            $query = "SELECT * FROM vegetables WHERE date='$date_today'";
            $result = mysqli_query($db, $query);
        }
        $num = mysqli_num_rows($result);

        $template->set('result', $result);
        $template->set('num', $num);

        if (!empty($date_page)) {
            $query2 = "SELECT * FROM fruits WHERE date='$date_page'";
            $result2 = mysqli_query($db, $query2);
        } 
        else {
            $query2 = "SELECT * FROM fruits WHERE date='$date_today'";
            $result2 = mysqli_query($db, $query2);
        }
        $num2 = mysqli_num_rows($result2);

        $template->set('result2', $result2);
        $template->set('num2', $num2);

        if (!empty($date_page)) {
            $query3 = "SELECT * FROM sausage WHERE date='$date_page'";
            $result3 = mysqli_query($db, $query3);
        } 
        else {
            $query3 = "SELECT * FROM sausage WHERE date='$date_today'";
            $result3 = mysqli_query($db, $query3);
        }
        $num3 = mysqli_num_rows($result3);

        $template->set('result3', $result3);
        $template->set('num3', $num3);

        if (!empty($date_page)) {
            $query4 = "SELECT * FROM fish_sm WHERE date='$date_page'";
            $result4 = mysqli_query($db, $query4);
        } 
        else {
            $query4 = "SELECT * FROM fish_sm WHERE date='$date_today'";
            $result4 = mysqli_query($db, $query4);
        }
        $num4 = mysqli_num_rows($result4);

        $template->set('result4', $result4);
        $template->set('num4', $num4);

        if (!empty($date_page)) {
            $query5 = "SELECT * FROM remake WHERE date='$date_page'";
            $result5 = mysqli_query($db, $query5);
        } 
        else {
            $query5 = "SELECT * FROM remake WHERE date='$date_today'";
            $result5 = mysqli_query($db, $query5);
        }
        $num5 = mysqli_num_rows($result5);

        $template->set('result5', $result5);
        $template->set('num5', $num5);

        if (!empty($date_page)) {
            $query6 = "SELECT * FROM ovis WHERE date='$date_page'";
            $result6 = mysqli_query($db, $query6);
        } 
        else {
            $query6 = "SELECT * FROM ovis WHERE date='$date_today'";
            $result6 = mysqli_query($db, $query6);
        }
        $num6 = mysqli_num_rows($result6);

        $template->set('result6', $result6);
        $template->set('num6', $num6);

        if (!empty($date_page)) {
            $query7 = "SELECT * FROM radema WHERE date='$date_page'";
            $result7 = mysqli_query($db, $query7);
        } 
        else {
            $query7 = "SELECT * FROM radema WHERE date='$date_today'";
            $result7 = mysqli_query($db, $query7);
        }
        $num7 = mysqli_num_rows($result7);

        $template->set('result7', $result7);
        $template->set('num7', $num7);

        $this->_renderLayout($template);
    }
}