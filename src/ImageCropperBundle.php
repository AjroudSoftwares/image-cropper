<?php
/*
 * This file is part of the AjroudSoftwares/image-cropper package.
 *
 *  (c) Aymen Ajroud  <ajroudaymen@ajroudsoftwares.tn>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace AjroudSoftwares\ImageCropperBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

/**
 * Class ImageCropperBundle
 * @package AjroudSoftwares\ImageCropperBundle
 */
class ImageCropperBundle extends AbstractBundle
{
    /**
     * {@inheritdoc}
     */
    public function prependExtension(ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $builder->prependExtensionConfig('twig', [
            'form_themes' => ['@ImageCropper/Form/image_cropper_type.html.twig'],
        ]);
    }
}