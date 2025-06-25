# ELM controlled vocabularies for PHP

This library provides a curated set of ELM controlled vocabularies for use in PHP applications.

The controlled vocabularies included in this package are maintained by DG EMPL and disseminated by the Publications Office of the European Union on the EU Vocabularies website.

_see [Copyright notice](https://op.europa.eu/en/web/about-us/legal-notices/publications-office-of-the-european-union-copyright)_

All editorial content (non-code assets) included in this package is licensed under the [Creative Commons Attribution 4.0 International licence](https://creativecommons.org/licenses/by/4.0/) unless otherwise indicated.

The software as such is provided under the MIT license.

## Installation

    composer require euf/elm_vocabularies

## Usage example

```php
<?php

require_once '../vendor/autoload.php';

use Elm\AssessmentType;
use Elm\LearningActivityType;
use Elm\LearningOpportunityType;
use Elm\LearningScheduleType;
use Elm\LearningSettingType;
use Elm\ModeOfLearningAndAssessment;

$vocabularies = [
    $assessment = new AssessmentType(),
    $learningActivity = new LearningActivityType(),
    $learningOpportunity = new LearningOpportunityType(),
    $learningSchedule = new LearningScheduleType(),
    $learningSetting = new LearningSettingType(),
    $learningAssessment = new ModeOfLearningAndAssessment(),
];

foreach ($vocabularies as $vocabulary) {
    $name = $vocabulary->getName();
    echo("Vocabulary: " . $name . "\n");

    $list = $vocabulary->getLabeledList();
    echo(json_encode($list, JSON_PRETTY_PRINT) . "\n");

    $fakeKey = '0123456789';
    echo("Testing " . $fakeKey . "\n");
    echo(($vocabulary->keyExists($fakeKey)) ? "True" : "False");
    echo("\n");

    $randomKey = array_rand($list);
    echo("Testing " . $randomKey . "\n");
    echo(($vocabulary->keyExists($randomKey)) ? "True" : "False");
    echo("\n");

    $randomItem = $vocabulary->get($randomKey);
    echo(json_encode($randomItem, JSON_PRETTY_PRINT) . "\n");
}

```
