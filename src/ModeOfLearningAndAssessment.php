<?php

namespace Elm;

/**
 * Provides the 'Mode of learning and assessment' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-assessment/25831c2
 */
final class ModeOfLearningAndAssessment extends ControlledVocabulary
{
    protected const NAME = 'Mode of learning and assessment';

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
            '729f3bed4b' => [
                self::LABEL => 'Workbased',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '7813801c77' => [
                self::LABEL => 'Project based',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '9191af2ed9' => [
                self::LABEL => 'Presential',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '920fbb3cbe' => [
                self::LABEL => 'Online',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'c_3a90b26d' => [
                self::LABEL => 'Hybrid',
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'e92d221e4d' => [
                self::LABEL => 'Blended',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'ed4c557045' => [
                self::LABEL => 'Research-Lab based',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
        ];
    }
}
