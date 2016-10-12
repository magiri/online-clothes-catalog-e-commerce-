<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_news extends CI_Migration {

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
                                'constraint' => '100',
                        ),
                    'slug' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                    'pubdate' => array(
                                'type' => 'DATE',
                        ),
                    'body' => array(
                                'type' => 'TEXT',
                        ),
                    'summary' => array(
                                'type' => 'TEXT',
                        ),
                    'created' => array(
                                'type' => 'DATETIME',
                        ),
                     'modified' => array(
                                'type' => 'DATETIME',
                                
                        ),
                    'news_keywords' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '327',
                        ),
                    'blocked' => array(
                        'type' => 'int',
                        'constraint' => 1,
                        'default' => 0
                    )
                    ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('news');
        }

        public function down()
        {
                $this->dbforge->drop_table('news');
        }

}