<?php
/**
 * Created by PhpStorm.
 * User: chaow
 * Date: 2/13/2015 AD
 * Time: 9:09 AM
 */

interface IModel {
    static function getDataFilter($filterString = null);
    static function getRelationFilter($filterString = null);
}