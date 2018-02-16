<?php

namespace craft\commerce\records;

use craft\db\ActiveRecord;
use craft\records\UserGroup;
use yii\db\ActiveQueryInterface;

/**
 * Discount user record.
 *
 * @property ActiveQueryInterface $discount
 * @property int                  $discountId
 * @property int                  $id
 * @property ActiveQueryInterface $productType
 * @property int                  $userGroupId
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  2.0
 */
class DiscountUserGroup extends ActiveRecord
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function tableName(): string
    {
        return '{{%commerce_discount_usergroups}}';
    }

    /**
     * @inheritdoc
     */
    public function rules(): array
    {
        return [
            [['discountId', 'userGroupId'], 'unique', 'targetAttribute' => ['discountId', 'userGroupId']],
        ];
    }

    /**
     * @return ActiveQueryInterface
     */
    public function getDiscount(): ActiveQueryInterface
    {
        return $this->hasOne(Discount::class, ['id' => 'discountId']);
    }

    /**
     * @return ActiveQueryInterface
     */
    public function getProductType(): ActiveQueryInterface
    {
        return $this->hasOne(UserGroup::class, ['id' => 'userGroupId']);
    }
}
