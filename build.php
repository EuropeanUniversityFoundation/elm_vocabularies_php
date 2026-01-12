<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://publications.europa.eu/resource/authority/snb/',
    'headers' => ['Accept' => 'tex/xml'],
]);

$vocabularies = [
    'AssessmentType' => 'assessment/25831c2',
    'LearningActivityType' => 'learning-activity/25831c2',
    'LearningOpportunityType' => 'learning-opportunity/25831c2',
    'LearningScheduleType' => 'learning-schedule/25831c2',
    'LearningSettingType' => 'learning-setting/25831c2',
    'ModeOfLearningAndAssessment' => 'learning-assessment/25831c2',
];

foreach ($vocabularies as $name => $path) {
    $response = $client->request('GET', $path);
    $file = __DIR__ .  '/tmp/' . $name . '.xml';
    file_put_contents($file, $response->getBody());
}
