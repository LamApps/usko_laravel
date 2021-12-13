<table align="center" border="0" cellpadding="0" cellspacing="0" class="emailContainer"
    style="max-width:640px;margin:auto" width="100%">
    <tbody>
        <tr>
            <td align="left" style="padding-top:20px" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td align="left" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr class="emailTitle">
                                            <td>
                                                <h1 style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;font-size:30px;font-weight:normal;line-height:40px;color:#333;margin:0;padding:0;padding-right:10px;">
                                                    Your ticket code for order #{{$body->order_id}} </h1>
                                            </td>
                                            <td align="right" rowspan="2" valign="top">
                                                <a href="https://fda.karton.express" style="text-decoration:none"
                                                    target="_blank"

                                                    rel="noreferrer noopener">

                                                        <img decoding="async" alt="US FDA Prior Notice Automatic System" style="width: 98px; height: 68px; max-width: 200px; max-height: 70px;"
                                                            src="https://d2j6dbq0eux0bg.cloudfront.net/images/59502573/2353205731.jpg"
                                                            class="i-amphtml-fill-content i-amphtml-replaced-content">

                                                </a>
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
            <td align="left" style="padding-top:8px" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>

                        <tr>
                            <td align="center" valign="top">

                                <div style="padding-top:10px;text-align:left">
                                    <a href="https://fda.karton.express"
                                        style="text-decoration:none" target="_blank"
                                        rel="noreferrer noopener">
                                        <h2
                                            style="color:#1155cc;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;font-size:24px;font-weight:normal;line-height:36px;margin:0;padding:0">
                                            This’s your ticket code ( total = {{$body->quantity}} codes ) </h2>
                                    </a>
                                </div>

                                @foreach ($body->code_list as $code)
                                <div style="padding-top:10px;text-align:left">
                                    <a href="https://fda.karton.express/"
                                        style="text-decoration:none" target="_blank"
                                        rel="noreferrer noopener">
                                        <h2
                                            style="color:#1155cc;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;font-size:24px;font-weight:normal;line-height:36px;margin:0;padding:0">
                                            {{$code}}</h2>
                                    </a>
                                </div>
                                @endforeach

                            </td>
                        </tr>

                        <tr>
                            <td align="left" style="padding-top:40px;padding-bottom:0" valign="top">
                                <h2
                                    style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;font-size:24px;font-weight:normal;line-height:36px;color:#333;margin:0;padding:0">
                                    Thanks for shopping with us! </h2>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" valign="top">


                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="padding-top:15px;padding-bottom:0">
                                                <p
                                                    style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;font-size:16px;line-height:24px;color:#333;margin:0;padding:0">
                                                    You can check the status of your orders at any time on our <a
                                                        href="https://fda.karton.express/account/orders"
                                                        style="text-decoration:underline;color:#1155cc" target="_blank"
                                                        rel="noreferrer noopener">Orders History Page</a>. </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:15px;padding-bottom:0">
                                                <p
                                                    style="font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;font-size:15px;line-height:24px;color:#333;margin:0;padding:0">



                                                    We welcome you to our store anytime. If you need assistance or have
                                                    any questions, please email us at <a
                                                        href="mailto:admin@fda.express"
                                                        style="text-decoration:underline;color:#1155cc" target="_blank"
                                                        rel="noreferrer noopener">admin@fda.express</a>
                                                    or call <b>+1 917-672-7192.</b>. We are happy to help! </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding-top:10px" valign="top">
                                <p
                                    style="font-size:16px;line-height:24px;color:#333;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;padding:0;margin:0">
                                    Sincerely,<br>
                                    <a href="https://fda.karton.express" style="text-decoration:none;color:#1155cc"
                                        target="_blank"
                                        rel="noreferrer noopener">US FDA Prior Notice Automatic System</a>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td align="left" style="padding-top:20px" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td align="left" valign="top" width="60">
                                                <a href="https://www.facebook.com/fda.express"
                                                    style="text-decoration:none;vertical-align:top;display:inline-block;width:40px;height:40px"
                                                    target="_blank"

                                                    rel="noreferrer noopener">

                                                        <img decoding="async" alt="Facebook" style="width: 40px; height: 40px;"
                                                            src="https://d1howb1wwyap5o.cloudfront.net/mail_notifications/social_circled_facebook.png"
                                                            class="i-amphtml-fill-content i-amphtml-replaced-content">

                                                </a>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="left"
                                style="font-size:12px;line-height:18px;color:#999;font-family:-apple-system,BlinkMacSystemFont,'Segoe UI',Roboto,Ubuntu,sans-serif;padding-top:40px">
                                © US FDA Prior Notice Automatic System
                                <br>KARTONEXPRESSUS LLC, 3 Germay Dr Unit 4 #2091 , Wilmington, Delaware 19804, United States
                                <br>EIN: 98-1551193
                            </td>
                        </tr>

                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
