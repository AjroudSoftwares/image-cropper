# Image Cropper Bundle Documentation

### Customization

ImageCropper FormType inherits from Symfony's FileType, so you can use all the options available for the FileType.

You can customize the ImageCropper FormType by passing additional Cropperjs options when adding the form field.

+ Init Options: check https://github.com/fengyuanchen/cropperjs/blob/main/README.md#options
+ getCroppedCanvas() Options :  https://github.com/fengyuanchen/cropperjs/blob/main/README.md#getcroppedcanvasoptions

+ Here are some examples:

```php
$builder->add('image', ImageCropperType::class, [
    'label' => 'Upload and Crop Image',
    'required' => true,
    'cropperOptions' => [
        'aspectRatio' => 4 / 3,
        'viewMode' => 1,
    ],
    'cropperSizeOptions' => [
        'width' => 800,
        'height' => 600,
    ],
]);
```

#### Twig Customization

Ensure you extend the following template  `@ImageCropper/Form/image_cropper_type.html.twig` and feel free to customize it as you wish.

```html
{# templates/form/image_cropper_type.html.twig #}
{% extends '@ImageCropper/Form/image_cropper_type.html.twig' %}

...
```
