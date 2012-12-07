<?php
/**
 * User: tanchik194
 * Date: 04.12.12
 */

namespace Headers;

class ClientError
{

    /**
     * 400 Bad Request
     *
     * The request cannot be fulfilled due to bad syntax.
     */
    public static function badRequest()
    {
        header('HTTP/1.1 400 Bad Request', true, 400);
        exit;
    }

    /**
     * 401 Unauthorized
     *
     * Similar to 403 Forbidden, but specifically for use when authentication is required
     * and has failed or has not yet been provided.
     */
    public static function unauthorized()
    {
        header('HTTP/1.1 401 Unauthorized', true, 401);
        exit;
    }


    /**
     * 402 Payment Required
     *
     * Reserved for future use.
     */
    public static function paymentRequired()
    {
        header('HTTP/1.1 402 Payment Required', true, 402);
        exit;
    }

    /**
     * 403 Forbidden
     *
     * The request was a valid request, but the server is refusing to respond to it.
     */
    public static function forbidden()
    {
        header('HTTP/1.1 403 Forbidden', true, 403);
        exit;
    }


    /**
     * 404 Not Found
     *
     * The requested resource could not be found but may be available again in the future.
     */
    public static function notFound()
    {
        header('HTTP/1.1 404 Not Found', true, 404);
        exit;
    }

    /**
     * 405 Method Not Allowed
     *
     * A request was made of a resource using a request method not supported by that resource.
     *
     * @var array $allowMethods (required)
     */
    public static function methodNotAllowed($allowMethods)
    {
        header('HTTP/1.1 405 Method Not Allowed', true, 405);
        header('Allow:' . implode(',', $allowMethods));
        exit;
    }

    /**
     * 406 Not Acceptable
     *
     * The requested resource is only capable of generating content not acceptable according
     * to the Accept headers sent in the request.
     */
    public static function notAcceptable()
    {
        header('HTTP/1.1 406 Not Acceptable', true, 406);
        exit;
    }

    /**
     * 407 Proxy Authentication Required
     *
     * The client must first authenticate itself with the proxy.
     */
    public static function proxyAuthenticationRequired()
    {
        header('HTTP/1.1 407 Proxy Authentication Required', true, 407);
        exit;
    }

    /**
     * 408 Request Timeout
     *
     * The server timed out waiting for the request.
     */
    public static function RequestTimeout()
    {
        header('HTTP/1.1 408 Request Timeout', true, 408);
        exit;
    }

    /**
     * 409 Conflict
     *
     * Indicates that the request could not be processed because of conflict in the request, such as an edit conflict.
     */
    public static function conflict()
    {
        header('HTTP/1.1 409 Conflict', true, 409);
        exit;
    }

    /**
     * 410 Gone
     *
     * Indicates that the resource requested is no longer available and will not be available again.
     */
    public static function gone()
    {
        header('HTTP/1.1 410 Gone', true, 410);
        exit;
    }

    /**
     * 411 Length Required
     *
     * The request did not specify the length of its content, which is required by the requested resource.
     *
     * @var string $contentLength (required)
     */
    public static function lengthRequired($contentLength)
    {
        header('HTTP/1.1 411 Length Required', true, 411);
        header('Content-Length:' . $contentLength);
        exit;
    }

    /**
     * 412 Precondition Failed
     *
     * The server does not meet one of the preconditions that the requester put on the request.
     */
    public static function preconditionFailed()
    {
        header('HTTP/1.1 412 Precondition Failed', true, 412);
        exit;
    }

    /**
     * 413 Request Entity Too Large
     *
     * The request is larger than the server is willing or able to process.
     *
     * @var string $retryAfter ( HTTP-date | delta-seconds ) (optional)
     */
    public static function requestEntityTooLarge($retryAfter = '')
    {
        header('HTTP/1.1 413 Request Entity Too Large', true, 413);

        if(!empty($retryAfter)) {
            header('Retry-After: ' . $retryAfter);
        }
        exit;
    }

    /**
     * 414 Request-URI Too Long
     *
     * The URI provided was too long for the server to process.
     */
    public static function requestUriTooLong()
    {
        header('HTTP/1.1 414 Request-URI Too Long', true, 414);
        exit;
    }

