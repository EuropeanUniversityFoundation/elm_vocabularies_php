<?php

declare(strict_types=1);

namespace Elm;

/**
 * Provides the 'Mode of learning and assessment' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-assessment/25831c2
 */
final class ModeOfLearningAndAssessment extends ControlledVocabulary
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
        return 'Mode of learning and assessment';
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
            '729f3bed4b' => [
                'label' => 'Workbased',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '7813801c77' => [
                'label' => 'Project based',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '9191af2ed9' => [
                'label' => 'Presential',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '920fbb3cbe' => [
                'label' => 'Online',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'e92d221e4d' => [
                'label' => 'Blended',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'ed4c557045' => [
                'label' => 'Research-Lab based',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'c_3a90b26d' => [
                'label' => 'Hybrid',
                'validSince' => null,
                'validUntil' => null,
                'definition' => null,
            ],
        ];
    }
}
