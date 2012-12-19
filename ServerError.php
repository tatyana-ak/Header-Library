<?php
/**
 * User: tanchik194
 * Date: 04.12.12
 */

namespace Headers;

class ServerError
{

    /**
     * 500 Internal Server Error
     *
     * A generic error message, given when no more specific message is suitable.
     */
    public static function InternalServerError()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[500]['header'], true, 500);
        exit;
    }

    /**
     * 501 Not Implemented
     *
     * The server either does not recognize the request method, or it lacks the ability to fulfill the request.
     */
    public static function notImplemented()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[501]['header'], true, 501);
        exit;
    }

    /**
     * 502 Bad Gateway
     *
     * The server was acting as a gateway or proxy and received an invalid response from the upstream server.
     */
    public static function badGateway()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[502]['header'], true, 502);
        exit;
    }

    /**
     * 503 Service Unavailable
     *
     * The server is currently unavailable (because it is overloaded or down for maintenance).
     * Generally, this is a temporary state.
     *
     * @var string $retryAfter  ( HTTP-date | delta-seconds ) (optional)
     */
    public static function serviceUnavailable($retryAfter = '')
    {
        header('HTTP/1.1 ' . Constants::$headersArr[503]['header'], true, 503);

        if(!empty($retryAfter)) {
            header('retry-After: ' . $retryAfter);
        }
        exit;
    }

    /**
     * 504 Gateway Timeout
     *
     * The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.
     */
    public static function gatewayTimeout()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[504]['header'], true, 504);
        exit;
    }

    public static function HTTPVersionNotSupported()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[505]['header'], true, 505);
        exit;
    }

    /**
     * 506 Variant Also Negotiates
     *
     * Transparent content negotiation for the request results in a circular reference.
     */
    public static function variantAlsoNegotiates()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[506]['header'], true, 506);
        exit;
    }

    /**
     * 507 Insufficient Storage
     *
     * The server is unable to store the representation needed to complete the request.
     */
    public static function insufficientStorage()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[507]['header'], true, 507);
        exit;
    }

    /**
     * 508 Loop Detected
     *
     * The server detected an infinite loop while processing the request (sent in lieu of 208).
     */
    public static function loopDetected()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[508]['header'], true, 508);
        exit;
    }

    /**
     * 509 Bandwidth Limit Exceeded
     *
     * This status code, while used by many servers, is not specified in any RFCs.
     */
    public static function bandwidthLimitExceeded()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[509]['header'], true, 509);
        exit;
    }

    /**
     * 510 Not Extended
     *
     * Further extensions to the request are required for the server to fulfill it.
     */
    public static function notExtended()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[510]['header'], true, 510);
        exit;
    }

}