<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data\customImage;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data\publicFigure;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeImageResultExtResponseBody\data\textInImage;

class data extends Model
{
    /**
     * @var customImage[]
     */
    public $customImage;
    /**
     * @var publicFigure[]
     */
    public $publicFigure;
    /**
     * @var textInImage
     */
    public $textInImage;
    protected $_name = [
        'customImage'  => 'CustomImage',
        'publicFigure' => 'PublicFigure',
        'textInImage'  => 'TextInImage',
    ];

    public function validate()
    {
        if (\is_array($this->customImage)) {
            Model::validateArray($this->customImage);
        }
        if (\is_array($this->publicFigure)) {
            Model::validateArray($this->publicFigure);
        }
        if (null !== $this->textInImage) {
            $this->textInImage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customImage) {
            if (\is_array($this->customImage)) {
                $res['CustomImage'] = [];
                $n1                 = 0;
                foreach ($this->customImage as $item1) {
                    $res['CustomImage'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->publicFigure) {
            if (\is_array($this->publicFigure)) {
                $res['PublicFigure'] = [];
                $n1                  = 0;
                foreach ($this->publicFigure as $item1) {
                    $res['PublicFigure'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->textInImage) {
            $res['TextInImage'] = null !== $this->textInImage ? $this->textInImage->toArray($noStream) : $this->textInImage;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomImage'])) {
            if (!empty($map['CustomImage'])) {
                $model->customImage = [];
                $n1                 = 0;
                foreach ($map['CustomImage'] as $item1) {
                    $model->customImage[$n1++] = customImage::fromMap($item1);
                }
            }
        }

        if (isset($map['PublicFigure'])) {
            if (!empty($map['PublicFigure'])) {
                $model->publicFigure = [];
                $n1                  = 0;
                foreach ($map['PublicFigure'] as $item1) {
                    $model->publicFigure[$n1++] = publicFigure::fromMap($item1);
                }
            }
        }

        if (isset($map['TextInImage'])) {
            $model->textInImage = textInImage::fromMap($map['TextInImage']);
        }

        return $model;
    }
}
