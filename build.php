<?php

declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use Brick\VarExporter\VarExporter;
use EasyRdf\Graph;
use EasyRdf\RdfNamespace;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

RdfNamespace::set('dc', 'http://purl.org/dc/elements/1.1/');
RdfNamespace::set('ns5', 'http://publications.europa.eu/ontology/euvoc#');
RdfNamespace::set('skos', 'http://www.w3.org/2004/02/skos/core#');

$baseUri = 'https://publications.europa.eu/resource/authority/snb/';

$vocabularies = [
    'AssessmentType' => 'assessment/25831c2',
    'LearningActivityType' => 'learning-activity/25831c2',
    'LearningOpportunityType' => 'learning-opportunity/25831c2',
    'LearningScheduleType' => 'learning-schedule/25831c2',
    'LearningSettingType' => 'learning-setting/25831c2',
    'ModeOfLearningAndAssessment' => 'learning-assessment/25831c2',
];

foreach ($vocabularies as $class => $path) {
    $tree = [
        'labels' => [],
        'children' => [],
    ];

    $graph = Graph::newAndLoad($baseUri . $path);
    $topConcept = $graph->resourcesMatching('skos:hasTopConcept')[0];

    $labels = $topConcept->allLiterals('skos:prefLabel');
    foreach ($labels as $label) {
        /** @var \EasyRdf\Literal $label */
        $tree['labels'][$label->getLang()] = $label->getValue();
    }

    $childConcepts = $graph->resourcesMatching('skos:topConceptOf');

    foreach ($childConcepts as $child) {
        $childTree = [
            'labels' => [],
            'definitions' => [],
            'validSince' => null,
            'validUntil' => null,
        ];

        $childUri = $child->getUri();
        $childGraph = Graph::newAndLoad($childUri);
        $concept = $childGraph->resource($childUri);

        $identifier = $concept->get('dc:identifier');
        /** @var \EasyRdf\Literal $identifier */
        $childId = $identifier->__toString();

        $labels = $concept->allLiterals('skos:prefLabel');
        foreach ($labels as $label) {
            /** @var \EasyRdf\Literal $label */
            $childTree['labels'][$label->getLang()] = $label->getValue();
        }

        $definitions = $concept->allLiterals('skos:definition');
        foreach ($definitions as $def) {
            /** @var \EasyRdf\Literal $def */
            $childTree['definitions'][$def->getLang()] = $def->getValue();
        }

        $startDate = $concept->get('ns5:startDate');
        if (!is_null($startDate)) {
            /** @var \EasyRdf\Literal $startDate */
            $validSince = new \DateTime($startDate->__toString());
            $childTree['validSince'] = $validSince->format('Y-m-d');
        }

        $endDate = $concept->get('ns5:endDate');
        if (!is_null($endDate)) {
            /** @var \EasyRdf\Literal $endDate */
            $validUntil = new \DateTime($endDate->__toString());
            $childTree['validSince'] = $validUntil->format('Y-m-d');
        }

        $tree['children'][$childId] = $childTree;
    }

    $vocabulary = [];

    foreach ($tree['children'] as $child => $props) {
        $vocabulary[$child] = [
            'label' => $props['labels']['en'],
            'validSince' => $props['validSince'],
            'validUntil' => $props['validUntil'],
            'definition' => $props['definitions']['en'] ?? null,
        ];
    }

    $loader = new FilesystemLoader(__DIR__ . '/templates');
    $twig = new Environment($loader, [
        'autoescape' => false,
    ]);

    $data = [
        'name' => $tree['labels']['en'],
        'class' => $class,
        'uri' => $topConcept->getUri(),
        'vocabulary' => VarExporter::export(
            $vocabulary,
            VarExporter::TRAILING_COMMA_IN_ARRAY,
            2
        )
    ];

    $content = $twig->render('ControlledVocabulary.php.twig', $data);
    file_put_contents(__DIR__ . '/src/' . $class . '.php', $content);
}
