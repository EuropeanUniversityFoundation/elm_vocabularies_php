<?php

namespace Elm;

/**
 * Provides the 'Learning opportunity type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-opportunity/25831c2
 */
final class LearningOpportunityType implements ControlledVocabularyInterface
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
        'en' => 'Learning opportunity type',
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
        return $this->list ?? null;
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
            '05053c1cbe' => [
                self::LABEL => [
                    'en' => 'Course',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '0f7dac46ca' => [
                self::LABEL => [
                    'en' => 'Programme module',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '11252a5207' => [
                self::LABEL => [
                    'en' => 'Mentoring',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '17744a2647' => [
                self::LABEL => [
                    'en' => 'MOOC',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '63f9f6180c' => [
                self::LABEL => [
                    'en' => 'Apprenticeship',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '65a4cf5de2' => [
                self::LABEL => [
                    'en' => 'Study visit',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '74a4a268e8' => [
                self::LABEL => [
                    'en' => 'Short learning programme',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '77b99de990' => [
                self::LABEL => [
                    'en' => 'Internship',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '79343569f3' => [
                self::LABEL => [
                    'en' => 'Educational programme',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '7e1ac538db' => [
                self::LABEL => [
                    'en' => 'Class',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '8b965da2d4' => [
                self::LABEL => [
                    'en' => 'Service learning',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'b2434ca358' => [
                self::LABEL => [
                    'en' => 'Thesis',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'c_170b037d' => [
                self::LABEL => [
                    'en' => 'Challenge',
                ],
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
        ];
    }

}
