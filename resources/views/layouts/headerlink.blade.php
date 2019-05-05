<nav class="one">
  <ul class="topmenu">
    <li><a href="{{ url('/') }}">Главная</a></li>
    <li>......Меню.......
      <ul class="submenu">
        <li><a href="{{ url('/get') }}" >Ajax (Get)</a></li>
        <li><a href="{{ url('/db') }}">DB</a></li>
        <li><a href="{{ url('/graph') }}">Graph</a></li>
        <li><a href="{{ url('/reference') }}" >Справка</a></li>
      </ul>
    </li>
    <li><a href="{{ url('/contacts') }}">Контакты</a></li>
  </ul>
</nav>


