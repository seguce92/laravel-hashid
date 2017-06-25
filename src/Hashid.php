<?php
namespace Seguce92\LaravelHashid;

use Hashids\Hashids;

/**
 * Hashid class
 */
class Hashid
{
    /**
     * @method getHashids
     * @param  string     $salt [string]
     * @return Hashids
     */
    private function getHashids($salt) {
        $salt     = (isset($salt)) ? $salt : config('app.key') . 'laravel-hashid';
        $length   = config('seguce92.laravel-hashid.min_lenght');
        $alphabet = config('seguce92.laravel-hashid.alphabet');
        return new Hashids($salt, $length, $alphabet);
    }

    /**
     * @method encode
     * @param  integrr $id   [int]
     * @param  string $salt [string]
     * @return string
     */
    public function encode($id, $salt = null) {
        $hashids = $this->getHashids($salt);
        return $hashids->encode($id);
    }

    /**
     * @method decode
     * @param  string $hashid [string]
     * @param  string $salt   [string]
     * @return integer
     */
    public function decode($hashid, $salt = null) {
        $hashids = $this->getHashids($salt);
        $ids     = $hashids->decode($hashid);
        return (count($ids) == 0) ? 0 : $ids[0];
    }

}
