<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/
if (!defined('PREG_CLASS_SEARCH_EXCLUDE'))
define(
    'PREG_CLASS_SEARCH_EXCLUDE',
'\x{0}-\x{2c}\x{2e}-\x{2f}\x{3a}-\x{40}\x{5b}-\x{60}\x{7b}-\x{bf}\x{d7}\x{f7}\x{2b0}-' .
'\x{385}\x{387}\x{3f6}\x{482}-\x{489}\x{559}-\x{55f}\x{589}-\x{5c7}\x{5f3}-' .
'\x{61f}\x{640}\x{64b}-\x{65e}\x{66a}-\x{66d}\x{670}\x{6d4}\x{6d6}-\x{6ed}' .
'\x{6fd}\x{6fe}\x{700}-\x{70f}\x{711}\x{730}-\x{74a}\x{7a6}-\x{7b0}\x{901}-' .
'\x{903}\x{93c}\x{93e}-\x{94d}\x{951}-\x{954}\x{962}-\x{965}\x{970}\x{981}-' .
'\x{983}\x{9bc}\x{9be}-\x{9cd}\x{9d7}\x{9e2}\x{9e3}\x{9f2}-\x{a03}\x{a3c}-' .
'\x{a4d}\x{a70}\x{a71}\x{a81}-\x{a83}\x{abc}\x{abe}-\x{acd}\x{ae2}\x{ae3}' .
'\x{af1}-\x{b03}\x{b3c}\x{b3e}-\x{b57}\x{b70}\x{b82}\x{bbe}-\x{bd7}\x{bf0}-' .
'\x{c03}\x{c3e}-\x{c56}\x{c82}\x{c83}\x{cbc}\x{cbe}-\x{cd6}\x{d02}\x{d03}' .
'\x{d3e}-\x{d57}\x{d82}\x{d83}\x{dca}-\x{df4}\x{e31}\x{e34}-\x{e3f}\x{e46}-' .
'\x{e4f}\x{e5a}\x{e5b}\x{eb1}\x{eb4}-\x{ebc}\x{ec6}-\x{ecd}\x{f01}-\x{f1f}' .
'\x{f2a}-\x{f3f}\x{f71}-\x{f87}\x{f90}-\x{fd1}\x{102c}-\x{1039}\x{104a}-' .
'\x{104f}\x{1056}-\x{1059}\x{10fb}\x{10fc}\x{135f}-\x{137c}\x{1390}-\x{1399}' .
'\x{166d}\x{166e}\x{1680}\x{169b}\x{169c}\x{16eb}-\x{16f0}\x{1712}-\x{1714}' .
'\x{1732}-\x{1736}\x{1752}\x{1753}\x{1772}\x{1773}\x{17b4}-\x{17db}\x{17dd}' .
'\x{17f0}-\x{180e}\x{1843}\x{18a9}\x{1920}-\x{1945}\x{19b0}-\x{19c0}\x{19c8}' .
'\x{19c9}\x{19de}-\x{19ff}\x{1a17}-\x{1a1f}\x{1d2c}-\x{1d61}\x{1d78}\x{1d9b}-' .
'\x{1dc3}\x{1fbd}\x{1fbf}-\x{1fc1}\x{1fcd}-\x{1fcf}\x{1fdd}-\x{1fdf}\x{1fed}-' .
'\x{1fef}\x{1ffd}-\x{2070}\x{2074}-\x{207e}\x{2080}-\x{2101}\x{2103}-\x{2106}' .
'\x{2108}\x{2109}\x{2114}\x{2116}-\x{2118}\x{211e}-\x{2123}\x{2125}\x{2127}' .
'\x{2129}\x{212e}\x{2132}\x{213a}\x{213b}\x{2140}-\x{2144}\x{214a}-\x{2b13}' .
'\x{2ce5}-\x{2cff}\x{2d6f}\x{2e00}-\x{3005}\x{3007}-\x{303b}\x{303d}-\x{303f}' .
'\x{3099}-\x{309e}\x{30a0}\x{30fb}\x{30fd}\x{30fe}\x{3190}-\x{319f}\x{31c0}-' .
'\x{31cf}\x{3200}-\x{33ff}\x{4dc0}-\x{4dff}\x{a015}\x{a490}-\x{a716}\x{a802}' .
'\x{e000}-\x{f8ff}\x{fb29}\x{fd3e}-\x{fd3f}\x{fdfc}-\x{fdfd}' .
'\x{fd3f}\x{fdfc}-\x{fe6b}\x{feff}-\x{ff0f}\x{ff1a}-\x{ff20}\x{ff3b}-\x{ff40}' .
'\x{ff5b}-\x{ff65}\x{ff70}\x{ff9e}\x{ff9f}\x{ffe0}-\x{fffd}'
);

