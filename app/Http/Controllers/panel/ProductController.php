<?php
	
	namespace App\Http\Controllers\panel;
	
	use App\Imports\CategoriesImport;
	use App\Imports\ProductsImport;
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Maatwebsite\Excel\Facades\Excel;
	
	class ProductController extends Controller
	{
		public function index(Request $request)
		{
		
		}
		
		public function import(Request $request)
		{
			Excel::import(new ProductsImport(), $request->file('file'));
			
			return back();
		}
	}
