<?PHP
//-- --------------���ݿ��ַ-------------------------------------------------------- --//
$config_dbHost=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------RO���ݿ�---------------------------------------------------------- --//
$config_dbName=			"ro";
//-- -------------------------------------------------------------------------------- --//
//-- --------------���ݿ��ʺ�-------------------------------------------------------- --//
$config_dbUser=			"root";
//-- -------------------------------------------------------------------------------- --//
//-- --------------���ݿ�����-------------------------------------------------------- --//
$config_dbPasswd=		"123456";
//-- -------------------------------------------------------------------------------- --//
//-- --------------�ڷ���ͼ---------------------------------------------------------- --//
$config_not_use=		"";
//-- -------------------------------------------------------------------------------- --//
//-- --------------LOGIN��IP--------------------------------------------------------- --//
$config_loginip=		"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------CHAR��IP---------------------------------------------------------- --//
$config_charip=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------MAP��IP----------------------------------------------------------- --//
$config_mapip=			"127.0.0.1";
//-- -------------------------------------------------------------------------------- --//
//-- --------------LOGIN�Ķ˿�------------------------------------------------------- --//
$config_loginport=		"6900";
//-- -------------------------------------------------------------------------------- --//
//-- --------------CHAR�Ķ˿�-------------------------------------------------------- --//
$config_charport=		"6121";
//-- -------------------------------------------------------------------------------- --//
//-- --------------MAP�Ķ˿�--------------------------------------------------------- --//
$config_mapport=		"5121";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��վ����---------------------------------------------------------- --//
$config_title=			"��ҹ����ɾ���˵2��";
$config_title2=			"XxRo2";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��������---------------------------------------------------------- --//
//-- ��������
$config_list_num=		"50";
//-- ��ҳ��������
$config_index_list_num=		"5";
//-- ��������
$config_list_order=		"base_level";
//-- ��ҳ��������
$config_index_list_order=	"base_level";
//-- GM ����AID
$config_list_gmid=		"2000001";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��վURL----------------------------------------------------------- --//
$config_index_url=		"http://www.xxro.cn";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��̳URL----------------------------------------------------------- --//
$config_bbs_url=		"http://www.xxro.cn/bbs";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��̳����---------------------------------------------------------- --//
$config_bbs_gdscript=		"��ӭ�������ʱ���ɾ�2! <br> �����Գ���������<br>��������Ϊ��ɫ,<br>����ͷ��,��ɫ����,�������Ϊһ��,<br>���ҿ���������ҵ��,<br>�����������ﹺ�򵽻�������Ʒ<br>����������ֱ��ȥ��̳д�Ÿ�GM<br>ף��������!";
$config_bbs_gdurl=		"http://www.xxro.cn/bbs";
$config_bbs_msgscript=		"���˱�����";
$config_bbs_msgurl=		"http://www.xxro.cn/bbs";
//-- -------------------------------------------------------------------------------- --//
//-- --------------��������---------------------------------------------------------- --//
//
$config_cilent_Vname=		"�������� 20090325RAG_SETUP";
$config_patch_Vname=		"��½���� ���£�";
//
$config_cilent_size=		"1.3 Gb";
$config_patch_size=		"40+ Mb";
//
$config_cilent_url1=		"ftp://ragadmin:icsragadmin!%40@ragnarok1-gravity.ktics.co.kr/RAG_SETUP0325.exe";
$config_cilent_url2=		"ftp://ragnarok1-gravity.ktics.co.kr/RAG_SETUP0325.exe";
$config_cilent_url3=		"ftp://ragadmin:icsragadmin!%40@ragnarok1-gravity.ktics.co.kr/RAG_SETUP0325.exe";
$config_cilent_url4=		"ftp://ragnarok1-gravity.ktics.co.kr/RAG_SETUP0325.exe";
//
$config_patch_url1=		"http://www.xxro.cn/down/Xx�ɾ�V1.0.rar";
$config_patch_url2=		"http://www.xxro.cn/down/Xx�ɾ�V1.0.rar";
$config_patch_url3=		"http://www.xxro.cn/down/Xx�ɾ�V1.0.rar";
$config_patch_url4=		"http://www.xxro.cn/down/Xx�ɾ�V1.0.rar";
/***********************************************************************************************\
*************************************************************************************************
*************************************************************************************************
****************************************����ΪĬ�ϲ���*******************************************
*************************************************************************************************
*************************************************************************************************
\***********************************************************************************************/
//-- ----�������ݿ�---- --//
$connect=mysql_pconnect($config_dbHost,$config_dbUser,$config_dbPasswd);
if (!$connect) {
    die('�������ӵ����ݿ⣬����: ' . mysql_error());
}
mysql_select_db($config_dbName, $connect) or die("���ݿ�����������");
//-- ----ƥ���ַ�------ --//
function isAlNum($str) {
if(eregi("[^0-9a-zA-Z]",$str)) return 0;
return 1;
}
//-- ----ƥ��E-MAIL---- --//
function ismail( $str ) {
if( eregi("([a-z0-9\_\-\.]+)@([a-z0-9\_\-\.]+)", $str) ) return true;
else return false; 
}
?>