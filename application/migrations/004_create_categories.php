<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_categories extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                    'category_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                    '_category_description' => array(
                                'type' => 'TEXT',
                        ),
                    'parent_id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'default' => 0
                        ),
                    'order' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'default' => 0
                        ),
                     'blocked' => array(
                                'type' => 'INT',
                                'default' => 0
                        ),
                    ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('categories');
        }

        public function down()
        {
                $this->dbforge->drop_table('categories');
        }

}

