<?php

namespace Elm;

/**
 * Defines an interface for ELM controlled vocabulary providers.
 */
interface ControlledVocabularyInterface
{
    /**
     * Get labeled list.
     *
     * Returns a list of items labeled in the specified language.
     * Items are indexed by their vocabulary key.
     *
     * @param string $language Language of the labels
     *
     * @return array
     **/
    public function getLabeledList(string $language): array;

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

}
