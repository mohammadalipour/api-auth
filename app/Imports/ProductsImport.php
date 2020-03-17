<?php
	
	namespace App\Imports;
	
	use App\Product;
	use Maatwebsite\Excel\Concerns\ToModel;
	
	class ProductsImport implements ToModel
	{
		/**
		 * @param array $row
		 * @return Product|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model[]|null
		 */
		public function model(array $row)
		{
			return new Product([
				'category_id' => $row[0],
				'title'       => $row[1],
				'price'       => $row[2],
				'count'       => $row[3],
				'description' => $row[4]
			]);
		}
	}
