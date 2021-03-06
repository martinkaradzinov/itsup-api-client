<?php

/*
 * Copyright 2016 SCTR Services
 *
 * Distribution and reproduction are prohibited.
 *
 * @package     itsup-api-client
 * @copyright   SCTR Services LLC 2016
 * @license     No License (Proprietary)
 */

namespace Itsup\Api\Model;

use Itsup\Api\Annotation\Transform;

/**
 * @author Cyril LEGRAND <cyril@sctr.net>
 *
 * @method int getId()
 * @method Account getAccount()
 * @method Account getUser()
 * @method string getName()
 * @method string getEmail()
 * @method string getSkype()
 * @method string getPhone()
 * @method string getCompany()
 * @method string getCountry()
 * @method string getWebsiteUrl()
 * @method bool getPublisher()
 * @method bool getBroker()
 * @method bool getAdvertiser()
 */
class Contact extends AbstractModel
{
    /**
     * @var int
     * @Transform("int")
     */
    public $id;

    /**
     * @var Account
     * @Transform("class", class="Itsup\Api\Model\Account")
     */
    public $account;

    /**
     * @var User
     * @Transform("class", class="Itsup\Api\Model\User")
     */
    public $user;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $skype;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $company;

    /**
     * @var string
     */
    public $country;

    /**
     * @var string
     */
    public $websiteUrl;

    /**
     * @var bool
     * @Transform("bool")
     */
    public $publisher;

    /**
     * @var bool
     * @Transform("bool")
     */
    public $broker;

    /**
     * @var bool
     * @Transform("bool")
     */
    public $advertiser;

    /**
     * @return bool
     */
    public function isPublisher(): bool
    {
        return $this->publisher;
    }

    /**
     * @return bool
     */
    public function isBroker(): bool
    {
        return $this->broker;
    }

    /**
     * @return bool
     */
    public function isAdvertiser(): bool
    {
        return $this->advertiser;
    }
}
