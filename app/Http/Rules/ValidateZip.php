<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidateZip implements Rule
{
    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Invalid Zip Code Format.';
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return preg_match('/^[0-9]{5}(\-[0-9]{4})?$/', $value);
    }
}
