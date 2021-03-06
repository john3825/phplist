<?php

$lan = array(

'The temporary directory for uploading (%s) is not writable, so import will fail' => 'アップロードのための一時ディレクトリ（%s）が書込可能ではありませんので、インポートは失敗します。',
'Invalid Email' => 'Invalid Email',
'Import cleared' => 'インポートはクリアーされました。',
'Continue' => '続ける',
'Reset Import session' => 'インポートセッションのリセット',
'File is either too large or does not exist.' => 'ファイルがあまりに多きすぎるか存在しないかのどちらかです。',
'No file was specified. Maybe the file is too big? ' => 'ファイルが指定されていませんでした。もしかするとファイルが大きすぎるかもしれません。',
'File too big, please split it up into smaller ones' => 'ファイルが多きすぎます。どうぞより小さなサイズに分割してください。',
'Use of wrong characters in filename: ' => 'ファイル名に不正な文字の使用: ',
'Please choose whether to sign up immediately or to send a notification' => '即座に参加するか、通知を送るかを選択してください。',
'Cannot read %s. file is not readable !' => '%sを読むことができません。ファイルが読込可能ではありません！',
'Something went wrong while uploading the file. Empty file received. Maybe the file is too big, or you have no permissions to read it.' => 'ファイルのアップロード中に何か不正がおきました。空のファイルを受け取りました。もしかするとファイルが大きすぎるか、あなたにはファイルを読むパーミッションがありません。',
'Reading emails from file ... ' => 'ファイルからメールアドレスを読込中... ',
'Error was around here &quot;%s&quot;' => 'エラーがこのあたり&quot;%s&quot;でおきました。',
'Illegal character was %s' => '不正な文字は%sでした。',
'A character has been found in the import which is not the delimiter indicated, but is likely to be confused for one. Please clean up your import file and try again' => '区切り文字指定されていない文字がインポートの中にみつかり、混乱を招きそうです。あなたのインポートファイルを整理して、再度トライしてください。',
'ok, %d lines' => 'ok, %d 行',
'Cannot find column with email, please make sure the column is called &quot;email&quot; and not eg e-mail' => 'メールアドレスが含まれるカラムを見つけることができません、確実にカラムには&quot;email&quot;とつけてください。すなわち、e-mailではありません。',
'Create new one' => '新規作成',
'Skip Column' => 'このカラムをスキップ',
'Import Attributes' => '属性のインポート',
'Continue' => '続ける',
'Please identify the target of the following unknown columns' => '次の不明カラムのターゲットを決めてください。',
'Summary' => 'サマリー',
'maps to' => 'maps to',
'Create new Attribute' => '新規属性を作成',
'maps to' => 'maps to',
'Skip Column' => 'このカラムをスキップ',
'maps to' => 'maps to',
'%d lines will be imported' => '%d行がインポートされるでしょう。',
'Confirm Import' => 'インポート確認',
'Test Output' => 'テスト出力',
'Record has no email' => 'レコードにはメールアドレスがありません。',
'Invalid Email' => 'Invalid Email',
'clear value' => '値をクリアー',
'New Attribute' => '新規属性',
'Skip value' => '値をスキップ',
'duplicate' => '重複',
'Duplicate Email' => '重複するメールアドレス',
' user imported as ' => ' user imported as ',
'duplicate' => '重複',
'duplicate' => '重複',
'Duplicate Email' => '重複するメールアドレスル',
'All the emails already exist in the database and are member of the lists' => '全てのメールアドレスは既にデータベースに存在しており、リストのメンバーです。',
'%s emails succesfully imported to the database and added to %d lists.' => '%s のメールアドレスのデータベースへのインポートが成功し、%d リストに追加されました。',
'%d emails subscribed to the lists' => '%d のメールアドレスをもつユーザがリストを購読されました。',
'%s emails already existed in the database' => '%s のメールアドレスがデータベースに既に存在します。',
'%d Invalid Emails found.' => '%d のInvalid Emailが見つかりました。',
'These records were added, but the email has been made up from ' => 'これらのレコードは追加されましたが、メールアドレスは次のように作成されました：',
'These records were deleted. Check your source and reimport the data. Duplicates will be identified.' => 'これらのレコードは重複していました。あなたのソースをチェックしてデータを再度インポートしてください。重複は区別されるでしょう。',
'User data was updated for %d users' => '%dのユーザのユーザデータが更新されました。',
'%d users were matched by foreign key, %d by email' => '%d のユーザが外部キーによってマッチしました。%d のユーザがメールアドレスによってマッチしました。',
'phplist Import Results' => 'PHPlistインポート結果',
'Test output<br/>If the output looks ok, click %s to submit for real' => 'テスト出力<br/>もし出力がOKのようでしたら、本当に送信するために%sをクリックしてください。',
'Confirm Import' => 'インポートの確定',
'Import some more emails' => 'もう少しメールアドレスをインポート',
'Adding users to list' => 'ユーザをリストに追加中',
'Select the lists to add the emails to' => 'メールアドレスを追加するリストを選択',
'No lists available' => '利用可能なリストはありません。',
'Add a list' => 'リストの追加',
'Select the groups to add the users to' => 'ユーザを追加するグループを選択',
'automatically added' => '自動的に追加されました。',
 'importintro' => '<p>アップロードするファイルの最初の行にレコードの属性が記載されている必要があります。
    メールアドレスカラムは"email"とつけ、"e-mail"や"Email Address"などではないことを確認してください。
    Case is not important.
    </p>
    もし、"Foreign Key"というカラム名があるなら、これは外部のデータベースとPHPlistデータベースを同期するのに使われます。外部キーは既存のユーザとマッチングするとき優先されます。これはインポート処理を遅くします。これを使うのであれば、メールアドレスなしでレコードをもつことが許されますが、代わりに"Invalid Email"が作成されます。あなたはそれらのレコードを検索するために"Invalid Email"を検索することができます。外部キーの最小サイズは100です。
    <br/><br/>
    <b>警告</b>: ファイルはプレーンテキストである必要があります。Wordドキュメントのようなバイナリファイルはアップロードしないでください。
    <br/>',
'uploadlimits' => '以下の制限があなたのウェブサーバによって設定されています:<br/>
サーバに送るトータルデータの最小サイズ: <b>%s</b><br/>
ここのファイルについての最大サイズ: <b>%s</b>
<br/>PHPlistは1Mbより大きなファイルは処理しません。',
'testoutput_blurb' => 'もし"テスト出力"をチェックするのでしたら、画面上に分析されたメールアドレスのリストが表示されます。このときデータベースには情報が保存されません。これはファイルが正しいかどうかをみつけることに役立ちます。最初の50レコードのみを表示します。',
'warnings_blurb' => '"警告を表示"をチェックするのであれば、妥当でないレコードの警告を得ることができます。”テスト出力"をチェックすると警告が表示されるだけです。実際にインポート中のときそれらは無視されます。',
'omitinvalid_blurb' => '"Invalid 省略"をチェックすると、妥当でないレコードは追加されません。妥当でないレコードとはメールアドレスを持たないレコードです。他の属性は自動的に追加されます。すなわち、もし１レコードについてcountryが見つからないとき、countriesのリストに追加されます。',
'assigninvalid_blurb' => '"Invalid 割り当て"は、Invalid Emailをもつユーザにメールアドレスを作成することに使用されます。
メールアドレスに値を作成するために、 [ と ] の間の値を使うことができます。例えば、もしあなたのインポートファイルにカラム"First Name"とカラム"Last Name"が含まれていると、ファーストネームとラストネームを含んでいるこのユーザに、メールアドレスの新規の値を使うために"[first name] [last name]"を利用することができます。
値[number]はインポートのための連番を挿入する時に使われます。',
'overwriteexisting_blurb' => 'もしあなたが"既存を上書き"をチェックするのでしたら、データベース内のユーザの情報はインポートされた情報で置換されます。ユーザはメールアドレスまたは外部キーによりマッチされます。',
'retainold_blurb' => 'もし「古いメールアドレスを保持」をチェックするのでしたら、同一である二つのメールアドレスのコンフリクトは、古いメールアドレスをそのまま維持し、新しいメールアドレスに"duplicate"を追加します。もしチェックしないから、古いメールアドレスは"duplicate"となり、新しいメールアドレスが優先されるでしょう。',
'sendnotification_blurb' => 'もし"通知メールを送信する"をチェックするのでしたら、あなたが追加しているユーザは、購読の確定要求を送信され、ユーザは応答しなければいけません。この機能はInvalid Emailを同定しますので、おすすめです。',
'phplist Import  Results' => 'PHPlistインポート結果',
'File containing emails' => 'メールアドレスが含まれているファイル',
'Field Delimiter' => 'フィールドの区切り文字',
'(default is TAB)' => '（デフォルトはTAB）',
'Record Delimiter' => 'レコードの区切り文字',
'(default is line break)' => '（デフォルトは改行）',
'Test output' => 'テスト出力',
'Show Warnings' => '警告を表示',
'Omit Invalid' => 'Invalid 省略',
'Assign Invalid' => 'Invalid 割り当て',
'Overwrite Existing' => '既存を上書き',
'Retain Old User Email' => '古いメールアドレスを保持',
'Send&nbsp;Notification&nbsp;email' => '通知メールを送信する',
'Make confirmed immediately' => '即座に確定とする',
'Import' => 'インポート',

## added 2008-05-12
'phplistuploadlimit' => '<br/>PHPlist will not process files larger than %dMB',
'Cannot find column with email, please make sure the column is called &quot;email&quot; and not eg e-mail, and that your column delimiter is correct' => 'Cannot find column with email, please make sure the column is called &quot;email&quot; and not eg e-mail, and that your column delimiter is correct',

);
?>