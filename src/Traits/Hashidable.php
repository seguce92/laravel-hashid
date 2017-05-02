<?php

    /*
     * -------------------------------------------------------------------------------
     * "THE BEER-WARE LICENSE" (Revision 42):
     * <kissparadigm@gmail.com> wrote this file. As long as you retain this notice you
     * can do whatever you want with this stuff. If we meet some day, and you think
     * this stuff is worth it, you can buy me a beer in return KissParadigm
     * -------------------------------------------------------------------------------
     */

    namespace KissParadigm\LaravelHashid\Traits;

    trait Hashidable {

        private function getSalt() {
            return $this->getTable() . config('app.key');
        }

        public function getHashidAttribute() {
            return hashid_encode($this->id, $this->getSalt());
        }

        public function scopeWhereHashid($query, $value) {
            return $query->where('id', hashid_decode($value, $this->getSalt()));
        }

    }