<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<title>@yield("title")</title>
@include('layout.nav')
<div clas="container">
    @yield('main_content')
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-bottom">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">footer ok</a>
    </div>
  </nav>