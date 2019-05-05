@extends('layouts._layout')
@section('content')
<section id="content">
   <head>
      <!-- load jQuery -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script>
         $(document).ready(function(){            
             console.log('сообщение в консоль');
         });    
      </script>
   </head>
   <body>
      <div class="reference">
      <p><b>О homestead</b></p>
      <br>
      Проверить её статус можно с помощью команды vagrant status
      <br>
      для остановки виртуальной машины используйте команду vagrant halt.
      <br>
      Чтобы уничтожить машину, вы можете использовать команду vagrant destroy --force.
      <br>
      необходимо перезапустить vagrant reload --provision
      <p><b>О БД</b></p>
      pgadmin3
      <br>
      для pg_admin. user: homestead,
      pw: secret
      <br>
      пути: /etc/postgresql/10/main$ls
      <br>
      conf.d  environment  pg_ctl.conf  pg_hba.conf  pg_ident.conf  postgresql.conf  start.conf
      <br>
      редактирование через sudo
      <br>
      корень_сайта\config\database.php
      <br>
      https://laravel.ru/posts/250
      <br>
      mod_rewrite  включает без http
      <br>
      sudo -u postgres psql -c "COPY guests TO '/tmp/guests.csv' WITH (FORMAT CSV, HEADER);"
      <br>
      sudo apt-get install php7.2-pgsql
      <br>
      CREATE SEQUENCE users_id_seq;
      ALTER TABLE users ALTER COLUMN id SET DEFAULT nextval('users_id_seq'::regclass);
   </body>
</section>
@stop
