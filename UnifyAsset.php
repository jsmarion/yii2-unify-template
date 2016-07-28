<?php
/**
 * @author John Marion <johnmarion@mail.com>
 * @link http://marion.ch/
 * @copyright 2016 John Marion
 * @date 28.07.2016
 */
namespace jsmarion\template\unify;
use yii\web\AssetBundle;
class UnifyAsset extends AssetBundle
{
    public $sourcePath = '@jsmarion/template/unify/src/HTML/assets/';
    /**
     * @param string $asset
     * @return string
     * @throws \yii\base\InvalidConfigException
     */
    static public function getAssetUrl($asset)
    {
        return \Yii::$app->assetManager->getAssetUrl(\Yii::$app->assetManager->getBundle(static::className()), $asset);
    }
}