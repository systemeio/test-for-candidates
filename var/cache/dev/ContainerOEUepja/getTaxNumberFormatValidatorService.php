<?php

namespace ContainerOEUepja;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTaxNumberFormatValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\TaxNumberFormatValidator' shared autowired service.
     *
     * @return \App\Validator\TaxNumberFormatValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Traits/TaxNumberTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Validator/TaxNumberFormatValidator.php';

        return $container->privates['App\\Validator\\TaxNumberFormatValidator'] = new \App\Validator\TaxNumberFormatValidator(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
