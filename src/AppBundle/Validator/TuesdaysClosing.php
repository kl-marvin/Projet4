<?php

namespace AppBundle\Validator;


use Symfony\Component\Validator\Constraint;


/**
 * Class TuesdaysClosing
 * @package AppBundle\Validator
 * @Annotation
 */
class TuesdaysClosing extends Constraint
{
    public $message = "Vous ne pouvez pas réserver le billet les Mardis.";
}