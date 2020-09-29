<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_news($slug = FALSE)
        {
            if ($slug === FALSE)
            {
                    $query = $this->db->get('news');
                    return $query->result_array();
            }

            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
        }

        public function set_news()
        {
            $this->load->helper('url');

            $slug = url_title($this->input->post('title'), 'dash', TRUE);

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'text' => $this->input->post('text')
            );

            return $this->db->insert('news', $data);
        }

        public function update_news($slug = FALSE)
        {
            $id = $this->input->post('id');
            $slug = $this->input->post('slug');
            // echo '<script>alert("slug='.$slug.'")</script>';
            // echo '<script>alert("id='.$id.'")</script>';

            $data = array(
                'title' => $this->input->post('title'),
                'text' => $this->input->post('text')
            );

            $this->db->where('id',$id);
            return $this->db->update('news', $data);
        }


        public function delete_news($slug = FALSE)
        {
            $id = $this->input->post('id');
            $slug = $this->input->post('slug');
            $this->db->where('id', $id);
            return $this->db->delete('news');
        }
}