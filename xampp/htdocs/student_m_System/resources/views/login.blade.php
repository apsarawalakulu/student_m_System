<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>

        /* 🌈 Animated background */
        body{
            height:100vh;
            margin:0;
            display:flex;
            align-items:center;
            justify-content:center;
            font-family: 'Segoe UI', sans-serif;

            background: linear-gradient(-45deg, #0f172a, #1e293b, #02415a, #3133b1);
            background-size: 400% 400%;
            animation: gradientBG 10s ease infinite;
        }

        @keyframes gradientBG{
            0%{background-position:0% 50%}
            50%{background-position:100% 50%}
            100%{background-position:0% 50%}
        }

        /* 💎 Glass Card */
        .login-card{
            width: 430px;
            padding: 40px;
            border-radius: 22px;
            background: rgba(255,255,255,0.15);
            backdrop-filter: blur(18px);
            box-shadow: 0 20px 60px rgba(0,0,0,0.4);
            color: white;
        }

        /* 🏷 Title */
        .title{
            font-size:26px;
            font-weight:800;
            text-align:center;
            margin-top:10px;
            letter-spacing:1px;
        }

        .subtitle{
            text-align:center;
            font-size:13px;
            color:#e2e8f0;
            margin-bottom:25px;
        }

        /* 🧊 Inputs */
        .form-control{
            border-radius:12px;
            padding:10px;
            border:none;
        }

        .input-group-text{
            border-radius:12px 0 0 12px;
            background:#ffffff;
        }

        /* 🔘 Button */
        .btn-login{
            border-radius:12px;
            padding:10px;
            font-weight:600;
            background: linear-gradient(90deg,#0ea5e9,#6366f1);
            border:none;
            transition:0.3s;
            color:white;
        }

        .btn-login:hover{
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        /* ⚠ error */
        .alert{
            border-radius:10px;
        }

        /* footer */
        .footer{
            font-size:12px;
            text-align:center;
            margin-top:15px;
            color:#e2e8f0;
        }

        .logo{
            width:80px;
            display:block;
            margin:auto;
        }

    </style>
</head>

<body>

<div class="login-card">

    <!-- LOGO -->
    <img src="{{ asset('assets/img/theme_img/CodeXpress_logo.png') }}" class="logo">

    <!-- TITLE -->
    <div class="title">LOGIN PORTAL</div>
    <div class="subtitle">Student Management System</div>

    <!-- ERROR -->
    @if(session('error'))
        <div class="alert alert-danger py-2 text-center">
            {{ session('error') }}
        </div>
    @endif

    <!-- FORM -->
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <!-- EMAIL -->
        <div class="mb-3">
            <label class="form-label">Email</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control" required>
            </div>
        </div>

        <!-- PASSWORD -->
        <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" id="password" name="password" class="form-control" required>
                <span class="input-group-text" onclick="togglePassword()" style="cursor:pointer;">
                    <i class="bi bi-eye" id="eyeIcon"></i>
                </span>
            </div>
        </div>

        <!-- BUTTON -->
        <button class="btn btn-login w-100">
            <i class="bi bi-box-arrow-in-right me-1"></i> Login
        </button>
    </form>

    <div class="footer">
        © {{ date('Y') }} Student Management System
    </div>

</div>

<script>
    function togglePassword(){
        let pass = document.getElementById("password");
        let icon = document.getElementById("eyeIcon");

        if(pass.type === "password"){
            pass.type = "text";
            icon.classList.replace("bi-eye","bi-eye-slash");
        } else {
            pass.type = "password";
            icon.classList.replace("bi-eye-slash","bi-eye");
        }
    }
</script>

</body>
</html>
