<?
$result = [];
if($input->post){
	$rules = ['helpfulness'=>'v.range|3'];
	if($input->handle($rules)){
		$result = 'Fabulous!';
	}else{
		$template->title = 'You Fail!';
		$result = ['errors'=>$input->errors];
	}
}
echo $template->get_current(['result'=>$result]);