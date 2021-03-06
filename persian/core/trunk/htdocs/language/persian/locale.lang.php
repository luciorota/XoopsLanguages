<?php
// $Id: locale.lang.php,v 1 2012/05/22 22:09:15 irmtfan irxoops.org Exp $
// %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%

// !!IMPORTANT!! insert '\' before any char among reserved chars: "a","A","B","c","d","D","F","g","G","h","H","i","I","j","l","L","m","M","n","O","r","s","S","t","T","U","w","W","Y","y","z","Z"	
// insert double '\' before 't','r','n'
define("_TODAY","امروز G:i:s");
define("_YESTERDAY","دیروز G:i:s");
define("_MONTHDAY","G:i:s l j F Y");
define("_YEARMONTHDAY","G:i l j F Y");

define("_ELAPSE","%s پیش");

define("_TIMEFORMAT_DESC","فرمت های قابل قبول: \"s\" - " . _SHORTDATESTRING . "; \"m\" - " . _MEDIUMDATESTRING . "; \"l\" - " . _DATESTRING . ";<br />".
                            "\"c\" or \"custom\" - format determined according to interval to present; \"e\" - Elapsed; \"mysql\" - Y-m-d H:i:s;<br />".
                            "specified string - Refer to <a href=\"http://php.net/manual/en/function.date.php\" rel=\"external\">PHP manual</a>."
							);
// languages imported from lang_jdf.php previously located beside the jdf.php file - irmtfan irxoops.org 2012-05-22
define('_JDF_AM_LONG','قبل از ظهر');
define('_JDF_PM_LONG','بعد از ظهر');

define('_JDF_AM_SHORT','ق.ظ');
define('_JDF_PM_SHORT','ب.ظ');

define('_JDF_SATURDAY','شنبه');
define('_JDF_SUNDAY','یکشنبه');
define('_JDF_MONDAY','دوشنبه');
define('_JDF_TUESDAY','سه شنبه');
define('_JDF_WEDNESDAY','چهارشنبه');
define('_JDF_THURSDAY','پنجشنبه');
define('_JDF_FRIDAY','جمعه');

define('_JDF_SAT','ش');
define('_JDF_SUN','ی');
define('_JDF_MON','د');
define('_JDF_TUE','س');
define('_JDF_WED','چ');
define('_JDF_THU','پ');
define('_JDF_FRI','ج');

//English ordinal suffix, textual, 2 characters; i.e. "th","nd"
//  وقتی میخواهیم بگویم چندیمن عدد به کار میرود در انگلیسی دو نویسه است ولی در فارسی یک نویسه »م« برای آن کافی است مثال: چهارم ، پنجم
define('_JDF_Suffix','م');
//

/* monthname function */
define('_JDF_MONTH1','فروردین');
define('_JDF_MONTH2','اردیبهشت');
define('_JDF_MONTH3','خرداد');
define('_JDF_MONTH4','تیر');
define('_JDF_MONTH5','مرداد');
define('_JDF_MONTH6','شهریور');
define('_JDF_MONTH7','مهر');
define('_JDF_MONTH8','آبان');
define('_JDF_MONTH9','آذر');
define('_JDF_MONTH10','دی');
define('_JDF_MONTH11','بهمن');
define('_JDF_MONTH12','اسفند');

/* Convertnumber2farsi && Convertnumber2english functions */
define('_JDF_NUM0','۰');
define('_JDF_NUM1','۱');
define('_JDF_NUM2','۲');
define('_JDF_NUM3','۳');
define('_JDF_NUM4','۴');
define('_JDF_NUM5','۵');
define('_JDF_NUM6','۶');
define('_JDF_NUM7','۷');
define('_JDF_NUM8','۸');
define('_JDF_NUM9','۹');
//add jalali month for some modules ( ex: news )
define('_CAL_FARVARDIN','فروردین');
define('_CAL_ORDIBEHESHT','اردیبهشت');
define('_CAL_KHORDAD','خرداد');
define('_CAL_TIR','تیر');
define('_CAL_MORDAD','مرداد');
define('_CAL_SHAHRIVAR','شهریور');
define('_CAL_MEHR','مهر');
define('_CAL_ABAN','آبان');
define('_CAL_AZAR','آذر');
define('_CAL_DEY','دی');
define('_CAL_BAHMAN','بهمن');
define('_CAL_ESFAND','اسفند');
define("_NUMWORDS_ZERO","صفر");
global $_numWords;
$_numWords = array(	'0'=> '' ,
					'1'=> 'یک' ,
					'2'=> 'دو' ,
					'3' => 'سه',
					'4' => 'چهار',
					'5' => 'پنج',
					'6' => 'شش',
					'7' => 'هفت',
					'8' => 'هشت',
					'9' => 'نه',
					'10' => 'ده',
					'11' => 'یازده',
					'12' => 'دوازده',
					'13' => 'سیزده',
					'14' => 'چهارده',
					'15' => 'پانزده',
					'16' => 'شانزده',
					'17' => 'هفده',
					'18' => 'هجده',
					'19' => 'نوزده',
					'20' => 'بیست',
					'30' => 'سی',
					'40' => 'چهل',
					'50' => 'پنجاه',
					'60' => 'شصت',
					'70' => 'هفتاد',
					'80' => 'هشتاد',
					'90' => 'نود',
					'100' => 'صد &',
					'1000' => 'هزار &',
					'1000000' => 'میلیون',
					'1000000000' => 'میلیارد');
?>