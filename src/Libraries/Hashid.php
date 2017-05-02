<?php

    /*
     * -------------------------------------------------------------------------------
     * "THE BEER-WARE LICENSE" (Revision 42):
     * <kissparadigm@gmail.com> wrote this file. As long as you retain this notice you
     * can do whatever you want with this stuff. If we meet some day, and you think
     * this stuff is worth it, you can buy me a beer in return KissParadigm
     * -------------------------------------------------------------------------------
     */

    namespace KissParadigm\LaravelHashid\Libraries;

    use Hashids\Hashids;

    class Hashid {

        private function getHashids($salt) {
            $salt     = (isset($salt)) ? $salt : config('app.key') . 'laravel-hashid';
            $length   = config('laravel-hashid.min_lenght');
            $alphabet = config('laravel-hashid.alphabet');
            return new Hashids($salt, $length, $alphabet);
        }

        public function encode($id, $salt = null) {
            $hashids = $this->getHashids($salt);
            return $hashids->encode($id);
        }

        public function decode($hashid, $salt = null) {
            $hashids = $this->getHashids($salt);
            $ids     = $hashids->decode($hashid);
            $id      = (count($ids) == 0) ? 0 : $ids[0];
            return $id;
        }

    }
