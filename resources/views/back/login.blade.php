
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0ed3cf">
    <meta name="msapplication-TileColor" content="#0ed3cf">
    <meta name="theme-color" content="#0ed3cf">

    <meta property="og:image" content="https://tailwindcomponents.com/storage/11621/conversions/temp63996-ogimage.jpg?v=2024-05-17 12:22:06" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="640" />
    <meta property="og:image:type" content="image/png" />

    <meta property="og:url" content="https://tailwindcomponents.com/component/simple-login-form-3/landing" />
    <meta property="og:title" content="Simple Login Form by Shariar-Hasan" />
    <meta property="og:description" content="This is a simple login cfomr component with dark mode supported and mobile responsive" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@TwComponents" />
    <meta name="twitter:title" content="Simple Login Form by Shariar-Hasan" />
    <meta name="twitter:description" content="This is a simple login cfomr component with dark mode supported and mobile responsive" />
    <meta name="twitter:image" content="https://tailwindcomponents.com/storage/11621/conversions/temp63996-ogimage.jpg?v=2024-05-17 12:22:06" />

    <link rel="canonical" href="https://tailwindcomponents.com/component/simple-login-form-3" itemprop="URL">
    
    <title>Whyunrsdq | Login</title>

            <script src="https://cdn.tailwindcss.com"></script>
    </head>
<body class="">
    <div class="min-h-screen flex items-center justify-center w-full bg-gray-500">
	<div class="shadow-lg shadow-blue-500 border border-primary rounded-lg px-8 py-6 max-w-md bg-gray-800">
        <div class="flex justify-between">
		<h1 class="text-white text-5xl font-bold text-center mb-10">Login</h1>
        <a href="https://whyunrsdq.my.id" class="text-white text-xl font-bold">X</a>
        </div>
		<form action="{{url('proses_login')}}" method="POST">
            {{ csrf_field() }}
			<div class="mb-4">
				<label for="username" class="block text-sm font-medium text-white mb-2">Username</label>
				<input type="username" id="username" name="username" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300" placeholder="Username..." required>
			</div>
			<div class="mb-4">
				<label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
				<input type="password" id="password" name="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300" placeholder="Password..." required>
				<a href=""
					class="text-gray-800">Forgot
					Password?</a>
			</div>
			<div class="flex items-center justify-between">
				
			</div>
			<button onclick="alert("hello")" type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600">Login</button>
		</form>
	</div>
</div>
</body>
</html>
