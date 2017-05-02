<?php

    /*
     * -------------------------------------------------------------------------------
     * "THE BEER-WARE LICENSE" (Revision 42):
     * <kissparadigm@gmail.com> wrote this file. As long as you retain this notice you
     * can do whatever you want with this stuff. If we meet some day, and you think
     * this stuff is worth it, you can buy me a beer in return KissParadigm
     * -------------------------------------------------------------------------------
     */

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