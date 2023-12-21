<?php declare(strict_types=1);

namespace Osumi\OsumiFramework\App\Module;

use Osumi\OsumiFramework\Routing\OModule;

/**
 * Sample API module
 */
#[OModule(
	type: 'json',
	prefix: '/api',
	actions: ['getDate', 'getUser', 'getUsers']
)]
class ApiModule {}