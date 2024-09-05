<?php declare(strict_types=1);

namespace Osumi\OsumiFramework\App\Module\HomeModule\Actions\Start;

use Osumi\OsumiFramework\Routing\OModuleAction;
use Osumi\OsumiFramework\Routing\OAction;
use Osumi\OsumiFramework\Web\ORequest;
use Osumi\OsumiFramework\App\Component\Home\Users\UsersComponent;
use Osumi\OsumiFramework\Plugins\OToken;
use Osumi\OsumiFramework\Plugins\OBrowser;
use Osumi\OsumiFramework\Plugins\OCrypt;
use Osumi\OsumiFramework\Plugins\OImage;

#[OModuleAction(
	url: '/',
	services: ['User'],
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
		$users = $this->service['User']->getUsers();
		$users_component = new UsersComponent(['users' => $users]);

		$tk = new OToken("1234bf577a76645dbabcdbc379998243ac1c1234");
		$tk->addParam('id', 1);
		$tk->addParam('name', 'Name');
		$tk->addParam('email', 'email@address.com');
		$tk->addParam('exp', time() + (24 * 60 * 60));

		$token = $tk->getToken();

		$browser = new OBrowser();
		$browser->setUA( $_SERVER['HTTP_USER_AGENT'] );

		// var_dump($browser->getBrowserData());

		$crypt = new OCrypt('secret_key');
		$encrypted_text = $crypt->encrypt('text');
		$decrypted_text = $crypt->decrypt('amVBUGpsSmoyNFYxTU1GZnlGMmRwZz09OjorihnigpKsPrN5SND+/t73');

		$image = new OImage();
		$image->load($this->getConfig()->getDir('public').'photo/1.jpg');
		$nueva_ruta = $this->getConfig()->getDir('public').'photo/1.webp';
		if (file_exists($nueva_ruta)) {
			unlink($nueva_ruta);
		}
		$image->save($nueva_ruta, IMAGETYPE_WEBP, 100, 100);

		$this->getTemplate()->add('date', $this->service['User']->getLastUpdate());
		$this->getTemplate()->add('users', $users_component);
		$this->getTemplate()->add('token', $token);
		$this->getTemplate()->add('encrypted_text', $encrypted_text);
		$this->getTemplate()->add('decrypted_text', $decrypted_text);
	}
}
