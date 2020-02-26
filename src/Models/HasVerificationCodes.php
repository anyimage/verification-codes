<?php


namespace AnyImage\VerificationCodes\Models;


trait HasVerificationCodes {

    public function verificationCodes() {
        return $this->hasMany( VerificationCode::class );
    }

    public function verificationToken() {
        return $this->hasOne( VerificationCode::class );
    }

    /**
     * Verification Codes
     */

    public function createVerificationCode( $type ) {
        return $this->verificationCodes()->create( [
            'code' => VerificationCode::generate(),
            'type' => $type,
        ] );
    }
}
