<?php

/**
 * A helper file for Dcat Admin, to provide autocomplete information to your IDE
 *
 * This file should not be included in your code, only analyzed by your IDE!
 *
 * @author jqh <841324345@qq.com>
 */
namespace Dcat\Admin {
    use Illuminate\Support\Collection;

    /**
     * @property Grid\Column|Collection name
     * @property Grid\Column|Collection version
     * @property Grid\Column|Collection alias
     * @property Grid\Column|Collection authors
     * @property Grid\Column|Collection enable
     * @property Grid\Column|Collection imported
     * @property Grid\Column|Collection config
     * @property Grid\Column|Collection require
     * @property Grid\Column|Collection require_dev
     * @property Grid\Column|Collection cover
     * @property Grid\Column|Collection id
     * @property Grid\Column|Collection nickname
     * @property Grid\Column|Collection avatar
     * @property Grid\Column|Collection point
     * @property Grid\Column|Collection city
     * @property Grid\Column|Collection gender
     * @property Grid\Column|Collection role
     * @property Grid\Column|Collection created_at
     * @property Grid\Column|Collection openid
     * @property Grid\Column|Collection phone
     * @property Grid\Column|Collection country
     * @property Grid\Column|Collection province
     * @property Grid\Column|Collection session_key
     * @property Grid\Column|Collection updated_at
     * @property Grid\Column|Collection user_id
     * @property Grid\Column|Collection area
     * @property Grid\Column|Collection detail
     * @property Grid\Column|Collection is_default
     * @property Grid\Column|Collection value
     * @property Grid\Column|Collection parent_id
     * @property Grid\Column|Collection order
     * @property Grid\Column|Collection icon
     * @property Grid\Column|Collection uri
     * @property Grid\Column|Collection path
     * @property Grid\Column|Collection method
     * @property Grid\Column|Collection ip
     * @property Grid\Column|Collection input
     * @property Grid\Column|Collection permission_id
     * @property Grid\Column|Collection menu_id
     * @property Grid\Column|Collection slug
     * @property Grid\Column|Collection http_method
     * @property Grid\Column|Collection http_path
     * @property Grid\Column|Collection role_id
     * @property Grid\Column|Collection username
     * @property Grid\Column|Collection password
     * @property Grid\Column|Collection remember_token
     * @property Grid\Column|Collection bank_name
     * @property Grid\Column|Collection account_name
     * @property Grid\Column|Collection account_bank
     * @property Grid\Column|Collection card_no
     * @property Grid\Column|Collection level
     * @property Grid\Column|Collection rate
     * @property Grid\Column|Collection condition
     * @property Grid\Column|Collection user_count
     * @property Grid\Column|Collection dividend_rate
     * @property Grid\Column|Collection order_id
     * @property Grid\Column|Collection share_user
     * @property Grid\Column|Collection start_time
     * @property Grid\Column|Collection end_time
     * @property Grid\Column|Collection order_count
     * @property Grid\Column|Collection amount
     * @property Grid\Column|Collection connection
     * @property Grid\Column|Collection queue
     * @property Grid\Column|Collection payload
     * @property Grid\Column|Collection exception
     * @property Grid\Column|Collection failed_at
     * @property Grid\Column|Collection price
     * @property Grid\Column|Collection desc
     * @property Grid\Column|Collection is_new_user
     * @property Grid\Column|Collection images
     * @property Grid\Column|Collection limit
     * @property Grid\Column|Collection dividend_amount
     * @property Grid\Column|Collection status
     * @property Grid\Column|Collection goods_type
     * @property Grid\Column|Collection sort
     * @property Grid\Column|Collection freight
     * @property Grid\Column|Collection deleted_at
     * @property Grid\Column|Collection is_hot
     * @property Grid\Column|Collection distribution_rate
     * @property Grid\Column|Collection give_away_point
     * @property Grid\Column|Collection stock
     * @property Grid\Column|Collection migration
     * @property Grid\Column|Collection batch
     * @property Grid\Column|Collection order_sn
     * @property Grid\Column|Collection order_status
     * @property Grid\Column|Collection pay_type
     * @property Grid\Column|Collection pay_time
     * @property Grid\Column|Collection add_time
     * @property Grid\Column|Collection total_amount
     * @property Grid\Column|Collection goods_ids
     * @property Grid\Column|Collection address_id
     * @property Grid\Column|Collection remark
     * @property Grid\Column|Collection delivery_time
     * @property Grid\Column|Collection over_time
     * @property Grid\Column|Collection distribution_id
     * @property Grid\Column|Collection welfare_id
     * @property Grid\Column|Collection note
     * @property Grid\Column|Collection goods_id
     * @property Grid\Column|Collection num
     * @property Grid\Column|Collection email
     * @property Grid\Column|Collection token
     * @property Grid\Column|Collection date
     * @property Grid\Column|Collection lat
     * @property Grid\Column|Collection lng
     * @property Grid\Column|Collection logo
     * @property Grid\Column|Collection address
     * @property Grid\Column|Collection distribution_user_id
     * @property Grid\Column|Collection dividend_id
     * @property Grid\Column|Collection type
     * @property Grid\Column|Collection funds_type
     * @property Grid\Column|Collection unionid
     * @property Grid\Column|Collection all_point
     * @property Grid\Column|Collection is_team
     * @property Grid\Column|Collection distribution_level
     * @property Grid\Column|Collection qrcode
     * @property Grid\Column|Collection shop_amount
     * @property Grid\Column|Collection is_vip
     * @property Grid\Column|Collection official_openid
     * @property Grid\Column|Collection bank_id
     * @property Grid\Column|Collection handling_fee
     *
     * @method Grid\Column|Collection name(string $label = null)
     * @method Grid\Column|Collection version(string $label = null)
     * @method Grid\Column|Collection alias(string $label = null)
     * @method Grid\Column|Collection authors(string $label = null)
     * @method Grid\Column|Collection enable(string $label = null)
     * @method Grid\Column|Collection imported(string $label = null)
     * @method Grid\Column|Collection config(string $label = null)
     * @method Grid\Column|Collection require(string $label = null)
     * @method Grid\Column|Collection require_dev(string $label = null)
     * @method Grid\Column|Collection cover(string $label = null)
     * @method Grid\Column|Collection id(string $label = null)
     * @method Grid\Column|Collection nickname(string $label = null)
     * @method Grid\Column|Collection avatar(string $label = null)
     * @method Grid\Column|Collection point(string $label = null)
     * @method Grid\Column|Collection city(string $label = null)
     * @method Grid\Column|Collection gender(string $label = null)
     * @method Grid\Column|Collection role(string $label = null)
     * @method Grid\Column|Collection created_at(string $label = null)
     * @method Grid\Column|Collection openid(string $label = null)
     * @method Grid\Column|Collection phone(string $label = null)
     * @method Grid\Column|Collection country(string $label = null)
     * @method Grid\Column|Collection province(string $label = null)
     * @method Grid\Column|Collection session_key(string $label = null)
     * @method Grid\Column|Collection updated_at(string $label = null)
     * @method Grid\Column|Collection user_id(string $label = null)
     * @method Grid\Column|Collection area(string $label = null)
     * @method Grid\Column|Collection detail(string $label = null)
     * @method Grid\Column|Collection is_default(string $label = null)
     * @method Grid\Column|Collection value(string $label = null)
     * @method Grid\Column|Collection parent_id(string $label = null)
     * @method Grid\Column|Collection order(string $label = null)
     * @method Grid\Column|Collection icon(string $label = null)
     * @method Grid\Column|Collection uri(string $label = null)
     * @method Grid\Column|Collection path(string $label = null)
     * @method Grid\Column|Collection method(string $label = null)
     * @method Grid\Column|Collection ip(string $label = null)
     * @method Grid\Column|Collection input(string $label = null)
     * @method Grid\Column|Collection permission_id(string $label = null)
     * @method Grid\Column|Collection menu_id(string $label = null)
     * @method Grid\Column|Collection slug(string $label = null)
     * @method Grid\Column|Collection http_method(string $label = null)
     * @method Grid\Column|Collection http_path(string $label = null)
     * @method Grid\Column|Collection role_id(string $label = null)
     * @method Grid\Column|Collection username(string $label = null)
     * @method Grid\Column|Collection password(string $label = null)
     * @method Grid\Column|Collection remember_token(string $label = null)
     * @method Grid\Column|Collection bank_name(string $label = null)
     * @method Grid\Column|Collection account_name(string $label = null)
     * @method Grid\Column|Collection account_bank(string $label = null)
     * @method Grid\Column|Collection card_no(string $label = null)
     * @method Grid\Column|Collection level(string $label = null)
     * @method Grid\Column|Collection rate(string $label = null)
     * @method Grid\Column|Collection condition(string $label = null)
     * @method Grid\Column|Collection user_count(string $label = null)
     * @method Grid\Column|Collection dividend_rate(string $label = null)
     * @method Grid\Column|Collection order_id(string $label = null)
     * @method Grid\Column|Collection share_user(string $label = null)
     * @method Grid\Column|Collection start_time(string $label = null)
     * @method Grid\Column|Collection end_time(string $label = null)
     * @method Grid\Column|Collection order_count(string $label = null)
     * @method Grid\Column|Collection amount(string $label = null)
     * @method Grid\Column|Collection connection(string $label = null)
     * @method Grid\Column|Collection queue(string $label = null)
     * @method Grid\Column|Collection payload(string $label = null)
     * @method Grid\Column|Collection exception(string $label = null)
     * @method Grid\Column|Collection failed_at(string $label = null)
     * @method Grid\Column|Collection price(string $label = null)
     * @method Grid\Column|Collection desc(string $label = null)
     * @method Grid\Column|Collection is_new_user(string $label = null)
     * @method Grid\Column|Collection images(string $label = null)
     * @method Grid\Column|Collection limit(string $label = null)
     * @method Grid\Column|Collection dividend_amount(string $label = null)
     * @method Grid\Column|Collection status(string $label = null)
     * @method Grid\Column|Collection goods_type(string $label = null)
     * @method Grid\Column|Collection sort(string $label = null)
     * @method Grid\Column|Collection freight(string $label = null)
     * @method Grid\Column|Collection deleted_at(string $label = null)
     * @method Grid\Column|Collection is_hot(string $label = null)
     * @method Grid\Column|Collection distribution_rate(string $label = null)
     * @method Grid\Column|Collection give_away_point(string $label = null)
     * @method Grid\Column|Collection stock(string $label = null)
     * @method Grid\Column|Collection migration(string $label = null)
     * @method Grid\Column|Collection batch(string $label = null)
     * @method Grid\Column|Collection order_sn(string $label = null)
     * @method Grid\Column|Collection order_status(string $label = null)
     * @method Grid\Column|Collection pay_type(string $label = null)
     * @method Grid\Column|Collection pay_time(string $label = null)
     * @method Grid\Column|Collection add_time(string $label = null)
     * @method Grid\Column|Collection total_amount(string $label = null)
     * @method Grid\Column|Collection goods_ids(string $label = null)
     * @method Grid\Column|Collection address_id(string $label = null)
     * @method Grid\Column|Collection remark(string $label = null)
     * @method Grid\Column|Collection delivery_time(string $label = null)
     * @method Grid\Column|Collection over_time(string $label = null)
     * @method Grid\Column|Collection distribution_id(string $label = null)
     * @method Grid\Column|Collection welfare_id(string $label = null)
     * @method Grid\Column|Collection note(string $label = null)
     * @method Grid\Column|Collection goods_id(string $label = null)
     * @method Grid\Column|Collection num(string $label = null)
     * @method Grid\Column|Collection email(string $label = null)
     * @method Grid\Column|Collection token(string $label = null)
     * @method Grid\Column|Collection date(string $label = null)
     * @method Grid\Column|Collection lat(string $label = null)
     * @method Grid\Column|Collection lng(string $label = null)
     * @method Grid\Column|Collection logo(string $label = null)
     * @method Grid\Column|Collection address(string $label = null)
     * @method Grid\Column|Collection distribution_user_id(string $label = null)
     * @method Grid\Column|Collection dividend_id(string $label = null)
     * @method Grid\Column|Collection type(string $label = null)
     * @method Grid\Column|Collection funds_type(string $label = null)
     * @method Grid\Column|Collection unionid(string $label = null)
     * @method Grid\Column|Collection all_point(string $label = null)
     * @method Grid\Column|Collection is_team(string $label = null)
     * @method Grid\Column|Collection distribution_level(string $label = null)
     * @method Grid\Column|Collection qrcode(string $label = null)
     * @method Grid\Column|Collection shop_amount(string $label = null)
     * @method Grid\Column|Collection is_vip(string $label = null)
     * @method Grid\Column|Collection official_openid(string $label = null)
     * @method Grid\Column|Collection bank_id(string $label = null)
     * @method Grid\Column|Collection handling_fee(string $label = null)
     */
    class Grid {}

