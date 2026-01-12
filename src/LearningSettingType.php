<?php

declare(strict_types=1);

namespace Elm;

/**
 * Provides the 'Learning setting type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-setting/25831c2
 */
final class LearningSettingType extends ControlledVocabulary
{
    protected const NAME = 'Learning setting type';

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
            '6fd4685715' => [
                self::LABEL => 'formal learning',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Learning which takes place in an organised and structured environment, specifically dedicated to learning, and typically leads to the award of a qualification, usually in the form of a certificate or a diploma; it includes systems of general education, initial vocational training and higher education.',
            ],
            'e207a81fc7' => [
                self::LABEL => 'non-formal learning',
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => 'Learning which takes place through planned activities (in terms of learning objectives, learning time) where some form of learning support is present (e.g. student-teacher relationships); it may cover programmes to impart work skills, adult literacy and basic education for early school leavers; very common cases of non-formal learning include in-company training, through which companies update and improve the skills of their workers such as ICT skills, structured on-line learning (e.g. by making use of open educational resources), and courses organised by civil society organisations for their members, their target group or the general public.',
            ],
        ];
    }
}
