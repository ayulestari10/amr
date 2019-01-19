<?php 
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

class SpreadsheetHandler
{
	private $reader;
	private $CI;

	public function __construct()
	{
		$this->reader = new Xlsx(); 
		$this->CI =& get_instance();
	}

	public function read($filepath)
	{
		$spreadsheet 	= $this->reader->load($filepath);
		$sheet 			= $spreadsheet->getActiveSheet();
		return $sheet;
	}

	public function saveToDB($sheet, $model)
	{
		$data = $this->serialize($sheet);
		$this->CI->load->model($model);
		call_user_func_array($model . '::insert', [$data]);
	}

	/**
	 * Import excel ke database dengan menentukan batas kolom. Misal: dari kolom A - E
	 * @param object $sheet
	 * @param object $model
	 * @param array $boundaries optional
	 */
	public function saveToDBCell($sheet, $model, $boundaries = [])
	{
		// TODO
	}

	private function serialize($sheet)
	{
		$data 		= [];
		$columns 	= [];
		foreach ($sheet->getRowIterator() as $i => $row)
		{
			if ($i == 0)
			{
				continue;
			}

			$cellIterator 	= $row->getCellIterator();
			$record 		= [];
			$j = 0;
			foreach ($cellIterator as $cell)
			{
				if ($i == 1)
				{
					$columns []= $cell->getValue();
				}
				else
				{
					$record[$columns[$j]] = $cell->getValue();
				}
				$j++;
			}

			if ($i > 1)
			{
				$data []= $record;
			}
		}

		return $data;
	}
}