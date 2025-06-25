<?php

namespace Elm;

/**
 * Provides the 'Learning setting type' controlled vocabulary.
 *
 * @link https://op.europa.eu/en/web/eu-vocabularies/concept-scheme/-/resource?uri=http://data.europa.eu/snb/learning-setting/25831c2
 */
final class LearningSettingType implements ControlledVocabularyInterface
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
            '6fd4685715' => [
                self::LABEL => [
                    'en' => 'formal learning',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Learning which takes place in an organised and structured environment, specifically dedicated to learning, and typically leads to the award of a qualification, usually in the form of a certificate or a diploma; it includes systems of general education, initial vocational training and higher education.',
                ],
            ],
            'e207a81fc7' => [
                self::LABEL => [
                    'en' => 'non-formal learning',
                ],
                self::VALID_SINCE => '2020-06-24',
                self::VALID_UNTIL => null,
                self::DEFINITION => [
                    'en' => 'Learning which takes place through planned activities (in terms of learning objectives, learning time) where some form of learning support is present (e.g. student-teacher relationships); it may cover programmes to impart work skills, adult literacy and basic education for early school leavers; very common cases of non-formal learning include in-company training, through which companies update and improve the skills of their workers such as ICT skills, structured on-line learning (e.g. by making use of open educational resources), and courses organised by civil society organisations for their members, their target group or the general public.',
                ],
            ],
        ];
    }

}
