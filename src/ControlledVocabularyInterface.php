<?php

namespace Elm;

/**
 * Defines an interface for ELM controlled vocabulary providers.
 */
interface ControlledVocabularyInterface
{
    /**
     * Get vocabulary name.
     *
     * Returns the name of the ELM controlled vocabulary.
     *
     * @return string
     **/
    public function getName(): string;

    /**
     * Get vocabulary.
     *
     * Returns the content of the controlled vocabulary.
     *
     * @return array<string, array<string, string|null>>
     **/
    public function getVocabulary(): array;

    /**
     * Get labeled list.
     *
     * Returns a list of labeled items.
     * Items are indexed by their vocabulary key.
     *
     * @return array<string, string>
     **/
    public function getLabeledList(): array;

    /**
     * Key exists.
     *
     * Checks whether a key exists in the vocabulary.
     *
     * @param string $key The key to check
     *
     * @return bool
     **/
    public function keyExists(string $key): bool;

    /**
     * Get vocabulary item.
     *
     * Retrieves a single item from the vocabulary based on its key.
     *
     * @param string $key The key of the item to retrieve.
     *
     * @return array<string, array<string, string>>
     **/
    public function get(string $key): ?array;
}
