<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CustomValidator implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
       #استفاده از valadition های که خودمون تنطیمش کنیم
       #ابتدا با php artisan make:rule ایجاد میکنیمم
       # ['required', new CustomValidator] و اینکونه استفاده میکنیم ازش 

    }
}
