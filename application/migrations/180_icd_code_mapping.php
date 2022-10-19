<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_icd_code_mapping extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
	}

	public function up()
	{
		$fields = array(
			'id' =>
			array(
				'type' => 'BIGINT',
				'constraint' => '20',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
				'null' => FALSE,
			),

			'icd10_code' =>
			array(
				'type' => 'CHAR',
				'constraint' => '50',
				'null' => FALSE,
			),

			'icd10_title' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'icd11_code' =>
			array(
				'type' => 'CHAR',
				'constraint' => '50',
				'null' => TRUE,
			),

			'icd11_title' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'foundation_uri' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'linearization_uri' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('icd_code_mapping');

		// Add data
		$file = APPPATH . "/migrations/icd_code_mapping.csv";

		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);

		$groupData = [];

		$sheetData   = $spreadsheet->getActiveSheet()->toArray();

		$counter = 0;

		foreach ($sheetData as $row) {

			if ($counter == 0) {
				$counter++;
				continue;
			}

			$groupData[] = [
				'icd10_code' => $row[0],
				'icd10_title' => $row[1],
				'icd11_code' => $row[2],
				'icd11_title' => $row[3],
				'foundation_uri' => $row[4],
				'linearization_uri' => $row[5],
			];

			if ($counter == 1000) {
				$this->db->insert_batch('icd_code_mapping', $groupData);

				$counter = 0;
				$groupData = [];
			}
		}

		$this->db->insert_batch('icd_code_mapping', $groupData);
	}

	public function down()
	{
		$this->dbforge->drop_table('icd_code_mapping');
	}
}
