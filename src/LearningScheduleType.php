<?php

namespace Elm;

/**
 * Provides the 'Learning schedule type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-schedule/25831c2
 */
final class LearningScheduleType extends ControlledVocabulary
{
    protected const NAME = 'Learning schedule type';

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
            '67395e6b5a' => [
                self::LABEL => 'Part time light',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Part time light (less than 8 hours)'
            ],
            '72a0ab92fa' => [
                self::LABEL => 'Full time',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Full time (more then 30 hours)'
            ],
            'f230bae523' => [
                self::LABEL => 'Part time intensive',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Part time intensive (8 to 30 hours)'
            ],
        ];
    }
}
