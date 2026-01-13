<?php

declare(strict_types=1);

namespace Elm;

/**
 * Provides the 'Learning opportunity type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-opportunity/25831c2
 */
final class LearningOpportunityType extends ControlledVocabulary
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
        return 'Learning opportunity type';
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
            '05053c1cbe' => [
                'label' => 'Course',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '0f7dac46ca' => [
                'label' => 'Programme module',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '11252a5207' => [
                'label' => 'Mentoring',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '17744a2647' => [
                'label' => 'MOOC',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '63f9f6180c' => [
                'label' => 'Apprenticeship',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '65a4cf5de2' => [
                'label' => 'Study visit',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '74a4a268e8' => [
                'label' => 'Short learning programme',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '77b99de990' => [
                'label' => 'Internship',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '79343569f3' => [
                'label' => 'Educational programme',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '7e1ac538db' => [
                'label' => 'Class',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '8b965da2d4' => [
                'label' => 'Service learning',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'b2434ca358' => [
                'label' => 'Thesis',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'c_170b037d' => [
                'label' => 'Challenge',
                'validSince' => null,
                'validUntil' => null,
                'definition' => null,
            ],
        ];
    }
}
