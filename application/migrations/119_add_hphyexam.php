<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_Hphyexam extends CI_Migration
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
			'ext_grossdeformity' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'ext_normalgait' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'ext_fullequalpulses' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'ext_others' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 100,
				'default' => null,
				'null' => TRUE,
			),

			'pectr' =>
			array(
				'type' => 'INT',
				'constraint' => 11,
				'default' => null,
				'null' => TRUE,
			),

			'skin_pallor' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'skin_jaundice' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_pupils' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_aural_discharge' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_intact_tympanic_membrane' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_alar_flaring' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_nasal_discharge' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_tonsillopharyngeal_congestion' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_hypertrophic_tonsils' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_palpable_mass' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'heent_exudates' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'cl_symmetrical_chest_expansion' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'cl_clear_breathsounds' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'cvs_adynamic_precordium' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'abd_flat' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'abd_globular' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'abd_flabby' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),

			'abd_muscle_guarding' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => 2,
				'default' => null,
				'null' => TRUE,
			),
		);
		$this->dbforge->add_column('hphyexam', $fields);
	}

	public function down()
	{
		$this->dbforge->drop_column('hphyexam', 'ext_grossdeformity');
		$this->dbforge->drop_column('hphyexam', 'ext_normalgait');
		$this->dbforge->drop_column('hphyexam', 'ext_fullequalpulses');
		$this->dbforge->drop_column('hphyexam', 'ext_others');
		$this->dbforge->drop_column('hphyexam', 'pectr');
		$this->dbforge->drop_column('hphyexam', 'skin_pallor');
		$this->dbforge->drop_column('hphyexam', 'skin_jaundice');
		$this->dbforge->drop_column('hphyexam', 'heent_pupils');
		$this->dbforge->drop_column('hphyexam', 'heent_aural_discharge');
		$this->dbforge->drop_column('hphyexam', 'heent_intact_tympanic_membrane');
		$this->dbforge->drop_column('hphyexam', 'heent_alar_flaring');
		$this->dbforge->drop_column('hphyexam', 'heent_nasal_discharge');
		$this->dbforge->drop_column('hphyexam', 'heent_tonsillopharyngeal_congestion');
		$this->dbforge->drop_column('hphyexam', 'heent_hypertrophic_tonsils');
		$this->dbforge->drop_column('hphyexam', 'heent_palpable_mass');
		$this->dbforge->drop_column('hphyexam', 'heent_exudates');
		$this->dbforge->drop_column('hphyexam', 'cl_symmetrical_chest_expansion');
		$this->dbforge->drop_column('hphyexam', 'cl_clear_breathsounds');
		$this->dbforge->drop_column('hphyexam', 'cvs_adynamic_precordium');
		$this->dbforge->drop_column('hphyexam', 'abd_flat');
		$this->dbforge->drop_column('hphyexam', 'abd_globular');
		$this->dbforge->drop_column('hphyexam', 'abd_flabby');
		$this->dbforge->drop_column('hphyexam', 'abd_muscle_guarding');
	}
}
