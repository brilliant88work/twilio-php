<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeRegistrations\AuthRegistrationsCredentialListMappingList;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeRegistrations\AuthRegistrationsCredentialListMappingList $credentialListMappings
 * @method \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeRegistrations\AuthRegistrationsCredentialListMappingContext credentialListMappings(string $sid)
 */
class AuthTypeRegistrationsList extends ListResource {
    protected $_credentialListMappings = null;

    /**
     * Construct the AuthTypeRegistrationsList
     *
     * @param Version $version Version that contains the resource
     * @param string $accountSid The SID of the Account that created the resource
     * @param string $domainSid The unique string that identifies the resource
     * @return \Twilio\Rest\Api\V2010\Account\Sip\Domain\AuthTypes\AuthTypeRegistrationsList
     */
    public function __construct(Version $version, $accountSid, $domainSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('accountSid' => $accountSid, 'domainSid' => $domainSid, );
    }

    /**
     * Access the credentialListMappings
     */
    protected function getCredentialListMappings() {
        if (!$this->_credentialListMappings) {
            $this->_credentialListMappings = new AuthRegistrationsCredentialListMappingList(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['domainSid']
            );
        }

        return $this->_credentialListMappings;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return \Twilio\ListResource The requested subresource
     * @throws \Twilio\Exceptions\TwilioException For unknown subresources
     */
    public function __get($name) {
        if (property_exists($this, '_' . $name)) {
            $method = 'get' . ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return \Twilio\InstanceContext The requested resource context
     * @throws \Twilio\Exceptions\TwilioException For unknown resource
     */
    public function __call($name, $arguments) {
        $property = $this->$name;
        if (method_exists($property, 'getContext')) {
            return call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString() {
        return '[Twilio.Api.V2010.AuthTypeRegistrationsList]';
    }
}