<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\ValidationRule;
use Closure;
use App\Models\Verseny;

class VersenySzabaly implements ValidationRule
{
    private $name;
    private $year;

    public function __construct(string $name, int $year)
    {
        $this->name = $name;
        $this->year = $year;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $exists = Verseny::where('verseny_nev', $this->name)
            ->where('verseny_ev', $this->year)
            ->exists();

        if ($exists) {
            $fail('A verseny neve és éve kombináció már létezik.');
        }
    }
}
