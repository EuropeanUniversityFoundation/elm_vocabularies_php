<?php

namespace Elm;

/**
 * Provides the 'Mode of learning and assessment' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-assessment/25831c2
 */
final class ModeOfLearningAndAssessment implements ControlledVocabularyInterface
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
        'en' => 'Mode of learning and assessment',
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
            '729f3bed4b' => [
                self::LABEL => [
                    'en' => 'Workbased',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '7813801c77' => [
                self::LABEL => [
                    'en' => 'Project based',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '9191af2ed9' => [
                self::LABEL => [
                    'en' => 'Presential',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            '920fbb3cbe' => [
                self::LABEL => [
                    'en' => 'Online',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'c_3a90b26d' => [
                self::LABEL => [
                    'en' => 'Hybrid',
                ],
                self::VALID_SINCE => null,
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'e92d221e4d' => [
                self::LABEL => [
                    'en' => 'Blended',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
            'ed4c557045' => [
                self::LABEL => [
                    'en' => 'Research-Lab based',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [],
            ],
        ];
    }

}