    class MiniGrid extends Grid {}

    /**
     * @property Show\Field|Collection name
     * @property Show\Field|Collection version
     * @property Show\Field|Collection alias
     * @property Show\Field|Collection authors
     * @property Show\Field|Collection enable
     * @property Show\Field|Collection imported
     * @property Show\Field|Collection config
     * @property Show\Field|Collection require
     * @property Show\Field|Collection require_dev
     * @property Show\Field|Collection cover
     * @property Show\Field|Collection id
     * @property Show\Field|Collection nickname
     * @property Show\Field|Collection avatar
     * @property Show\Field|Collection point
     * @property Show\Field|Collection city
     * @property Show\Field|Collection gender
     * @property Show\Field|Collection role
     * @property Show\Field|Collection created_at
     * @property Show\Field|Collection openid
     * @property Show\Field|Collection phone
     * @property Show\Field|Collection country
     * @property Show\Field|Collection province
     * @property Show\Field|Collection session_key
     * @property Show\Field|Collection updated_at
     * @property Show\Field|Collection user_id
     * @property Show\Field|Collection area
     * @property Show\Field|Collection detail
     * @property Show\Field|Collection is_default
     * @property Show\Field|Collection value
     * @property Show\Field|Collection parent_id
     * @property Show\Field|Collection order
     * @property Show\Field|Collection icon
     * @property Show\Field|Collection uri
     * @property Show\Field|Collection path
     * @property Show\Field|Collection method
     * @property Show\Field|Collection ip
     * @property Show\Field|Collection input
     * @property Show\Field|Collection permission_id
     * @property Show\Field|Collection menu_id
     * @property Show\Field|Collection slug
     * @property Show\Field|Collection http_method
     * @property Show\Field|Collection http_path
     * @property Show\Field|Collection role_id
     * @property Show\Field|Collection username
     * @property Show\Field|Collection password
     * @property Show\Field|Collection remember_token
     * @property Show\Field|Collection bank_name
     * @property Show\Field|Collection account_name
     * @property Show\Field|Collection account_bank
     * @property Show\Field|Collection card_no
     * @property Show\Field|Collection level
     * @property Show\Field|Collection rate
     * @property Show\Field|Collection condition
     * @property Show\Field|Collection user_count
     * @property Show\Field|Collection dividend_rate
     * @property Show\Field|Collection order_id
     * @property Show\Field|Collection share_user
     * @property Show\Field|Collection start_time
     * @property Show\Field|Collection end_time
     * @property Show\Field|Collection order_count
     * @property Show\Field|Collection amount
     * @property Show\Field|Collection connection
     * @property Show\Field|Collection queue
     * @property Show\Field|Collection payload
     * @property Show\Field|Collection exception
     * @property Show\Field|Collection failed_at
     * @property Show\Field|Collection price
     * @property Show\Field|Collection desc
     * @property Show\Field|Collection is_new_user
     * @property Show\Field|Collection images
     * @property Show\Field|Collection limit
     * @property Show\Field|Collection dividend_amount
     * @property Show\Field|Collection status
     * @property Show\Field|Collection goods_type
     * @property Show\Field|Collection sort
     * @property Show\Field|Collection freight
     * @property Show\Field|Collection deleted_at
     * @property Show\Field|Collection is_hot
     * @property Show\Field|Collection distribution_rate
     * @property Show\Field|Collection give_away_point
     * @property Show\Field|Collection stock
     * @property Show\Field|Collection migration
     * @property Show\Field|Collection batch
     * @property Show\Field|Collection order_sn
     * @property Show\Field|Collection order_status
     * @property Show\Field|Collection pay_type
     * @property Show\Field|Collection pay_time
     * @property Show\Field|Collection add_time
     * @property Show\Field|Collection total_amount
     * @property Show\Field|Collection goods_ids
     * @property Show\Field|Collection address_id
     * @property Show\Field|Collection remark
     * @property Show\Field|Collection delivery_time
     * @property Show\Field|Collection over_time
     * @property Show\Field|Collection distribution_id
     * @property Show\Field|Collection welfare_id
     * @property Show\Field|Collection note
     * @property Show\Field|Collection goods_id
     * @property Show\Field|Collection num
     * @property Show\Field|Collection email
     * @property Show\Field|Collection token
     * @property Show\Field|Collection date
     * @property Show\Field|Collection lat
     * @property Show\Field|Collection lng
     * @property Show\Field|Collection logo
     * @property Show\Field|Collection address
     * @property Show\Field|Collection distribution_user_id
     * @property Show\Field|Collection dividend_id
     * @property Show\Field|Collection type
     * @property Show\Field|Collection funds_type
     * @property Show\Field|Collection unionid
     * @property Show\Field|Collection all_point
     * @property Show\Field|Collection is_team
     * @property Show\Field|Collection distribution_level
     * @property Show\Field|Collection qrcode
     * @property Show\Field|Collection shop_amount
     * @property Show\Field|Collection is_vip
     * @property Show\Field|Collection official_openid
     * @property Show\Field|Collection bank_id
     * @property Show\Field|Collection handling_fee
     *
     * @method Show\Field|Collection name(string $label = null)
     * @method Show\Field|Collection version(string $label = null)
     * @method Show\Field|Collection alias(string $label = null)
     * @method Show\Field|Collection authors(string $label = null)
     * @method Show\Field|Collection enable(string $label = null)
     * @method Show\Field|Collection imported(string $label = null)
     * @method Show\Field|Collection config(string $label = null)
     * @method Show\Field|Collection require(string $label = null)
     * @method Show\Field|Collection require_dev(string $label = null)
     * @method Show\Field|Collection cover(string $label = null)
     * @method Show\Field|Collection id(string $label = null)
     * @method Show\Field|Collection nickname(string $label = null)
     * @method Show\Field|Collection avatar(string $label = null)
     * @method Show\Field|Collection point(string $label = null)
     * @method Show\Field|Collection city(string $label = null)
     * @method Show\Field|Collection gender(string $label = null)
     * @method Show\Field|Collection role(string $label = null)
     * @method Show\Field|Collection created_at(string $label = null)
     * @method Show\Field|Collection openid(string $label = null)
     * @method Show\Field|Collection phone(string $label = null)
     * @method Show\Field|Collection country(string $label = null)
     * @method Show\Field|Collection province(string $label = null)
     * @method Show\Field|Collection session_key(string $label = null)
     * @method Show\Field|Collection updated_at(string $label = null)
     * @method Show\Field|Collection user_id(string $label = null)
     * @method Show\Field|Collection area(string $label = null)
     * @method Show\Field|Collection detail(string $label = null)
     * @method Show\Field|Collection is_default(string $label = null)
     * @method Show\Field|Collection value(string $label = null)
     * @method Show\Field|Collection parent_id(string $label = null)
     * @method Show\Field|Collection order(string $label = null)
     * @method Show\Field|Collection icon(string $label = null)
     * @method Show\Field|Collection uri(string $label = null)
     * @method Show\Field|Collection path(string $label = null)
     * @method Show\Field|Collection method(string $label = null)
     * @method Show\Field|Collection ip(string $label = null)
     * @method Show\Field|Collection input(string $label = null)
     * @method Show\Field|Collection permission_id(string $label = null)
     * @method Show\Field|Collection menu_id(string $label = null)
     * @method Show\Field|Collection slug(string $label = null)
     * @method Show\Field|Collection http_method(string $label = null)
     * @method Show\Field|Collection http_path(string $label = null)
     * @method Show\Field|Collection role_id(string $label = null)
     * @method Show\Field|Collection username(string $label = null)
     * @method Show\Field|Collection password(string $label = null)
     * @method Show\Field|Collection remember_token(string $label = null)
     * @method Show\Field|Collection bank_name(string $label = null)
     * @method Show\Field|Collection account_name(string $label = null)
     * @method Show\Field|Collection account_bank(string $label = null)
     * @method Show\Field|Collection card_no(string $label = null)
     * @method Show\Field|Collection level(string $label = null)
     * @method Show\Field|Collection rate(string $label = null)
     * @method Show\Field|Collection condition(string $label = null)
     * @method Show\Field|Collection user_count(string $label = null)
     * @method Show\Field|Collection dividend_rate(string $label = null)
     * @method Show\Field|Collection order_id(string $label = null)
     * @method Show\Field|Collection share_user(string $label = null)
     * @method Show\Field|Collection start_time(string $label = null)
     * @method Show\Field|Collection end_time(string $label = null)
     * @method Show\Field|Collection order_count(string $label = null)
     * @method Show\Field|Collection amount(string $label = null)
     * @method Show\Field|Collection connection(string $label = null)
     * @method Show\Field|Collection queue(string $label = null)
     * @method Show\Field|Collection payload(string $label = null)
     * @method Show\Field|Collection exception(string $label = null)
     * @method Show\Field|Collection failed_at(string $label = null)
     * @method Show\Field|Collection price(string $label = null)
     * @method Show\Field|Collection desc(string $label = null)
     * @method Show\Field|Collection is_new_user(string $label = null)
     * @method Show\Field|Collection images(string $label = null)
     * @method Show\Field|Collection limit(string $label = null)
     * @method Show\Field|Collection dividend_amount(string $label = null)
     * @method Show\Field|Collection status(string $label = null)
     * @method Show\Field|Collection goods_type(string $label = null)
     * @method Show\Field|Collection sort(string $label = null)
     * @method Show\Field|Collection freight(string $label = null)
     * @method Show\Field|Collection deleted_at(string $label = null)
     * @method Show\Field|Collection is_hot(string $label = null)
     * @method Show\Field|Collection distribution_rate(string $label = null)
     * @method Show\Field|Collection give_away_point(string $label = null)
     * @method Show\Field|Collection stock(string $label = null)
     * @method Show\Field|Collection migration(string $label = null)
     * @method Show\Field|Collection batch(string $label = null)
     * @method Show\Field|Collection order_sn(string $label = null)
     * @method Show\Field|Collection order_status(string $label = null)
     * @method Show\Field|Collection pay_type(string $label = null)
     * @method Show\Field|Collection pay_time(string $label = null)
     * @method Show\Field|Collection add_time(string $label = null)
     * @method Show\Field|Collection total_amount(string $label = null)
     * @method Show\Field|Collection goods_ids(string $label = null)
     * @method Show\Field|Collection address_id(string $label = null)
     * @method Show\Field|Collection remark(string $label = null)
     * @method Show\Field|Collection delivery_time(string $label = null)
     * @method Show\Field|Collection over_time(string $label = null)
     * @method Show\Field|Collection distribution_id(string $label = null)
     * @method Show\Field|Collection welfare_id(string $label = null)
     * @method Show\Field|Collection note(string $label = null)
     * @method Show\Field|Collection goods_id(string $label = null)
     * @method Show\Field|Collection num(string $label = null)
     * @method Show\Field|Collection email(string $label = null)
     * @method Show\Field|Collection token(string $label = null)
     * @method Show\Field|Collection date(string $label = null)
     * @method Show\Field|Collection lat(string $label = null)
     * @method Show\Field|Collection lng(string $label = null)
     * @method Show\Field|Collection logo(string $label = null)
     * @method Show\Field|Collection address(string $label = null)
     * @method Show\Field|Collection distribution_user_id(string $label = null)
     * @method Show\Field|Collection dividend_id(string $label = null)
     * @method Show\Field|Collection type(string $label = null)
     * @method Show\Field|Collection funds_type(string $label = null)
     * @method Show\Field|Collection unionid(string $label = null)
     * @method Show\Field|Collection all_point(string $label = null)
     * @method Show\Field|Collection is_team(string $label = null)
     * @method Show\Field|Collection distribution_level(string $label = null)
     * @method Show\Field|Collection qrcode(string $label = null)
     * @method Show\Field|Collection shop_amount(string $label = null)
     * @method Show\Field|Collection is_vip(string $label = null)
     * @method Show\Field|Collection official_openid(string $label = null)
     * @method Show\Field|Collection bank_id(string $label = null)
     * @method Show\Field|Collection handling_fee(string $label = null)
     */
    class Show {}

    /**
     
     */
    class Form {}

}

namespace Dcat\Admin\Grid {
    /**
     
     */
    class Column {}

    /**
     
     */
    class Filter {}
}

namespace Dcat\Admin\Show {
    /**
     
     */
    class Field {}
}
