<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_images extends CI_Migration {

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
                                'constraint' => '100',
                        ),
                      'image_url' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '173',
                        ),
                      'thumbnail_url' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '173',
                        ),
                    'description' => array(
                                'type' => 'TEXT',
                        ),
                    'upload_date' => array(
                                'type' => 'DATETIME',
                        ),
                    'album_id' => array(
                        'type' => 'int',
                        'constraint' => 1,
                        'default' => 0
                    ),
                    'parent_id' => array(
                        'type' => 'int',
                        'constraint' => 1,
                        'default' => 0
                    ),
                    'order' => array(
                        'type' => 'int',
                        'constraint' => 1,
                        'default' => 0
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
                $this->dbforge->create_table('images');
        }

        public function down()
        {
                $this->dbforge->drop_table('images');
        }

}