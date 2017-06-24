<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Taweechai</title>
    <style>
header{
  font-size: 60px;
  padding: 50px;
  background : #ff6633;
  color: #000000
  text-decoration: none;
  text-transform: uppercase;
  text-align: center;
}
footer{
  padding: 50px;
  background : #00ff00;
  color: #000000
  text-decoration: none;
  text-align:center;
}
section{
  text-align: center;
}
    </style>
  </head>
  <body>
    <header>
Taweechai perfect builder
    </header>
      <section id="main">

        <div class="links">
          <a href="/">หน้าหลัก</a>
            <a href="/1">เราคือใคร</a>
            <a href="/2">เราทำอะไร</a>
            <a href="/3">ทีมงานเรา</a>
            <a href="/4">ติดต่อเรา</a>
            <a href="/5">แผนที่</a>
        </div>
     @yield('content')
      </section>
      <footer>
ติดต่อสอบถาม โทร 0831274231
      </footer>

  </body>
</html>
