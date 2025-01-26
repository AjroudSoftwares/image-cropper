# Image Cropper Bundle

| State    | Description                                                                                                                            |
|----------|----------------------------------------------------------------------------------------------------------------------------------------|
| Build    | ![Build Status](https://github.com/ajroudsoftwares/ImageCropper/actions/workflows/Main_Image_Cropper_Bundle_Workflow.yml/badge.svg)    |
| Coverage | ![Coverage Status](https://github.com/ajroudsoftwares/ImageCropper/actions/workflows/Main_Image_Cropper_Bundle_Workflow.yml/badge.svg) |
| License  | MIT                                                                                                                                    |

## Introduction

The Image Cropper Bundle provides a custom form type that allows you to add a powerful image cropper to your Symfony forms, by integrating [cropperjs](https://fengyuanchen.github.io/cropperjs/).

## Installation

To install the Image Cropper Bundle, use Composer:

```bash
composer require ajroudsoftwares/image-cropper
```
and then if you don't have "assets:install" script in your composer.json file, run it manually like this:

```bash
php bin/console assets:install
```
## Usage

### Image Cropper Type

The `ImageCropperType` form type allows you to add an image cropper to your forms. Here is an example of how to use it:

```php
use AjroudSoftwares\ImageCropperBundle\Form\ImageCropperType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\FormBuilderInterface;

class YourFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('image', ImageCropperType::class, [
            'label' => 'Upload and Crop Image',
            'required' => true,
        ]);
    }
}
```

## Documentation

For more detailed and configured use cases, please refer to the [documentation](docs/index.md).

## Contribute

To contribute to the Image Cropper Bundle, follow these steps:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Make your changes and commit them.
4. Push your changes to your fork.
5. Create a pull request to the main repository.

Please ensure your code follows the [project's coding standards](docs/code_standars.md) and includes appropriate tests, if applicable.