<?php

namespace App\Lib;

/**
 * [Validator description]
 */
class Validator
{
    /**
     * [$array the $_POST array will be validate]
     *
     * @var [array]
     */
    private $array;

    /**
     * [$errors will display on screen]
     *
     * @var [array]
     */
    private $errors = [];

    /**
     *
     * [Construction Function, import $_POST as an array]
     *
     * @param   array  $array  [$array the $_POST user input]
     *
     */
    public function __construct(array $array)
    {
        $this->array = $array;
    }

    use \App\Lib\Traits\ValidateMinLength;

    use \App\Lib\Traits\ValidateMaxLength;

    use \App\Lib\Traits\ValidateString;

    use \App\Lib\Traits\ValidatePhone;

    use \App\Lib\Traits\ValidatePostalCode;

    use \App\Lib\Traits\ValidateEmail;

    use \App\Lib\Traits\ValidateRequired;

    /* ----------- MAGIC METHOD
      -------------------------------------------------------- */

    use \App\Lib\Traits\ReturnErrors;

    use \App\Lib\Traits\ReturnArray;

}