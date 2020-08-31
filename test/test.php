<?php

/**
 * Part of Windwalker project.
 *
 * @copyright  Copyright (C) 2019 LYRASOFT.
 * @license    MIT
 */

declare(strict_types=1);

error_reporting(-1);

include_once __DIR__ . '/../../../vendor/autoload.php';

$compiler = new \Windwalker\Edge\Compiler\EdgeCompiler();

//$compiler->addExtension(new \Windwalker\Edge\Extension\BasicExtension);

//echo $compiler->compile(file_get_contents(__DIR__ . '/tmpl.edge.php'));

$edge = new \Windwalker\Edge\Edge(
    new \Windwalker\Edge\Loader\EdgeFileLoader(
        [
            __DIR__
        ]
    )
);

echo $edge->render('tmpl.components.main');
