<?php

defined('BASEPATH') || exit('No direct script access allowed');

class Migration_Add_hwaterbone_table extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'enccode' => array(
                'type' => 'VARCHAR',
                'constraint' => 48,
                'null' => false,
            ),
            'hpercode' => array(
                'type' => 'VARCHAR',
                'constraint' => 20,
                'null' => false,
            ),
            'hfhudcode' => array(
                'type' => 'VARCHAR',
                'constraint' => 19,
                'null' => FALSE,
            ),
            'date_onset' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'receiverotavaccine' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'totaldosesreceived' => array(
                'type' => 'INT',
                'null' => true,
            ),
            'datefirstdose' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'datelastdose' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'abd_bloodinstool' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'abd_diarrhea' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'rota_waterystool' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'rota_rehydrationtherapy' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'hepa_acutejaundice' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'hepa_darkurine' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'hepa_lossappetite' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'hepa_bodyweakness' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'hepa_tenderness' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_highfever' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_headache' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_fatigue' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_nausea' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_abdominalpain' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_diarrhea' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'typh_constipation' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'chol_waterydiarrhea' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'chol_vomiting' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'chol_sevdehydration' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'spec_stool' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'spec_serum' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'datesentritm' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'isoorganism' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ),
            'dateresult_isoorganism' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'elisa' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => true,
            ),
            'dateresult_elisa' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'pcr' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ),
            'genotype' => array(
                'type' => 'VARCHAR',
                'constraint' => 100,
                'null' => true,
            ),
            'dateresult_pcr' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'caseclass_suspected' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
            'caseclass_probable' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
            'caseclass_confirmed' => array(
                'type' => 'CHAR',
                'constraint' => 1,
                'null' => FALSE,
            ),
            'date_report' => array(
                'type' => 'datetime',
                'null' => true,
            ),
            'dateinvestigation' => array(
                'type' => 'datetime',
                'null' => true,
            ),
        ));

        $this->dbforge->add_key('enccode', TRUE);
        $this->dbforge->add_key('hpercode', TRUE);
        $this->dbforge->create_table('hwaterbone');
    }

    public function down()
    {
        $this->dbforge->drop_table('hwaterbone');
    }
}
