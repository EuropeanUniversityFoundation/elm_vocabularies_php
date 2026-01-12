<?php

declare(strict_types=1);

namespace Elm;

/**
 * Provides the 'Learning activity type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-activity/25831c2
 */
final class LearningActivityType extends ControlledVocabulary
{
    protected const NAME = 'Learning activity type';

    /**
     * Get vocabulary name.
     *
     * Returns the name of the ELM controlled vocabulary.
     *
     * @return string
     **/
    public function getName(): string
    {
        return self::NAME;
    }

    /**
     * Get vocabulary.
     *
     * Returns the content of the controlled vocabulary.
     *
     * @return array<string, array<string, string|null>>
     **/
    public function getVocabulary(): array
    {
        return static::list();
    }

    /**
     * Curated vocabulary.
     *
     * Returns the content of the controlled vocabulary.
     *
     * @return array<string, array<string, string|null>>
     **/
    public static function list(): array
    {
        return [
            '3c8bd58d62' => [
                self::LABEL => 'lab / simulation / practice coursework',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '4357e0e681' => [
                self::LABEL => 'job experience',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '59eaf34fab' => [
                self::LABEL => 'volunteering',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'a7e556215a' => [
                self::LABEL => 'research',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'b660f5dcea' => [
                self::LABEL => 'self-motivated study',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'bf2e3a7bae' => [
                self::LABEL => 'e-learning coursework',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'bf5588ff84' => [
                self::LABEL => 'internship',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'c_5665a0ad' => [
                self::LABEL => 'mentoring and monitoring activity',
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'd46a826a39' => [
                self::LABEL => 'apprenticeship',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'efff75e10a' => [
                self::LABEL => 'workshop, seminar or conference',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'fd33e234ae' => [
                self::LABEL => 'educational programme',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'ff436ea7c9' => [
                self::LABEL => 'classroom coursework',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
        ];
    }
}
