<?php 
/*$a = new Crypton)(;
echo $a->encrypt("asd");*/
class Crypton 
{
	public function decrypt($string,$llave) {
	$key = $llave;
	$result = '';
	$string = base64_decode($string);
	for($i=0; $i<strlen($string); $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)-ord($keychar));
		$result.=$char;
	}
	return $result;
}
	public function encrypt($string,$llave) {
	$key = $llave;
	$result = '';
	for($i=0; $i<strlen($string); $i++) {
		$char = substr($string, $i, 1);
		$keychar = substr($key, ($i % strlen($key))-1, 1);
		$char = chr(ord($char)+ord($keychar));
		$result.=$char;
	}
	return base64_encode($result);
}
}
//https://github.com/ThoughtfulDev/EagleEye 
 ?>
 