<?
$xml = "https://tools.ta-yanai.com/sokuho_news.xml";//ファイルを指定
$xmlData = simplexml_load_file($xml);//xmlを読み込む
?>
<ul>
<? foreach ($xmlData->channel->item as $data) { ?>
    <li>
        <p>
            <a href="<? echo $data->link; ?>"><? echo $data->title; ?></a>
        </p>
    </li>
<? } ?>
</ul>
