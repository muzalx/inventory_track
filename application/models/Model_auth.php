<?php

class Model_auth extends CI_Model
{
    public function process_login($email, $password) {
        // Menggunakan query builder CodeIgniter untuk keamanan dan kemudahan
        $this->db->where('email', $email);
        $query = $this->db->get('users');

        // Cek apakah ada hasil dari query
        if ($query->num_rows() > 0) {
            $user = $query->row_array();
            
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Set data sesi
                $session_data = [
                    'user_id' => $user['id'],
                    'user_name' => $user['name'],
                    'user_role' => $user['role'],
                    'logged_in' => TRUE
                ];
                $this->session->set_userdata($session_data);

                return TRUE;
            }
        }

        return FALSE;
    }
}