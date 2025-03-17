<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\ImageModerationResponseBody\data\ext\faceData;

use AlibabaCloud\Tea\Model;

class gender extends Model
{
    /**
     * @description The confidence level of the gender recognition result. Valid values: 0 to 100. A higher value indicates a more credible result.
     *
     * @example 81.88
     *
     * @var float
     */
    public $confidence;

    /**
     * @description The gender recognition result. Valid values:
     *
     * - Male
     *
     * - FeMale
     *
     * @example FeMale
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'confidence' => 'Confidence',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return gender
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
