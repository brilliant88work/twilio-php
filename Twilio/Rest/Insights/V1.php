<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Insights;

use Twilio\Domain;
use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Insights\V1\CallSummaryList;
use Twilio\Version;

/**
 * @property \Twilio\Rest\Insights\V1\CallSummaryList $summary
 * @method \Twilio\Rest\Insights\V1\CallSummaryContext summary(string $callSid)
 */
class V1 extends Version {
    protected $_summary = null;

    /**
     * Construct the V1 version of Insights
     *
     * @param \Twilio\Domain $domain Domain that contains the version
     * @return \Twilio\Rest\Insights\V1 V1 version of Insights
     */
    public function __construct(Domain $domain) {
        parent::__construct($domain);
        $this->version = 'v1';
    }

    /**
     * @return \Twilio\Rest\Insights\V1\CallSummaryList
     */
    protected function getSummary() {
        if (!$this->_summary) {
            $this->_summary = new CallSummaryList($this);
        }
        return $this->_summary;
    }

    /**
     * Magic getter to lazy load root resources
     *
     * @param string $name Resource to return
     * @return \Twilio\ListResource The requested resource
     * @throws \Twilio\Exceptions\TwilioException For unknown resource
     */
    public function __get($name) {
        $method = 'get' . ucfirst($name);
        if (method_exists($this, $method)) {
            return $this->$method();
        }

        throw new TwilioException('Unknown resource ' . $name);
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
        return '[Twilio.Insights.V1]';
    }
}