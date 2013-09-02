GetBukkitVer
============

dev.bukkit.orgからプラグインの
最新バージョンを取得するのとおまけに
FileNameとかDateとか取得できるようになってます。

HTMLSQLっていうの必要です。
https://github.com/hxseven/htmlSQL

パラメータは以下。
-------------------------------------------------
i … Pluginの名前をいれてください。<br>
AdminCmd(http://dev.bukkit.org/bukkit-plugins/admincmd/)だったら<br>
admincmdってなります。つまり<br>
http://dev.bukkit.org/bukkit-plugins/ここの文字/<br>
の「ここの文字」の部分を入力します。<br>
<br>

m … モードです。verはバージョン、fnameはファイル名、dateは更新した時間を取得できます。<br>

-------------------------------------------------
一応自分のサーバにも置いてます。

http://kuwasa.net/api/getbukkitver/api.php

例(AdminCmd):http://kuwasa.net/api/getbukkitver/api.php?i=admincmd&m=ver

