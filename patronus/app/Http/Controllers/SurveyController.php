<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Score;
use App\User;

class SurveyController extends Controller
{
	public function send()
	{
		// $this->validate(request(), [
		// 		'field1' => 'required',
		// 		'field2' => 'required',
		// 		'field3' => 'required'
		// 	]);
		$final = array();
		$q1 = request('field1');
		switch ($q1) {
			case 1:
			array_push($final, array("1","0","0","0","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0","0","0","0"));
			break;
			case 3:
			array_push($final, array("0","0","1","0","0","0","0"));
			break;
			case 4:
			array_push($final, array("0","0","0","1","0","0","0"));
			break;
			case 5:
			array_push($final, array("0","0","0","0","1","0","0"));
			break;
			default:
			array_push($final, array("0","0","0","0","0","0","0"));
		}

		$q2 = request('field2');
		switch ($q2) {
			case 1:
			array_push($final, array("1","0"));
			break;
			case 2:
			array_push($final, array("0","1"));
		}

		$q3 = request('field3');
		switch ($q3) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q4 = request('field4');
		switch ($q4) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q5 = request('field5');
		switch ($q5) {
			case 1:
			array_push($final, array("1","0","0","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0","0","0"));
			break;
			case 3:
			array_push($final, array("0","0","1","0","0","0"));
			break;
			default:
			array_push($final, array("0","0","0","0","0","0"));
		}

		$q6 = request('field6');
		switch ($q6) {
			case 1:
			array_push($final, array("1","0","0","0","0","0","0","0","0","0","0","0","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0","0","0","0","0","0","0","0","0","0","0","0"));
			break;
			case 3:
			array_push($final, array("0","0","1","0","0","0","0","0","0","0","0","0","0","0","0"));
			break;
			case 4:
			array_push($final, array("0","0","0","1","0","0","0","0","0","0","0","0","0","0","0"));
			break;
			case 5:
			array_push($final, array("0","0","0","0","1","0","0","0","0","0","0","0","0","0","0"));
			break;
			case 6:
			array_push($final, array("0","0","0","0","0","1","0","0","0","0","0","0","0","0","0"));
			break;
			case 7:
			array_push($final, array("0","0","0","0","0","0","1","0","0","0","0","0","0","0","0"));
			break;
			case 8:
			array_push($final, array("0","0","0","0","0","0","0","1","0","0","0","0","0","0","0"));
			break;
			case 9:
			array_push($final, array("0","0","0","0","0","0","0","0","1","0","0","0","0","0","0"));
			break;
			case 10:
			array_push($final, array("0","0","0","0","0","0","0","0","0","1","0","0","0","0","0"));
			break;
			case 12:
			array_push($final, array("0","0","0","0","0","0","0","0","0","0","1","0","0","0","0"));
			break;
			case 13:
			array_push($final, array("0","0","0","0","0","0","0","0","0","0","0","1","0","0","0"));
			break;
			case 14:
			array_push($final, array("0","0","0","0","0","0","0","0","0","0","0","0","1","0","0"));
			break;
			case 15:
			array_push($final, array("0","0","0","0","0","0","0","0","0","0","0","0","0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0","0","0","0","0","0","0","0","0","0","0","0","0"));
		}

		$q7 = request('field7');
		switch ($q7) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q8 = request('field8');
		switch ($q8) {
			case 1:
			array_push($final, array("1","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0"));
			break;
			case 9:
			array_push($final, array("0","0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0","0"));
		}
		$q9 = request('field9');
		switch ($q9) {
			case 1:
			array_push($final, array("1","0","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0","0"));
			break;
			case 3:
			array_push($final, array("0","0","1","0","0",));
			break;
			case 7:
			array_push($final, array("0","0","0","1","0",));
			break;
			default:
			array_push($final, array("0","0","0","0","0"));
		}

		$q10 = request('field10');
		switch ($q10) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q11 = request('field11');
		array_push($final, $q11);

		$q12 = request('field12');
		switch ($q12) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q13 = request('field13');
		switch ($q13) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q14 = request('field14');
		array_push($final, $q14);

		$q15 = request('field15');
		switch ($q15) {
			case 1:
			array_push($final, array("1","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0"));
			break;
			case 9:
			array_push($final, array("0","0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0","0"));
		}

		$q16 = request('field16');
		switch ($q16) {
			case 1:
			array_push($final, array("1","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0"));
		}

		$q17 = request('field17');
		switch ($q17) {
			case 0:
			array_push($final, array("1","0","0","0","0","0","0","0"));
			break;
			case 1:
			array_push($final, array("0","1","0","0","0","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","0","1","0","0","0","0","0"));
			break;
			case 3:
			array_push($final, array("0","0","0","1","0","0","0","0"));
			break;
			case 4:
			array_push($final, array("0","0","0","0","1","0","0","0"));
			break;
			case 5:
			array_push($final, array("0","0","0","0","0","1","0","0"));
			break;
			case 8:
			array_push($final, array("0","0","0","0","0","0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0","0","0","0","0","0"));
		}


		$q18 = request('field18');
		array_push($final, $q18);

		$q19 = request('field19');
		switch ($q19) {
			case 1:
			array_push($final, array("1","0","0","0","0"));
			break;
			case 2:
			array_push($final, array("0","1","0","0","0"));
			break;
			case 7:
			array_push($final, array("0","0","1","0","0"));
			break;
			case 9:
			array_push($final, array("0","0","0","1","0"));
			break;
			default:
			array_push($final, array("0","0","0","0","0"));
		}

		$q20 = "0";
		array_push($final, $q20);

		$result = array();

		$it = new \RecursiveIteratorIterator(new \RecursiveArrayIterator($final));
		foreach($it as $v) {
			array_push($result, $v);
		}

		// dd($result);


		$data = array(
			'Inputs'=> array(
				'input1'=> array(
					'ColumnNames' => array("HUQ010_1", "HUQ010_2", "HUQ010_3", "HUQ010_4", "HUQ010_5", "HUQ010_7", "HUQ010_n", "gender_1", "gender_n", "SLQ050_1", "SLQ050_2", "SLQ050_n", "DLQ040_1", "DLQ040_2", "DLQ040_n", "CSQ090A_1", "CSQ090A_2", "CSQ090A_3", "CSQ090A_7", "CSQ090A_9", "CSQ090A_n", "total_family_income_1", "total_family_income_2", "total_family_income_3", "total_family_income_4", "total_family_income_5", "total_family_income_6", "total_family_income_7", "total_family_income_8", "total_family_income_9", "total_family_income_10", "total_family_income_12", "total_family_income_13", "total_family_income_14", "total_family_income_15", "total_family_income_n", "SMQ681_1", "SMQ681_2", "SMQ681_n", "CSQ080_1", "CSQ080_2", "CSQ080_9", "CSQ080_n", "WHQ040_1", "WHQ040_2", "WHQ040_3", "WHQ040_7", "WHQ040_n", "PAQ635_1", "PAQ635_2", "PAQ635_n", "SXD031", "HSQ510_1", "HSQ510_2", "HSQ510_n", "DLQ050_1", "DLQ050_2", "DLQ050_n", "ALQ130", "PFQ057_1", "PFQ057_2", "PFQ057_9", "PFQ057_n", "HSQ520_1", "HSQ520_2", "HSQ520_n", "PAQ710_0", "PAQ710_1", "PAQ710_2", "PAQ710_3", "PAQ710_4", "PAQ710_5", "PAQ710_8", "PAQ710_n", "CBD070", "DUQ200_1", "DUQ200_2", "DUQ200_7", "DUQ200_9", "DUQ200_n", "DPQ_SCORE"),
					'Values' => array( $result,
						$result)
					),
				),
			'GlobalParameters'=> null
			);
		// $arr = request()->all();
		// $new_arr = [];
		// foreach ($arr as $item) {
		// 	array_push($new_arr, $item);
		// } 
		// dd($new_arr);
		// dd($data);

		$body = json_encode($data);

		$url = 'https://ussouthcentral.services.azureml.net/workspaces/f017c1473f47439f85595a1c3c360421/services/90d82efbf7aa422b98fa81b81edb6b45/execute?api-version=2.0&details=true';
		$api_key = '0DIMb6Sk054R3F8TGT2fPHZZuE+ZhfULY59V+lQ7Be5mefHWMYlLz7bv9dWP0Y9iDujCGW7bd1eWL4eHzWnocg=='; 
		$headers = array('Content-Type: application/json', 'Authorization:Bearer ' . $api_key, 'Content-Length: ' . strlen($body));

		$this->responseArray['body'] = $body;




		$curl = curl_init($url); 
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);


		$response = curl_exec($curl);
		// $obj = json_decode( $response, true );

		// $score = $response;
		$ind = strpos($response, 'Values') + 11;
		$end = $ind + 5;

		// dd(substr($response, $ind, 5));
		$lalala = substr($response, $ind, 5);
		// echo "<script type='text/javascript'>alert('$lalala');</script>";
		// dd(substr($response, $ind, 5));
		// dd($lalala);
		
		$sc = new Score();
		$sc->owner = auth()->user()->id;
		$sc->score = $lalala * 1.0;
		$sc->save();

		$scores = auth()->user()->scores;
		$scores = $scores->sortByDesc(function($score)
		{
			return $score->created_at;
		});

		return view('past', compact('scores'));
	}

	public function history()
	{
		$scores = auth()->user()->scores;
		$scores = $scores->sortByDesc(function($score)
		{
			return $score->created_at;
		});

		return view('past', compact('scores'));
		
	}

}
