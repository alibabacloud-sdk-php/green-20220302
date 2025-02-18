<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\logoData;

use AlibabaCloud\Dara\Model;

class logo extends Model
{
    /**
     * @var float
     */
    public $confidence;
    /**
     * @var string
     */
    public $label;
    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'confidence' => 'Confidence',
        'label'      => 'Label',
        'name'       => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
