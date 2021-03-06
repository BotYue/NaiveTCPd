<?php

$quote = [
    "你们媒体千万要注意啊，不要“见着风，是得雨”啊。",
    "隐患险于明火，防范胜于救灾，责任重于泰山。 ——时任上海市长的江泽民在全市消防工作会议上的脱稿讲话，1986年10月13日",
    "由于您的到来，上海的天气好转了。 ——时任上海市委书记的江泽民在上海西郊宾馆与来访的苏共中央书记的谈话，1989年5月18日",
    "One day when we were young. ——江泽民在1990年中国中央电视台举办春晚时发表的新年贺词",
    "所有人，不论长幼都必须说英语。 ——江泽民在组织家族聚会欢度千禧年时对家人提出的要求，1999年12月31日",
    "假使这些完全……无中生有的东西，你再帮他说一遍，你等于……你也有责任吧？",
    "你……刚才你问我啊，我可以回答你一句“无可奉告”，那你们又不高兴，怎么办？",
    "你问我不支……支持不支持，我是支持的。",
    "我感觉你们新闻界还要学习一个，你们非常熟悉西方的这一套的理论。你们毕竟还too young。",
    "我是身经百战了，见得多了！啊，西方的哪一个国家我没去过？",
    "你们要知道，美国的华莱士，那比你们不知道要高到哪里去了。啊，我跟他谈笑风生！",
    "媒体啊，要……还是要提高自己的知识水平！",
    "欸，我也为你们着急啊，真的。",
    "你们有一个好，全世界跑到什么地方，你们比其他的西方记者啊，跑得还快。但是呢，问来问去的问题啊，都 too simple，啊，sometimes naive!",
    "识得唔识得啊？",
    "我很抱歉，我今天是作为一个长者跟你们讲这个。我不是新闻工作者，但是我见得太多了，我……我有这个必要告诉你们一点，人生的经验。",
    "我每一次碰到你们我就讲中国有一句话叫“闷声大发财”，我就什么话也不说。这是最好的！",
    "所以你刚才你一定要——在宣传上将来如果你们报道上有偏差，你们要负责。",
    "欸，连任也要按照香港的法律啊，对不对？要要……要按照香港的……当然，我们的决定权也是很重要的。",
    "你们啊，不要想……喜欢……弄个大新闻，说现在已经钦定了，就把我批判一番。",
    "你们啊，naive!",
    "I'm angry!你们这样子啊是不行的！",
    "中国人民是从来都不信邪的。 ——江泽民在人民大会堂香港厅答港台记者问，2000年3月8日",
    "I'm sorry. I am a electrical power engineer. 我跟你们一样对熊猫非常喜欢它，但是对它也不是有太多的研究。 ——江泽民接受美国PBS记吉姆·莱勒的采访，1997年10月31日",
    "我认为这青年人不可能被坦克轧死。 ——江泽民接受美国记者芭芭拉·沃尔特斯采访时被问到关于八九天安门事件中拦截坦克的学生的下落，1999年",
    "“苟利国家生死以，岂因祸福避趋之” ——退休的江泽民到访中国联合工程公司，2009年4月23日"
];

$quote_count = count($quote);

function SBC_DBC($str)
{
    $DBC = [
        '０', '１', '２', '３', '４',
        '５', '６', '７', '８', '９',
        'Ａ', 'Ｂ', 'Ｃ', 'Ｄ', 'Ｅ',
        'Ｆ', 'Ｇ', 'Ｈ', 'Ｉ', 'Ｊ',
        'Ｋ', 'Ｌ', 'Ｍ', 'Ｎ', 'Ｏ',
        'Ｐ', 'Ｑ', 'Ｒ', 'Ｓ', 'Ｔ',
        'Ｕ', 'Ｖ', 'Ｗ', 'Ｘ', 'Ｙ',
        'Ｚ', 'ａ', 'ｂ', 'ｃ', 'ｄ',
        'ｅ', 'ｆ', 'ｇ', 'ｈ', 'ｉ',
        'ｊ', 'ｋ', 'ｌ', 'ｍ', 'ｎ',
        'ｏ', 'ｐ', 'ｑ', 'ｒ', 'ｓ',
        'ｔ', 'ｕ', 'ｖ', 'ｗ', 'ｘ',
        'ｙ', 'ｚ', '－', '　', '：',
        '．', '，', '／', '％', '＃',
        '！', '＠', '＆', '（', '）',
        '＜', '＞', '＂', '＇', '？',
        '［', '］', '｛', '｝', '＼',
        '｜', '＋', '＝', '＿', '＾',
        '￥', '￣', '｀'
    ];
    $SBC = [
        '0', '1', '2', '3', '4',
        '5', '6', '7', '8', '9',
        'A', 'B', 'C', 'D', 'E',
        'F', 'G', 'H', 'I', 'J',
        'K', 'L', 'M', 'N', 'O',
        'P', 'Q', 'R', 'S', 'T',
        'U', 'V', 'W', 'X', 'Y',
        'Z', 'a', 'b', 'c', 'd',
        'e', 'f', 'g', 'h', 'i',
        'j', 'k', 'l', 'm', 'n',
        'o', 'p', 'q', 'r', 's',
        't', 'u', 'v', 'w', 'x',
        'y', 'z', '-', ' ', ':',
        '.', ',', '/', '%', '#',
        '!', '@', '&', '(', ')',
        '<', '>', '"', '\'', '?',
        '[', ']', '{', '}', '\\',
        '|', '+', '=', '_', '^',
        '$', '~', '`'
    ];
    return str_replace($SBC, $DBC, $str);
}

foreach ($quote as $key => $item) {
    $quote[$key] = SBC_DBC($item);
}