<?php declare(strict_types=1);

namespace Osumi\OsumiFramework\App\Module;

use Osumi\OsumiFramework\Routing\OModule;

/**
 * Sections of the web site
 */
#[OModule(
	type: 'html',
	actions: ['start', 'user', 'filter']
)]
class HomeModule {}