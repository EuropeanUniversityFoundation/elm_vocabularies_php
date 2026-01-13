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
    /**
     * Get vocabulary name.
     *
     * Returns the name of the ELM controlled vocabulary.
     *
     * @return string
     **/
    public function getName(): string
    {
        return 'Learning setting type';
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
                'label' => 'formal learning',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
            'e207a81fc7' => [
                'label' => 'non-formal learning',
                'validSince' => '2020-06-24',
                'validUntil' => null,
                'definition' => null,
            ],
        ];
    }
}
