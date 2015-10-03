<?php

use POData\Common\ODataConstants;
use POData\OperationContext\HTTPRequestMethod;
use POData\OperationContext\IHTTPRequest;

class RequestAdapter implements IHTTPRequest
{
    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * get the raw incoming url
     *
     * @return string RequestURI called by User with the value of QueryString
     */
    public function getRawUrl()
    {
        return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'];
    }

    /**
     * get the specific request headers
     *
     * @param string $key The header name
     *
     * @return string|null value of the header, NULL if header is absent.
     */
    public function getRequestHeader($key)
    {
        if (isset($this->request[$key])) {
            return $headers = $this->request[$key];
        }
        return null;
    }

    /**
     * Returns the Query String Parameters (QSPs) as an array of KEY-VALUE pairs.  If a QSP appears twice
     * it will have two entries in this array
     *
     * @return array[]
     */
    public function getQueryParameters()
    {
        $data = [];
        if (is_array($this->request)) {
            foreach ($this->request as $key => $value) {
                $data[] = [$key => $value];
            }
        }
        return $data;
    }

    /**
     * Get the HTTP method/verb of the HTTP Request
     *
     * @return HTTPRequestMethod
     */
    public function getMethod()
    {
        return new HTTPRequestMethod($_SERVER['REQUEST_METHOD']);
    }
}