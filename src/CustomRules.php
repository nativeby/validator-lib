<?php

namespace Validator;

require_once('Validator/BaseRule.php');

class CustomRules extends BaseRule
{
    protected static function rules() {
        $rules = array(
            'mobile'  => array(
                'digits:11',
                'digitsbetween:1,6',
                /*'alpha_dash',
                'between:6,12',
                'accepted',
                'active_url',
                'after:2015-01-01',
                'alpha',
                'alpha_num',
                'before:2013-01-01',
                'confirmed',
                'date',
                'dateformat:Y-m-d H:i:s',
                'different:password',
                'digits:10',
                'digitsbetween:2,5',
                'email',
                'exists:user,username',
                'image',
                'in:zhangsan,lisi,wangwu,heming',
                'integer',
                'ip',
                'max:10',
                'mimes:jpg,gif'
                'min:8',
                'notin:lisi,wangwu',
                'numeric',
                'regex:/^[a-zA-Z_\/]+$/',
                'required',
                'required_if:password,heming',
                'required_with:password,phone',
                'required_without:password,phone',
                'required_without_all:password,phone',
                'required_with_all:password,phone',
                'same:password',
                'size:10',
                'url',
                'unique:user,username,111111,password,id,2', */ //table,column,except,idColumn
            ),
            'email' => array(
                'email',
            )
        );

        return $rules;
    }

    protected static function messages() {
        $messages = array(
            'mobile.digits'                     => '手机号码必须为11位的数字',
            'mobile.digitsbetween'              => '手机号码的数字必须为1至6之间的数字',
            'email.email'                       => '必须为合法的email样式',
            'email.alpha'                       => '必须全部由字符构成',
            /*'username.alpha_dash' 	        => '验证此规则的值必须全部由字母、数字、中划线或下划线字符构成<span style="color:#F00;">[alpha_dash]</span>',
            'username.between'		            => '验证此规则的值必须在给定的 min 和 max 之间<span style="color:#F00;">[between]</span>',
            'username.accepted'                 => '验证此规则的值必须是 yes、 on 或者是 1<span style="color:#F00;">[accepted]</span>',
            'username.active_url'               => '验证此规则的值必须是一个合法的 URL<span style="color:#F00;">[active_url]</span>',
            'username.after'                    => '验证此规则的值必须在给定日期之后<span style="color:#F00;">[after]</span>',
            'username.alpha'                    => '验证此规则的值必须全部由字母字符构成<span style="color:#F00;">[alpha]</span>',
            'username.alpha_num'                => '验证此规则的值必须全部由字母和数字构成<span style="color:#F00;">[alpha_num]</span>',
            'username.before'                   => '验证此规则的值必须在给定日期之前<span style="color:#F00;">[before]</span>',
            'username.confirmed'                => '验证此规则的值必须和 foo_confirmation 的值相同<span style="color:#F00;">[confirmed]</span>',
            'username.date'                     => '验证此规则的值必须是一个合法的日期<span style="color:#F00;">[date]</span>',
            'username.dateformat'               => '验证此规则的值必须符合给定的 format 的格式<span style="color:#F00;">[dateformat]</span>',
            'username.different'                => '验证此规则的值必须与指定的 field 字段的值不同<span style="color:#F00;">[different]</span>',
            'username.digits'                   => '验证此规则的值必须是一个 数字 并且必须满足 value 设定的精确长度<span style="color:#F00;">[digits]</span>',
            'username.digitsbetween'            => '验证此规则的值，它的长度必须介于 min 和 max 之间<span style="color:#F00;">[digitsbetween]</span>',
            'username.email'                    => '验证此规则的值必须是一个合法的电子邮件地址<span style="color:#F00;">[email]</span>',
            'username.exists'                   => '验证此规则的值必须在指定的数据库的表中存在<span style="color:#F00;">[exists]</span>',
            'username.image'                    => '验证此规则的值必须是一个图片 (jpeg, png, bmp 或者 gif)<span style="color:#F00;">[exists]</span>',
            'username.in'                       => '验证此规则的值必须在给定的列表中存在<span style="color:#F00;">[in]</span>',
            'username.integer'                  => '验证此规则的值必须是一个整数<span style="color:#F00;">[integer]</span>',
            'username.ip'                       => '验证此规则的值必须是一个合法的 IP 地址<span style="color:#F00;">[ip]</span>',
            'username.max'                      => '验证此规则的值必须小于最大值 value。字符串、数字以及文件都将使用大小规则进行比较<span style="color:#F00;">[max]</span>'
            'username.mimes'                    => '验证此规则的文件的 MIME 类型必须在给定的列表中<span style="color:#F00;">[mimes]</span>',
            'username.min'                      => '验证此规则的值必须大于最小值 value。字符串、数字以及文件都将使用大小规则进行比较<span style="color:#F00;">[min]</span>',
            'username.notin'                    => '验证此规则的值必须在给定的列表中不存在<span style="color:#F00;">[notin]</span>',
            'username.numeric'                  => '验证此规则的值必须是一个数字<span style="color:#F00;">[numeric]</span>',
            'username.regex'                    => '验证此规则的值必须符合给定的正则表达式<span style="color:#F00;">[regex]</span>',
            'username.required'                 => '验证此规则的值必须在输入数据中存在<span style="color:#F00;">[required]</span>',
            'username.required_if'              => '如果指定的 field 字段等于指定的 value ，那么验证此规则的值必须存在<span style="color:#F00;">[required_if]</span>',
            'username.required_with'            => '仅当 其它指定的字段存在的时候，验证此规则的值必须存在<span style="color:#F00;">[required_with]</span>',
            'username.required_without'         => '仅当 其它指定的字段有一个不存在的时候，验证此规则的值必须存在<span style="color:#F00;">[required_without]</span>',
            'username.required_without_all'     => '仅当 其它指定的字段都不存在的时候，验证此规则的值必须存在<span style="color:#F00;">[required_without_all]</span>',
            'username.required_with_all'        => '仅当 其它指定的字段都存在的时候，验证此规则的值必须存在<span style="color:#F00;">[required_with_all]</span>',
            'username.same'                     => '验证此规则的值必须与给定的 field 字段的值相同<span style="color:#F00;">[same]</span>',
            'username.size'                     => '验证此规则的值的大小必须与给定的 value 相同。对于字符串，value 代表字符的个数；对于数字，value 代表它的整数值，对于文件，value 代表文件以KB为单位的大小<span style="color:#F00;">[size]</span>',
            'username.url'                      => '验证此规则的值必须是一个合法的 URL<span style="color:#F00;">[url]</span>',
            'username.unique'                   => '验证此规则的值必须在给定的数据库的表中唯一。如果 column 没有被指定，将使用该字段的名字<span style="color:#F00;">[unique]</span>',*/
        );

        return $messages;
    }
}