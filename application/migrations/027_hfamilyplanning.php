<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Hfamilyplanning extends CI_Migration
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

            'toecode' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => FALSE,
            ),

            'typeclient' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),

            'cmethod' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => FALSE,
            ),

            'cmethod_sp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'nhts' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'fourps' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'nolivechild' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'planchild' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'monthlyincome' => array(
                'type' => 'VARCHAR',
                'constraint' => 10,
                'null' => TRUE,
            ),

            'spacing' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'limiting' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'oth_client' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'oth_client_sp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'currentuser' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'medcondition' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'sideeffect' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'sideeffect_sp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'severhmyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'historysahyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'nontraumaticyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'currenthisyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'severecpyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'cough14dyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'jaundice' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'vaginalbleedyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'vaginaldischargyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'intakantiyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'smokeryn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'disabilityyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'disabilityyn_sp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'gravida' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'para' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'fterm' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'premature' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'abortion' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'lchildren' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'dtedeliver' => array(
                'type' => 'DATETIME',
                'null' => TRUE,
            ),

            'typeofdliver' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'lmp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'pmp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'menstrualflow' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'dysmenorrhea' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'hydatidform' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'ectopcpreg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'abnormaldischargyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'ifyesvp' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'soresyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'painorburning' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'sexualtransmit' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'hiv' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'vawyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'upleasantrelationyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'fpclinicyn' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'refferedto' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'refferedto_oth' => array(
                'type' => 'VARCHAR',
                'constraint' => 200,
                'null' => TRUE,
            ),

            'weight' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'height' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'bloodpressure' => array(
                'type' => 'VARCHAR',
                'constraint' => 7,
                'null' => TRUE,
            ),

            'pulserate' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'skinphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'extremephy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'conjuncphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'neckphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'breastphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'abdomenphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'pelvicphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'cabnormalphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'cconsistentphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'upositionphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 2,
                'null' => TRUE,
            ),

            'udepthphy' => array(
                'type' => 'VARCHAR',
                'constraint' => 5,
                'null' => TRUE,
            ),

            'dtereport' => array(
                'type' => 'datetime',
                'null' => FALSE,
            ),

            'preg1' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'preg2' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'preg3' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'preg4' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'preg5' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'preg6' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),

            'finalpreg' => array(
                'type' => 'VARCHAR',
                'constraint' => 1,
                'null' => TRUE,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->create_table('hfamilyplanning');
    }

    public function down()
    {
        $this->dbforge->drop_table('hfamilyplanning');
    }
}
