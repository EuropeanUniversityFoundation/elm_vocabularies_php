<?php

namespace Elm;

/**
 * Provides the 'Learning activity type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-activity/25831c2
 */
final class LearningActivityType implements ControlledVocabularyInterface
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
        'en' => 'Learning activity type',
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
            '3c8bd58d62' => [
                self::LABEL => [
                    'en' => 'lab / simulation / practice coursework',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '4357e0e681' => [
                self::LABEL => [
                    'en' => 'job experience',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '59eaf34fab' => [
                self::LABEL => [
                    'en' => 'volunteering',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'a7e556215a' => [
                self::LABEL => [
                    'en' => 'research',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'b660f5dcea' => [
                self::LABEL => [
                    'en' => 'self-motivated study',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'bf2e3a7bae' => [
                self::LABEL => [
                    'en' => 'e-learning coursework',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'bf5588ff84' => [
                self::LABEL => [
                    'en' => 'internship',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'c_5665a0ad' => [
                self::LABEL => [
                    'en' => 'mentoring and monitoring activity',
                ],
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'd46a826a39' => [
                self::LABEL => [
                    'en' => 'apprenticeship',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'efff75e10a' => [
                self::LABEL => [
                    'en' => 'workshop, seminar or conference',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'fd33e234ae' => [
                self::LABEL => [
                    'en' => 'educational programme',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'ff436ea7c9' => [
                self::LABEL => [
                    'en' => 'classroom coursework',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
        ];
    }

}
