<?php
/** Arabic (العربية)
  *
  * @package MediaWiki
  * @subpackage Language
  */

$linkPrefixExtension = true;
$fallback8bitEncoding = 'windows-1256';

$rtl = true;
$defaultUserOptionOverrides = array(
	# Swap sidebar to right side by default
	'quickbar' => 2,
	# Underlines seriously harm legibility. Force off:
	'underline' => 0,
);

$namespaceNames = array(
	NS_MEDIA            => 'ملف',
	NS_SPECIAL          => 'خاص',
	NS_MAIN             => '',
	NS_TALK             => 'نقاش',
	NS_USER             => 'مستخدم',
	NS_USER_TALK        => 'نقاش_المستخدم',
	# NS_PROJECT set by $wgMetaNamespace
	NS_PROJECT_TALK     => 'نقاش' . '_$1',
	NS_IMAGE            => 'صورة',
	NS_IMAGE_TALK       => 'نقاش_الصورة',
	NS_MEDIAWIKI        => 'ميدياويكي',
	NS_MEDIAWIKI_TALK   => 'نقاش_ميدياويكي',
	NS_TEMPLATE         => 'قالب',
	NS_TEMPLATE_TALK    => 'نقاش_قالب',
	NS_HELP             => 'مساعدة',
	NS_HELP_TALK        => 'نقاش_المساعدة',
	NS_CATEGORY         => 'تصنيف',
	NS_CATEGORY_TALK    => 'نقاش_التصنيف'
);


$magicWords = array(
#   ID                                 CASE  SYNONYMS
	'redirect'               => array( 0,    '#REDIRECT'    ,   '#تحويل'                  ),
	'notoc'                  => array( 0,    '__NOTOC__'   ,   '__لافهرس__'               ),
	'forcetoc'               => array( 0,    '__FORCETOC__'    ,   '__لصق_فهرس__'        ),
	'toc'                    => array( 0,    '__TOC__'     ,   '__فهرس__'                ),
	'noeditsection'          => array( 0,    '__NOEDITSECTION__' ,   '__لاتحريرقسم__'      ),
	'start'                  => array( 0,    '__START__'   ,   '__ابدأ__'                ),
	'currentmonth'           => array( 1,    'CURRENTMONTH'     ,    'شهر' , 'شهر_حالي'   ),
	'currentmonthname'       => array( 1,    'CURRENTMONTHNAME'    ,   'اسم_شهر', 'اسم_شهر_حالي'),
#	'currentmonthnamegen'    => array( 1,    'CURRENTMONTHNAMEGEN'    ),
#	'currentmonthabbrev'     => array( 1,    'CURRENTMONTHABBREV'     ),
	'currentday'             => array( 1,    'CURRENTDAY'    ,          'يوم'            ),
#	'currentday2'            => array( 1,    'CURRENTDAY2'            ),
	'currentdayname'         => array( 1,    'CURRENTDAYNAME'   ,     'اسم_يوم'          ),
	'currentyear'            => array( 1,    'CURRENTYEAR'    ,    'عام'                 ),
	'currenttime'            => array( 1,    'CURRENTTIME'    ,   'وقت'                  ),
	'numberofarticles'       => array( 1,    'NUMBEROFARTICLES'  ,'عددالمقالات' , 'عدد_المقالات'),
	'numberoffiles'          => array( 1,    'NUMBEROFFILES'  , 'عددالملفات' , 'عدد_الملفات'),
	'pagename'               => array( 1,    'PAGENAME'       ,       'اسم_صفحة'         ),
	'pagenamee'              => array( 1,    'PAGENAMEE'      ,         'عنوان_صفحة'     ),
	'namespace'              => array( 1,    'NAMESPACE'       ,      'نطاق'             ),
	'namespacee'             => array( 1,    'NAMESPACEE'     , 'عنوان_نطاق'             ),
	'fullpagename'           => array( 1,    'FULLPAGENAME', 'اسم_كامل'                  ),
	'fullpagenamee'          => array( 1,    'FULLPAGENAMEE'  , 'عنوان_كامل'             ),
	'msg'                    => array( 0,    'MSG:'         ,          'رسالة:'          ),
	'subst'                  => array( 0,    'SUBST:'      ,     'نسخ:'  , 'نسخ_قالب:'   ),
	'msgnw'                  => array( 0,    'MSGNW:'     ,  'مصدر:' , 'مصدر_قالب:'      ),
	'end'                    => array( 0,    '__END__'       ,  '__نهاية__', '__إنهاء__'   ),
	'img_thumbnail'          => array( 1,    'thumbnail', 'thumb'   ,          'تصغير'    ),
	'img_manualthumb'        => array( 1,    'thumbnail=$1', 'thumb=$1'  ,'تصغير=$1'      ),
	'img_right'              => array( 1,    'right'       ,       'يمين'                  ),
	'img_left'               => array( 1,    'left'           ,    'يسار'                ),
	'img_none'               => array( 1,    'none'         ,        'بدون'              ),
	'img_width'              => array( 1,    '$1px'  ,    '$1بك'                         ),
	'img_center'             => array( 1,    'center', 'centre'   ,           'وسط'      ),
	'img_framed'             => array( 1,    'framed', 'enframed', 'frame' , 'إطار', 'اطار'),
	'int'                    => array( 0,    'INT:'        ,        'محتوى:'              ),
	'sitename'               => array( 1,    'SITENAME'    ,          'اسم_الموقع'        ),
	'ns'                     => array( 0,    'NS:'            ,              'نط:'       ),
	'localurl'               => array( 0,    'LOCALURL:'      ,       'عنوان:'           ),
#	'localurle'              => array( 0,    'LOCALURLE:'             ),
	'server'                 => array( 0,    'SERVER'          ,   'العنوان'             ),
	'servername'             => array( 0,    'SERVERNAME'      ,   'اسم_عنوان'           ),
	'scriptpath'             => array( 0,    'SCRIPTPATH'       ,      'مسار'            ),
#	'grammar'                => array( 0,    'GRAMMAR:'               ),
	'notitleconvert'         => array( 0,    '__NOTITLECONVERT__', '__NOTC__',  'لاتحويل_عنوان'),
	'nocontentconvert'       => array( 0,    '__NOCONTENTCONVERT__', '__NOCC__', 'لاتحويل_محتوى' ),
	'currentweek'            => array( 1,    'CURRENTWEEK'    ,     'أسبوع'              ),
	'currentdow'             => array( 1,    'CURRENTDOW'      ,     'رقم_يوم'           ),
	'revisionid'             => array( 1,    'REVISIONID'        ,     'نسخة'            ),
#	'plural'                 => array( 0,    'PLURAL:'                ),
	'fullurl'                => array( 0,    'FULLURL:', 'عنوان_كامل:'                   ),
#	'fullurle'               => array( 0,    'FULLURLE:'              ),
#	'lcfirst'                => array( 0,    'LCFIRST:'               ),
#	'ucfirst'                => array( 0,    'UCFIRST:'               ),
#	'lc'                     => array( 0,    'LC:'                    ),
#	'uc'                     => array( 0,    'UC:'                    ),
#	'raw'                    => array( 0,    'RAW:'                   ),
);

