 <?php 
 $data=array( 'category'=>array(
           'id' => '',
        'image' => '',
        'parent_id' => '',
        'top' => '',
        'column' => '',
        'sort_order' => '',
        'status' => '',
        'date_added' => '',
        'date_modified' => ''),
     
        'category_desc'=>array(  
        'id' => '',
        'name' => '',
        'description' => '',
        'meta_title' => '',
        'meta_description' => '',
        'meta_keyword' => '')
           );
 
 
  $data2 = $this->databuild2($id2);
            $this->db->insert('fn_category_description', $data2);
            var_dump($data2['id']);
            $id3 = $this->db->insert_id();
            var_dump($id3);