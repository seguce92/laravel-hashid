<?php
if (!function_exists('hashid_encode')) {
    function hashid_encode($id, $salt = null) {
        return app('hashid')->encode($id, $salt);
    }
}

if (!function_exists('hashid_decode')) {
    function hashid_decode($hashid, $salt = null) {
        return app('hashid')->decode($hashid, $salt);
    }
}
