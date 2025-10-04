<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $subject ?? 'C4CSignals' }}</title>
</head>
<body style="margin:0; padding:0; font-family: Arial, sans-serif; background-color:#f4f4f7;">

    <!-- Wrapper -->
    <table align="center" width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; margin:auto; background:#ffffff; border-radius:8px; overflow:hidden;">
        
        <!-- Header -->
        <tr>
            <td style="background-color:#4F46E5; color:#ffffff; padding:20px; text-align:center;">
                <img src="{{ asset('assets/logo/c4csignals-white-logo.png') }}" alt="C4CSignals Logo" style="max-height:50px; display:block; margin:auto;">
                <h2 style="margin:10px 0 0; font-size:20px; font-weight:bold; text-align: center;">C4CSignals</h2>
            </td>
        </tr>

        <!-- Divider -->
        <tr>
            <td style="background:#e5e7eb; height:2px;"></td>
        </tr>

        <!-- Body -->
        <tr>
            <td style="padding:30px; color:#111827; font-size:16px; line-height:1.5;">
                @yield('content')
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="padding: 20px; background: #f9fafb; text-align: center; font-size: 13px; color: #6b7280;">
                <p style="margin: 0 0 10px 0;">Follow us on</p>
                <p style="margin: 0;">
                    <a href="https://t.me/cash4coinssignals" style="display:inline-block; margin:0 8px; text-decoration:none;">
                        <img src="https://cdn-icons-png.flaticon.com/24/2111/2111646.png" alt="Telegram" style="vertical-align:middle;">
                    </a>
                    <a href="https://x.com/c4csignals" style="display:inline-block; margin:0 8px; text-decoration:none;">
                        <img src="https://cdn-icons-png.flaticon.com/24/733/733579.png" alt="Twitter" style="vertical-align:middle;">
                    </a>
                    <a href="https://instagram.com/c4csignals" style="display:inline-block; margin:0 8px; text-decoration:none;">
                        <img src="https://cdn-icons-png.flaticon.com/24/2111/2111463.png" alt="Instagram" style="vertical-align:middle;">
                    </a>
                    <a href="https://linkedin.com/company/c4csignals" style="display:inline-block; margin:0 8px; text-decoration:none;">
                        <img src="https://cdn-icons-png.flaticon.com/24/174/174857.png" alt="LinkedIn" style="vertical-align:middle;">
                    </a>
                </p>
                <p style="margin-top: 10px;">© {{ date('Y') }} <a href="https://c4csignals.com">C4CSignals</a>. All rights reserved.</p>
            </td>
        </tr>


    </table>
</body>
</html>
