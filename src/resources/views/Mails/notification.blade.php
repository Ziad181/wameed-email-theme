<!--
 This is an example of a simple transactional email.
 License: MIT
 Credit: Instagram
-->

<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <style>
            @font-face {
                font-family: "Tajawal";
                src: url("https://fonts.googleapis.com/css2?family=Tajawal:wght@900&display=swap")
                    format("truetype");
            }
            * {
                font-family: "Tajawal" !important;
            }
        </style>
    </head>
    <body style="margin: 0; padding: 0" dir="rtl" bgcolor="#ffffff">
        <table
            border="0"
            cellspacing="0"
            cellpadding="0"
            align="center"
            id="m_-7626415423304311386email_table"
            style="border-collapse: collapse; font-family: Tajawal"
        >
            <tbody>
                <tr>
                    <td
                        id="m_-7626415423304311386email_content"
                        style="
                            font-family: Tajawal;
                            background: #f8f9fb;
                            border-radius: 20px 20px 0 0;
                            padding: 26px;
                        "
                    >
                        <table
                            border="0"
                            width="100%"
                            cellspacing="0"
                            cellpadding="0"
                            style="
                                border-collapse: collapse;
                                background-color: #ffffff;
                                border-radius: 20px;
                                padding: 20px;
                                font-family: Tajawal;
                            "
                        >
                            <tbody>
                                <tr>
                                    <td
                                        height="20"
                                        style="line-height: 20px"
                                        colspan="3"
                                    >
                                        &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        height="1"
                                        colspan="3"
                                        style="line-height: 1px"
                                    ></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table
                                            border="0"
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            style="
                                                border-collapse: collapse;
                                                text-align: center;
                                                width: 100%;
                                                font-family: Tajawal;
                                            "
                                        >
                                            <tbody>
                                                <tr>
                                                    <td
                                                        width="15px"
                                                        style="width: 15px"
                                                    ></td>
                                                    <td
                                                        style="
                                                            line-height: 0px;
                                                            padding: 0;
                                                        "
                                                    >
                                                        <table
                                                            border="0"
                                                            width="100%"
                                                            cellspacing="0"
                                                            cellpadding="0"
                                                            style="
                                                                border-collapse: collapse;
                                                                font-family: Tajawal;
                                                                width: 100%;
                                                            "
                                                        >
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        style="
                                                                            text-align: center;
                                                                            height: 87px;
                                                                            background-color: #4d28af;
                                                                            border-radius: 14px;
                                                                        "
                                                                    >
                                                                        <img
                                                                            height="40"
                                                                            src="{{config('email.app_url')}}/images/email/logo.png"
                                                                            style="
                                                                                border: 0;
                                                                            "
                                                                            class="CToWUd"
                                                                            data-bit="iit"
                                                                        />
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                    <td
                                                        width="15px"
                                                        style="width: 15px"
                                                    ></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <table
                                            border="0"
                                            cellspacing="0"
                                            cellpadding="0"
                                            style="
                                                border-collapse: collapse;
                                                margin: auto;
                                                max-width: 450px;
                                                border-collapse: collapse;
                                                margin: 0 30px;
                                                text-align: right;
                                                direction: rtl;
                                                font-family: Tajawal;
                                            "
                                        >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <p
                                                            style="
                                                                margin: 40px 0
                                                                    40px 0;
                                                                color: #4c535f;
                                                                font-size: 20px;
                                                                text-align: right;
                                                            "
                                                        >
                                                        {{$data['title']}}
                                                        </p>
                                                        <p
                                                            style="
                                                                margin: 40px 0
                                                                    20px 0;
                                                                color: #4c535f;
                                                                font-size: 20px;
                                                                text-align: right;
                                                            "
                                                        >
                                                            عزيزي
                                                            {{$data['user_name']}}
                                                            ،
                                                        </p>
                                                        <p
                                                            style="
                                                                margin: 0 0
                                                                    40px 0;
                                                                color: #4c535f;
                                                                font-size: 20px;
                                                                text-align: right;
                                                            "
                                                        >
                                                        {{$data['description']}}
                                                        </p>
                                                        <p
                                                            style="
                                                                margin: 40px 0
                                                                    40px 0;
                                                                color: #4c535f;
                                                                font-size: 20px;
                                                                text-align: right;
                                                            "
                                                        >
                                                        مع تمنياتنا لك بالتوفيق والسلامة،
                                                        </p>
                                                        <p
                                                            style="
                                                                margin: 40px 0
                                                                    40px 0;
                                                                color: #4c535f;
                                                                font-size: 20px;
                                                                text-align: right;
                                                            "
                                                        >
                                                            {{config('app.name')}}
                                                            .
                                                        </p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td
                        id="m_-7626415423304311386email_content"
                        style="
                            font-family: Tajawal;
                            background: #f8f9fb;
                            border-radius: 0 0 20px 20px;
                            padding: 0 26px 26px 26px;
                        "
                    >
                        <table
                            border="0"
                            width="100%"
                            cellspacing="0"
                            cellpadding="0"
                            style="
                                border-top: 1px solid #e0e4ec;
                                border-radius: 0;
                                padding: 20px 20px 0;
                                font-family: Tajawal;
                            "
                        >
                            <tbody>
                                <tr style="border-bottom: 30px solid #f8f9fb">
                                    <td style="text-align: center">
                                        <a
                                            href="{{config('email.app_url')}}"
                                            target="_blank"
                                            style="
                                                text-decoration: none;
                                                color: #4c535f;
                                                font-size: 15px;
                                            "
                                            >الموقع الرسمي</a
                                        >
                                    </td>
                                    <td
                                        style="
                                            text-align: center;
                                            border-right: 1px solid #e0e4ec;
                                            border-left: 1px solid #e0e4ec;
                                        "
                                    >
                                        <a
                                            href="{{config('email.app_url')}}"
                                            target="_blank"
                                            style="
                                                text-decoration: none;
                                                color: #4c535f;
                                                font-size: 15px;
                                            "
                                            >الشروط والأحكام
                                        </a>
                                    </td>

                                    <td style="text-align: center">
                                        <a
                                            href="{{config('email.app_url')}}"
                                            target="_blank"
                                            style="
                                                text-decoration: none;
                                                color: #4c535f;
                                                font-size: 15px;
                                            "
                                            >سياسة الخصوصية</a
                                        >
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        colspan="3"
                                        style="
                                            text-align: center;
                                            padding: 30px 0 30px 0;
                                        "
                                    >
                                        <table
                                            border="0"
                                            width="100%"
                                            cellspacing="0"
                                            cellpadding="0"
                                            style="
                                                border-collapse: collapse;
                                                font-family: Tajawal;
                                            "
                                        >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <table
                                                            border="0"
                                                            cellspacing="0"
                                                            cellpadding="0"
                                                            style="
                                                                margin: auto;
                                                                border-spacing: 22px
                                                                    0;
                                                                border-collapse: separate;
                                                            "
                                                        >
                                                            <tbody>
                                                                <tr>
                                                                    @if(config('email.facebook_url'))
                                                                    <td
                                                                        style="
                                                                            width: 44px;
                                                                            height: 44px;
                                                                            background-color: #ffffff;
                                                                            border-radius: 10px;
                                                                            text-align: center;
                                                                        "
                                                                    >
                                                                        <a
                                                                            href="{{config('email.facebook_url')}}"
                                                                            target="_blank"
                                                                        >
                                                                            <img
                                                                                height="24"
                                                                                src="{{config('email.app_url')}}/images/email/facebook.png"
                                                                                style="
                                                                                    border: 0;
                                                                                    margin-top: 5px;
                                                                                "
                                                                                class="CToWUd"
                                                                                data-bit="iit"
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                    @endif
                                                                    @if(config('email.twitter_url'))
                                                                    <td
                                                                        style="
                                                                            width: 44px;
                                                                            height: 44px;
                                                                            background-color: #ffffff;
                                                                            border-radius: 10px;
                                                                            text-align: center;
                                                                        "
                                                                    >
                                                                        <a
                                                                            href="{{config('email.twitter_url')}}"
                                                                            target="_blank"
                                                                        >
                                                                            <img
                                                                                height="34"
                                                                                src="{{config('email.app_url')}}/images/email/twitter.png"
                                                                                style="
                                                                                    border: 0;
                                                                                    margin-top: 5px;
                                                                                "
                                                                                class="CToWUd"
                                                                                data-bit="iit"
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                    @endif
                                                                    @if(config('email.instagram_url'))
                                                                    <td
                                                                        style="
                                                                            width: 44px;
                                                                            height: 44px;
                                                                            background-color: #ffffff;
                                                                            border-radius: 10px;
                                                                            text-align: center;
                                                                        "
                                                                    >
                                                                        <a
                                                                            href="{{config('email.instagram_url')}}"
                                                                            target="_blank"
                                                                        >
                                                                            <img
                                                                                height="34"
                                                                                src="{{config('email.app_url')}}/images/email/instagram.png"
                                                                                style="
                                                                                    border: 0;
                                                                                    margin-top: 5px;
                                                                                "
                                                                                class="CToWUd"
                                                                                data-bit="iit"
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                    @endif
                                                                    @if(config('email.linkedin_url'))
                                                                    <td
                                                                        style="
                                                                            width: 44px;
                                                                            height: 44px;
                                                                            background-color: #ffffff;
                                                                            border-radius: 10px;
                                                                            text-align: center;
                                                                        "
                                                                    >
                                                                        <a
                                                                            href="{{config('email.linkedin_url')}}"
                                                                            target="_blank"
                                                                        >
                                                                            <img
                                                                                height="34"
                                                                                src="{{config('email.app_url')}}/images/email/linkedin.png"
                                                                                style="
                                                                                    border: 0;
                                                                                    margin-top: 5px;
                                                                                "
                                                                                class="CToWUd"
                                                                                data-bit="iit"
                                                                            />
                                                                        </a>
                                                                    </td>
                                                                    @endif
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                @if(config('email.support_email'))
                                <tr>
                                    <td colspan="3" style="text-align: center">
                                        <a
                                            href="mailto:{{config('email.support_email')}}"
                                            target="_blank"
                                            style="
                                                color: #5d3ebd;
                                                font-size: 15px;
                                            "
                                            >{{config('email.support_email')}}</a
                                        >
                                        <br />
                                        <br />
                                        @if(config('email.support_phone'))
                                        <a
                                            href="tel:+966504669036"
                                            target="_blank"
                                            style="
                                                color: #4c535f;
                                                font-size: 15px;
                                                text-decoration: none;
                                            "
                                            dir="ltr"
                                        >
                                            {{config('email.support_phone')}}
                                            {{config('email.work_time')}}</a
                                        >
                                        @endif
                                    </td>
                                </tr>
                                @endif
                                <tr>
                                    <td
                                        colspan="3"
                                        style="
                                            text-align: center;
                                            padding-top: 30px;
                                        "
                                    >
                                        <p
                                            style="
                                                color: #4c535f;
                                                font-size: 15px;
                                                text-align: center;
                                            "
                                        >
                                            جميع الحقوق محفوظة لـ منصة
                                            {{config('app.name')}}
                                        </p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
