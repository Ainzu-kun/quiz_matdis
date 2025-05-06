<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Login Page
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body>
    <div class="min-h-screen flex items-center justify-center bg-black bg-opacity-90">
        <img alt="Background" class="fixed inset-0 w-full h-full object-cover -z-10" height="1080"
            src="{{ asset('./assets/img/Background.jpg') }}" width="1920" />
        <form action="{{ route('auth.authorization') }}" method="POST" class="bg-white rounded-2xl p-8 w-80 sm:w-96 flex flex-col items-center">
            @csrf
            <h1 class="text-2xl font-extrabold text-center mb-1 leading-tight">
                Selamat Datang
                <br />
                Kembali
            </h1>
            <p class="text-xs text-center mb-6">
                Silakan masukkan detail akun Anda
            </p>
            <label class="self-start text-sm mb-1 font-normal text-black" for="username">
                Username
            </label>
            <div class="flex items-center border border-black rounded-lg px-3 py-2 mb-4 w-full">
                <i class="fas fa-user text-black text-lg">
                </i>
                <input class="ml-3 w-full outline-none text-black placeholder-black" id="username" name="username"
                    placeholder="" type="text" />
            </div>
            <label class="self-start text-sm mb-1 font-normal text-black" for="password">
                Password
            </label>
            <div class="flex items-center border border-black rounded-lg px-3 py-2 mb-6 w-full">
                <i class="fas fa-lock text-black text-lg">
                </i>
                <input class="ml-3 w-full outline-none text-black placeholder-black" id="password" name="password"
                    placeholder="" type="password" />
                <i class="fas fa-eye text-black text-lg cursor-pointer" id="togglePassword"
                    title="Toggle password visibility">
                </i>
            </div>
            <button class="bg-black text-white rounded-full w-full py-3 text-center text-base font-normal mb-6"
                type="submit">
                Login
            </button>
            <p class="text-xs text-center text-black">
                Belum punya akun?
                <a class="text-blue-600 hover:underline" href="#">
                    Daftar
                </a>
            </p>
        </form>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const passwordInput = document.querySelector('#password');

        togglePassword.addEventListener('click', function() {
            // Toggle the type attribute
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye / eye-slash icon
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
