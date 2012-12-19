<?php
/**
 * User: tanchik194
 * Date: 04.12.12
 */

namespace Headers;

class Redirection
{
    /**
     * 300 Multiple Choices
     *
     * Indicates multiple options for the resource that the client may follow. It, for instance,
     * could be used to present different format options for video, list files with different extensions,
     * or word sense disambiguation.
     */
    public static function multipleChoices()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[300]['header'], true, 300);
        exit;
    }

    /**
     * 301 Moved Permanently
     *
     * This and all future requests should be directed to the given URI.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     */
    public static function movedPermanently($location)
    {
        header('HTTP/1.1 ' . Constants::$headersArr[301]['header'], true, 301);
        header('Content-Location:' . $location);
        exit;
    }

    /**
     * 302 Moved Temporarily
     *
     * This is an example of industry practice contradicting the standard.
     * The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect
     * (the original describing phrase was "Moved Temporarily"),
     * but popular browsers implemented 302 with the functionality of a 303 See Other.
     * Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     */
    public static function movedTemporarily($location)
    {
        header('HTTP/1.1 302 Moved Temporarily', true, 302);
        header('Content-Location:' . $location);
        exit;
    }

    /**
     * 302 Found
     *
     * This is an example of industry practice contradicting the standard.
     * The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect
     * (the original describing phrase was "Moved Temporarily"),
     * but popular browsers implemented 302 with the functionality of a 303 See Other.
     * Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     */
    public static function found($location)
    {
        header('HTTP/1.1 ' . Constants::$headersArr[302]['header'], true, 302);
        header('Content-Location:' . $location);
        exit;
    }

    /**
     * 303 See Other
     *
     * The response to the request can be found under another URI using a GET method.
     * When received in response to a POST (or PUT/DELETE),
     * it should be assumed that the server has received the data and
     * the redirect should be issued with a separate GET message.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     */
    public static function seeOther($location)
    {
        header('HTTP/1.1 ' . Constants::$headersArr[303]['header'], true, 303);
        header('Content-Location:' . $location);
        exit;
    }

    /**
     * 304 Not Modifier
     *
     * Indicates the resource has not been modified since last requested.
     */
    public static function notModified()
    {
        header('HTTP/1.1 ' . Constants::$headersArr[304]['header'], true, 304);
        exit;
    }

    /**
     * 305 Use Proxy
     *
     * Many HTTP clients (such as Mozilla and Internet Explorer)
     * do not correctly handle responses with this status code, primarily for security reasons.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     */
    public static function useProxy($location)
    {
        header('HTTP/1.1 ' . Constants::$headersArr[305]['header'], true, 305);
        header('Content-Location:' . $location);
        exit;
    }

    /**
     * 307 Temporary Redirect
     *
     * In this case, the request should be repeated with another URI;
     * however, future requests should still use the original URI.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     */
    public static function temporaryRedirect($location)
    {
        header('HTTP/1.1 ' . Constants::$headersArr[307]['header'], true, 307);
        header('Content-Location:' . $location);
        exit;
    }
}