if (!defined('PREG_CLASS_NUMBERS'))
define(
    'PREG_CLASS_NUMBERS',
'\x{30}-\x{39}\x{b2}\x{b3}\x{b9}\x{bc}-\x{be}\x{660}-\x{669}\x{6f0}-\x{6f9}' .
'\x{966}-\x{96f}\x{9e6}-\x{9ef}\x{9f4}-\x{9f9}\x{a66}-\x{a6f}\x{ae6}-\x{aef}' .
'\x{b66}-\x{b6f}\x{be7}-\x{bf2}\x{c66}-\x{c6f}\x{ce6}-\x{cef}\x{d66}-\x{d6f}' .
'\x{e50}-\x{e59}\x{ed0}-\x{ed9}\x{f20}-\x{f33}\x{1040}-\x{1049}\x{1369}-' .
'\x{137c}\x{16ee}-\x{16f0}\x{17e0}-\x{17e9}\x{17f0}-\x{17f9}\x{1810}-\x{1819}' .
'\x{1946}-\x{194f}\x{2070}\x{2074}-\x{2079}\x{2080}-\x{2089}\x{2153}-\x{2183}' .
'\x{2460}-\x{249b}\x{24ea}-\x{24ff}\x{2776}-\x{2793}\x{3007}\x{3021}-\x{3029}' .
'\x{3038}-\x{303a}\x{3192}-\x{3195}\x{3220}-\x{3229}\x{3251}-\x{325f}\x{3280}-' .
'\x{3289}\x{32b1}-\x{32bf}\x{ff10}-\x{ff19}'
);

if (!defined('PREG_CLASS_PUNCTUATION'))
define(
    'PREG_CLASS_PUNCTUATION',
'\x{21}-\x{23}\x{25}-\x{2a}\x{2c}-\x{2f}\x{3a}\x{3b}\x{3f}\x{40}\x{5b}-\x{5d}' .
'\x{5f}\x{7b}\x{7d}\x{a1}\x{ab}\x{b7}\x{bb}\x{bf}\x{37e}\x{387}\x{55a}-\x{55f}' .
'\x{589}\x{58a}\x{5be}\x{5c0}\x{5c3}\x{5f3}\x{5f4}\x{60c}\x{60d}\x{61b}\x{61f}' .
'\x{66a}-\x{66d}\x{6d4}\x{700}-\x{70d}\x{964}\x{965}\x{970}\x{df4}\x{e4f}' .
'\x{e5a}\x{e5b}\x{f04}-\x{f12}\x{f3a}-\x{f3d}\x{f85}\x{104a}-\x{104f}\x{10fb}' .
'\x{1361}-\x{1368}\x{166d}\x{166e}\x{169b}\x{169c}\x{16eb}-\x{16ed}\x{1735}' .
'\x{1736}\x{17d4}-\x{17d6}\x{17d8}-\x{17da}\x{1800}-\x{180a}\x{1944}\x{1945}' .
'\x{2010}-\x{2027}\x{2030}-\x{2043}\x{2045}-\x{2051}\x{2053}\x{2054}\x{2057}' .
'\x{207d}\x{207e}\x{208d}\x{208e}\x{2329}\x{232a}\x{23b4}-\x{23b6}\x{2768}-' .
'\x{2775}\x{27e6}-\x{27eb}\x{2983}-\x{2998}\x{29d8}-\x{29db}\x{29fc}\x{29fd}' .
'\x{3001}-\x{3003}\x{3008}-\x{3011}\x{3014}-\x{301f}\x{3030}\x{303d}\x{30a0}' .
'\x{30fb}\x{fd3e}\x{fd3f}\x{fe30}-\x{fe52}\x{fe54}-\x{fe61}\x{fe63}\x{fe68}' .
'\x{fe6a}\x{fe6b}\x{ff01}-\x{ff03}\x{ff05}-\x{ff0a}\x{ff0c}-\x{ff0f}\x{ff1a}' .
'\x{ff1b}\x{ff1f}\x{ff20}\x{ff3b}-\x{ff3d}\x{ff3f}\x{ff5b}\x{ff5d}\x{ff5f}-' .
'\x{ff65}'
);


