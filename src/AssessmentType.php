<?php

namespace Elm;

/**
 * Provides the 'Assessment type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/assessment/25831c2
 */
final class AssessmentType extends ControlledVocabulary
{
    protected const NAME = 'Assessment type';

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
            '19a2e5e671' => [
                self::LABEL => 'peer assessment',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Peers grade you.',
            ],
            '2939dae15f' => [
                self::LABEL => 'marked assignment',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '3484bd7e51' => [
                self::LABEL => 'continuous evaluation',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '4f03b91c0e' => [
                self::LABEL => 'portfolio',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '56539a6507' => [
                self::LABEL => 'group performance',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '6a4db9f11d' => [
                self::LABEL => 'practical assessment',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '6e6cb2cc78' => [
                self::LABEL => 'written examination',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '7331eb4762' => [
                self::LABEL => 'level of attendance',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '795dac4096' => [
                self::LABEL => 'project work',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '812e3b0ae1' => [
                self::LABEL => 'peer review',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Test of presentation and/or synthesis skills. Peers provide feedback, but teacher grades you.',
            ],
            'b1b68f6735' => [
                self::LABEL => 'quiz',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'recall test based on multiple choice entries',
            ],
            'c4256a2726' => [
                self::LABEL => 'problem based learning',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'test of practical problem solving skills',
            ],
            'c_04b30a72' => [
                self::LABEL => 'Presentation',
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'c_2b3bd410' => [
                self::LABEL => 'Self-assessment',
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'c_4f874951' => [
                self::LABEL => 'Guided self-assessment',
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'd30284d7df' => [
                self::LABEL => 'oral examination',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'de4d165a6c' => [
                self::LABEL => 'artefact assessment',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
        ];
    }
}
