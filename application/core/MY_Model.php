<?php

class MY_Model extends CI_Model {

    protected $_table_name = '';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'id';
    public $_rules = array();
    protected $_timestamps = false;

    function __construct() {
        parent::__construct();
    }

    function array_in_post($fields) {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }
        //echo var_dump($data);
        return $data;
    }

    public function get($id = NULL, $single = false) {
        if ($id !== NULL) {
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        } elseif ($single === true) {
            $method = 'row';
        } else {
            $method = 'result';
        }

//        if (!count($this->db->ar_orderby)) {
//            $this->db->order_by($this->_order_by);
//        }

        return $this->db->get($this->_table_name)->$method();
    }

    public function get_by($where, $single = false) {
        $this->db->where($where);
        return $this->get(NULL, $single);
    }

    public function save($data, $id = null) {
        ///set_timestamps
        if ($this->_timestamps === true) {
            $now = date('y-m-d h:i:s');
            $id || $data['created'] = $now;
            $data['modified'] = $now;
        }
        //insert 
        if ($id === null) {
            !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = null;
            $this->db->insert($this->_table_name, $data);
            $id = $this->db->insert_id();
        }
        //update
        else {
            $filter = $this->_primary_filter;
            $id = $filter($id);
            $this->db->set($data);
            $this->db->where($this->_primary_key, $id);
            $this->db->update($this->_table_name);
        }

        return $id;
    }

    public function update_by($data, $conditionalarray) {
        $this->db->set($data);
        $this->db->where($conditionalarray);
        $this->db->update($this->_table_name);
    }

    public function delete($id) {
        $filter = $this->_primary_filter;
        $id = $filter($id);

        if (!$id) {
            return false;
        }

        $this->db->where($this->_primary_key, $id);
        $this->db->limit(1);
        $this->db->delete($this->_table_name);
    }

    public function join_get($table2, $fieldt1, $fieldt2) {
        $this->db->select('*');
        $this->db->from($this->_table_name);
        $this->db->join($table2, $this->_table_name . '.' . $fieldt1 . '=' . $table2 . '.' . $fieldt2, 'inner');
        $query = $this->db->get()->result();
        return $query;
    }

    public function uniq() {
        $this->db->distinct();
        return $this->db->get($this->_table_name)->result();
    }

    public function countAllResults() {
        return $this->db->count_all_results($this->_table_name);
    }

    public function get_price($where, $single = false) {
        $products = $this->get_by($where, $single);
        
        foreach ($products as $product) {
            $this->db->where(array('size' => $product->size, 'category_id' => $product->category_id));
            $price = $this->db->get('price_list')->row();
//            var_dump($price);
            if (count($price) != 0) {

                $product->price = $price->price;
            } else {
                $product->price = 00.00;
            }
        }
        return $products;
    }

}