class StBlogSearchClass extends ObjectModel
{
    public static $definition = array(
		'table' => 'st_blog',
		'primary' => 'id_st_blog',
		'multilang' => true,
	);
    public function prepareSearch($expr, $id_lang = null, $id_shop = null)
	{            
        if (!$id_lang)
            $id_lang = Context::getContext()->language->id;
            
        if (!$id_shop)
            $id_shop = Context::getContext()->shop->id;
            
        if (!$expr)
            return false;
        
        $id_array = array();

        $expr = Tools::strtolower(strip_tags($expr));
        $expr = html_entity_decode($expr, ENT_NOQUOTES, 'utf-8');

        $expr = preg_replace('/([' . PREG_CLASS_NUMBERS . ']+)[' . PREG_CLASS_PUNCTUATION . ']+(?=[' . PREG_CLASS_NUMBERS . '])/u', '\1', $expr);
        $expr = preg_replace('/[' . PREG_CLASS_SEARCH_EXCLUDE . ']+/u', ' ', $expr);
        $expr = str_replace(['.', '_', '-'], ' ', $expr);
        
        $words = explode(' ', trim($expr));
        foreach ($words as $key => $search)
        {
            if (empty($search) || strlen($search) < (int)Configuration::get('ST_BS_SEARCH_MINWORDLEN'))
                continue;
            $search_extra = '';
            $search = pSQL($search);
            if (Configuration::get('ST_BS_SEARCH_NAME'))
                $search_extra .= ' OR bl.name LIKE "%'.$search.'%"';
            if (Configuration::get('ST_BS_SEARCH_AUTHOR'))
                $search_extra .= ' OR bl.author LIKE "%'.$search.'%"';
            if (Configuration::get('ST_BS_SEARCH_CATEGORY'))
                $search_extra .= ' OR bcl.name LIKE "%'.$search.'%"';
            if (Configuration::get('ST_BS_SEARCH_SHORT_CONTENT'))
                $search_extra .= ' OR bl.content_short LIKE "%'.$search.'%"';
            if (Configuration::get('ST_BS_SEARCH_CONTENT'))
                $search_extra .= ' OR bl.content LIKE "%'.$search.'%"';
            
            if (!$search_extra)
                return false;
            
            // Search in blog lang and category lang.
            $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT bl.id_st_blog FROM `'._DB_PREFIX_.'st_blog_lang` bl 
            INNER JOIN `'._DB_PREFIX_.'st_blog_shop` bs ON (bs.id_st_blog=bl.id_st_blog)
            LEFT JOIN `'._DB_PREFIX_.'st_blog_category_blog` bcb ON (bl.id_st_blog=bcb.id_st_blog)
            LEFT JOIN `'._DB_PREFIX_.'st_blog_category_lang` bcl ON (bcb.id_st_blog_category=bcl.id_st_blog_category
            AND bcl.`id_lang` = '.$id_lang.')
            WHERE bl.`id_lang` ='.$id_lang.'
            AND bs.`id_shop` = '.$id_shop.'
            AND ('.trim($search_extra, ' OR ').')
            ');
        
            if($result)
        		foreach ($result as $row)
                    $id_array[] = $row['id_st_blog'];
            
            if (Configuration::get('ST_BS_SEARCH_TAG'))
            {
                // Search in blog tag.
                $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
                SELECT id_st_blog FROM `'._DB_PREFIX_.'st_blog_tag` t 
                INNER JOIN `'._DB_PREFIX_.'st_blog_tag_map` tm 
                ON (t.id_st_blog_tag=tm.id_st_blog_tag)
                WHERE id_lang = '.$id_lang.'
                AND name like "%'.$search.'%"
                ');
                if($result)
            		foreach ($result as $row)
                        $id_array[] = $row['id_st_blog'];    
            }
      }
        
		return array_unique($id_array);
	}
    
