<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($food as $i)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $i->id }}">{{ $i->title }}</a>
                    </h2>
                    <a href="">{{ $i->category->name }}</a>
                    <p class='body'>{{ $i->body }}</p>
                    <form action="/posts/{{ $i->id }}" id="form_{{ $i->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $i->id }})">delete</button>
                    </form>
                </div>
            @endforeach
        </div>
        <a href='/posts/create'>create</a>
        <div class='paginate'>
            {{ $food->links() }}
        </div>
        <script>
            function deletePost(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                //${}を使う場合、''やダブルクォーテーションではなく、``（バッククォーテーション）を使う。"form_"+idでも可
                
                /*${}はテンプレートリテラルの中に変数や式を突っ込むための記号。文字列に変数を組み込むのに使う。
                var foo = 'ート';
                var bar1 = 'テンプレ' + foo + 'リテラル';
                var bar2 = `テンプレ${foo}リテラル`;
                これらの結果は同じ。
                "form_"+id
                submit()は送信
                */
                    
                }
                
            }
</script>
    </body>
</html>