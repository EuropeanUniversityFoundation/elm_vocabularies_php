<?php

declare(strict_types=1);

namespace Elm;

/**
 * Provides the 'Assessment type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/assessment/25831c2
 */
final class AssessmentType extends ControlledVocabulary
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
        return 'Assessment type';
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
            '19a2e5e671' => [
                'label' => 'peer assessment',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => 'Peers grade you.',
            ],
            '2939dae15f' => [
                'label' => 'marked assignment',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '3484bd7e51' => [
                'label' => 'continuous evaluation',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '4f03b91c0e' => [
                'label' => 'portfolio',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '56539a6507' => [
                'label' => 'group performance',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '6a4db9f11d' => [
                'label' => 'practical assessment',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '6e6cb2cc78' => [
                'label' => 'written examination',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '7331eb4762' => [
                'label' => 'level of attendance',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '795dac4096' => [
                'label' => 'project work',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            '812e3b0ae1' => [
                'label' => 'peer review',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => 'test of presentation and/or synthesis skills',
            ],
            'b1b68f6735' => [
                'label' => 'quiz',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => 'recall test based on multiple choice entries',
            ],
            'c4256a2726' => [
                'label' => 'problem based learning',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => 'test of practical problem solving skills',
            ],
            'd30284d7df' => [
                'label' => 'oral examination',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'de4d165a6c' => [
                'label' => 'artefact assessment',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'c_04b30a72' => [
                'label' => 'Presentation',
                'validSince' => null,
                'validUntil' => null,
                'definition' => null,
            ],
            'c_2b3bd410' => [
                'label' => 'Self-assessment',
                'validSince' => null,
                'validUntil' => null,
                'definition' => null,
            ],
            'c_4f874951' => [
                'label' => 'Guided self-assessment',
                'validSince' => null,
                'validUntil' => null,
                'definition' => null,
            ],
        ];
    }
}
