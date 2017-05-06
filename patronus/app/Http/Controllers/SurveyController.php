<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function send()
	{
		// $this->validate(request(), [
		// 		'field1' => 'required',
		// 		'field2' => 'required',
		// 		'field3' => 'required'
		// 	]);
		

		$data = array(
		'Inputs'=> array(
			'input1'=> array(
				'ColumnNames' => array("crim", "zn", "lstat", "age", "tax", "rad", "black", "chas", "nox", "rm", "indus", "ptratio", "dis"),
				'Values' => array( array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0"),
					array("0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0"))
				),
			),
		'GlobalParameters'=> null
		);
		$arr = request()->all();
		$new_arr = [];
		foreach ($arr as $item) {
			array_push($new_arr, $item);
		} 
	dd($new_arr);
		// dd($data);

	$body = json_encode($data);

	$url = 'https://ussouthcentral.services.azureml.net/workspaces/f017c1473f47439f85595a1c3c360421/services/dc4f899f935945fb97317a5cf93b8ad8/execute?api-version=2.0&details=true';
	$api_key = 'aoaqKY4aXjMCp70GSAImVEE2l/jizhKvLGCjXQoDeWrFA5Hr+/XGssuCLpledLb4eaD1lW9zEPNJljw80oYz9w=='; 
	$headers = array('Content-Type: application/json', 'Authorization:Bearer ' . $api_key, 'Content-Length: ' . strlen($body));

	$this->responseArray['body'] = $body;

	


	$curl = curl_init($url); 
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


	$result = curl_exec($curl);
	dd($result);
	}

}
