<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration confirmed</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f1eee8; color: #242424; font-family: Arial, Helvetica, sans-serif;">
    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background-color: #f1eee8; padding: 32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="max-width: 620px; background-color: #ffffff;">
                    <tr>
                        <td style="padding: 36px 40px; background-color: #171717; color: #ffffff;">
                            <p style="margin: 0 0 18px; color: #e85d3f; font-size: 12px; font-weight: bold; letter-spacing: 2px; text-transform: uppercase;">Live event registration</p>
                            <h1 style="margin: 0; font-size: 42px; line-height: 0.95; letter-spacing: -2px;">21<br><span style="color: #e85d3f;">Pilots</span></h1>
                            <p style="margin: 22px 0 0; color: #d7d2ca; font-size: 14px; line-height: 1.6;">The Clancy World Tour</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 40px;">
                            <p style="margin: 0 0 8px; color: #e85d3f; font-size: 13px; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;">Registration confirmed</p>
                            <h2 style="margin: 0 0 18px; color: #171717; font-size: 30px; line-height: 1.15;">You are on the list, {{ $registration->first_name }}.</h2>
                            <p style="margin: 0 0 28px; color: #5f5b56; font-size: 16px; line-height: 1.7;">
                                Thanks for registering. Your place at the next 21 Pilots experience has been reserved.
                            </p>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #e4dfd7; border-left: 4px solid #e85d3f;">
                                <tr>
                                    <td style="padding: 22px 24px;">
                                        <p style="margin: 0 0 16px; color: #171717; font-size: 17px; font-weight: bold;">Your registration details</p>
                                        <p style="margin: 0 0 9px; color: #5f5b56; font-size: 14px;"><strong style="color: #171717;">Name:</strong> {{ $registration->first_name }} {{ $registration->last_name }}</p>
                                        <p style="margin: 0 0 9px; color: #5f5b56; font-size: 14px;"><strong style="color: #171717;">Email:</strong> {{ $registration->email }}</p>
                                        <p style="margin: 0 0 9px; color: #5f5b56; font-size: 14px;"><strong style="color: #171717;">Phone:</strong> {{ $registration->phone ?: 'Not provided' }}</p>
                                        <p style="margin: 0; color: #5f5b56; font-size: 14px;"><strong style="color: #171717;">Ticket:</strong> {{ $registration->ticket === 'premium' ? 'Premium experience' : 'General admission' }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="margin-top: 24px; background-color: #f7f4ef;">
                                <tr>
                                    <td style="padding: 20px 24px;">
                                        <p style="margin: 0 0 8px; color: #e85d3f; font-size: 12px; font-weight: bold; letter-spacing: 1px; text-transform: uppercase;">Event details</p>
                                        <p style="margin: 0 0 5px; color: #171717; font-size: 15px; font-weight: bold;">Friday, 24 May 2025</p>
                                        <p style="margin: 0 0 5px; color: #5f5b56; font-size: 14px;">Impact Arena, Bangkok</p>
                                        <p style="margin: 0; color: #5f5b56; font-size: 14px;">Doors open at 18:00 onwards</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin: 30px 0 0; color: #5f5b56; font-size: 14px; line-height: 1.7;">
                                Keep this email for your records. We look forward to seeing you at the show.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 22px 40px; background-color: #171717; color: #aaa39a; font-size: 12px; line-height: 1.6;">
                            This is an automated confirmation email. Please do not reply to this message.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>