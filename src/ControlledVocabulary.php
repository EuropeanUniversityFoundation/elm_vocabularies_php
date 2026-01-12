<?php

declare(strict_types=1);

namespace Elm;

/**
 * Abstract implementation of a controlled vocabulary.
 */
abstract class ControlledVocabulary implements ControlledVocabularyInterface
{
    protected const LABEL = 'label';
    protected const VALID_SINCE = 'validSince';
    protected const VALID_UNTIL = 'validUntil';
    protected const DEFINITION = 'definition';

    /**
     * List of vocabulary items.
     *
     * @var array<string, array<string, string|null>>
     */
    protected array $list;

    /**
     * Constructs the object.
     */
    public function __construct()
    {
        $this->list = $this->getVocabulary();
    }

    /**
     * Get labeled list.
     *
     * Returns a list of labeled items.
     * Items are indexed by their vocabulary key.
     *
     * @return array<string, string>
     **/
    public function getLabeledList(): array
    {
        $labeledList = [];

        foreach ($this->list as $key => $value) {
            $labeledList[$key] = $value[self::LABEL] ?? $key;
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
     * @return array<string, string|null>|null
     **/
    public function get(string $key): ?array
    {
        return $this->list[$key] ?? null;
    }
}