    public function getBlogs($id_array ,$id_lang, $p, $n, $order_by = null, $order_way = null, $get_total = false, $active = true)
	{
	   $context = Context::getContext();
       
       if (!$id_array)
        return false;    
            
        Shop::addTableAssociation('st_blog', array('type' => 'shop'));
                    
        if ($get_total)
		{
			$sql = 'SELECT COUNT(DISTINCT b.id_st_blog) AS total
					FROM `'._DB_PREFIX_.'st_blog` b
                    LEFT JOIN `'._DB_PREFIX_.'st_blog_lang` bl
					ON (b.`id_st_blog` = bl.`id_st_blog`
					AND bl.`id_lang` = '.(int)$id_lang.')
					'.Shop::addSqlAssociation('st_blog', 'b').'
					LEFT JOIN `'._DB_PREFIX_.'st_blog_category_blog` cb ON b.`id_st_blog` = cb.`id_st_blog`
					WHERE b.id_st_blog IN('.implode(',', $id_array).')'.
                    ' AND st_blog_shop.`id_shop` = '.(int)$context->shop->id.
					($active ? ' AND st_blog_shop.`active` = 1' : '');
			return (int)Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue($sql);
		}
        
        if (empty($order_by))
			$order_by = 'date_add';
		else
			$order_by = strtolower($order_by);

		if (empty($order_way))
			$order_way = 'DESC';
            
        $soby = (int)Configuration::get('ST_BS_SEARCH_SORT_BY');
        switch($soby)
        {
            case 1:
                $order_by = 'date_add';
                $order_way = 'DESC';
            break;
            case 2:
                $order_by = 'date_add';
                $order_way = 'ASC';
            break;
            case 3:
                $order_by = 'date_upd';
                $order_way = 'DESC';
            break;
            case 4:
                $order_by = 'date_upd';
                $order_way = 'ASC';
            break;
            case 5:
                $order_by = 'name';
                $order_way = 'ASC';
            break;
            case 6:
                $order_by = 'name';
                $order_way = 'DESC';
            break;
            case 7:
                $order_by = 'id_st_blog';
                $order_way = 'DESC';
            break;
            case 8:
                $order_by = 'id_st_blog';
                $order_way = 'ASC';
            break;
            default:
            break;
        }
          
		if ($order_by == 'id_st_blog' || $order_by == 'date_add' || $order_by == 'date_upd')
			$order_by_prefix = 'b';
		elseif ($order_by == 'position')
			$order_by_prefix = 'cb';
        elseif ($order_by == 'name')
			$order_by_prefix = 'bl';
        
		$sql = 'SELECT b.*, st_blog_shop.*, bl.*,
					cl.`name` AS category_default
				FROM `'._DB_PREFIX_.'st_blog` b
				'.Shop::addSqlAssociation('st_blog', 'b').'
                LEFT JOIN `'._DB_PREFIX_.'st_blog_category_blog` cb 
                    ON b.`id_st_blog` = cb.`id_st_blog`
				LEFT JOIN `'._DB_PREFIX_.'st_blog_category_lang` cl
					ON (st_blog_shop.`id_st_blog_category_default` = cl.`id_st_blog_category`
					AND cl.`id_lang` = '.(int)$id_lang.')
				LEFT JOIN `'._DB_PREFIX_.'st_blog_lang` bl
					ON (b.`id_st_blog` = bl.`id_st_blog`
					AND bl.`id_lang` = '.(int)$id_lang.')
				WHERE st_blog_shop.`id_shop` = '.(int)$context->shop->id
                    .' AND b.id_st_blog IN('.implode(',', $id_array).')'
					.($active ? ' AND st_blog_shop.`active` = 1' : '')
					.' GROUP BY st_blog_shop.`id_st_blog`';

		$sql .= ' ORDER BY '.(isset($order_by_prefix) ? $order_by_prefix.'.' : '').'`'.pSQL($order_by).'` '.pSQL($order_way).'
		LIMIT '.(((int)$p - 1) * (int)$n).','.(int)$n;

		$result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        
		return StBlogClass::getBlogsDetials((int)$id_lang, $result);
	}
}