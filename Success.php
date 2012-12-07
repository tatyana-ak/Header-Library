<?php
/**
 * User: tanchik194
 * Date: 04.12.12
 */

namespace Headers;


class Success extends Constants
{
    /**
     * 200 OK
     *
     * Standard response for successful HTTP requests.
     * The actual response will depend on the request method used.
     * In a GET request, the response will contain an entity corresponding to the requested resource.
     * In a POST request the response will contain an entity describing or containing the result of the action.
     */
    public static function ok()
    {
        header('HTTP/1.1 200 OK', true, 200);
        exit;
    }

    /**
     * 201 Created
     *
     * The request has been fulfilled and resulted in a new resource being created.
     *
     * @var string $location (absoluteURI | relativeURI) (required)
     * @var string $contentType (application/json | text/html | media-type | else) (required)
     */
    public static function created($location, $contentType = self::TYPE_JSON)
    {
        header('HTTP/1.1 201 Created', true, 201);
        header('Content-Location:' . $location);
        header('Content-Type:' . $contentType);
        exit;
    }

    /**
     * 203 Accepted
     *
     * The request has been accepted for processing, but the processing has not been completed.
     * The request might or might not eventually be acted upon,
     * as it might be disallowed when processing actually takes place.
     */
    public static function accepted()
    {
        header('HTTP/1.1 203 Accepted', true, 203);
        exit;
    }

    /**
     * 203 Non-Authoritative Information
     *
     * The server successfully processed the request, but is returning information that may be from another source.
     */
    public static function notAuthoritativeInfo()
    {
        header('HTTP/1.1 203 Non-Authoritative Information', true, 203);
        exit;
    }

    /**
     * 204 No Content
     *
     * The server successfully processed the request, but is not returning any content.
     */
    public static function noContent()
    {
        header('HTTP/1.1 204 No Content', true, 204);
        exit;
    }

    /**
     * 205 Reset Content
     *
     * The server successfully processed the request, but is not returning any content.
     * Unlike a 204 response, this response requires that the requester reset the document view.
     */
    public static function resetContent()
    {
        header('HTTP/1.1 Reset Content', true, 205);
        exit;
    }

    /**
     * 206 Partial Content
     *
     * The server is delivering only part of the resource due to a range header sent by the client.
     * The range header is used by tools like wget to enable resuming of interrupted downloads,
     * or split a download into multiple simultaneous streams.
     *
     * @var string $contentRange (byte-content-range-spec) (required)
     */
    public static function partialContent($contentRange)
    {
        header('HTTP/1.1 206 Partial Content', true, 206);
        header('Content-Range:' . $contentRange);
        exit;
    }

    /**
     * 207 Multi-Status
     *
     * The message body that follows is an XML message and can contain a number of separate response codes,
     * depending on how many sub-requests were made.
     */
    public static function multiStatus()
    {
        header('HTTP/1.1 207 Multi-Status', true, 207);
        exit;
    }

    /**
     * 226  IM Used
     *
     * The server has fulfilled a GET request for the resource,
     * and the response is a representation of the result of one or
     * more instance-manipulations applied to the current instance.
     */
    public static function IMUsed()
    {
        header('HTTP/1.1 226 IM Used', true, 226);
        exit;
    }
}