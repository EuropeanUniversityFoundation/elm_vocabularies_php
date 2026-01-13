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
    /**
     * Get vocabulary name.
     *
     * Returns the name of the ELM controlled vocabulary.
     *
     * @return string
     **/
    public function getName(): string
    {
        return 'Learning activity type';
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
                'label' => 'lab / simulation / practice coursework',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '4357e0e681' => [
                'label' => 'job experience',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '59eaf34fab' => [
                'label' => 'volunteering',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'a7e556215a' => [
                'label' => 'research',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'b660f5dcea' => [
                'label' => 'self-motivated study',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'bf2e3a7bae' => [
                'label' => 'e-learning coursework',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'bf5588ff84' => [
                'label' => 'internship',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'd46a826a39' => [
                'label' => 'apprenticeship',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'efff75e10a' => [
                'label' => 'workshop, seminar or conference',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'fd33e234ae' => [
                'label' => 'educational programme',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'ff436ea7c9' => [
                'label' => 'classroom coursework',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'c_5665a0ad' => [
                'label' => 'mentoring and monitoring activity',
                'validSince' => null,
                'validUntil' => null,
                'definition' => null,
            ],
        ];
    }
}
