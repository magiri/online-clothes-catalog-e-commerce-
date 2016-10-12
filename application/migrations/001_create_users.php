<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_users extends CI_Migration {

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
                                'constraint' => '100',
                        ),
                    'last_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),

                    'email' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '121',
                        ),
                    'password' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '131',
                        ),
                    'admin' => array(
                                'type' => 'int',
                                'constraint' => 1,
                                'default' => 0
                                
                    ),
                ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('users_login');
        }

        public function down()
        {
                $this->dbforge->drop_table('users_login');
        }

}