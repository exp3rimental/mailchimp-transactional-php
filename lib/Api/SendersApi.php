<?php

/**
 * SendersApi
 * PHP version 5
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Mailchimp Transactional API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.43
 * Contact: apihelp@mailchimp.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace MailchimpTransactional\Api;

use MailchimpTransactional\ApiException;
use MailchimpTransactional\Configuration;
use MailchimpTransactional\HeaderSelector;
use MailchimpTransactional\ObjectSerializer;

/**
 * SendersApi Class Doc Comment
 *
 * @category Class
 * @package  MailchimpTransactional
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SendersApi
{
    protected $Configuration;

    public function __construct(Configuration $config = null)
    {
        $this->config = $config ?: new Configuration();
    }

    /**
     * Add sender domain
     * Adds a sender domain to your account. Sender domains are added automatically as you send, but you can use this call to add them ahead of time.
     */
    public function addDomain($body = [])
    {
        return $this->config->post('/senders/add-domain', $body);
    }
    /**
     * Check domain settings
     * Checks the SPF and DKIM settings for a domain, as well the domain verification. If you haven&#39;t already added this domain to your account, it will be added automatically.
     */
    public function checkDomain($body = [])
    {
        return $this->config->post('/senders/check-domain', $body);
    }
    /**
     * List sender domains
     * Returns the sender domains that have been added to this account.
     */
    public function domains($body = [])
    {
        return $this->config->post('/senders/domains', $body);
    }
    /**
     * Get sender info
     * Return more detailed information about a single sender, including aggregates of recent stats.
     */
    public function info($body = [])
    {
        return $this->config->post('/senders/info', $body);
    }
    /**
     * List account senders
     * Return the senders that have tried to use this account.
     */
    public function list($body = [])
    {
        return $this->config->post('/senders/list', $body);
    }
    /**
     * View sender history
     * Return the recent history (hourly stats for the last 30 days) for a sender.
     */
    public function timeSeries($body = [])
    {
        return $this->config->post('/senders/time-series', $body);
    }
    /**
     * Verify domain
     * Sends a verification email in order to verify ownership of a domain. Domain verification is a required step to confirm ownership of a domain. Once a domain has been verified in a Transactional API account, other accounts may not have their messages signed by that domain unless they also verify the domain. This prevents other Transactional API accounts from sending mail signed by your domain.
     */
    public function verifyDomain($body = [])
    {
        return $this->config->post('/senders/verify-domain', $body);
    }
}
