<?php

/**
 * @brief Exception intended to be thrown when we are trying to deal with a depositor that do not actually exists
 */
class DepositorNotExistsException extends DomainException {
	protected $message = 'You are trying to deal with a depositor that do not actually exists';
}