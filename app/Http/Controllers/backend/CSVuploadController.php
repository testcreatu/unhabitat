<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\BlogsImport;

class CSVuploadController extends Controller
{
	public function addNewsCsvForm()
	{
		return view('cd-admin.csv.add-news-csv-form');
	}

	public function addNewsCsv(Request $request)
	{
		$data = $this->validate($request,[
			'file' => 'required',  
		]);
		// dd($data);
		if($request->hasFile('file'))
		{
			 Excel::import(new BlogsImport, $request->file('file')->getRealPath());
			 dd('here1');
			// dd($request->file('file')->getRealPath());
			// $path = $request->file('file')->getRealPath();
			
			// $redear = \Excel::load($request->file('file')->getRealPath(),function($render){}); 
			// dd($redear);
			// foreach ($redear->toArray() as $key => $row) 
			// {
			// 	foreach($row as $r)
			// 	{
			// 		$data['question'] = $r['question'];
			// 		$data['option_1'] = $r['option_1'];
			// 		$data['option_2'] = $r['option_2'];
			// 		$data['option_3'] = $r['option_3'];
			// 		$data['option_4'] = $r['option_4'];
			// 		$data['isright'] = $r['isright'];
			// 		$data['solution'] = $r['solution'];
			// 		$data['created_at'] = Carbon::now();
			// 		$data['updated_at'] = Carbon::now();
			// 		$data['exam_id'] = $id;
			// 		if(!empty($data)) {     
			// 			DB::table('blogs')->insert($data);     
			// 		}
			// 	}
			// }
		}
	}
}
