<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-white font-sans antialiased">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reset Password | {{ env('APP_NAME', 'Indoeuropeans') }}</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body class="h-full">
    <div class="flex min-h-full justify-center items-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="mx-auto w-full max-w-lg shadow-lg border border-slate-200 p-8 rounded-lg">
            <div>
                <div class="flex justify-center items-baseline gap-2 mb-4">
                    <div class="flex items-center justify-center rounded-xl text-black">
                        <i class="fas fa-ad text-black text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-bold tracking-tight text-slate-900">{{ env('APP_NAME', 'Indoeuropeans') }}
                    </h2>
                </div>
                <h2 class="text-xl font-bold tracking-tight text-slate-900 text-center">Reset your password</h2>
                <p class="mt-2 text-sm text-slate-500 text-center">
                    Please enter your new password below.
                </p>
            </div>

            <div class="mt-5">
                <form action="{{ route('password.update') }}" method="POST" class="space-y-6">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <x-forms.ui.input label="Email address" name="email" type="email" value="{{ old('email', $email) }}"
                        autocomplete="email" required readonly />

                    <x-forms.ui.input label="New Password" name="password" type="password" autocomplete="new-password"
                        required />

                    <x-forms.ui.input label="Confirm Password" name="password_confirmation" type="password"
                        autocomplete="new-password" required />

                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-xl bg-primary-600 px-3 py-3 text-sm font-bold leading-6 text-white shadow-md shadow-primary-100 hover:bg-primary-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600 transition-all active:scale-[0.98]">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>