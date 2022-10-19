<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Install_ion_auth extends CI_Migration
{
	private $tables;

	public function __construct()
	{
		parent::__construct();
		$this->load->dbforge();
		$this->load->config('ion_auth', TRUE);
		$this->load->config('database');
		$this->tables = $this->config->item('tables', 'ion_auth');
	}

	public function up()
	{
		$database = $this->config->item('db_connection');

		// audit trail
		/* $fields = array(
			'id' =>
			array(
				'type' => 'BIGINT',
				'constraint' => '20',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE,
				'null' => FALSE,
			),

			'user_id' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '25',
				'null' => TRUE,
			),

			'event' =>
			array(
				'type' => 'ENUM("insert","update","delete")',
				'null' => FALSE,
			),

			'table_name' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => FALSE,
			),

			'old_values' =>
			array(
				'type' => 'TEXT',
				'null' => TRUE,
			),

			'new_values' =>
			array(
				'type' => 'TEXT',
				'null' => FALSE,
			),

			'url' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => FALSE,
			),

			'name' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '128',
				'null' => TRUE,
			),

			'ip_address' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '45',
				'null' => FALSE,
			),

			'user_agent' =>
			array(
				'type' => 'VARCHAR',
				'constraint' => '255',
				'null' => FALSE,
			),

			'created_at DATETIME NULL DEFAULT CURRENT_TIMESTAMP',
		);

		$this->dbforge->add_field($fields);

		$this->dbforge->add_key('id', TRUE);

		$this->dbforge->create_table('user_audit_trails');
 */
		// Drop table 'groups' if it exists
		$this->dbforge->drop_table($this->tables['groups'], TRUE);

		// Table structure for table 'groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			),
			'name' => array(
				'type'       => 'VARCHAR',
				'constraint' => '50',
			),
			'description' => array(
				'type'       => 'VARCHAR',
				'constraint' => '100',
			),
			'typegrp' => array(
				'type'       => 'VARCHAR',
				'constraint' => '11',
				'null' => TRUE,
			),
			'subID' => array(
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
			),
			'isSub' => array(
				'type'       => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
			),
			'link' => array(
				'type'       => 'TEXT',
				'null' => TRUE,
			),
			'icon' => array(
				'type'       => 'TEXT',
				'null' => TRUE,
			),
			'isActive' => array(
				'type'       => 'CHAR',
				'constraint' => '1',
				'null' => TRUE,
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->tables['groups']);

		//$file = APPPATH . "/migrations/menus_updated.csv";

		//$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);

		// Dumping data for table 'groups'
		/* $data = array(
			array(
				'name'        => 'admin',
				'description' => 'Administrator'
			),
			array(
				'name'        => 'members',
				'description' => 'General User'
			)
		);
		$this->db->insert_batch($this->tables['groups'], $data);
 */

		$file = APPPATH . "/migrations/menus_updated.csv";

		$groupData = [];

		$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);

		$sheetData   = $spreadsheet->getActiveSheet()->toArray();

		$counter = 0;
		foreach ($sheetData as $row) {

			if ($counter == 0) {
				$counter++;
				continue;
			}

			$groupData[] = [
				'id' => $row[0],
				'name' => $row[1],
				'description' => $row[2],
				'typegrp' => $row[3],
				'subID' => $row[4],
				'isSub' => $row[5],
				'link' => $row[6],
				'icon' => $row[7],
				'isActive' => $row[8],
			];
		}

		if ($database == 'mssql') {
			$this->db->query("SET IDENTITY_INSERT dbo.groups ON");
		}

		$this->db->insert_batch($this->tables['groups'], $groupData);

		if ($database == 'mssql') {
			$this->db->query("SET IDENTITY_INSERT dbo.groups OFF");
		}

		// Drop table 'users' if it exists
		$this->dbforge->drop_table($this->tables['users'], TRUE);

		// Table structure for table 'users'
		$this->dbforge->add_field(array(
			'id' => array(
				'type'           => 'VARCHAR',
				'constraint'     => '25',
			),
			'ip_address' => array(
				'type'       => 'VARCHAR',
				'constraint' => '45'
			),
			'username' => array(
				'type'       => 'VARCHAR',
				'constraint' => '100',
			),
			'password' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
			),
			'email' => array(
				'type'       => 'VARCHAR',
				'constraint' => '254'
			),
			'activation_selector' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => TRUE
			),
			'activation_code' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => TRUE
			),
			'forgotten_password_selector' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => TRUE
			),
			'forgotten_password_code' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => TRUE
			),
			'forgotten_password_time' => array(
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => TRUE,
				'null'       => TRUE
			),
			'remember_selector' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => TRUE
			),
			'remember_code' => array(
				'type'       => 'VARCHAR',
				'constraint' => '255',
				'null'       => TRUE
			),
			'created_on' => array(
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => TRUE,
			),
			'last_login' => array(
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => TRUE,
				'null'       => TRUE
			),
			'active' => array(
				'type'       => 'TINYINT',
				'constraint' => '1',
				'unsigned'   => TRUE,
				'null'       => TRUE
			),
			'deptcode' => array(
				'type'       => 'VARCHAR',
				'constraint' => '11',
			),
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->add_key('email');
		$this->dbforge->add_key('activation_selector');
		$this->dbforge->add_key('forgotten_password_selector');
		$this->dbforge->add_key('remember_selector');
		$this->dbforge->create_table($this->tables['users']);

		// check if tcp user exist
		$queryCount = $this->db->get_where('hpersonal', array('employeeid' => 'TCP'))->num_rows();

		if ($queryCount == 0) {
			// delete entry
			//$this->db->delete('hpersonal', array('employeeid' => 'TCP'));

			// Dumping data for table 'hpersonal'
			$data = array(
				'employeeid'		  => 'TCP',
				'lastname'            => 'TCP',
				'firstname'           => 'TCP',
				'middlename'          => 'TCP',
				'maidenname'          => 'TCP',
				'empstat'             => 'A',
				'postitle'            => 'Admin',
				'empprefix'           => 'MR',
				'deptcode'            => 'SYSAD',
			);
			$this->db->insert('hpersonal', $data);
		}

		// Dumping data for table 'users'
		$data = array(
			'id'					  => 'TCP',
			'ip_address'              => ':1',
			'username'                => 'TCP',
			'password'                => '$2y$10$ApLQIXndG4/6KjXK7D2zpO4HeCNxuhEMnHgzlkJCq5FZ1FeZ056UC',
			'email'                   => 'tcp@admin.com',
			'active'                  => '1',
			'deptcode'                => 'SYSAD',
			'created_on'              => 0,
		);
		$this->db->insert($this->tables['users'], $data);

		// Drop table 'users_groups' if it exists
		$this->dbforge->drop_table($this->tables['users_groups'], TRUE);

		// Table structure for table 'users_groups'
		$this->dbforge->add_field(array(
			'id' => array(
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			),
			'user_id' => array(
				'type'       => 'VARCHAR',
				'constraint' => '25',
				'unsigned'   => TRUE
			),
			'group_id' => array(
				'type'       => 'MEDIUMINT',
				'constraint' => '8',
				'unsigned'   => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->tables['users_groups']);

		// Dumping data for table 'users_groups'
		/* $data = array(
			array(
				'user_id'  => '1',
				'group_id' => '1',
			),
			array(
				'user_id'  => '1',
				'group_id' => '2',
			)
		);
		$this->db->insert_batch($this->tables['users_groups'], $data); */

		$userGroupData = [];

		foreach (array_column($groupData, 'id') as $row) {
			$userGroupData[] = [
				'user_id' => 'TCP',
				'group_id' => $row,
			];
		}

		$this->db->insert_batch($this->tables['users_groups'], $userGroupData);

		// Drop table 'login_attempts' if it exists
		$this->dbforge->drop_table($this->tables['login_attempts'], TRUE);

		// Table structure for table 'login_attempts'
		$this->dbforge->add_field(array(
			'id' => array(
				'type'           => 'MEDIUMINT',
				'constraint'     => '8',
				'unsigned'       => TRUE,
				'auto_increment' => TRUE
			),
			'ip_address' => array(
				'type'       => 'VARCHAR',
				'constraint' => '45'
			),
			'login' => array(
				'type'       => 'VARCHAR',
				'constraint' => '100',
				'null'       => TRUE
			),
			'time' => array(
				'type'       => 'INT',
				'constraint' => '11',
				'unsigned'   => TRUE,
				'null'       => TRUE
			)
		));
		$this->dbforge->add_key('id', TRUE);
		$this->dbforge->create_table($this->tables['login_attempts']);
	}

	public function down()
	{
		$this->dbforge->drop_table('user_audit_trails');
		$this->dbforge->drop_table($this->tables['users'], TRUE);
		$this->dbforge->drop_table($this->tables['groups'], TRUE);
		$this->dbforge->drop_table($this->tables['users_groups'], TRUE);
		$this->dbforge->drop_table($this->tables['login_attempts'], TRUE);

		// delete
		$this->db->where('employeeid', 'TCP');
		$this->db->delete('hpersonal');
	}
}
