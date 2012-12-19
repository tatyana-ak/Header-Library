<?php
/**
 * User: tanchik194
 * Date: 05.12.12
 */

namespace Headers;

class Constants
{

    /**
     * @const string TYPE constant name
     */
    const TYPE_HTML  = 'text/html';
    const TYPE_PLAIN = 'text/plain';
    const TYPE_PHP   = 'application/php';
    const TYPE_CSS   = 'text/css';
    const TYPE_JS    = 'application/javascript';
    const TYPE_JSON  = 'application/json';
    const TYPE_XML   = 'application/xml';
    const TYPE_RSS   = 'application/rss+xml';
    const TYPE_ATOM  = 'application/atom+xml';
    const TYPE_GZ    = 'application/x-gzip';
    const TYPE_TAR   = 'application/x-tar';
    const TYPE_ZIP   = 'application/zip';
    const TYPE_GIF   = 'image/gif';
    const TYPE_PNG   = 'image/png';
    const TYPE_JPG   = 'image/jpeg';
    const TYPE_ICO   = 'image/x-icon';
    const TYPE_SWF   = 'application/x-shockwave-flash';
    const TYPE_FLV   = 'video/x-flv';
    const TYPE_AVI   = 'video/mpeg';
    const TYPE_MPEG  = 'video/mpeg';
    const TYPE_MPG   = 'video/mpeg';
    const TYPE_MOV   = 'video/quicktime';
    const TYPE_MP3   = 'audio/mpeg';

    /**
     * @const string METHOD constant names
     */
    const METHOD_OPTIONS = 'OPTIONS';
    const METHOD_GET     = 'GET';
    const METHOD_HEAD    = 'HEAD';
    const METHOD_POST    = 'POST';
    const METHOD_PUT     = 'PUT';
    const METHOD_DELETE  = 'DELETE';
    const METHOD_TRACE   = 'TRACE';
    const METHOD_CONNECT = 'CONNECT';

