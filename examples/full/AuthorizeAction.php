<?php

namespace SchemaOrg;

/**
 * Authorize Action
 *
 * @link http://schema.org/AuthorizeAction
 */
class AuthorizeAction extends AllocateAction
{
    /**
     * Recipient (Organization)
     *
     * @var Organization A sub property of participant. The participant who is at the receiving end of the action.
     */
    protected $recipientOrganization;
    /**
     * Recipient (Audience)
     *
     * @var Audience A sub property of participant. The participant who is at the receiving end of the action.
     */
    protected $recipientAudience;
    /**
     * Recipient (Person)
     *
     * @var Person A sub property of participant. The participant who is at the receiving end of the action.
     */
    protected $recipientPerson;
}