<?php
/**
 * Menghitung jumlah cart (pada navbar) sesuai dengan id user yang login
 */
function getCart()
{
    $CI =& get_instance();
    $userId = $CI->session->userdata('id');

    if ($userId) {
        // Hitung banyak cart suatu user
        $query = $CI->db->where('id_user', $userId)->count_all_results('cart');
        return $query;
    }

    return false;
}

/**
 * Mengenkripsi input
 */
function hashEncrypt($input)
{
    $hash = password_hash($input, PASSWORD_DEFAULT);
    return $hash;
}

/**
 * Mendecrypt hash password dari table user
 * Mengembalikan true jika plain-text sama
 */
function hashEncryptVerify($input, $hash)
{
    if (password_verify($input, $hash)) {
        return true;
    } else {
        return false;
    }
}