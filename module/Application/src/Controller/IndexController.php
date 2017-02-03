<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Abstracts\BaseController;
use Zend\View\Model\ViewModel;

class IndexController extends BaseController
{
    /*
     * @var \Core\Service\SortService
     */
    protected $SortService;
    
    public function indexAction()
    {
        $info = $this->SortService->getinfo();
        
        return new ViewModel([
            'info' => $info
        ]);
    }
    
}