$digitTransformTable = array(
	'0' => '٠',
	'1' => '١',
	'2' => '٢',
	'3' => '٣',
	'4' => '٤',
	'5' => '٥',
	'6' => '٦',
	'7' => '٧',
	'8' => '٨',
	'9' => '٩',
	'.' => '٫', // wrong table?
	',' => '٬'
);

$messages = array(
# Dates
'sunday' => 'الأحد',
'monday' => 'الإثنين',
'tuesday' => 'الثلاثاء',
'wednesday' => 'الأربعاء',
'thursday' => 'الخميس',
'friday' => 'الجمعة',
'saturday' => 'السبت',
'january' => 'يناير',
'february' => 'فبراير',
'march' => 'مارس',
'april' => 'ابريل',
'may_long' => 'مايو',
'june' => 'يونيو',
'july' => 'يوليو',
'august' => 'أغسطس',
'september' => 'سبتمبر',
'november' => 'نوفمبر',
'december' => 'ديسمبر',
'jan' => 'يناير',
'feb' => 'فبراير',
'mar' => 'مارس',
'apr' => 'ابريل',
'may' => 'مايو',
'jun' => 'يونيو',
'jul' => 'يوليو',
'aug' => 'أغسطس',
'sep' => 'سبتمبر',
'nov' => 'نوفمبر',
'dec' => 'ديسمبر',

# Bits of text used by many pages:
#
'mainpage'		=> 'الصفحة الرئيسية',
'mytalk'		=> 'صفحة نقاشي',
'history_short' => 'تاريخ الصفحة',
'edit' => 'عدل هذه الصفحة',
'delete' => 'حذف هذه الصفحة',
'protect' => 'صفحة محمية',
'talk' => 'ناقش هذه الصفحة',

# Watchlist
#
'watch' => 'راقب هذه الصفحة',
'watchthispage'		=> 'راقب هذه الصفحة',
'unwatch' => 'توقف عن مراقبة الصفحة',
'unwatchthispage' 	=> 'توقف عن مراقبة الصفحة',

'1movedto2' => '$1 تم نقلها إلى $2',
'1movedto2_redir' => 'تم نقل $1 فوق التحويلة $2',
'about' => 'حول',
'aboutpage' => '{{ns:project}}:حول',
'accmailtext' => 'تم إرسال كلمة السر الخاصة بـ \'$1\' إلى العنوان $2.',
'accmailtitle' => 'تم إرسال كلمة السر.',
'acct_creation_throttle_hit' => 'معذرة، لقد أقمت $1 حساب. لا يممكنك عمل المزيد.',
'actioncomplete' => 'انتهاء العملية',
'addedwatch' => 'تمت الإضافة لقائمة المراقبة',
'allmessages' => 'كافة رسائل النظام',
'allpages' => 'كل الصفحات',
'allpagessubmit' => 'اذهب',
'alphaindexline' => '$1 إلى $2',
'alreadyloggedin' => '<strong>المستخدم $1, انت مسجل للدخول من قبل!</strong><br />',
'ancientpages' => 'المقالات القديمة',
'anontalkpagetext' => '----
هذه صفحة نقاش لمستخدم مجهول، وهو المستخدم الذي لم يقم بإنشاء حساب في {{SITENAME}}، أو لا يستعمل ذلك الحساب.
لذا يتم إستعمال رقم ال IP للتعريف به. من الممكن أن يشترك عدد من المستخدمين بنفس رقم ال IP. إذا كنت مستخدم مجهول
وترى أن رسائل خير موجهة لك قد وصلتك، من الممكن أن تقوم [[Special:Userlogin|بإنشاء حساب أو القيام بالدخول]]
حتى يزول الخلط بينك وبين المستخدمين المجهولين الآخرين.',
'anonymous' => 'مستخدم مجهول ل{{SITENAME}}',
'article' => 'مقالة',
'articleexists' => 'يوجد صفحة بهذا الإسم،
أو أن الإسم الذي تم إختياره غير صالح.
يرجى إختيار إسم آخر.',
'articlepage' => 'عرض المقالة',
'badfilename' => 'تم تغيير إسم الصورة إلى "$1".',
'badipaddress' => 'لا يوجد مستخدم بهذا الإسم',
'badquery' => 'نص بحث خاطئ',
'badretype' => 'كلمات السر التي أدخلتها غير متطابقة.',
'badtitle' => 'عنوان خاطئ',
'blanknamespace' => 'مقالات',
'blockedtext' => 'إسم المستخدم أو عنوان ال IP الخاص بك تم منعه من قبل $1.
سبب المنع هو: <br />\'\'$2\'\' <p>
من الممكن الإتصال مع $1 للنقاش حول المنع، أو من الممكن الإتصال مع أحد [[{{ns:project}}:Administrators|الإداريين]] حول ذلك.

تذكر أنه لا يمكن لك إستعمال خاصية إرسال رسائل إلكترونية للمستخدمين إلا إذا كنت قد وضعت عنوان بريدي صحيح في صفحة [[Special:Preferences|التفضيلات]] الخاصة بك.

عنوان ال IP الخاص بك هو $3. يرجى إضافته في أي رسالة للتساؤل حول المنع.',
'blockedtitle' => 'المستخدم ممنوع',
'blockip' => 'منع مستخدم',
'blocklink' => 'منع مستخدم',
'blocklogentry' => 'منع "$1" لفترة زمنية مدتها $2',
'bold_sample' => 'نص عريض',
'bold_tip' => 'نص عريض',
'booksources' => 'مصدر كتاب',
'brokenredirects' => 'وصلات مكسورة',
'brokenredirectstext' => 'الوصلات التالية تشير لصفحات غير موجودة.',
'bugreports' => 'تقارير الأخطاء',
'bydate' => 'على التاريخ',
'byname' => 'على الإسم',
'bysize' => 'على الحجم',
'cancel' => 'إلغاء العملية',
'categories' => 'تصنيفات الصفحة',
'categoriespagetext' => 'التصنيفات التالية موجودة في {{SITENAME}}',
'category_header' => 'المقالات في التصنيف "$1"',
'categoryarticlecount' => 'يوجد $1 مقال في هذا التصنيف.',
'changepassword' => 'غير كلمة السر',
'changes' => 'تغييرات',
'columns' => 'أعمدة',
'compareselectedversions' => 'قارن بين النسخ المختارة',
'confirm' => 'تأكيد',
'confirmdelete' => 'تأكيد الحذف',
'confirmprotect' => 'تأكيد الحماية',
'confirmprotecttext' => 'هل أنت متأكد انك تريد حماية هذه الصفحة؟',
'confirmunprotect' => 'تأكيد إزالة الحماية',
'confirmunprotecttext' => 'هل أنت متأكد انك تريد إزالة الحماية عن هذه الصفحة؟',
'contribslink' => 'مساهمات',
'contribsub' => 'للمستخدم $1',
'contributions' => 'مساهمات المستخدم',
'copyright' => 'المحتويات تحت  $1.',
'copyrightpage' => '{{ns:project}}:حقوق النسخ',
'copyrightpagename' => 'حقوق النسخ في {{SITENAME}}',
/*'copyrightwarning' => 'يرجى الملاحظة أن جميع المساهمات هنا خاضعة وصادرة تحت ترخيص
جنو للوثائق الحرة (أنظر في $1 للمزيد من التفاصيل)
إذا لم ترد أن تخضع كتابتك للتعديل والتوزيع الحر، لا تضعها هنا.
<br />
كما أنك تتعهد بأنك قمت بكتابة ما هو موجود بنفسك، أو قمت بنسخها
من مصدر يخضع ضمن الملكية العامة، أو مصدر حر آخر.
<strong>لا ترسل أي عمل ذو حقوق محفوظة بدون الإذن من صاحب الحق</strong>.',*/
'createaccount' => 'إنشاء حساب جديد',
'createaccountmail' => 'عبر البريد الإلكتروني',
'cur' => 'الحالي',
'currentevents' => 'احداث حالية',
'currentrev' => 'النسخة الحالية',
'databaseerror' => 'خطأ في قاعدة البيانات',
'dateformat' => 'صيغة التاريخ',
'deadendpages' => 'صفحات نهاية مسدودة',
'defaultns' => 'أبحث في هذه النطاقات بشكل أفتراضي:',
'defemailsubject' => 'رسالة من {{SITENAME}}',
'deletecomment' => 'سبب الحذف',
'deletedarticle' => 'تم حذف "$1"',
'deletedtext' => '"$1" تم حذفها.
انظر في $2 لسجل آخر عمليات الحذف.',
'deleteimg' => 'حذف',
'deletepage' => 'حذف الصفحة',
'deletesub' => '(حذف "$1")',
'deletethispage' => 'حذف هذه الصفحة',
'deletionlog' => 'سجل الحذف',
'dellogpage' => 'سجل_الحذف',
'diff' => 'فرق',
'disclaimerpage' => '{{ns:project}}:عدم_مسؤولية_عام',
'disclaimers' => 'عدم مسؤولية',
'doubleredirects' => 'وصلات مزدوجة',
'editcurrent' => 'حرر النسخة الحالية من هذه الصفحة',
'edithelp' => 'مساعدة التحرير',
'edithelppage' => '{{ns:project}}:مساعدة التحرير',
'editing' => 'تحرير $1',
'editinguser' => 'تحرير $1',
'editingold' => '<strong> تحذير: أنت تقوم الآن بتحرير نسخة قديمة من هذه الصفحة. إذا قمت بحفظها، سيتم فقدات كافة التغييرات التي حدثت بعد هذه النسخة. </strong>',
'editsection' => 'تحرير',
'editold' => 'تحرير',
'editthispage' => 'عدل هذه الصفحة',
'emailfrom' => 'من',
'emailmessage' => 'نص الرسالة',
'emailpage' => 'أرسل رسالة للمستخدم',
'emailpagetext' => 'لو أن هذا المستخدم قد قام بإدخال عنوان بريدي صحيح في تفضيلاته،
فسيتم إرسال رسالة واحدة له بالنموذج أدناه.
العنوان الذي قمت أنت بإدخاله لك في تفضيلات المستخدم،
سيظهر في مكان المرسل في الرسالة التي سترسل له، ليتمكن من الرد عليك.',
'emailsend' => 'إرسال',
'emailsent' => 'تم إرسال الرسالة',
'emailsenttext' => 'تم إرسال رسالتك الإلكترونية.',
'emailsubject' => 'العنوان',
'emailto' => 'إلى',
'emailuser' => 'أرسل رسالة لهذا المستخدم',
'error' => 'خطأ',
'errorpagetitle' => 'خطأ',
'excontent' => 'المحتوى كان: \'$1\'',
'excontentauthor' => 'المحتوى كان: \'$1\' (و المساهم الوحيد كان \'$2\')',
'explainconflict' => 'لقد قام أحد ما بتعديل الصفحة بعد أن بدأت انت بتحريرها.
صندوق النصوص العلوي يحتوي على النص الموجود حاليا في الصفحة.
والتغييرات التي قمت أنت بها موجودة في الصندوق في أسفل الصفحة.
يجب أن تقوم بدمج تغييراتك في النص الموجود حاليا.
<b>فقط</b> ما هو موجود في الصندوق العلوي هو ما سيتم حفظه وإستعاله عند الضغط على زر "حفظ الصفحة".
<p>',
'export' => 'صدّر صفحات',
'faq' => 'الأسئلة الأكثر تكرارا',
'faqpage' => '{{ns:project}}:أسئلة متكررة',
'filecopyerror' => 'لا يمكن نسخ الملف من  "$1" إلى "$2".',
'filedeleteerror' => 'لا يمكن حذف الملف "$1".',
'filedesc' => 'وصف قصير',
'filename' => 'إسم الملف',
'filenotfound' => 'لا يمكن إيجاد الملف "$1".',
'filerenameerror' => 'لا يمكن غيير إسم الملف من  "$1" إلى "$2".',
'filesource' => 'مصدر',
'go' => 'إذهب',
'searcharticle' => 'إذهب',
'headline_sample' => 'نص عنوان رئيسي',
'headline_tip' => 'عنوان من المستوى الثاني',
'help' => 'مساعدة',
'helppage' => '{{ns:project}}:مساعدة',
'hide' => 'إخفاء',
'hidetoc' => 'إخفاء',
'hist' => 'تاريخ',
'histlegend' => 'مفتاح: (الحالي) = الفرق مع النسخة الحالية
(السابق) = الفروقات مع النسخة السابقة، ط = تغيير طفيف',
'history' => 'تاريخ الصفحة',
'ilsubmit' => 'بحث',
'imagelist' => 'قائمة الصور',
'imagepage' => 'عرض صفحة الصورة',
'imgdelete' => 'حذف',
'imgdesc' => 'وصف',
'imghistory' => 'تاريخ الصورة',
'internalerror' => 'خطأ داخلي',
'intl' => 'وصلات بين لغات الموسوعة',
'invert' => 'عكس الإختيار',
'ipblocklist' => 'قائمة أسماء الأعضاء و عناوين ال IP الممنوعة',
'ipbreason' => 'السبب',
'isredirect' => 'صفحة تحويل',
'italic_sample' => 'نص مائل',
'italic_tip' => 'نص مائل',
'last' => 'السابق',
'lastmodifiedat' => 'أخر تعديل لهذه الصفحة كان في $2, $1.',
'lineno' => 'سطر $1:',
'link_sample' => 'عنوان وصلة',
'linkshere' => 'الصفحات التالية تحتوي على وصلة إلى هنا:',
'linkstoimage' => 'الصفحات التالية تحتوي على وصلة لهذه الصورة:',
'listusers' => 'قائمة الأعضاء',
'loadhist' => 'تحميل تاريخ الصفحة',
'localtime' => 'عرض الوقت المحلي',
'log' => 'تحميل و حذف',
'login' => 'دخول',
'loginerror' => 'خطأ في الدخول',
'loginpagetitle' => 'تسجيل الدخول للمستخدم',
'loginproblem' => '<b>حدثت مشكلة أثناء الدخول.</b><br />يرجى المحاولة مرى أخرى!',
'loginprompt' => 'يجب أن يدعم متصفحك الكوكيز Cookies لتتمكن من الدخول.',
'loginsuccess' => 'لقد قمت بتسجيل الدخول ل{{SITENAME}} بإسم "$1".',
'loginsuccesstitle' => 'تم الدخول بشكل صحيح',
'logout' => 'خروج',
'logouttext' => 'أنت الآن غير مسجل الدخول للنظام.
تستطيع المتابعة بإستعمال {{SITENAME}} كمجهول، أو الدخول مرة أخرى بنفس الإسم أو بإسم آخر. من الممكن أن ترى بعض الصفحات في الموسوعة كما وأنك مسجل في النظام.، وذلك بسبب إستعمال الصفحات المخبأة Cache في المنتصفح لديك.',
'logouttitle' => 'تسجيل الخروج للمستخدم',
'lonelypages' => 'صفحات يتيمة',
'longpages' => 'صفحات طويلة',
'mailmypassword' => 'أرسل لي كلمة السر عبر البريد الإلكتروني.',
'mailnologin' => 'لا يوجد عنوان للإرسال',
'minoredit' => 'هذا تعديل طفيف',
'minoreditletter' => 'ط',
'moredotdotdot' => 'المزيد...',
'move' => 'نقل',
'movearticle' => 'نقل صفحة',
'movedto' => 'تم نقلها إلى',
'movelogpage' => 'سجل النقل',
'movenologin' => 'غير مسجل',
'movepage' => 'نقل صفحة',
'movepagebtn' => 'أنقل الصفحة',
'movepagetalktext' => 'صفحة النقاش المرفقة بالمقالة سيتم نقلها كذلك، إذا وجدت. ولكن لا يتم نقل صفحة النقاش في الحالات التالية:
* نقل الصفحة عبر نطاقات namespaces مختلفة.
* يوجد صفحة نقاش غير فارغة تحت العنوان الجديد للمقالة.
* قمت بإزالة إختيار نقل صفحة النقاش في الأسفل.

وفي الحالات أعلاه، يجب عليك نقل أو دمج محتويات صفحة النقاش يدويا، إذا رغب في ذلك.',
'movereason' => 'السبب',
'movetalk' => 'أنقل صفحة \'\'\'النقاش\'\'\' أن أمكن.',
'movethispage' => 'أنقل هذه الصفحة',
'mycontris' => 'مساهماتي',
'mypage' => 'صفحتي',
'namespace' => 'النطاق:',
'namespacesall' => 'الكل',
'navigation' => 'تصفح',
'nbytes' => '$1 بايت',
'newarticle' => '(جديد)',
'newarticletext' => 'لقد تبعت وصلة لصفحة لم يتم إنشائها بعد.
لإنشاء هذه الصفحة إبدأ بالكتابة في الصندوق بالأسفل.
(أنظر في [[{{ns:project}}:مساعدة|صفحة المساعدة]] للمزيد من المعلومات)
إذا كانت زيارتك لهذه الصفحة بالخطأ، إضغم على زر \'\'رجوع\'\' في متصفح الإنترنت لديك.',
'newimages' => 'معرض الصور الجديدة',
'newmessageslink' => 'رسائل جديدة',
'newpage' => 'صفحة جديدة',
'newpageletter' => 'ج',
'newpages' => 'صفحات جديدة',
'newpassword' => 'كلمة السر الجديدة',
'newtitle' => 'إلى العنوان الجديد',
'newwindow' => '(يفتح في شباك جديد)',
'next' => 'التالي',
'nextn' => '$1 التالية',
'nlinks' => '$1 وصلة',
'noarticletext' => '(لا يوجد حاليا أي نص في هذه الصفحة)',
'noemail' => 'لا يوجد أي عنوان بريدي مسجل للمستخدم "$1".',
'noemailtext' => 'لم يحدد هذا المستخدم عنوان بريد إلكتروني صحيح،
أو طلب عدم إستلام الرسائل من المستخدمين الآخرين.',
'noemailtitle' => 'لا يوجد عنوان بريد إلكتروني',
'noexactmatch' => 'لا يوجد صفحة بنفس العنوان، حاول البحث بشكل مفصل أكثر من خلال إستعمال صندوق البحث أدناه. بإمكانك أيضاً إنشاء [[:1|صفحة جديدة]] بالعنوان الذي طلبته.',
'nohistory' => 'لا يوجد تاريخ للتغييرات لهذه الصفحة.',
'nolinkshere' => 'لا يوجد صفحات تصل لهذه الصفحة.',
'nolinkstoimage' => 'لا يوجد صفحات تصل لهذه الصورة.',
'noname' => 'لم تحدد إسم مستخدم صحيح.',
'nospecialpagetext' => 'لقد طلبت صفحة خاصة لا يمكن التعرف عليها من قبل نظام الويكي.',
'nosuchspecialpage' => 'لا يوجد صفحة خاصة بهذا الإسم',
'nosuchuser' => 'لا يوجد مستخدم بالإسم "$1".
تأكد من إملاء الإسم، أو إستعمل النموذج الموجود في الأسفل لإنشاء مستخدم جديد.',
'note' => '<strong>ملاحظة:</strong>',
'notextmatches' => 'لم يتم إيجاد أي نص مطابق',
'notitlematches' => 'لم يتم إيجاد أي عنوان مطابق',
'notloggedin' => 'غير مسجل',
'nowatchlist' => 'لا يوجد شيء في قائمة مراقبتك.',
'nowiki_tip' => 'أهمل تهيئة الويكي',
'nstab-category' => 'تصنيف',
'nstab-help' => 'مساعدة',
'nstab-image' => 'صورة',
'nstab-main' => 'مقالة',
'nstab-mediawiki' => 'رسالة',
'nstab-special' => 'خاص',
'nstab-template' => 'قالب',
'nstab-user' => 'صفحة مستخدم',
'nstab-project' => 'حول',
'ok' => 'موافق',
'oldpassword' => 'كلمة السر القديمة',
'orig' => 'الأصلي',
'otherlanguages' => ' لغات أخرى',
'pagemovedsub' => 'تم النقل بنجاح',
'pagemovedtext' => 'تم نقل الصفحة "[[$1]]" إلى "[[$2]]".',
'passwordremindertitle' => 'تذكير بكلمة السر من {{SITENAME}}',
'passwordsent' => 'تم إرسال كلمة سر جديدة إلى العنوان البريدي المسجل للمستخدم "$1".
يرجى محاولة تسجيل الدخول مرة أخرى عند إستلامها.',
'popularpages' => 'الصفحات المشهورة',
'portal' => 'بوابة المجتمع',
'portal-url' => '{{ns:project}}:بوابة المجتمع',
'postcomment' => 'أرسل تعليق',
'powersearch' => 'بحث',
'preferences' => 'تفضيلات',
'prefsnologin' => 'غير مسجل',
'preview' => 'عرض مسبق',
'previewnote' => 'تذكر، هذا فقط عرض مسبق للصفحة، ولم يتم حفظه بعد!',
'prevn' => '$1 السابقة',
'printableversion' => 'نسخة للطباعة',
'protectcomment' => 'سبب الحماية',
'protectedarticle' => 'حماية [[$1]]',
'protectedpage' => 'صفحة محمية',
'protectlogpage' => 'سجل_الحماية',
'protectthispage' => 'حماية هذه الصفحة',
'qbbrowse' => 'تصفح',
'qbedit' => 'تحرير',
'qbfind' => 'بحث',
'qbmyoptions' => 'صفحاتي',
'qbpageinfo' => 'سياق النص',
'qbpageoptions' => 'هذه الصفحة',
'qbsettings' => 'خيارات لوحة الوصلات',
'qbspecialpages' => 'الصفحات الخاصّة',
'randompage' => 'صفحة عشوائية',
'rclinks' => 'أظهر آخر $1 تعديل في آخر $2 يوم، $3',
'rclistfrom' => 'أظهر التغييرات بدأ من $1',
'rclsub' => '(لصفحات تصل بها الصفحة "$1")',
'rcnote' => 'في الأسفل ستجد آخر <strong>$1</strong> تعديل في آخر <strong>$2</strong> أيام.',
'rcnotefrom' => 'في الأسفل التغييرات منذ <b>$2</b> (ولغاية <b>$1</b>).',
'readonly' => 'قاعدة البيانات مغلقة',
'readonlytext' => 'قاعدة البيانات مغلقة حاليا أمام الإضافات والتعديلات، السبب غالبا ما يكون الصيانة، وستعود قاعدة البيانات للوضع الطبيعي قريبا.
عندما تم أغلاق قاعدة البيانات أمام التعديلات والإضافات تم أعطاء السبب التالي:
<p>$1',
'recentchanges' => 'أحدث التغييرات',
'recentchangescount' => 'عدد العناوين في صفحة أحدث التغييرات',
'recentchangeslinked' => 'تغييرات ذات علاقة',
'recentchangestext' => 'تابع آخر التغييرات في الموسوعة من هذه الصفحة.',
'redirectedfrom' => '(تم التحويل من $1)',
'remembermypassword' => 'تذكر كلمة السر عبر الجلسات.',
'removechecked' => 'حذف المواد المختارة من قائمة المراقبة.',
'removedwatch' => 'تم الحذف من قائمة المراقبة',
'removedwatchtext' => 'تم حذف الصفحة "$1" من قائمة مراقبتك.',
'removingchecked' => 'حذف الصفحات المطلوبة من قائمة المراقبة...',
'returnto' => 'أرجع إلى $1.',
'retypenew' => 'أعد كتابة كلمة السر الجديدة',
'revertpage' => 'إسترجاع المقال حتى أخر تعديل من قبل $1',
'revhistory' => 'تاريخ التغييرات',
'revnotfound' => 'النسخة غير موجودة',
'rows' => 'أسطر',
'savearticle' => 'حفظ الصفحة',
'savedprefs' => 'تم حفظ تفضيلاتك.',
'savefile' => 'حفظ الملف',
'saveprefs' => 'حفظ التفضيلات',
'search' => 'بحث',
'searchbutton' => 'بحث',
'searchdisabled' => '<p>عذرا! لقد تم إيقاف ميزة البحث في النصوص بشكل مؤقت، لأسباب تتعلق بتأثيرها على الأداء العام. في الوقت الحالي من الممكن أن تستعمل محرك البحث جووجل Google بدل من خاصية البحث في النصوص. من الممكن أن لا يكون البحث في جووجل يشمل آخر التعديلات والصفحات.
</p>',
'searchsubtitle' => 'لصيغة البحث "[[:$1]]"',
'searchsubtitleinvalid' => 'لصيغة البحث "$1"',
'searchresults' => 'نتائج البحث',
'searchresultshead' => 'خيارات نتائج البحث',
'searchresulttext' => 'للمزيد من المعلومات حول البحث في {{SITENAME}}، راجع [[{{ns:project}}:تصفح]].',
'servertime' => 'الوقت في الأجهزة الخادمة الآن هو',
'shortpages' => 'صفحات قصيرة',
'show' => 'عرض',
'showdiff' => 'أظهر الفرق',
'showpreview' => 'عرض التعديلات',
'showtoc' => 'إظهار',
'sitestats' => 'إحصاءات الموقع',
'sitestatstext' => 'يوجد <b>$1</b> صفحة في قاعدة بيانات الموسوعة العربية، وهذا يشمل صفحات النقاش، والصفحات الخاصة بنظام {{SITENAME}}، والمقالات الصغيرة التي تحتاج تطوير، والتحويلات، وغيرها مما لا يرقى لأن يكون مقالا. إذا تم أهمال تلك الصفحات، فإن عدد الصفحات التي قد تحتوي على مقالات يكون <b>$2</b>.<p>
تم عرض الصفحات <b>$3</b> مرة، وعدد التعديلات على الصفحات<b>$4</b> تعديل، منذ إنشاء الموسوعة العربية في يوليو/تموز 2003.
وهذا يعني أن معدل التعديل لكل صفحة <b>$5</b> تعديل، ومعدل عرض كل صفحة <b>$6</b> عرض.',
'sitesupport' => 'التبرعات',
'specialpage' => 'صفحة خاصة',
'specialpages' => 'الصفحات الخاصّة',
'spheading' => 'الصفحات الخاصة لكل المستخدمين',
'statistics' => 'إحصاءات',
'storedversion' => 'النسخة المخزنة',
'subcategories' => 'التصنيفات الفرعية',
'subcategorycount' => 'يوجد $1 تصنيف فرعي في هذا التصنيف.',
'subject' => 'موضوع',
'successfulupload' => 'تحميل الملف بنجاح',
'summary' => 'ملخص',
'talkexists' => 'تم نقل الصفحة بنجاح، لكن لم
يتم نقل صفحة النقاش المرافقة، بسبب وجود صفحة نقاش
مسبقا تحت العوان الجديد.
يرجى نقل محتويات صفحة النقاش يدويا، ودمجها مع المحتويات السابقة.',
'talkpage' => 'ناقش هذه الصفحة',
'talkpagemoved' => 'تم نقل صفحة النقاش أيضا.',
'talkpagenotmoved' => '<strong>لم</strong> يتم نقل صفحة النقاش.',
'templatesused' => 'القوالب المستخدمة في هذه الصفحة:',
'textboxsize' => 'أبعاد صندوق النصوص',
'thumbnail-more' => 'تكبير',
'toc' => 'فهرست',
'toolbox' => 'أدوات',
'uclinks' => 'عرض آخر $1 تعديل;  عرض أخر $2 يوم.',
'ucnote' => 'في الأسفل ستجد آخر <b>$1</b> تعديل لهذا المستخدم في <b>$2</b> أيام.',
'uctop' => ' (أعلى)',
'unblocklink' => 'رفع المنع عن مستخدم',
'uncategorizedcategories' => 'تصنيفات غير مصنفة',
'uncategorizedpages' => 'صفحات غير مصنفة',
'undelete' => 'إرجاع صفحات محذوفة',
'unprotect' => 'أزل الحماية',
'unprotectcomment' => 'سبب إزالة الحماية',
'unprotectedarticle' => 'ازالة حماية [[$1]]',
'unprotectthispage' => 'أزل الحماية عن الصفحة',
'unusedimages' => 'صور غير مستعملة',
'upload' => 'تحميل ملف',
'uploadbtn' => 'تحميل الملف',
'uploaddisabled' => 'عذرا، تم إيقاف خاصية تحميل الملفات.',
'uploadedfiles' => 'الملفات المحملة',
'uploadedimage' => 'تم تحميل "$1"',
'uploaderror' => 'خطأ في التحميل',
'uploadlogpagetext' => 'في الأسفل قائمة بأخر الملفات التي تم تحميلها.
كل الأوقات المعروضة هي حسب توقيت الأجهزةالخادمة (UTC).
<ul>
</ul>',
'uploadnologin' => 'لم تقم بتسجيل الدخول',
'uploadwarning' => 'تحذير تحميل الملفات',
'userexists' => 'إسم المستخدم الذي إخترته مستخدم من قبل، يرجى إختيار إسم مستخدم آخر.',
'userlogin' => 'دخول',
'userlogout' => 'خروج',
'userpage' => 'عرض صفحة المستخدم',
'userstats' => 'إحصاءات المستخدم',
'userstatstext' => 'يوجد <b>$1</b> عضو مسجل. ومنهم <b>$2</b> إداريين. (أنظر $3)',
'version' => 'رقم النسخة',
'viewcount' => 'تم عرض محتويات هذه الصفحة $1 مرة.',
'viewsource' => 'عرض المصدر للمقالة',
'viewtalkpage' => 'عرض النقاش',
'wantedpages' => 'صفحات مطلوبة',
'watcheditlist' => 'فيما يلي قائمة مرتبة أبجديا للصفحات الموجودة في قائمة المراقبة لديك.
أختر الصفحات التري تريد إزالتها من خلال الإشارة عليها من الصندوق بجانبها.
وإضغط على زر \'حذف المختارات\' في آخر الصفحة.',
'watchlist' => 'قائمة مراقبتي',
'watchlistcontains' => 'تحتوي قائمة المراقبة لديك على $1 صفحة.',
'watchmethod-list' => 'إظهار التحريرات في الصفحات المراقبة',
'watchmethod-recent' => 'تفحص التغييرات الأخيرة في قائمة المراقة لديك',
'watchnochange' => 'لم يتم تعديل أي صفحة في قائمة المراقبة لديك خلال الفترة المحددة.',
'watchnologin' => 'غير مسجل',
'watchthis' => 'راقب هذه الصفحة',
'welcomecreation' => '<h2>أهلا بك يا , $1!</h2><p> تم إنشاء حسابك.
لا تنسى أن تقوم بتغيير وتحديد تفضيلاتك في {{SITENAME}}.',
'whatlinkshere' => 'ماذا يرتبط هنا؟',
'whitelistacctitle' => 'لا يسمح لك بإنشاء إشتراك',
'whitelistedittext' => 'يجب عليك  [[Special:Userlogin|تسجيل الدخول]] لتتمكن من تعديل الصفحات.',
'whitelistedittitle' => 'الدخول ضروري للقيام بالتعديل',
'whitelistreadtext' => 'يجب عليك [[Special:Userlogin|تسجيل الدخول]] لتتمكن من قراءة المقالات.',
'whitelistreadtitle' => 'تسجيل الدخول ضروري للقراءة',
'projectpage' => 'عرض الصفحة العامة',
'wlnote' => 'في الأسفل آخر $1 تعديل في آخر <b>$2</b> ساعة.',
'wlsaved' => 'هذه نسخة مخزنة من قائمة المراقبة لديك.',
'wlshowlast' => 'عرض أخر $1 ساعات $2 أيام $3',
'wrongpassword' => 'كلمة السر التي أدخلتها غير صحيحة، يرجى إعادة المحاولة.',
'yourdiff' => 'الفروقات',
'youremail' => 'بريدك الإلكتروني*',
'yourname' => 'اسمك',
'yournick' => 'اللقب الخاص بك (للتواقيع)',
'yourpassword' => 'كلمة السر خاصتك',
'yourpasswordagain' => 'أعد كتابة كلمة السر',
'yourrealname' => 'اسمك الحقيقي*',
'yourtext' => 'النص الذي كتبته',
);


?>