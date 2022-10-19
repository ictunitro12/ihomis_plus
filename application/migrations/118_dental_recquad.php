<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Dental_Recquad extends CI_Migration
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
            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => FALSE,
            ),

            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => FALSE,
            ),

            'dodate' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'dotime' => array(
                'type' => 'DATETIME',
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur1q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur1q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur1q13' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur1q14' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur2q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur2q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur2q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur2q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur3q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur3q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur3q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur3q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur4q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur4q2' => array(
                'type' => 'CHAR',
                'constraint' => 10,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur4q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur4q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur5q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur5q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur5q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur5q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur6q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur6q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur6q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur6q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur7q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur7q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur7q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur7q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur8q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur8q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur8q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cur8q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul1q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul1q2' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul1q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul1q4' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul2q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul2q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul2q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul2q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul3q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul3q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul3q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul3q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul4q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul4q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul4q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul4q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul5q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul5q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul5q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul5q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul6q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul6q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul6q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul6q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul7q1' => array(
                'type' => 'varCHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul7q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul7q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul7q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul8q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul8q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul8q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alab_cul8q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr1q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr1q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr1q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr1q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr2q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr2q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr2q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr2q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr3q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr3q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr3q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr3q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr4q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr4q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr4q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr4q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr5q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr5q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr5q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr5q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr6q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr6q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr6q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr6q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr7q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr7q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr7q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr7q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr8q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr8q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr8q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_clr8q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll1q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll1q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll1q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll1q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll2q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll2q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll2q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll2q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll3q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll3q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll3q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll3q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll4q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll4q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll4q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll4q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll5q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll5q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll5q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll5q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll6q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll6q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll6q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll6q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll7q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll7q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll7q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll7q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll8q1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll8q2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll8q3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'alin_cll8q4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curaq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curaq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curaq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curaq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curbq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curbq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curbq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curbq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curcq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curcq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curcq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curcq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curdq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curdq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curdq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_curdq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cureq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cureq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cureq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cureq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culaq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culaq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culaq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culaq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culbq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culbq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culbq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culbq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culcq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culcq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culcq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culcq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culdq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culdq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culdq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culdq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culeq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culeq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culeq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_culeq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clraq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clraq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clraq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clraq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrbq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrbq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrbq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrbq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrcq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrcq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrcq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrcq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrdq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrdq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrdq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clrdq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clreq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clreq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clreq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clreq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllaq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllaq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllaq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllaq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllbq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllbq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllbq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllbq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllcq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllcq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllcq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_cllcq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clldq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clldq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clldq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clldq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clleq1' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clleq2' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clleq3' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),

            'klin_clleq4' => array(
                'type' => 'CHAR',
                'constraint' => 5,
                'default' => null,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);
        $this->dbforge->create_table('dental_recquad');
    }

    public function down()
    {
        $this->dbforge->drop_table('dental_recquad');
    }
}