    /**
     * 415 Unsupported Media Type
     *
     * The request entity has a media type which the server or resource does not support.
     */
    public static function unsupportedMediaType()
    {
        header('HTTP/1.1 415 Unsupported Media Type', true, 415);
        exit;
    }

    /**
     * 416 Requested Range Not Satisfiable
     *
     * The client has asked for a portion of the file, but the server cannot supply that portion.
     */
    public static function requestedRangeNotSatisfiable()
    {
        header('HTTP/1.1 416 Requested Range Not Satisfiable', true, 416);
        exit;
    }

    /**
     * 417 Expectation Failed
     *
     * The server cannot meet the requirements of the Expect request-header field.
     */
    public static function expectationFailed()
    {
        header('HTTP/1.1 417 Expectation Failed', true, 417);
        exit;
    }

    /**
     * 422 Unprocessable Entity
     *
     * The request was well-formed but was unable to be followed due to semantic errors.
     */
    public static function unprocessableEntity()
    {
        header('HTTP/1.1 422 Unprocessable Entity', true, 422);
        exit;
    }

    /**
     * 423 Locked
     *
     * The resource that is being accessed is locked.
     */
    public static function locked()
    {
        header('HTTP/1.1 423 Locked', true, 423);
        exit;
    }

    /**
     * 424 Failed Dependency
     *
     * The request failed due to failure of a previous request (e.g. a PROPPATCH).
     */
    public static function failedDependency()
    {
        header('HTTP/1.1 424 Failed Dependency', true, 424);
        exit;
    }

    /**
     * 425 Unordered Collection
     *
     * Defined in drafts of "WebDAV Advanced Collections Protocol", but not present in
     * "Web Distributed Authoring and Versioning (WebDAV) Ordered Collections Protocol".
     */
    public static function unorderedCollection()
    {
        header('HTTP/1.1 425 Unordered Collection', true, 425);
        exit;
    }


    /**
     * 426 Upgrade Required
     *
     * The client should switch to a different protocol such as TLS/1.0.
     */
    public static function upgradeRequired()
    {
        header('HTTP/1.1 426 Upgrade Required', true, 426);
        exit;
    }

    /**
     * 428 Precondition Required
     *
     * The origin server requires the request to be conditional.
     * Intended to prevent "the 'lost update' problem, where a client GETs a resource's state,
     * modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server,
     * leading to a conflict."
     */
    public static function preconditionRequired()
    {
        header('HTTP/1.1 428 Precondition Required', true, 428);
        exit;
    }

    /**
     * 429 Too Many Requests
     *
     * The user has sent too many requests in a given amount of time.
     * Intended for use with rate limiting schemes.
     */
    public static function tooManyRequests()
    {
        header('HTTP/1.1 429 Too Many Requests', true, 429);
        exit;
    }

    /**
     * 431 Request Header Fields Too Large
     *
     * The server is unwilling to process the request because either an individual header field,
     * or all the header fields collectively, are too large.
     */
    public static function requestHeaderFieldsTooLarge()
    {
        header('HTTP/1.1 431 Request Header Fields Too Large', true, 431);
        exit;
    }

    /**
     * 432 Request Thrashed
     *
     * The server has received too many requests and is currently busy trying to handle them,
     * likely causing other problems. The server's hosed.
     */
    public static function requestThrashed()
    {
        header('HTTP/1.1 432 Request Thrashed', true, 432);
        exit;
    }

    /**
     * 444 No Response (Nginx)
     *
     * Used in Nginx logs to indicate that the server has returned no information to the client
     * and closed the connection (useful as a deterrent for malware).
     */
    public static function noResponse()
    {
        header('HTTP/1.1 444 No Response', true, 444);
        exit;
    }

    /**
     * 449 Retry With
     *
     * A Microsoft extension. The request should be retried after performing the appropriate action.
     */
    public static function retryWith()
    {
        header('HTTP/1.1 449 Retry With', true, 449);
        exit;
    }

    /**
     * 456 Unrecoverable Error
     */
    public static function unrecoverableError()
    {
        header('HTTP/1.1 456 Unrecoverable Error', true, 456);
        exit;
    }
}