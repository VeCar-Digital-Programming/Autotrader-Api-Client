<?php

namespace Vecar\AutotraderApiClient\Api;

use Vecar\AutotraderApiClient\Http\AccessToken;
use Vecar\AutotraderApiClient\Http\UrlEncodedFormBody;

class Authentication extends AbstractApi
{
    /**
     * Get an access token from a key and secret.
     *
     * @param string $key
     * @param string $secret
     *
     * @return AccessToken
     */
    public function getAccessToken(string $key, string $secret): AccessToken
    {
        $body = new UrlEncodedFormBody([
            'key'    => $key,
            'secret' => $secret,
        ]);

        $response = $this->_post('/authenticate', [], $body);

        return new AccessToken($response);
    }
}
