<?php declare(strict_types=1);

namespace Osumi\OsumiFramework\App\Module\HomeModule\Actions\Start;

use Osumi\OsumiFramework\Routing\OModuleAction;
use Osumi\OsumiFramework\Routing\OAction;
use Osumi\OsumiFramework\Web\ORequest;
use Osumi\OsumiFramework\App\Component\Home\UsersComponent;

#[OModuleAction(
	url: '/',
	services: ['user'],
	inlineCSS: ['start'],
	inlineJS: ['start', 'test']
)]
class StartAction extends OAction {
	/**
	 * Start page
	 *
	 * @param ORequest $req Request object with method, headers, parameters and filters used
	 * @return void
	 */
	public function run(ORequest $req):void {
		$users = $this->user_service->getUsers();
		$users_component = new UsersComponent(['users' => $users]);

		$this->getTemplate()->add('date', $this->user_service->getLastUpdate());
		$this->getTemplate()->add('users', $users_component);
	}
}
