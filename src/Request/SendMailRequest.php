<?php

namespace Ram\WIK\Request;

class SendMailRequest extends BaseRequest
{
    protected string $action = 'sendmail';

    protected string $to_login;
    protected string $from_login;
    protected string $from_name;
    protected string $subject;
    protected string $body;

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getToLogin(): string
    {
        return $this->to_login;
    }

    /**
     * @param string $to_login
     * @return SendMailRequest
     */
    public function setToLogin(string $to_login): SendMailRequest
    {
        $this->to_login = $to_login;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromLogin(): string
    {
        return $this->from_login;
    }

    /**
     * @param string $from_login
     * @return SendMailRequest
     */
    public function setFromLogin(string $from_login): SendMailRequest
    {
        $this->from_login = $from_login;
        return $this;
    }

    /**
     * @return string
     */
    public function getFromName(): string
    {
        return $this->from_name;
    }

    /**
     * @param string $from_name
     * @return SendMailRequest
     */
    public function setFromName(string $from_name): SendMailRequest
    {
        $this->from_name = $from_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubject(): string
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return SendMailRequest
     */
    public function setSubject(string $subject): SendMailRequest
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return SendMailRequest
     */
    public function setBody(string $body): SendMailRequest
    {
        $this->body = $body;
        return $this;
    }



}
