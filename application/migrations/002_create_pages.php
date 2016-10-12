<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_pages extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '240',
                        ),
                        'keywords' => array(
                                    'type' => 'text',
                            ),
                        'description' => array(
                                    'type' => 'text',
                            ),
                        'page_url' => array(
                                    'type' => 'varchar',
                                    'constraint' => '240'
                            ),
                        'page_content' => array(
                                    'type' => 'TEXT',
                            ),
                        'core_page' => array(
                                    'type' => 'int',
                                    'constraint' => '1',
                                    'default' => '0'
                            ),
                        'blocked' => array(
                                    'type' => 'int',
                                    'constraint' => '1',
                                    'default' => '0'
                            ),
                    
                ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('pages');
        }

        public function down()
        {
                $this->dbforge->drop_table('pages');
        }

}