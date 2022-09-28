<?php

namespace Ram\WIK\Request;

class AppendCommentRequest extends BaseRequest
{
    protected string $action = 'appendcomment';
    protected string $comment;
    protected string $login;
    protected string $group;

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
    public function getComment(): string
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     * @return AppendCommentRequest
     */
    public function setComment(string $comment): AppendCommentRequest
    {
        $this->comment = $comment;
        return $this;
    }

    /**
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }

    /**
     * @param string $login
     * @return AppendCommentRequest
     */
    public function setLogin(string $login): AppendCommentRequest
    {
        $this->login = $login;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @param string $group
     * @return AppendCommentRequest
     */
    public function setGroup(string $group): AppendCommentRequest
    {
        $this->group = $group;
        return $this;
    }


}
