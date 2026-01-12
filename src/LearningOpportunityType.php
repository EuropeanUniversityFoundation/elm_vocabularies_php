<?php

namespace Elm;

/**
 * Provides the 'Learning opportunity type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-opportunity/25831c2
 */
final class LearningOpportunityType extends ControlledVocabulary
{
    protected const NAME = 'Learning opportunity type';

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
            '05053c1cbe' => [
                self::LABEL => 'Course',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '0f7dac46ca' => [
                self::LABEL => 'Programme module',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '11252a5207' => [
                self::LABEL => 'Mentoring',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '17744a2647' => [
                self::LABEL => 'MOOC',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '63f9f6180c' => [
                self::LABEL => 'Apprenticeship',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '65a4cf5de2' => [
                self::LABEL => 'Study visit',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '74a4a268e8' => [
                self::LABEL => 'Short learning programme',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '77b99de990' => [
                self::LABEL => 'Internship',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '79343569f3' => [
                self::LABEL => 'Educational programme',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '7e1ac538db' => [
                self::LABEL => 'Class',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            '8b965da2d4' => [
                self::LABEL => 'Service learning',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'b2434ca358' => [
                self::LABEL => 'Thesis',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
            'c_170b037d' => [
                self::LABEL => 'Challenge',
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => null,
            ],
        ];
    }
}
