<?php
declare(strict_types=1);

namespace App\Controller;

use Cake\ORM\TableRegistry;
use Cake\Routing\Router;

class SitemapController extends AppController
{
    /**
     * Displays the sitemap
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('sitemap');
        $this->RequestHandler->respondAs('xml');

        $postTbl = TableRegistry::getTableLocator()->get('Cives');
        $posts = $postTbl->find()->select(['CIVISID']);
        $this->set('Cives', $posts);

        //Get the base URL of your website
        $url = Router::url('/', true);
        $this->set('url', $url);
    }
}
