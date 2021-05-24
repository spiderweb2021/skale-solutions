<?php 

function timediff($data1,$date2)
{
	$datetime1 = new DateTime($data1);
$datetime2 = new DateTime($date2);
$interval = $datetime1->diff($datetime2);
echo $interval->format('%h')." Hours ".$interval->format('%i')." Minutes";
}


function getEmailTemplateById($id, $column){
    $template   = \App\EmailTemplate::find($id);
    if(count($template) > 0){
        return $template->$column;
    }
}

function get_project_notification_count(){

	return \App\Http\Controllers\ProjectController::getPendingProjectCount();
}
?>