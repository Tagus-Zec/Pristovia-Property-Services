<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Quote Request</title>
</head>

<body style="margin:0;padding:0;background-color:#edf2f7;font-family:Arial,Helvetica,sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background:#edf2f7;padding:40px 15px;">
        <tr>
            <td align="center">

                <!-- MAIN CONTAINER -->
                <table width="100%" cellpadding="0" cellspacing="0" border="0"
                    style="max-width:620px;background:#ffffff;border-radius:24px;overflow:hidden;">

                    <!-- HEADER -->
                    <tr>
                        <td style="background:#0f172a;padding:40px 40px 34px;text-align:center;">

                            <!-- LOGO -->
                            <img 
                                src="{{ asset('assets/img/logofoot.png') }}"
                                alt="Pristovia"
                                width="110"
                                style="display:block;margin:0 auto 18px;"
                            >

                            <div style="font-size:24px;font-weight:700;color:#ffffff;letter-spacing:0.5px;">
                                Pristovia Property
                            </div>

                            <div style="margin-top:10px;font-size:14px;line-height:22px;color:rgba(255,255,255,0.72);">
                                A new quote request has been submitted through your website.
                            </div>

                            <!-- BADGE -->
                            <div style="margin-top:20px;">
                                <span style="background:#dcfce7;color:#166534;padding:8px 16px;border-radius:999px;font-size:12px;font-weight:700;letter-spacing:1px;text-transform:uppercase;">
                                    New Lead
                                </span>
                            </div>

                        </td>
                    </tr>

                    <!-- BODY -->
                    <tr>
                        <td style="padding:40px;">

                            <!-- SECTION -->
                            <div style="font-size:20px;font-weight:700;color:#0f172a;margin-bottom:25px;">
                                Client Information
                            </div>

                            <table width="100%" cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                    <td style="padding:0 0 18px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Full Name
                                        </div>

                                        <div style="font-size:16px;color:#0f172a;font-weight:600;">
                                            {{ $quote->full_name }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:0 0 18px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Email Address
                                        </div>

                                        <div style="font-size:16px;color:#0f172a;font-weight:600;">
                                            {{ $quote->email }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:0 0 10px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Phone Number
                                        </div>

                                        <div style="font-size:16px;color:#0f172a;font-weight:600;">
                                            {{ $quote->phone }}
                                        </div>
                                    </td>
                                </tr>

                            </table>

                            <!-- DIVIDER -->
                            <div style="height:1px;background:#e2e8f0;margin:35px 0;"></div>

                            <!-- SERVICE -->
                            <div style="font-size:20px;font-weight:700;color:#0f172a;margin-bottom:25px;">
                                Service Details
                            </div>

                            <table width="100%" cellpadding="0" cellspacing="0" border="0">

                                <tr>
                                    <td width="50%" style="padding-bottom:22px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Property Type
                                        </div>

                                        <div style="font-size:15px;color:#0f172a;font-weight:600;">
                                            {{ $quote->property_type }}
                                        </div>
                                    </td>

                                    <td width="50%" style="padding-bottom:22px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Requested Service
                                        </div>

                                        <div style="font-size:15px;color:#0f172a;font-weight:600;">
                                            {{ $quote->service_requested }}
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td width="50%" style="padding-bottom:22px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Location
                                        </div>

                                        <div style="font-size:15px;color:#0f172a;font-weight:600;">
                                            {{ $quote->location }}
                                        </div>
                                    </td>

                                    <td width="50%" style="padding-bottom:22px;">
                                        <div style="font-size:12px;color:#64748b;text-transform:uppercase;letter-spacing:1px;margin-bottom:5px;">
                                            Preferred Date
                                        </div>

                                        <div style="font-size:15px;color:#0f172a;font-weight:600;">
                                            {{ $quote->preferred_date }}
                                        </div>
                                    </td>
                                </tr>

                            </table>

                            <!-- DIVIDER -->
                            <div style="height:1px;background:#e2e8f0;margin:35px 0;"></div>

                            <!-- MESSAGE -->
                            <div style="font-size:20px;font-weight:700;color:#0f172a;margin-bottom:20px;">
                                Client Message
                            </div>

                            <div style="background:#f8fafc;border:1px solid #e2e8f0;border-radius:16px;padding:24px;font-size:15px;line-height:28px;color:#334155;">
                                {{ $quote->final_message }}
                            </div>

                            <!-- BUTTON -->
                            <div style="text-align:center;margin-top:40px;">

                               <a href="{{ route('admin.quotes.index') }}" style="display:inline-block;background:#0f172a;color:#ffffff;text-decoration:none;padding:16px 28px;border-radius:14px;font-size:13px;font-weight:700;letter-spacing:1px;text-transform:uppercase;">
                                    View in Dashboard
                                </a>

                            </div>

                        </td>
                    </tr>

                    <!-- FOOTER -->
                    <tr>
                        <td style="padding:28px 35px;background:#f8fafc;text-align:center;">

                            <div style="font-size:13px;color:#64748b;line-height:24px;">
                                © {{ date('Y') }} Pristovia Property Services Inc.
                                <br>
                                All rights reserved.
                            </div>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>