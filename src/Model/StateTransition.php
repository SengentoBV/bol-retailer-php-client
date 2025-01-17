<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class StateTransition extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'state' => [ 'model' => null, 'array' => false ],
            'stateDateTime' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string The state that was transitioned into.
     */
    public $state;

    /**
     * @var string The transition date and time in ISO 8601 format.
     */
    public $stateDateTime;

    public function getStateDateTime(): ?\DateTime
    {
        if (empty($this->stateDateTime)) {
            return null;
        }

        return \DateTime::createFromFormat(\DateTime::ATOM, $this->stateDateTime);
    }
}
