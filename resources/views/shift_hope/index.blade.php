<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>希望入力画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>シフト希望入力画面</h1>
        
        <div>
            
        <h1 class="contact-title">入力画面</h1>
        <p>シフト希望を入力の上、提出ボタンを押してください。</p>
        <div>
            <label>当番の選択</label>
                <select name="item">
                    <option value="">当番を選択してください</option>
                    <option value="電話当番">電話当番</option>
                    <option value="洗濯機当番">洗濯機掃除当番</option>
                    <option value="風呂掃除当番">風呂掃除当番</option>
                </select>
        </div>
        <div>
            <label>学年の選択</label>
                <select name="item">
                    <option value="">学年を選択してください</option>
                    <option value="grade1">1年</option>
                    <option value="grade2">2年</option>
                </select>
                </div>
            <div>
                <label>名前の入力</label>
                <input type="text" name="email" placeholder="例）北苑　太郎" value="">
            </div>
        <div>
            <label>時間の選択（土日祝のみ）</label>
                <select name="item">
                    <option value="">当番希望時間を選択してください</option>
                    <option value="ご質問・お問い合わせ">9:00~13:00</option>
                    <option value="ご意見・ご感想">13:00~17:00</option>
                    <option value="ご意見・ご感想">17:00~22:00</option>
                </select>
        </div>
            <button type="submit">提出</button>
        <div class='posts'>
        @foreach ($posts as $post)
            <div class='post'>
                <h2 class='title'>{{ $post->date }}</h2>
            </div>
        @endforeach
            
            
    </body>
</html>