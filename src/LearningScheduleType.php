<?php

namespace Elm;

/**
 * Provides the 'Learning schedule type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-schedule/25831c2
 */
final class LearningScheduleType implements ControlledVocabularyInterface
{
    const LABEL = 'label';
    const VALID_SINCE = 'validSince';
    const VALID_UNTIL = 'validUntil';
    const DEFINITION = 'definition';

    const DEFAULT_LANGUAGE = 'en';

    protected array $list;

    /**
     * Constructs the object.
     */
    public function __construct()
    {
        $this->list = static::list();
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
            '67395e6b5a' => [
                self::LABEL => [
                    'en' => 'Part time light',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Part time light (less than 8 hours)'
                ],
            ],
            '72a0ab92fa' => [
                self::LABEL => [
                    'en' => 'Full time',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Full time (more then 30 hours)'
                ],
            ],
            'f230bae523' => [
                self::LABEL => [
                    'en' => 'Part time intensive',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Part time intensive (8 to 30 hours)'
                ],
            ],
        ];
    }

}
