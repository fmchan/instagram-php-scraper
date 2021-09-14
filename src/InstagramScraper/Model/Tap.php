<?php

namespace InstagramScraper\Model;

class Tap extends AbstractModel
{
    protected static $initPropertiesMap = [
        'username' => 'username',
        'full_name' => 'fullName',
        'is_private' => 'isPrivate',
    ];
    protected $username = '';
    protected $fullName = '';
    protected $isPrivate = false;

    public function getUsername()
    {
        return $this->username;
    }
    public function getFullName()
    {
        return $this->fullName;
    }
    public function isPrivate()
    {
        return $this->isPrivate;
    }
}