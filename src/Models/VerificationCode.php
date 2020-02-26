<?php

namespace AnyImage\VerificationCodes\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model {
    protected $guarded = [];

    public static function generate() {
        return rand( 123456, 654321 );
    }

    public function fetch( $type, $code ) {
        return static::whereType( $type )->whereCode( $code )->first();
    }

    public function user() {
        return $this->belongsTo( config( 'verification-codes.user_model' ) );
    }
}
