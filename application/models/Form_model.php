<?php
class Form_model extends CI_Model
{
    function create($data)
    {
        return $this->db->insert('orders', $data);
    }
    function get_all()
    {
        return $this->db->get('orders')->result_array();
    }
    function read($id)
    {
        return $this->db->get_where('orders', array('id' => $id))->row_array();
    }
    function update($id, $data)
    {

        $this->db->where('id', $id);
        return $this->db->update('orders', $data);
    }
    function delete($id)
    {
        return $this->db->delete('orders', array('id' => $id));
    }
    function get_new_notify()
    {
        return $this->db->get_where('orders', array('is_new' => 1))->result_array();
    }
    function get_new_notify_count()
    {
        return $this->db->get_where('orders', array('is_new' => 1))->count_all_results();
    }
}
