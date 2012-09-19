<?php
namespace Skeleton\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\EntityManager,
/*    
use ModuleName\Entity\ModuleName;
*/

class IndexController extends AbstractActionController
{
	public function indexAction()
	{
		return new ViewModel(array('greeting'=>'This is a module sceleton'));
	}
}