    /**
     * @var array
     */
    public static $headersArr = array(
        '200' => array(
            'header' => '200 OK'
            ,'description' => ''
        ),
        '201' => array(
            'header' => '201 Created'
            ,'description' => ''
        ),
        '202' => array(
            'header' => '202 Accepted'
            ,'description' => ''
        ),
        '203' => array(
            'header' => '203 Non-Authoritative Information'
            ,'description' => ''
        ),
        '204' => array(
            'header' => '204 No Content'
            ,'description' => ''
        ),
        '205' => array(
            'header' => '205 Reset Content'
            ,'description' => ''
        ),
        '206' => array(
            'header' => '206 Partial Content'
            ,'description' => ''
        ),
        '207' => array(
            'header' => '207 Multi-Status'
            ,'description' => ''
        ),
        '226' => array(
            'header' => '226 IM Used'
            ,'description' => ''
        ),

        '300' => array(
            'header' => '300 Multiple Choices'
            ,'description' => ''
        ),
        '301' => array(
            'header' => '301 Moved Permanently'
            ,'description' => ''
        ),
        '302' => array(
            'header' => '302 Found'
            ,'description' => ''
        ),
        '303' => array(
            'header' => '303 See Other'
            ,'description' => ''
        ),
        '304' => array(
            'header' => '304 Not Modifier'
            ,'description' => ''
        ),
        '305' => array(
            'header' => '305 Use Proxy'
            ,'description' => ''
        ),
        '307' => array(
            'header' => '307 Temporary Redirect'
            ,'description' => ''
        ),

        '400' => array(
            'header' => '400 Bad Request'
            ,'description' => 'The request cannot be fulfilled due to bad syntax.'
        ),
        '401' => array(
            'header' => '401 Unauthorized'
            ,'description' => 'Access denied.'
        ),
        '402' => array(
            'header' => '402 Payment Required'
            ,'description' => 'Reserved for future use.'
        ),
        '403' => array(
            'header' => '403 Forbidden'
            ,'description' => 'Access denied.'
        ),
        '404' => array(
            'header' => '404 Not Found'
            ,'description' => 'The page you requested was not found.'),
        '405' => array(
            'header' => '405 Method Not Allowed'
            ,'description' => 'A request was made of a resource using a request method not supported by that resource.'
        ),
        '406' => array(
            'header' => '406 Not Acceptable'
            ,'description' => ''
        ),
        '407' => array(
            'header' => '407 Proxy Authentication Required'
            ,'description' => 'The client must first authenticate itself with the proxy.'
        ),
        '408' => array(
            'header' => '408 Request Timeout'
            ,'description' => 'The server timed out waiting for the request.'
        ),
        '409' => array(
            'header' => '409 Conflict'
            ,'description' => '
        '),
        '410' => array(
            'header' => '410 Gone'
            ,'description' => ''
        ),
        '411' => array(
            'header' => '411 Length Required'
            ,'description' => 'The request did not specify the length of its content, which is required by the requested resource.'
        ),
        '412' => array(
            'header' => '412 Precondition Failed'
            ,'description' => 'The server does not meet one of the preconditions that the requester put on the request.'
        ),
        '413' => array(
            'header' => '413 Request Entity Too Large'
            ,'description' => 'The request is larger than the server is willing or able to process.'
        ),
        '414' => array(
            'header' => '414 Request-URI Too Long'
            ,'description' => 'The URI provided was too long for the server to process.'
        ),
        '415' => array(
            'header' => '415 Unsupported Media Type'
            ,'description' => 'The request entity has a media type which the server or resource does not support.'
        ),
        '416' => array(
            'header' => '416 Requested Range Not Satisfiable'
            ,'description' => 'The client has asked for a portion of the file, but the server cannot supply that portion.'
        ),
        '417' => array(
            'header' => '417 Expectation Failed'
            ,'description' => 'The server cannot meet the requirements of the Expect request-header field.'
        ),
        '422' => array(
            'header' => '422 Unprocessable Entity'
            ,'description' => 'he request was well-formed but was unable to be followed due to semantic errors.'
        ),
        '423' => array(
            'header' => '423 Locked'
            ,'description' => 'The resource that is being accessed is locked.'
        ),
        '424' => array(
            'header' => '424 Failed Dependency'
            ,'description' => 'The resource that is being accessed is locked.'
        ),
        '425' => array(
            'header' => '425 Unordered Collection'
            ,'description' => ''
        ),
        '426' => array(
            'header' => '426 Upgrade Required'
            ,'description' => ''
        ),
        '428' => array(
            'header' => '428 Precondition Required'
            ,'description' => 'The origin server requires the request to be conditional.'
        ),
        '429' => array(
            'header' => '429 Too Many Requests'
            ,'description' => 'The user has sent too many requests in a given amount of time.'
        ),
        '431' => array(
            'header' => '431 Request Header Fields Too Large'
            ,'description' => ''
        ),
        '432' => array(
            'header' => '432 Request Thrashed'
            ,'description' => ''
        ),
        '444' => array(
            'header' => '444 No Response'
            ,'description' => ''
        ),
        '449' => array(
            'header' => '449 Retry With'
        ,'description' => ''
        ),
        '456' => array(
            'header' => '456 Unrecoverable Error'
            ,'description' => ''
        ),

        '500' => array(
            'header' => '500 Internal Server Error'
            ,'description' => 'The server encountered an unexpected condition.'
        ),
        '501' => array(
            'header' => '501 Not Implemented'
            ,'description' => ''
        ),
        '502' => array(
            'header' => '502 Bad Gateway'
            ,'description' => ''
        ),
        '503' => array(
            'header' => '503 Service Unavailable'
            ,'description' => 'The server is currently unable to handle the request due to a temporary overloading.'
        ),
        '504' => array(
            'header' => '504 Gateway Timeout'
            ,'description' => ''
        ),
        '505' => array(
            'header' => '505 HTTP Version Supported'
            ,'description' => ''
        ),
        '506' => array(
            'header' => '506 Variant Also Negotiates'
            ,'description' => ''
        ),
        '507' => array(
            'header' => '507 Insufficient Storage'
            ,'description' => ''
        ),
        '508' => array(
            'header' => '508 Loop Detected'
            ,'description' => ''
        ),
        '509' => array(
            'header' => '509 Bandwidth Limit Exceeded'
            ,'description' => ''
        ),
        '510' => array(
            'header' => '5110 Not Extended'
            ,'description' => ''
        )
    );
}
