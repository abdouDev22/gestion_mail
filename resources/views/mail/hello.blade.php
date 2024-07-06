<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  @vite(['resources/scss/contact.scss'])
</head>
<body>
  <nav>
    <div class="logo">
      <strong>SMTP</strong>
      <span>mail</span>
    </div>
  </nav>
  <h1>{{ $name }}</h1>
  <h2>{{ $email }}</h2>
  <p>{{  $message1 }}</p>
</body>
</html>
