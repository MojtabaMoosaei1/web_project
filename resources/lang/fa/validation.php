<?php

return [
    'accepted' => 'باید :attribute را بپذیرید.',
    'active_url' => ':attribute یک URL معتبر نیست.',
    'after' => ':attribute باید یک تاریخ بعد از :date باشد.',
    'after_or_equal' => ':attribute باید یک تاریخ بعد یا برابر با :date باشد.',
    'alpha' => ':attribute فقط باید شامل حروف باشد.',
    'alpha_dash' => ':attribute فقط می‌تواند شامل حروف، اعداد، خط تیره و زیرخط باشد.',
    'alpha_num' => ':attribute فقط می‌تواند شامل حروف و اعداد باشد.',
    'array' => ':attribute باید یک آرایه باشد.',
    'before' => ':attribute باید یک تاریخ قبل از :date باشد.',
    'before_or_equal' => ':attribute باید یک تاریخ قبل یا برابر با :date باشد.',
    'between' => [
        'numeric' => ':attribute باید بین :min و :max باشد.',
        'file' => ':attribute باید بین :min و :max کیلوبایت باشد.',
        'string' => ':attribute باید بین :min و :max کاراکتر باشد.',
        'array' => ':attribute باید بین :min و :max آیتم داشته باشد.',
    ],
    'boolean' => 'فیلد :attribute فقط می‌تواند true یا false باشد.',
    'confirmed' => 'تأییدیه :attribute با هم مطابقت ندارد.',
    'date' => ':attribute یک تاریخ معتبر نیست.',
    'date_equals' => ':attribute باید یک تاریخ برابر با :date باشد.',
    'date_format' => ':attribute با قالب :format مطابقت ندارد.',
    'different' => ':attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید بین :min و :max رقم باشد.',
    'dimensions' => ':attribute ابعاد تصویر معتبر نیست.',
    'distinct' => ':attribute دارای مقدار تکراری است.',
    'email' => ':attribute باید یک آدرس ایمیل معتبر باشد.',
    'ends_with' => ':attribute باید با یکی از موارد زیر به پایان برسد: :values.',
    'exists' => ':attribute انتخاب شده معتبر نیست.',
    'file' => ':attribute باید یک فایل باشد.',
    'filled' => 'فیلد :attribute باید یک مقدار داشته باشد.',
    'gt' => [
        'numeric' => ':attribute باید بزرگتر از :value باشد.',
        'file' => ':attribute باید بزرگتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید بزرگتر از :value کاراکتر باشد.',
        'array' => ':attribute باید بیشتر از :value آیتم داشته باشد.',
    ],
    'gte' => [
        'numeric' => ':attribute باید بزرگتر یا مساوی :value باشد.',
        'file' => ':attribute باید بزرگتر یا مساوی :value کیلوبایت باشد.',
        'string' => ':attribute باید بزرگتر یا مساوی :value کاراکتر باشد.',
        'array' => ':attribute باید :value آیتم یا بیشتر داشته باشد.',
    ],
    'image' => ':attribute باید یک تصویر باشد.',
    'in' => ':attribute انتخاب شده معتبر نیست.',
    'in_array' => 'فیلد :attribute در :other وجود ندارد.',
    'integer' => ':attribute باید یک عدد صحیح باشد.',
    'ip' => ':attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => ':attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => ':attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => ':attribute باید یک رشته JSON معتبر باشد.',
    'lt' => [
        'numeric' => ':attribute باید کمتر از :value باشد.',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر از :value کاراکتر باشد.',
        'array' => ':attribute باید کمتر از :value آیتم داشته باشد.',
    ],
    'lte' => [
        'numeric' => ':attribute باید کمتر یا مساوی :value باشد.',
        'file' => ':attribute باید کمتر یا مساوی :value کیلوبایت باشد.',
        'string' => ':attribute باید کمتر یا مساوی :value کاراکتر باشد.',
        'array' => ':attribute نباید بیشتر از :value آیتم داشته باشد.',
    ],
    'max' => [
        'numeric' => ':attribute نباید بیشتر از :max باشد.',
        'file' => ':attribute نباید بیشتر از :max کیلوبایت باشد.',
        'string' => ':attribute نباید بیشتر از :max کاراکتر باشد.',
        'array' => ':attribute نباید بیشتر از :max آیتم داشته باشد.',
    ],
    'mimes' => ':attribute باید یکی از انواع فایل‌های زیر باشد: :values.',
    'mimetypes' => ':attribute باید یکی از انواع فایل‌های زیر باشد: :values.',
    'min' => [
        'numeric' => ':attribute باید حداقل :min باشد.',
        'file' => ':attribute باید حداقل :min کیلوبایت باشد.',
        'string' => ':attribute باید حداقل :min کاراکتر باشد.',
        'array' => ':attribute باید حداقل :min آیتم داشته باشد.',
    ],
    'not_in' => ':attribute انتخاب شده معتبر نیست.',
    'not_regex' => 'قالب :attribute معتبر نیست.',
    'numeric' => ':attribute باید یک عدد باشد.',
    'password' => 'رمز عبور اشتباه است.',
    'present' => 'فیلد :attribute باید حاضر باشد.',
    'regex' => 'قالب :attribute معتبر نیست.',
    'required' => 'فیلد :attribute الزامی است.',
    'required_if' => 'فیلد :attribute زمانی که :other برابر :value است الزامی است.',
    'required_unless' => 'فیلد :attribute مگر اینکه :other در :values باشد الزامی است.',
    'required_with' => 'فیلد :attribute زمانی که :values حاضر است الزامی است.',
    'required_with_all' => 'فیلد :attribute زمانی که :values حاضر است الزامی است.',
    'required_without' => 'فیلد :attribute زمانی که :values حاضر نیست الزامی است.',
    'required_without_all' => 'فیلد :attribute زمانی که هیچ‌کدام از :values حاضر نیستند الزامی است.',
    'same' => ':attribute و :other باید مطابقت داشته باشند.',
    'size' => [
        'numeric' => ':attribute باید :size باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'string' => ':attribute باید :size کاراکتر باشد.',
        'array' => ':attribute باید شامل :size آیتم باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از موارد زیر شروع شود: :values.',
    'string' => ':attribute باید یک رشته باشد.',
    'timezone' => ':attribute باید یک منطقه زمانی معتبر باشد.',
    'unique' => ':attribute قبلاً استفاده شده است.',
    'uploaded' => 'بارگذاری :attribute با شکست مواجه شد.',
    'url' => 'قالب :attribute معتبر نیست.',
    'uuid' => ':attribute باید یک UUID معتبر باشد.',

    /*
    |--------------------------------------------------------------------------
    | پیام‌های اعتبارسنجی سفارشی
    |--------------------------------------------------------------------------
    |
    | در اینجا می‌توانید پیام‌های اعتبارسنجی سفارشی برای ویژگی‌های خاص مشخص کنید.
    | از قالب "attribute.rule" برای نامگذاری خطوط استفاده کنید. این کار به شما
    | اجازه می‌دهد تا یک پیام سفارشی برای یک قانون مشخص و ویژگی مشخص تعریف کنید.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'پیام سفارشی',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | ویژگی‌های اعتبارسنجی سفارشی
    |--------------------------------------------------------------------------
    |
    | خطوط زبان زیر برای جایگزینی ویژگی‌های اعتبارسنجی استفاده می‌شوند. این کار
    | به ما کمک می‌کند تا پیام‌های اعتبارسنجی خود را کمی خواناتر کنیم.
    |
    */

    'attributes' => [
        'name' => 'نام',
        'email' => 'ایمیل',
        'password' => 'پسورد',
        'phone_number'=>'شماره تلفن',
        'questions.*.text' => 'متن سوال '
    ],

];
