<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>testapp</title>
    </head>
    {{--これが親　@yieldと@sectionを使って分割していく --}}
    <body>
        <h2>サイドバー(同一にしたい)</h2>
        <p>本文(ページごとに変えたい)</p>
        @yield('yield')
    </body>
    
</html>