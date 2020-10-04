<?php
namespace SVB\CBS;

require_once dirname(__FILE__) . '/../../../vendor/autoload.php';

use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Created by IntelliJ IDEA.
 * User: martin
 * Date: 19.09.15
 * Time: 12:37
 */
trait ContainerAwareTrait
{

    /**
     * @var Container
     */
    private $__containerAwareContainer;

    private $__containerAwareInitialized = false;

    public function __initializeContainer(){
        $container = new ContainerBuilder();
        $loader = new YamlFileLoader($container, new FileLocator(dirname(__FILE__).'/../../config'));
        $loader->load('services.yml');
        $container->compile();
        $this->__containerAwareContainer = $container;
        $this->__containerAwareInitialized = true;
    }

    /**
     * @return Container
     */
    public function getContainer(){
        if (!$this->__containerAwareInitialized){
            $this->__initializeContainer();
        }
        return $this->__containerAwareContainer;
    }

}