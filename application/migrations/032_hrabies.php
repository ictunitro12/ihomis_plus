<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hrabies extends CI_Migration
{
    private $tables;

    public function __construct()
    {
        parent::__construct();
        $this->load->dbforge();
    }

    public function up()
    {
        $this->dbforge->add_field(array(
            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => TRUE,
            ),

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'patno' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE,
            ),

            'firstname' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'middlename' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'lastname' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'suffixname' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'pat_address_street_name' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'pat_address_brgy' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => TRUE,
            ),

            'pat_address_city' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => TRUE,
            ),

            'pat_address_prov' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => TRUE,
            ),

            'pat_address_reg' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'pat_address_street_name2' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'pat_perm_address_brgy' => array(
                'type' => 'VARCHAR',
                'constraint' => 9,
                'null' => TRUE,
            ),

            'pat_perm_address_city' => array(
                'type' => 'VARCHAR',
                'constraint' => 6,
                'null' => TRUE,
            ),

            'pat_perm_address_prov' => array(
                'type' => 'VARCHAR',
                'constraint' => 4,
                'null' => TRUE,
            ),

            'pat_perm_address_reg' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'sex' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'dateofbirth' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'admitted' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'date_admitted' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_on_set' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'date_report' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'name_reporter' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
            ),

            'contactno_reporter' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE,
            ),

            'date_investigation' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'name_investigator' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
            ),

            'contactno_investigator' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => TRUE,
            ),

            'type_exposure' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'affected_site' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE,
            ),

            'type_exposure_others' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'date_exposure' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'place_exposure' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'category_exposure' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'type_animal' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'type_animal_others' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
            ),

            'animal_status' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'animal_status_other' => array(
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => TRUE,
            ),

            'would_clean' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'given_RIG' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'given_rabies_vacc' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'date_vaccine_started' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'brand_vaccine' => array(
                'type' => 'VARCHAR',
                'constraint' => 150,
                'null' => TRUE,
            ),

            'post_exposure' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'final_classification' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'outcome' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'date_died' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'labdiagnosdone' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'diagnosresult' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => TRUE,
            ),

            'animal_vacc_hist' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'route_admin' => array(
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => TRUE,
            ),

            'typeofdru' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'entryby' => array(
                'type' => 'VARCHAR',
                'constraint' => 15,
                'null' => TRUE,
            ),

        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hrabies');
    }

    public function down()
    {
        $this->dbforge->drop_table('hrabies');
    }
}
