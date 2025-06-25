<?php

namespace Elm;

/**
 * Provides the 'Assessment type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/assessment/25831c2
 */
final class AssessmentType implements ControlledVocabularyInterface
{
    const LABEL = 'label';
    const VALID_SINCE = 'validSince';
    const VALID_UNTIL = 'validUntil';
    const DEFINITION = 'definition';

    const DEFAULT_LANGUAGE = 'en';

    /**
     * Vocabulary name in multiple languages.
     *
     * @var array
     */
    protected array $name = [
        'en' => 'Assessment type',
    ];

    /**
     * List of vocabulary items.
     *
     * @var array
     */
    protected array $list;

    /**
     * Constructs the object.
     */
    public function __construct()
    {
        $this->list = static::list();
    }

    /**
     * Get vocabulary name.
     *
     * Returns the name of the vocabulary in the specified language.
     *
     * @param string $language Language of the vocabulary name
     *
     * @return string|null
     **/
    public function getName(string $language = 'en'): ?string
    {
        return $this->name[$language] ?? null;
    }

    /**
     * Get labeled list.
     *
     * Returns a list of items labeled in the specified language.
     * Items are indexed by their vocabulary key.
     * If the label is missing, the key is used as the label.
     *
     * @param string $language Language of the labels
     *
     * @return array
     **/
    public function getLabeledList(string $language = self::DEFAULT_LANGUAGE): array
    {
        $labeledList = [];

        foreach ($this->list as $key => $value) {
            $labeledList[$key] = $value[self::LABEL][$language] ?? $key;
        }

        return $labeledList;
    }

    /**
     * Key exists.
     *
     * Checks whether a key exists in the vocabulary.
     *
     * @param string $key The key to check
     *
     * @return bool
     **/
    public function keyExists(string $key): bool
    {
        return (array_key_exists($key, $this->list));
    }

    /**
     * Get vocabulary item.
     *
     * Retrieves a single item from the vocabulary based on its key.
     *
     * @param string $key The key of the item to retrieve.
     *
     * @return array|null
     **/
    public function get(string $key): ?array
    {
        return $this->list[$key] ?? null;
    }

    /**
     * Curated vocabulary.
     *
     * Returns the content of the controlled vocabulary.
     *
     * @return array
     **/
    public static function list(): array
    {
        return [
            '19a2e5e671' => [
                self::LABEL => [
                    'en' => 'peer assessment',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Peers grade you.',
                ],
            ],
            '2939dae15f' => [
                self::LABEL => [
                    'en' => 'marked assignment',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '3484bd7e51' => [
                self::LABEL => [
                    'en' => 'continuous evaluation',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '4f03b91c0e' => [
                self::LABEL => [
                    'en' => 'portfolio',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '56539a6507' => [
                self::LABEL => [
                    'en' => 'group performance',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '6a4db9f11d' => [
                self::LABEL => [
                    'en' => 'practical assessment',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '6e6cb2cc78' => [
                self::LABEL => [
                    'en' => 'written examination',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '7331eb4762' => [
                self::LABEL => [
                    'en' => 'level of attendance',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '795dac4096' => [
                self::LABEL => [
                    'en' => 'project work',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '812e3b0ae1' => [
                self::LABEL => [
                    'en' => 'peer review',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Test of presentation and/or synthesis skills. Peers provide feedback, but teacher grades you.',
                ],
            ],
            'b1b68f6735' => [
                self::LABEL => [
                    'en' => 'quiz',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'recall test based on multiple choice entries',
                ],
            ],
            'c4256a2726' => [
                self::LABEL => [
                    'en' => 'problem based learning',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'test of practical problem solving skills',
                ],
            ],
            'c_04b30a72' => [
                self::LABEL => [
                    'en' => 'Presentation',
                ],
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'c_2b3bd410' => [
                self::LABEL => [
                    'en' => 'Self-assessment',
                ],
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'c_4f874951' => [
                self::LABEL => [
                    'en' => 'Guided self-assessment',
                ],
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'd30284d7df' => [
                self::LABEL => [
                    'en' => 'oral examination',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'de4d165a6c' => [
                self::LABEL => [
                    'en' => 'artefact assessment',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
        ];
    }

}
