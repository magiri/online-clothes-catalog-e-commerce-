<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_create_albums extends CI_Migration {

        public function up()
        {
                $this->dbforge->add_field(array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 11,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE
                        ),
                    'album_name' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '100',
                        ),
                    'description' => array(
                                'type' => 'TEXT',
                        ),
                    'thumbnail_size' => array(
                                'type' => 'varchar',
                                'constraint' => 100
                        ),
                    'created' => array(
                                'type' => 'DATETIME',
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
                     'core_album' => array(
                                'type' => 'INT',
                                'default' => 0
                        ),
                     'is_deleted' => array(
                                'type' => 'INT',
                                'default' => 0
                        ),
                     'blocked' => array(
                                'type' => 'INT',
                                'default' => 0
                        ),
                    ));
                
                $this->dbforge->add_key('id',true);
                $this->dbforge->create_table('albums');
        }

        public function down()
        {
                $this->dbforge->drop_table('albums');
        }

}

