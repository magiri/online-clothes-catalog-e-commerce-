<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_alumni extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                      'first_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '173',
                        ),
                      'last_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '173',
                        ),
                      'graduation_year' => array(
                                'type' => 'int',
                                'constraint' => '7',
                        ),
                    'gender' => array(
                                'type' => 'varchar',
                                'constraint' => '9',
                        ),
                    'email' => array(
                                'type' => 'varchar',
                                'constraint' => '173',
                        ),
                    'is_deleted' => array(
                        'type' => 'int',
                        'constraint' => 1,
                        'default' => 0
                    ),
                    'blocked' => array(
                        'type' => 'int',
                        'constraint' => 1,
                        'default' => 0
                    )
                    ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('alumni');
        }

        public function down()
        {
                $this->dbforge->drop_table('alumni');
        }

}