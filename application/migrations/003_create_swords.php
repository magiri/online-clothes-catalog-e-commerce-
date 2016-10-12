<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_swords extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '240',
                        ),
                        'category_id' => array(
                                    'type' => 'int',
                                    'constraint' => 11,
                                    'default' => '0'
                            
                            ),
                            'description' => array(
                                'field'=>'description',
                                'label' => 'Word Description',
                                'rules' => 'trim|xss_clean'
                            ),
                    
                        'blocked' => array(
                                    'type' => 'int',
                                    'constraint' => '1',
                                    'default' => '0'
                            ),
                    
                ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('swords');
        }

        public function down()
        {
                $this->dbforge->drop_table('swords');
        }

}