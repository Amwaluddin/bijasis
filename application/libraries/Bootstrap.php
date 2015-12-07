<?php

/**
 * CodeIgniterStrap ( Twitter Bootstrap 3 library for CodeIgniter )
 *
 * @created     Dida Nurwanda
 * @blog        http://didanurwanda.blogspot.com
 * @email       didanurwanda@gmail.com
 * @version     1.0
 */
class Bootstrap
{
	// TEXT
	const TEXT_COLOR_DEFAULT = 'primary';
	const TEXT_COLOR_MUTED = 'muted';
	const TEXT_COLOR_PRIMARY = 'primary';
	const TEXT_COLOR_SUCCESS = 'success';
	const TEXT_COLOR_INFO = 'info';
	const TEXT_COLOR_WARNING = 'warning';
	const TEXT_COLOR_DANGER = 'danger';

	// BUTTON
	const BUTTON_COLOR_DEFAULT = 'default';
	const BUTTON_COLOR_PRIMARY = 'primary';
	const BUTTON_COLOR_SUCCESS = 'success';
	const BUTTON_COLOR_INFO = 'info';
	const BUTTON_COLOR_WARNING = 'warning';
	const BUTTON_COLOR_DANGER = 'danger';
	const BUTTON_COLOR_LINK = 'link';

	const BUTTON_SIZE_LARGE = 'lg';
	const BUTTON_SIZE_SMALL = 'sm';
	const BUTTON_SIZE_EXTRA_SMALL = 'xs';

	const BUTTON_TYPE_LINK = 'link';
	const BUTTON_TYPE_HTML = 'button';
	const BUTTON_TYPE_SUBMIT = 'submit';
	const BUTTON_TYPE_RESET = 'reset';

	// LABEL
	const LABEL_COLOR_DEFAULT = 'default';
	const LABEL_COLOR_PRIMARY = 'primary';
	const LABEL_COLOR_SUCCESS = 'success';
	const LABEL_COLOR_INFO = 'info';
	const LABEL_COLOR_WARNING = 'warning';
	const LABEL_COLOR_DANGER = 'danger';

	// ALERT
	const ALERT_COLOR_SUCCESS = 'success';
	const ALERT_COLOR_INFO = 'info';
	const ALERT_COLOR_WARNING = 'warning';
	const ALERT_COLOR_DANGER = 'danger';

	// PROGRESS
	const PROGRESS_COLOR_PRIMARY = 'primary';
	const PROGRESS_COLOR_SUCCESS = 'success';
	const PROGRESS_COLOR_INFO = 'info';
	const PROGRESS_COLOR_WARNING = 'warning';
	const PROGRESS_COLOR_DANGER = 'danger';

	// PANEL
	const PANEL_COLOR_DEFAULT = 'default';
	const PANEL_COLOR_PRIMARY = 'primary';
	const PANEL_COLOR_SUCCESS = 'success';
	const PANEL_COLOR_INFO = 'info';
	const PANEL_COLOR_WARNING = 'warning';
	const PANEL_COLOR_DANGER = 'danger';
	const PANEL_COLOR_LINK = 'link';

	// COLLAPSE
	const COLLAPSE_COLOR_DEFAULT = 'default';
	const COLLAPSE_COLOR_PRIMARY = 'primary';
	const COLLAPSE_COLOR_SUCCESS = 'success';
	const COLLAPSE_COLOR_INFO = 'info';
	const COLLAPSE_COLOR_WARNING = 'warning';
	const COLLAPSE_COLOR_DANGER = 'danger';
	const COLLAPSE_COLOR_LINK = 'link';

	// BUTTON GROUP
	const BUTTON_GROUP_SIZE_LARGE = 'lg';
	const BUTTON_GROUP_SIZE_SMALL = 'sm';
	const BUTTON_GROUP_SIZE_EXTRA_SMALL = 'xs';

	// PULL
	const PULL_LEFT = 'left';
	const PULL_RIGHT = 'right';

	// NAVS
	const NAV_TABS = 'tabs';
	const NAV_PILLS = 'pills';

	// NAVBAR
	const NAVBAR_FIXED_TOP = 'fixed-top';
	const NAVBAR_FIXED_BOTTOM = 'fixed-bottom';
	const NAVBAR_STATIC_TOP = 'static-top';

	// PAGINATION
	const PAGINATION_SIZE_LARGE = 'lg';
	const PAGINATION_SIZE_SMALL = 'sm';

	// TOOLTIP
	const TOOLTIP_PLACEMENT_TOP = 'top';
	const TOOLTIP_PLACEMENT_BOTTOM = 'bottom';
	const TOOLTIP_PLACEMENT_LEFT = 'left';
	const TOOLTIP_PLACEMENT_RIGHT = 'right';

	// POPOVER
	const POPOVER_PLACEMENT_TOP = 'top';
	const POPOVER_PLACEMENT_BOTTOM = 'bottom';
	const POPOVER_PLACEMENT_LEFT = 'left';
	const POPOVER_PLACEMENT_RIGHT = 'right';

	// TEXT ALIGN
	const TEXT_ALIGN_LEFT = 'left';
	const TEXT_ALIGN_CENTER = 'center';
	const TEXT_ALIGN_RIGHT = 'right';

	// IMAGE
	const IMAGE_TYPE_ROUNDED = 'rounded';
	const IMAGE_TYPE_CIRCLE = 'circle';
	const IMAGE_TYPE_THUMBNAIL = 'thumbnail';

	// FORM
	const INPUT_GROUP_SIZE_LARGE = 'lg';
	const INPUT_GROUP_SIZE_SMALL = 'sm';

	const FORM_TYPE_INLINE = 'inline';
	const FORM_TYPE_HORIZONTAL = 'horizontal';
	const FORM_TYPE_VERTICAL = '';

	// WELL
	const WELL_SIZE_LARGE = 'lg';
	const WELL_SIZE_SMALL = 'sm';

	// ICON
	const ICON_ADJUST = 'glyphicon-adjust';
	const ICON_ALIGN_CENTER = 'glyphicon-align-center';
	const ICON_ALIGN_JUSTIFY = 'glyphicon-align-justify';
	const ICON_ALIGN_LEFT = 'glyphicon-align-left';
	const ICON_ALIGN_RIGHT = 'glyphicon-align-right';
	const ICON_ARROW_DOWN = 'glyphicon-arrow-down';
	const ICON_ARROW_LEFT = 'glyphicon-arrow-left';
	const ICON_ARROW_RIGHT = 'glyphicon-arrow-right';
	const ICON_ARROW_UP = 'glyphicon-arrow-up';
	const ICON_ASTERISK = 'glyphicon-asterisk';
	const ICON_BACKWARD = 'glyphicon-backward';
	const ICON_BAN_CIRCLE = 'glyphicon-ban-circle';
	const ICON_BARCODE = 'glyphicon-barcode';
	const ICON_BELL = 'glyphicon-bell';
	const ICON_BOLD = 'glyphicon-bold';
	const ICON_BOOK = 'glyphicon-book';
	const ICON_BOOKMARK = 'glyphicon-bookmark';
	const ICON_BRIEFCASE = 'glyphicon-briefcase';
	const ICON_BULLHORN = 'glyphicon-bullhorn';
	const ICON_CALENDAR = 'glyphicon-calendar';
	const ICON_CAMERA = 'glyphicon-camera';
	const ICON_CERTIFICATE = 'glyphicon-certificate';
	const ICON_CHECK = 'glyphicon-check';
	const ICON_CHEVRON_DOWN = 'glyphicon-chevron-down';
	const ICON_CHEVRON_LEFT = 'glyphicon-chevron-left';
	const ICON_CHEVRON_RIGHT = 'glyphicon-chevron-right';
	const ICON_CHEVRON_UP = 'glyphicon-chevron-up';
	const ICON_CIRCLE_ARROW_DOWN = 'glyphicon-circle-arrow-down';
	const ICON_CIRCLE_ARROW_LEFT = 'glyphicon-circle-arrow-left';
	const ICON_CIRCLE_ARROW_RIGHT = 'glyphicon-circle-arrow-right';
	const ICON_CIRCLE_ARROW_UP = 'glyphicon-circle-arrow-up';
	const ICON_CLOUD = 'glyphicon-cloud';
	const ICON_CLOUD_DOWNLOAD = 'glyphicon-cloud-download';
	const ICON_CLOUD_UPLOAD = 'glyphicon-cloud-upload';
	const ICON_COG = 'glyphicon-cog';
	const ICON_COLLAPSE_DOWN = 'glyphicon-collapse-down';
	const ICON_COLLAPSE_UP = 'glyphicon-collapse-up';
	const ICON_COMMENT = 'glyphicon-comment';
	const ICON_COMPRESSED = 'glyphicon-compressed';
	const ICON_COPYRIGHT_MARK = 'glyphicon-copyright-mark';
	const ICON_CREDIT_CARD = 'glyphicon-credit-card';
	const ICON_CUTLERY = 'glyphicon-cutlery';
	const ICON_DASHBOARD = 'glyphicon-dashboard';
	const ICON_DOWNLOAD = 'glyphicon-download';
	const ICON_DOWNLOAD_ALT = 'glyphicon-download-alt';
	const ICON_EARPHONE = 'glyphicon-earphone';
	const ICON_EDIT = 'glyphicon-edit';
	const ICON_EJECT = 'glyphicon-eject';
	const ICON_ENVELOPE = 'glyphicon-envelope';
	const ICON_EURO = 'glyphicon-euro';
	const ICON_EXCLAMATION_SIGN = 'glyphicon-exclamation-sign';
	const ICON_EXPAND = 'glyphicon-expand';
	const ICON_EXPORT = 'glyphicon-export';
	const ICON_EYE_CLOSE = 'glyphicon-eye-close';
	const ICON_EYE_OPEN = 'glyphicon-eye-open';
	const ICON_FACETIME_VIDEO = 'glyphicon-facetime-video';
	const ICON_FAST_BACKWARD = 'glyphicon-fast-backward';
	const ICON_FAST_FORWARD = 'glyphicon-fast-forward';
	const ICON_FILE = 'glyphicon-file';
	const ICON_FILM = 'glyphicon-film';
	const ICON_FILTER = 'glyphicon-filter';
	const ICON_FIRE = 'glyphicon-fire';
	const ICON_FLAG = 'glyphicon-flag';
	const ICON_FLASH = 'glyphicon-flash';
	const ICON_FLOPPY_DISK = 'glyphicon-floppy-disk';
	const ICON_FLOPPY_OPEN = 'glyphicon-floppy-open';
	const ICON_FLOPPY_REMOVE = 'glyphicon-floppy-remove';
	const ICON_FLOPPY_SAVE = 'glyphicon-floppy-save';
	const ICON_FLOPPY_SAVED = 'glyphicon-floppy-saved';
	const ICON_FOLDER_CLOSE = 'glyphicon-folder-close';
	const ICON_FOLDER_OPEN = 'glyphicon-folder-open';
	const ICON_FONT = 'glyphicon-font';
	const ICON_FORWARD = 'glyphicon-forward';
	const ICON_FULLSCREEN = 'glyphicon-fullscreen';
	const ICON_GBP = 'glyphicon-gbp';
	const ICON_GIFT = 'glyphicon-gift';
	const ICON_GLASS = 'glyphicon-glass';
	const ICON_GLOBE = 'glyphicon-globe';
	const ICON_HAND_DOWN = 'glyphicon-hand-down';
	const ICON_HAND_LEFT = 'glyphicon-hand-left';
	const ICON_HAND_RIGHT = 'glyphicon-hand-right';
	const ICON_HAND_UP = 'glyphicon-hand-up';
	const ICON_HD_VIDEO = 'glyphicon-hd-video';
	const ICON_HDD = 'glyphicon-hdd';
	const ICON_HEADER = 'glyphicon-header';
	const ICON_HEADPHONES = 'glyphicon-headphones';
	const ICON_HEART = 'glyphicon-heart';
	const ICON_HEART_EMPTY = 'glyphicon-heart-empty';
	const ICON_HOME = 'glyphicon-home';
	const ICON_IMPORT = 'glyphicon-import';
	const ICON_INBOX = 'glyphicon-inbox';
	const ICON_INDENT_LEFT = 'glyphicon-indent-left';
	const ICON_INDENT_RIGHT = 'glyphicon-indent-right';
	const ICON_INFO_SIGN = 'glyphicon-info-sign';
	const ICON_ITALIC = 'glyphicon-italic';
	const ICON_LEAF = 'glyphicon-leaf';
	const ICON_LINK = 'glyphicon-link';
	const ICON_LIST = 'glyphicon-list';
	const ICON_LIST_ALT = 'glyphicon-list-alt';
	const ICON_LOCK = 'glyphicon-lock';
	const ICON_LOG_IN = 'glyphicon-log-in';
	const ICON_LOG_OUT = 'glyphicon-log-out';
	const ICON_MAGNET = 'glyphicon-magnet';
	const ICON_MAP_MARKER = 'glyphicon-map-marker';
	const ICON_MINUS = 'glyphicon-minus';
	const ICON_MINUS_SIGN = 'glyphicon-minus-sign';
	const ICON_MOVE = 'glyphicon-move';
	const ICON_MUSIC = 'glyphicon-music';
	const ICON_NEW_WINDOW = 'glyphicon-new-window';
	const ICON_OFF = 'glyphicon-off';
	const ICON_OK = 'glyphicon-ok';
	const ICON_OK_CIRCLE = 'glyphicon-ok-circle';
	const ICON_OK_SIGN = 'glyphicon-ok-sign';
	const ICON_OPEN = 'glyphicon-open';
	const ICON_PAPERCLIP = 'glyphicon-paperclip';
	const ICON_PAUSE = 'glyphicon-pause';
	const ICON_PENCIL = 'glyphicon-pencil';
	const ICON_PHONE = 'glyphicon-phone';
	const ICON_PHONE_ALT = 'glyphicon-phone-alt';
	const ICON_PICTURE = 'glyphicon-picture';
	const ICON_PLANE = 'glyphicon-plane';
	const ICON_PLAY = 'glyphicon-play';
	const ICON_PLAY_CIRCLE = 'glyphicon-play-circle';
	const ICON_PLUS = 'glyphicon-plus';
	const ICON_PLUS_SIGN = 'glyphicon-plus-sign';
	const ICON_PRINT = 'glyphicon-print';
	const ICON_PUSHPIN = 'glyphicon-pushpin';
	const ICON_QRCODE = 'glyphicon-qrcode';
	const ICON_QUESTION_SIGN = 'glyphicon-question-sign';
	const ICON_RANDOM = 'glyphicon-random';
	const ICON_RECORD = 'glyphicon-record';
	const ICON_REFRESH = 'glyphicon-refresh';
	const ICON_REGISTRATION_MARK = 'glyphicon-registration-mark';
	const ICON_REMOVE = 'glyphicon-remove';
	const ICON_REMOVE_CIRCLE = 'glyphicon-remove-circle';
	const ICON_REMOVE_SIGN = 'glyphicon-remove-sign';
	const ICON_REPEAT = 'glyphicon-repeat';
	const ICON_RESIZE_FULL = 'glyphicon-resize-full';
	const ICON_RESIZE_HORIZONTAL = 'glyphicon-resize-horizontal';
	const ICON_RESIZE_SMALL = 'glyphicon-resize-small';
	const ICON_RESIZE_VERTICAL = 'glyphicon-resize-vertical';
	const ICON_RETWEET = 'glyphicon-retweet';
	const ICON_ROAD = 'glyphicon-road';
	const ICON_SAVE = 'glyphicon-save';
	const ICON_SAVED = 'glyphicon-saved';
	const ICON_SCREENSHOT = 'glyphicon-screenshot';
	const ICON_SD_VIDEO = 'glyphicon-sd-video';
	const ICON_SEARCH = 'glyphicon-search';
	const ICON_SEND = 'glyphicon-send';
	const ICON_SHARE = 'glyphicon-share';
	const ICON_SHARE_ALT = 'glyphicon-share-alt';
	const ICON_SHOPPING_CART = 'glyphicon-shopping-cart';
	const ICON_SIGNAL = 'glyphicon-signal';
	const ICON_SORT = 'glyphicon-sort';
	const ICON_SORT_BY_ALPHABET = 'glyphicon-sort-by-alphabet';
	const ICON_SORT_BY_ALPHABET_ALT = 'glyphicon-sort-by-alphabet-alt';
	const ICON_SORT_BY_ATTRIBUTES = 'glyphicon-sort-by-attributes';
	const ICON_SORT_BY_ATTRIBUTES_ALT = 'glyphicon-sort-by-attributes-alt';
	const ICON_SORT_BY_ORDER = 'glyphicon-sort-by-order';
	const ICON_SORT_BY_ORDER_ALT = 'glyphicon-sort-by-order-alt';
	const ICON_SOUND_5_1 = 'glyphicon-sound-5-1';
	const ICON_SOUND_6_1 = 'glyphicon-sound-6-1';
	const ICON_SOUND_7_1 = 'glyphicon-sound-7-1';
	const ICON_SOUND_DOLBY = 'glyphicon-sound-dolby';
	const ICON_SOUND_STEREO = 'glyphicon-sound-stereo';
	const ICON_STAR = 'glyphicon-star';
	const ICON_STAR_EMPTY = 'glyphicon-star-empty';
	const ICON_STATS = 'glyphicon-stats';
	const ICON_STEP_BACKWARD = 'glyphicon-step-backward';
	const ICON_STEP_FORWARD = 'glyphicon-step-forward';
	const ICON_STOP = 'glyphicon-stop';
	const ICON_SUBTITLES = 'glyphicon-subtitles';
	const ICON_TAG = 'glyphicon-tag';
	const ICON_TAGS = 'glyphicon-tags';
	const ICON_TASKS = 'glyphicon-tasks';
	const ICON_TEXT_HEIGHT = 'glyphicon-text-height';
	const ICON_TEXT_WIDTH = 'glyphicon-text-width';
	const ICON_TH = 'glyphicon-th';
	const ICON_TH_LARGE = 'glyphicon-th-large';
	const ICON_TH_LIST = 'glyphicon-th-list';
	const ICON_THUMBS_DOWN = 'glyphicon-thumbs-down';
	const ICON_THUMBS_UP = 'glyphicon-thumbs-up';
	const ICON_TIME = 'glyphicon-time';
	const ICON_TINT = 'glyphicon-tint';
	const ICON_TOWER = 'glyphicon-tower';
	const ICON_TRANSFER = 'glyphicon-transfer';
	const ICON_TRASH = 'glyphicon-trash';
	const ICON_TREE_CONIFER = 'glyphicon-tree-conifer';
	const ICON_TREE_DECIDUOUS = 'glyphicon-tree-deciduous';
	const ICON_UNCHECKED = 'glyphicon-unchecked';
	const ICON_UPLOAD = 'glyphicon-upload';
	const ICON_USD = 'glyphicon-usd';
	const ICON_USER = 'glyphicon-user';
	const ICON_VOLUME_DOWN = 'glyphicon-volume-down';
	const ICON_VOLUME_OFF = 'glyphicon-volume-off';
	const ICON_VOLUME_UP = 'glyphicon-volume-up';
	const ICON_WARNING_SIGN = 'glyphicon-warning-sign';
	const ICON_WRENCH = 'glyphicon-wrench';
	const ICON_ZOOM_IN = 'glyphicon-zoom-in';
	const ICON_ZOOM_OUT = 'glyphicon-zoom-out';

	protected static $CI;
	protected static $ID;
	protected static $idName = 'Tb_';
	protected static $idNumber = 0;

	public function __construct()
	{
		self::getInstance()->load->helper('url');
		self::getInstance()->load->helper('form');
		if (self::getInstance()->config->item('encryption_key') == '') {
			self::getInstance()->load->library('session', ['encryption_key' => md5(__CLASS__)]);
		} else {
			self::getInstance()->load->library('session');
		}
	}

	public static function form($htmlOptions = [])
	{
		return new TbForm($htmlOptions);
	}

	public static function formOpen($action = '', $htmlOptions = [])
	{
		return form_open($action, $htmlOptions);
	}

	public static function formClose()
	{
		return form_close();
	}

	public static function dropDownList($name, $active = '', $list = [], $htmlOptions = [])
	{
		if (self::getValue($htmlOptions, 'prompt', FALSE, FALSE)) {
			$list = array_merge(['' => self::getValue($htmlOptions, 'prompt')], $list);
		}
		self::addCssClass('form-control', $htmlOptions);
		$parseAttributes = self::parseAttributes($htmlOptions);
		$active = explode('|', $active);

		return form_dropdown($name, $list, $active, $parseAttributes);
	}

	public static function multiDropDownList($name, $active = '', $list = [], $htmlOptions = [])
	{
		self::addAttributes('multiple', 'multiple', $htmlOptions);

		return self::dropDownList($name, $active, $list, $htmlOptions);
	}

	public static function label($label, $for = '', $htmlOptions = [])
	{
		return form_label($label, $for, $htmlOptions);
	}

	public static function radioButtonInlineList($name, $active, $list = [], $htmlOptions = [])
	{
		self::addAttributes('type', 'radioButtonInline', $htmlOptions);

		return self::checkBoxList($name, $active, $list, $htmlOptions);
	}

	public static function radioButtonList($name, $active, $list = [], $htmlOptions = [])
	{
		self::addAttributes('type', 'radioButton', $htmlOptions);

		return self::checkBoxList($name, $active, $list, $htmlOptions);
	}

	public static function checkBoxInlineList($name, $active, $list = [], $htmlOptions = [])
	{
		self::addAttributes('type', 'checkBoxInline', $htmlOptions);

		return self::checkBoxList($name, $active, $list, $htmlOptions);
	}

	public static function checkBoxList($name, $active, $list = [], $htmlOptions = [])
	{
		$html = '';
		$type = self::getValue($htmlOptions, 'type', 'checkBox');
		foreach ($list as $key => $value) {
			$options = [];
			$e = explode('|', $active);
			foreach ($e as $keyTwo => $valueTwo) {
				if ($key === trim($valueTwo)) {
					self::addAttributes('checked', TRUE, $options);
				}
			}
			$html .= self::$type($name, $value, $key, $options);
		}

		return $html;
	}

	public static function radioButtonInline($name, $label, $value = '', $options = [])
	{
		self::addAttributes('type', 'radio', $options);

		return self::checkBoxInline($name, $label, $value, $options);
	}

	public static function checkBoxInline($name, $label, $value = '', $options = [])
	{
		self::addAttributes('inline', TRUE, $options);

		return self::checkBox($name, $label, $value, $options);
	}

	public static function radioButton($name, $label, $value = '', $options = [])
	{
		self::addAttributes('type', 'radio', $options);

		return self::checkBox($name, $label, $value, $options);
	}

	public static function checkBox($name, $label, $value = '', $options = [])
	{
		$inline = self::getValue($options, 'inline', FALSE);
		$htmlDefault = self::getValue($options, 'htmlDefault', FALSE);
		$type = self::getValue($options, 'type', 'checkbox', FALSE);
		self::addAttributes('name', $name, $options);
		self::addAttributes('value', $value, $options);
		$field = form_checkbox($options) . ' ' . $label;
		if ($inline == TRUE) {
			$html = self::openTag('label', ['class' => $type . '-inline']);
			$html .= $field;
			$html .= self::closeTag('label');
		} elseif ($htmlDefault == TRUE) {
			$html = $field;
		} else {
			$html = self::openTag('div', ['class' => $type]);
			$html .= self::openTag('label');
			$html .= $field;
			$html .= self::closeTag('label');
			$html .= self::closeTag('div');
		}

		return $html;
	}

	public static function textArea($name, $value = '', $htmlOptions = [])
	{
		self::addCssClass('form-control', $htmlOptions);
		self::addAttributes('name', $name, $htmlOptions);
		self::addAttributes('value', $value, $htmlOptions);

		return form_textarea($htmlOptions);
	}

	public static function fileField($name, $value = '', $htmlOptions = [])
	{
		self::addAttributes('type', 'file', $htmlOptions);

		return self::textField($name, $value, $htmlOptions);
	}

	public static function passwordField($name, $value = '', $htmlOptions = [])
	{
		self::addAttributes('type', 'password', $htmlOptions);

		return self::textField($name, $value, $htmlOptions);
	}

	public static function emailField($name, $value = '', $htmlOptions = [])
	{
		self::addAttributes('type', 'email', $htmlOptions);

		return self::textField($name, $value, $htmlOptions);
	}

	public static function textField($name, $value = '', $htmlOptions = [])
	{
		if (self::getValue($htmlOptions, 'type', '', FALSE) !== 'file') {
			self::addCssClass('form-control', $htmlOptions);
		}

		self::addAttributes('name', $name, $htmlOptions);
		self::addAttributes('value', $value, $htmlOptions);
		$inputGroup = self::getValue($htmlOptions, 'inputGroup', FALSE);

		$html = '';
		if (is_array($inputGroup)) {
			$addOn = [];
			self::copyValue($inputGroup, 'size', $htmlOptions, 'class', '', 'input-');
			self::moveValue($inputGroup, 'addOnButton', $addOn, 'addOnButton');
			self::changeValue('class', 'size', $inputGroup, 'input-group-');
			self::addCssClass('input-group', $inputGroup);
			self::changeAttrBool('button', 'addOnButton', $addOn, 'input-group-btn');
			self::replaceValue('class', 'button', 'input-group-addon', $addOn);

			$prepend = self::getValue($inputGroup, 'prepend', '');
			$append = self::getValue($inputGroup, 'append', '');
			$html .= self::openTag('div', $inputGroup);

			if ($prepend !== '') {
				$html .= self::tag('span', $addOn, $prepend);
			}
			$html .= form_input($htmlOptions);
			if ($append !== '') {
				$html .= self::tag('span', $addOn, $append);
			}
			$html .= self::closeTag('div');
		} else {
			$html .= form_input($htmlOptions);
		}

		return $html;
	}

	public static function carousel($options = [], $htmlOptions = [])
	{
		self::generateId();
		$carouselId = self::getId();
		self::addCssId($carouselId, $htmlOptions);
		self::addCssClass('carousel slide', $htmlOptions);
		$html = self::openTag('div', $htmlOptions);
		$html .= self::openTag('ol', ['class' => 'carousel-indicators']);
		$slideTo = 0;
		foreach ($options as $row) {
			$liOptions = [];
			self::addAttributes('data-target', '#' . $carouselId, $liOptions);
			$liOptions['data-slide-to'] = $slideTo;
			if ($slideTo == 0) {
				self::addCssClass('active', $liOptions);
			}
			$html .= self::tag('li', $liOptions, '');
			$slideTo++;
		}
		$html .= self::closeTag('ol');
		$html .= self::openTag('div', ['class' => 'carousel-inner']);
		$slide = 0;
		foreach ($options as $row) {
			$active = $slide == 0 ? 'active' : '';
			$html .= self::openTag('div', ['class' => 'item ' . $active]);
			$html .= self::image(
				self::getValue($row, 'image'),
				self::getValue($row, 'rel')
			);
			$content = self::getValue($row, 'content');
			$label = self::getValue($row, 'label');
			if ($content !== '' || $label !== '') {
				$html .= self::openTag('div', ['class' => 'carousel-caption']);
				$html .= $label !== '' ? self::tag('h3', [], $label) : '';
				$html .= $content !== '' ? self::tag('p', [], $content) : '';
				$html .= self::closeTag('div');
			}
			$html .= self::closeTag('div');
			$slide++;
		}
		$html .= self::closeTag('div');
		$prev = self::tag('span', ['class' => 'icon-prev'], '');
		$next = self::tag('span', ['class' => 'icon-next'], '');
		$html .= self::link('#' . $carouselId, $prev, ['class' => 'left carousel-control', 'data-slide' => 'prev']);
		$html .= self::link('#' . $carouselId, $next, ['class' => 'right carousel-control', 'data-slide' => 'next']);
		$html .= self::closeTag('div');

		return $html;
	}

	public static function collapse($options = [], $htmlOptions = [])
	{
		self::generateId();
		$collapseId = self::getId();
		$autoOpen = self::getValue($options, 'autoOpen', FALSE);
		$color = self::getValue($htmlOptions, 'color', self::COLLAPSE_COLOR_DEFAULT);
		self::addCssClass('panel-group', $htmlOptions);
		self::addCssId($collapseId, $htmlOptions);
		$html = self::openTag('div', $htmlOptions);
		$no = 0;
		foreach (self::getValue($options, 'items') as $key => $value) {
			self::generateId();
			$in = $autoOpen !== FALSE && $no === 0 ? 'in' : '';
			$content = self::openTag('div', ['class' => 'panel-collapse collapse ' . $in, 'id' => self::getId()]);
			$content .= self::tag('div', ['class' => 'panel-body'], $value);
			$content .= self::closeTag('div');
			$html .= self::panel([
				'title'   => self::link('#' . self::getId(), $key, [
					'class'       => 'accordion-toggle', 'data-toggle' => 'collapse',
					'data-parent' => '#' . $collapseId,
				]),
				'content' => $content,
			], ['color' => $color]);
			$no++;
		}
		$html .= self::closeTag('div');

		return $html;
	}

	public static function popover($text, $title, $popover, $htmlOptions = [])
	{
		self::addAttributes('data-content', $popover, $htmlOptions);
		self::addAttributes('data-toggle', 'popover', $htmlOptions);
		self::addAttributes('data-original-title', $title, $htmlOptions);
		self::changeValue('data-placement', 'placement', $htmlOptions);

		return self::link('#', $text, $htmlOptions);
	}

	public static function tooltip($text, $url, $tooltip, $htmlOptions = [])
	{
		self::addAttributes('data-toggle', 'tooltip', $htmlOptions);
		self::addAttributes('data-original-title', $tooltip, $htmlOptions);
		self::changeValue('data-placement', 'placement', $htmlOptions);

		return self::link($url, $text, $htmlOptions);
	}

	public static function modal($options = [])
	{
		$id = self::getValue($options, 'id', '', FALSE);
		self::addCssClass('modal', $options);
		/*self::addAttributes('tabindex', '-1', $options);*/
		self::addAttributes('role', 'dialog', $options);
		self::addAttributes('aria-labelledby', $id . 'Label', $options);
		self::addAttributes('data-keyboard', 'FALSE', $options );
		self::addAttributes('data-backdrop', 'static', $options);
		$header = self::getValue($options, 'header', FALSE);
		$body = self::getValue($options, 'body', FALSE);
		$footer = self::getValue($options, 'footer', FALSE);
		if (isset($options['hidden']) && $options['hidden'] == FALSE) {
			self::remove($options, 'hidden');
			self::addAttributes('aria-hidden', 'false', $options);
		} else {
			self::remove($options, 'hidden');
			self::addAttributes('aria-hidden', 'true', $options);
		}
		$html = self::openTag('div', $options);
		$html .= self::openTag('div', ['class' => 'modal-dialog modal-lg']);
		$html .= self::openTag('div', ['class' => 'modal-content']);
		if ($header !== FALSE) {
			$html .= self::openTag('div', ['class' => 'modal-header bg-red']);
			$html .= self::tag('button', ['class' => 'close', 'data-dismiss' => 'modal', 'aria-hidden' => 'true', 'type' => 'button'], '&times;');
			$html .= self::tag('h4', ['class' => 'modal-title'], $header);
			$html .= self::closeTag('div');
		}
		if ($body !== FALSE) {
			$html .= self::openTag('div', ['class' => 'modal-body']);
			$html .= $body;
			$html .= self::closeTag('div');
		}
		if ($footer !== FALSE) {
			$html .= self::openTag('div', ['class' => 'modal-footer']);
			if (is_array($footer)) {
				foreach ($footer as $row) {
					$html .= $row;
				}
			} else {
				$html .= $footer;
			}
			$html .= self::closeTag('div');
		}
		$html .= self::closeTag('div');
		$html .= self::closeTag('div');
		$html .= self::closeTag('div');

		return $html;
	}

	public static function panelControlGroup($left = '', $right = '')
	{
		$html = self::openTag('div', ['class' => 'pull-left']) . $left . self::closeTag('div');
		$html .= self::openTag('div', ['class' => 'pull-right']) . $right . self::closeTag('div');

		return $html;
	}

	public static function well($text, $htmlOptions = [])
	{
		self::changeValue('class', 'size', $htmlOptions, 'well-');
		self::addCssClass('well', $htmlOptions);

		return self::tag('div', $htmlOptions, $text);
	}

	public static function panel($options = [], $htmlOptions = [])
	{
		self::replaceValue('class', 'color', self::PANEL_COLOR_DEFAULT, $htmlOptions, 'panel-');
		self::addCssClass('panel', $htmlOptions);
		$header = self::getValue($options, 'header', FALSE);
		$body = self::getValue($options, 'body', FALSE);
		$footer = self::getValue($options, 'footer', FALSE);
		$title = self::getValue($options, 'title', FALSE);
		$content = self::getValue($options, 'content', FALSE);
		$html = self::openTag('div', $htmlOptions);
		if ($title) {
			$html .= self::tag('div', ['class' => 'panel-heading'], self::tag('h3', ['class' => 'panel-title'], $title));
		} else {
			$html .= $header ? self::tag('div', ['class' => 'panel-heading'], $header) : '';
		}
		$html .= $body ? self::tag('div', ['class' => 'panel-body'], $body) : '';
		$html .= $content ? $content : '';
		$html .= $footer ? self::tag('div', ['class' => 'panel-footer'], $footer) : '';
		$html .= self::closeTag('div');

		return $html;
	}

	public static function listGroup($list = [], $htmlOptions = [])
	{
		$tagOpenOne = self::getValue($htmlOptions, 'static', FALSE, FALSE) ? 'ul' : 'div';
		$tagOpenTwo = self::getValue($htmlOptions, 'static', FALSE) ? 'li' : 'a';
		self::addCssClass('list-group', $htmlOptions);
		$html = self::openTag($tagOpenOne, $htmlOptions);
		foreach ($list as $row) {
			self::addCssClass('list-group-item', $row);
			self::changeAttrBool('class', 'active', $row, 'active');
			self::changeValue('href', 'url', $row);
			$label = self::getValue($row, 'label', FALSE);
			$badge = self::getValue($row, 'badge', FALSE);
			if ($label == FALSE) {
				$heading = self::tag('h4', ['class' => 'list-group-item-heading'], self::getValue($row, 'heading'));
				$text = self::tag('p', ['class' => 'list-group-item-text'], self::getValue($row, 'text'));
				$label = $heading . $text;
			}
			if ($badge) {
				$label = self::badge($badge) . $label;
			}
			$html .= self::openTag($tagOpenTwo, $row);
			$html .= $label;
			$html .= self::closeTag($tagOpenTwo);

		}
		$html .= self::closeTag($tagOpenOne);

		return $html;
	}

	public static function progressBar($value = 0, $htmlOptions = [])
	{
		$options = [];
		self::changeAttrBool('pstriped', 'striped', $htmlOptions, 'progress-striped');
		self::changeAttrBool('panimated', 'animated', $htmlOptions, 'progress-striped active');
		self::addCssClass(self::getValue($htmlOptions, 'pstriped'), $options);
		self::addCssClass(self::getValue($htmlOptions, 'panimated'), $options);
		self::addCssClass('progress', $options);
		$html = self::openTag('div', $options);
		if (is_array($value)) {
			foreach ($value as $row) {
				$value = self::getValue($row, 'value');
				$html .= self::progress($value, $row);
			}
		} else {
			$html .= self::progress($value, $htmlOptions);
		}
		$html .= self::closeTag('div');

		return $html;
	}

	protected static function progress($value = 0, $htmlOptions = [])
	{
		self::changeValue('class', 'color', $htmlOptions, 'progress-bar-');
		self::addCssClass('progress-bar', $htmlOptions);
		self::addAttributes('role', 'progressbar', $htmlOptions);
		self::replaceValue('aria-valuemin', 'valuemin', 0, $htmlOptions);
		self::replaceValue('aria-valuemax', 'valuemax', 100, $htmlOptions);
		self::addAttributes('aria-valuenow', $value, $htmlOptions);
		self::addAttributes('style', 'width:' . $value . '%', $htmlOptions);
		$label = self::getValue($htmlOptions, 'label', FALSE);
		$html = self::openTag('div', $htmlOptions);
		if ($label) {
			$html .= self::tag('span', [], $label);
		}
		$html .= self::closeTag('div');

		return $html;
	}

	public static function flashAlert($name, $htmlOptions = [])
	{
		if (self::getInstance()->session->flashdata($name) != '') {
			self::addAttributes('dismissable', TRUE, $htmlOptions);

			return self::alert(self::getInstance()->session->flashdata($name), $htmlOptions);
		}
	}

	public static function alert($text, $htmlOptions = [])
	{
		self::changeValue('class', 'color', $htmlOptions, 'alert-');
		self::addCssClass('alert', $htmlOptions);
		$closeLabel = self::getValue($htmlOptions, 'closeLabel', '&times;');
		if (self::getValue($htmlOptions, 'dismissable', FALSE, FALSE)) {
			$text = self::tag('botton', ['class' => 'close', 'data-dismiss' => 'alert', 'aria-hidden' => 'true'], $closeLabel) . "\n" . $text;
		}
		self::changeAttrBool('class', 'dismissable', $htmlOptions, 'alert-');

		return self::tag('div', $htmlOptions, $text);
	}

	public static function thumbnail($options = [])
	{
		$url = self::getValue($options, 'url', FALSE);
		$rel = self::getValue($options, 'rel');
		$img = self::getValue($options, 'image');
		$cpt = self::getValue($options, 'caption', FALSE);

		$tag = $url ? 'a' : 'div';
		self::addCssClass('thumbnail', $options);
		self::addAttributes('href', $url, $options);
		$html = self::openTag($tag, $options);
		$html .= self::image($img, $rel);

		if ($cpt) {
			$html .= self::tag('div', ['class' => 'caption'], $cpt);
		}

		$html .= self::closeTag($tag);

		return $html;
	}

	public static function pager($options = [], $htmlOptions = [])
	{
		self::addCssClass('pager', $htmlOptions);

		return self::dropdown($options, $htmlOptions);
	}

	public static function pagination($config = [], $htmlOptions = [])
	{
		self::changeValue('class', 'size', $htmlOptions, 'pagination-');
		self::addCssClass('pagination', $htmlOptions);
		self::addAttributes('full_tag_open', self::openTag('ul', $htmlOptions), $config);
		self::addAttributes('full_tag_close', self::closeTag('ul'), $config);
		self::addAttributes('cur_tag_open', self::openTag('li', ['class' => 'active']) . self::openTag('a', ['href' => '#']), $config);
		self::addAttributes('cur_tag_close', self::closeTag('a') . self::closeTag('li'), $config);
		self::addAttributes('first_tag_open', self::openTag('li'), $config);
		self::addAttributes('first_tag_close', self::closeTag('li'), $config);
		self::addAttributes('last_tag_open', self::openTag('li'), $config);
		self::addAttributes('last_tag_close', self::closeTag('li'), $config);
		self::addAttributes('next_tag_open', self::openTag('li'), $config);
		self::addAttributes('next_tag_close', self::closeTag('li'), $config);
		self::addAttributes('prev_tag_open', self::openTag('li'), $config);
		self::addAttributes('prev_tag_close', self::closeTag('li'), $config);
		self::addAttributes('num_tag_open', self::openTag('li'), $config);
		self::addAttributes('num_tag_close', self::closeTag('li'), $config);

		return $config;
	}

	public static function pageHeader($header, $subheader = '', $htmlOptions = [])
	{
		self::addCssClass('page-header', $htmlOptions);
		$html = self::openTag('div', $htmlOptions);
		$html .= self::p($header . ' ' . self::p($subheader, [], 'small'), [], 'h1');
		$html .= self::closeTag('div');

		return $html;
	}

	public static function jumbotron($header, $desc = '', $htmlOptions = [])
	{
		self::addCssClass('jumbotron', $htmlOptions);
		$html = self::openTag('div', $htmlOptions);
		$html .= self::openTag('div', ['class' => 'container']);
		$html .= self::p($header, [], 'h1');
		$html .= $desc;
		$html .= self::closeTag('div');
		$html .= self::closeTag('div');

		return $html;
	}

	public static function badge($text, $htmlOptions = [])
	{
		self::addCssClass('badge', $htmlOptions);
		self::changeValue('class', 'pull', $htmlOptions, 'pull-');

		return self::tag('span', $htmlOptions, $text);
	}

	public static function labelTb($text, $htmlOptions = [])
	{
		self::addCssClass('label', $htmlOptions);
		self::replaceValue('class', 'color', self::LABEL_COLOR_DEFAULT, $htmlOptions, 'label-');
		self::changeValue('class', 'pull', $htmlOptions, 'pull-');

		return self::tag('span', $htmlOptions, $text);
	}

	public static function navbar($options = [])
	{
		self::generateId();
		$items = self::getValue($options, 'items', []);
		$brandUrl = self::getValue($options, 'brandUrl', '#');
		$brandLabel = self::getValue($options, 'brandLabel', '');
		$brandOptions = self::getValue($options, 'brandOptions', []);
		self::changeAttrBool('class', 'inverse', $options, 'navbar-inverse');
		self::changeValue('class', 'position', $options, 'navbar-');
		self::addCssClass('navbar-brand', $brandOptions);
		self::addCssClass('navbar navbar-default', $options);
		self::addAttributes('role', 'navigation', $options);
		$html = self::openTag('nav', $options);
		$html .= self::openTag('div', ['class' => 'container']);

		$html .= self::openTag('div', ['class' => 'navbar-header']);
		$html .= self::openTag('button', ['type' => 'button', 'class' => 'navbar-toggle', 'data-toggle' => 'collapse', 'data-target' => '#' . self::getId()]);
		$html .= self::tag('span', ['class' => 'sr-only'], 'Toggle navigation');
		$html .= self::tag('span', ['class' => 'icon-bar'], '');
		$html .= self::tag('span', ['class' => 'icon-bar'], '');
		$html .= self::closeTag('button');
		$html .= self::link($brandUrl, $brandLabel, $brandOptions);
		$html .= self::closeTag('div');

		$html .= self::openTag('div', ['class' => 'collapse navbar-collapse', 'id' => self::getId()]);
		foreach ($items as $row) {
			if (is_array($row)) {
				self::addCssClass('navbar-nav', $row);
				$html .= self::navs($row);
			} else {
				$html .= $row;
			}
		}
		$html .= self::closeTag('div');

		$html .= self::closeTag('div');
		$html .= self::closeTag('nav');

		return $html;
	}

	public static function breadcrumbs($options = [])
	{
		self::addCssClass('breadcrumb', $options);
		$list = self::getValue($options, 'links', []);
		$html = self::openTag('ol', $options);
		foreach ($list as $key => $value) {
			if (is_string($key)) {
				$html .= self::openTag('li');
				$html .= self::tag('a', ['href' => $value], $key);
				$html .= self::closeTag('li');
			} else {
				$html .= self::tag('li', ['class' => 'active'], $value);
			}
		}
		$html .= self::closeTag('ol');

		return $html;
	}

	public static function tabs($options = [])
	{
		$contentAndTabs = ['tabs' => []];
		$htmlOptions = self::getValue($options, 'htmlOptions', []);
		self::addAttributes('type', self::getValue($options, 'type'), $contentAndTabs['tabs']);
		self::replaceValue('class', 'type', self::NAV_TABS, $contentAndTabs['tabs'], 'nav-');

		$tabs = 0;
		foreach (self::getValue($options, 'tabs') as $row) {
			self::generateId();

			// tabs
			if ($tabs === 0) {
				$contentAndTabs['tabs']['items'][$tabs]['active'] = TRUE;
			}
			if (self::getValue($row, 'icon', FALSE, FALSE)) {
				$contentAndTabs['tabs']['items'][$tabs]['icon'] = self::getValue($row, 'icon');
			}
			if (self::getValue($row, 'label', FALSE, FALSE)) {
				$contentAndTabs['tabs']['items'][$tabs]['label'] = self::getValue($row, 'label');
			}
			$contentAndTabs['tabs']['items'][$tabs]['url'] = '#' . self::getId();

			// contant and dropdown
			if (self::getValue($row, 'items', FALSE, FALSE)) {
				$dropdown = self::tabNormalize(self::getValue($row, 'items'), $contentAndTabs['content']);
				$contentAndTabs['tabs']['items'][$tabs]['items'] = $dropdown['tabs'];
			} else {
				$contentAndTabs['tabs']['items'][$tabs]['linkOptions'] = ['data-toggle' => 'tab'];
				$contentAndTabs['content'][self::getId()] = self::getValue($row, 'content');
			}
			$tabs++;
		}

		$html = self::navs($contentAndTabs['tabs']);
		self::addCssClass('tab-content', $htmlOptions);
		$html .= self::openTag('div', $htmlOptions);
		$conn = 0;
		foreach ($contentAndTabs['content'] as $key => $value) {
			$active = $conn == 0 ? 'active' : '';
			$html .= self::openTag('div', ['class' => 'tab-pane fade in ' . $active, 'id' => $key]);
			$html .= $value;
			$html .= self::closeTag('div');
			$conn++;
		}
		$html .= self::closeTag('div');

		return $html;
	}

	protected static function tabNormalize($options = [], array &$content)
	{
		$contentAndTabs = [];
		$no = 0;
		foreach ($options as $row) {
			self::generateId();
			if (self::getValue($row, 'icon', FALSE, FALSE)) {
				$contentAndTabs['tabs'][$no]['icon'] = self::getValue($row, 'icon');
			}
			if (self::getValue($row, 'label', FALSE, FALSE)) {
				$contentAndTabs['tabs'][$no]['label'] = self::getValue($row, 'label');
			}
			$contentAndTabs['tabs'][$no]['linkOptions'] = ['data-toggle' => 'tab'];
			$contentAndTabs['tabs'][$no]['url'] = '#' . self::getId();
			$content[self::getId()] = self::getValue($row, 'content');
			$no++;
		}

		return $contentAndTabs;
	}

	public static function navs($options = [])
	{
		self::addCssClass('nav', $options);
		self::changeValue('class', 'type', $options, 'nav-');
		self::changeAttrBool('class', 'stacked', $options, 'nav-stacked nav-pills');
		self::changeAttrBool('class', 'justified', $options, 'nav-justified');
		self::changeValue('class', 'pull', $options, 'navbar-');
		$menu = self::getValue($options, 'items', []);
		$html = self::openTag('ul', $options);
		foreach ($menu as $row) {
			$myoptions = [];
			$linkOptions = self::getValue($row, 'linkOptions', []);
			self::changeAttrBool('navactive', 'active', $row, 'active');
			self::changeAttrBool('navdisabled', 'disabled', $row, 'disabled');
			self::moveValue($row, 'url', $linkOptions, 'href', '#');
			self::moveValue($row, 'navactive', $myoptions, 'class', '');
			self::moveValue($row, 'navdisabled', $myoptions, 'class', '');

			$label = self::getValue($row, 'label');
			if (self::getValue($row, 'icon', '', FALSE)) {
				$label = self::icon(self::getValue($row, 'icon')) . ' ' . $label;
			}

			if (self::getValue($row, 'items', FALSE, FALSE)) {
				self::addCssClass('dropdown', $myoptions);
				self::addCssClass('dropdown-toggle', $linkOptions);
				self::addAttributes('data-toggle', 'dropdown', $linkOptions);
				$html .= self::openTag('li', $myoptions);
				$html .= self::tag('a', $linkOptions, $label . self::tag('span', ['class' => 'caret'], ''));
				$html .= self::dropDownMenu(self::getValue($row, 'items', []));
				$html .= self::closeTag('li');
			} else {
				if (current_url() === self::getValue($linkOptions, 'href', '#', FALSE)) {
					self::addCssClass('active', $myoptions);
				}

				$html .= self::openTag('li', $myoptions);
				$html .= self::tag('a', $linkOptions, $label);
				$html .= self::closeTag('li');
			}

		}
		$html .= self::closeTag('ul');

		return $html;
	}

	public static function image($src, $rel = '', $htmlOptions = [])
	{
		self::changeValue('class', 'type', $htmlOptions, 'img-');
		self::addAttributes('rel', $rel, $htmlOptions);
		self::addAttributes('src', $src, $htmlOptions);

		return self::tag('img', $htmlOptions);
	}

	public static function buttonDropdown($label, $dropdown = [], $htmlOptions = [])
	{
		$openTagOptions = [];
		self::addCssClass('btn-group', $openTagOptions);
		$noGroup = self::getValue($htmlOptions, 'noGroup', FALSE);
		$menuOption = [];

		if (self::getValue($htmlOptions, 'menuOption', FALSE, FALSE)) {
			$menuOption = self::getValue($htmlOptions, 'menuOption', []);
		}

		if (self::getValue($htmlOptions, 'dropup', FALSE)) {
			self::addCssClass('dropup', $openTagOptions);
		}

		$html = '';
		if ($noGroup === FALSE) {
			$html .= self::openTag('div', $openTagOptions);
		}
		if (self::getValue($htmlOptions, 'split', FALSE)) {
			$html .= self::button($label, $htmlOptions);
			self::addCssClass('dropdown-toggle', $htmlOptions);
			self::addAttributes('data-toggle', 'dropdown', $htmlOptions);
			$html .= self::button(self::tag('span', ['class' => 'caret'], ''), $htmlOptions);
		} else {
			self::addCssClass('dropdown-toggle', $htmlOptions);
			self::addAttributes('data-toggle', 'dropdown', $htmlOptions);
			$html .= self::button($label . ' ' . self::tag('span', ['class' => 'caret'], ''), $htmlOptions);
		}

		$html .= self::dropDownMenu($dropdown, $menuOption);
		if ($noGroup === FALSE) {
			$html .= self::closeTag('div');
		}

		return $html;
	}

	public static function dropDownMenu($dropdown = [], $htmlOptions = [])
	{
		self::changeValue('class', 'pull', $htmlOptions, 'pull-');
		self::addCssClass('dropdown-menu', $htmlOptions);
		self::addAttributes('role', 'menu', $htmlOptions);

		return self::dropdown($dropdown, $htmlOptions);
	}

	public static function dropdown($dropdown = [], $htmlOptions = [])
	{
		$html = self::openTag('ul', $htmlOptions);
		foreach ($dropdown as $row) {
			if ($row == '-') {
				$html .= self::openTag('li', ['class' => 'divider']);
				$html .= self::closeTag('li');
			} elseif (self::getValue($row, 'header', FALSE, FALSE)) {
				$label = self::getValue($row, 'label');
				if (self::getValue($row, 'icon', '', FALSE)) {
					$label = self::icon(self::getValue($row, 'icon')) . ' ' . $label;
				}
				$html .= self::tag('li', ['class' => 'dropdown-header'], $label);
			} else {
				$label = self::getValue($row, 'label');
				$url = self::getValue($row, 'url', '#');
				if (self::getValue($row, 'icon', '', FALSE)) {
					$label = self::icon(self::getValue($row, 'icon')) . ' ' . $label;
				}
				$linkOptions = self::getValue($row, 'linkOptions', []);
				self::addAttributes('href', $url, $linkOptions);

				$html .= self::openTag('li', $row);
				$html .= self::tag('a', $linkOptions, $label);
				$html .= self::closeTag('li');
			}
		}
		$html .= self::closeTag('ul');

		return $html;
	}

	public static function buttonToolbar($button = [], $htmlOptions = [])
	{
		self::addCssClass('btn-toolbar', $htmlOptions);
		$html = self::openTag('div', $htmlOptions);
		foreach ($button as $row) {
			$html .= self::buttonGroup(self::getValue($row, 'items', []));
		}
		$html .= self::closeTag('div');

		return $html;
	}

	public static function buttonGroup($button = [], $htmlOptions = [])
	{
		if (self::getValue($htmlOptions, 'vertical', FALSE, FALSE) === FALSE) {
			self::replaceValue('class', 'type', 'btn-group', $htmlOptions);
			self::changeAttrBool('class', 'justified', $htmlOptions, 'btn-group-justified');
		}
		self::changeAttrBool('class', 'vertical', $htmlOptions, 'btn-group-vertical');
		self::changeValue('class', 'size', $htmlOptions, 'btn-group-');
		self::changeValue('class', 'align', $htmlOptions, 'btn-group-');

		$html = self::openTag('div', $htmlOptions);
		foreach ($button as $row) {
			$label = self::getValue($row, 'label');
			if (self::getValue($row, 'items', FALSE, FALSE)) {
				$html .= self::buttonDropdown($label, self::getValue($row, 'items'));
			} else {
				$html .= self::button($label, $row);
			}
		}
		$html .= self::closeTag('div');

		return $html;
	}

	public static function button($label, $htmlOptions = [])
	{
		self::addCssClass('btn', $htmlOptions);
		self::replaceValue('class', 'color', self::BUTTON_COLOR_DEFAULT, $htmlOptions, 'btn-');
		self::changeValue('class', 'size', $htmlOptions, 'btn-');
		self::changeValue('href', 'url', $htmlOptions);
		self::changeAttrBool('class', 'block', $htmlOptions, 'btn-block');
		self::changeAttrBool('disabled', 'disabled', $htmlOptions, 'disabled');

		if (self::getValue($htmlOptions, 'icon', '', FALSE)) {
			$label = self::icon(self::getValue($htmlOptions, 'icon')) . ' ' . $label;
		}

		if (self::getValue($htmlOptions, 'type') == 'link') {
			return self::link(self::getValue($htmlOptions, 'href'), $label, $htmlOptions);
		}

		return self::tag('button', $htmlOptions, $label);
	}

	public static function link($url, $title, $htmlOptions = [])
	{
		self::addAttributes('href', $url == '' ? '#' : $url, $htmlOptions);
		if (self::getValue($htmlOptions, 'icon', '', FALSE)) {
			$title = self::icon(self::getValue($htmlOptions, 'icon')) . ' ' . $label;
		}

		return self::tag('a', $htmlOptions, $title);
	}

	public static function code($text, $htmlOptions = [])
	{
		return self::tag('code', $htmlOptions, htmlspecialchars($text));
	}

	public static function codeBlock($text, $htmlOptions = [])
	{
		return self::tag('pre', $htmlOptions, htmlspecialchars($text));
	}

	public static function quote($text, $htmlOptions = [])
	{
		self::changeValue('class', 'pull', $htmlOptions, 'pull-');
		$text = self::p($text);
		if (self::getValue($htmlOptions, 'small', FALSE, FALSE)) {
			$cite = self::getValue($htmlOptions, 'cite', '');
			$small = self::getValue($htmlOptions, 'small', '');
			$text .= self::tag('small', [], $small . ' ' . self::tag('cite', [], $cite));
		}

		return self::tag('blockquote', $htmlOptions, $text);
	}

	public static function p($text, $htmlOptions = [], $tag = 'p')
	{
		self::replaceValue('class', 'align', self::TEXT_ALIGN_LEFT, $htmlOptions, 'text-');

		return self::tag($tag, $htmlOptions, $text);
	}

	public static function abbr($text, $title, $htmlOptions = [])
	{
		self::addAttributes('title', $title, $htmlOptions);

		return self::tag('abbr', $htmlOptions, $text);
	}

	public static function em($text, $htmlOptions = [], $tag = 'p')
	{
		self::changeValue('class', 'color', $htmlOptions, 'text-');

		return self::tag($tag, $htmlOptions, $text);
	}

	public static function lead($text, $htmlOptions = [])
	{
		self::addCssClass('lead', $htmlOptions);

		return self::tag('p', $htmlOptions, $text);
	}

	public static function small($text, $htmlOptions = [])
	{
		return self::tag('small', $htmlOptions, $text);
	}

	public static function b($text, $htmlOptions = [])
	{
		return self::tag('strong', $htmlOptions, $text);
	}

	public static function i($text, $htmlOptions = [])
	{
		return self::tag('em', $htmlOptions, $text);
	}

	public static function icon($iconName)
	{
		return self::tag('span', ['class' => 'glyphicon ' . $iconName], '');
	}

	protected static function tag($tag, $htmlOptions = [], $content = FALSE, $closeTag = TRUE)
	{
		$html = '<' . $tag . self::parseAttributes($htmlOptions);
		if ($content === FALSE) {
			$html .= $closeTag ? ' />' : '> ';
		} else {
			$html .= $closeTag ? '>' . $content . self::closeTag($tag) : '>' . $content;
		}

		return $html;
	}

	protected static function openTag($tag, $htmlOptions = [])
	{
		return self::tag($tag, $htmlOptions, FALSE, FALSE);
	}

	protected static function closeTag($tag)
	{
		return '</' . $tag . '> ';
	}

	protected static function parseAttributes($htmlOptions = [])
	{
		$html = '';
		foreach ($htmlOptions as $key => $value) {
			if (is_bool($value)) {
				$html .= ' ' . $key;
			} else {
				$html .= ' ' . $key . '="' . $value . '"';
			}
		}

		return $html;
	}

	protected static function addAttributes($attr, $value, array &$htmlOptions)
	{
		if ($attr && $value) {
			if (isset($htmlOptions[$attr])) {
				$htmlOptions[$attr] .= ' ' . $value;
			} else {
				$htmlOptions[$attr] = $value;
			}
		}
	}

	protected static function addCssClass($class, array &$htmlOptions)
	{
		self::addAttributes('class', $class, $htmlOptions);
	}

	protected static function addCssId($id, array &$htmlOptions)
	{
		self::addAttributes('id', $id, $htmlOptions);
	}

	protected static function changeAttrBool(
		$attr,
		$key,
		array &$htmlOptions,
		$ifTrue
	)
	{
		if (isset($htmlOptions[$key]) && $htmlOptions[$key] == TRUE) {
			self::addAttributes($attr, $ifTrue, $htmlOptions);
			if ($attr !== $key) {
				self::remove($htmlOptions, $key);
			}
		}
	}

	protected static function replaceValue(
		$key,
		$value,
		$default,
		array &$htmlOptions,
		$preffix = '',
		$suffix = ''
	)
	{
		if (!isset($htmlOptions[$value])) {
			$htmlOptions[$value] = $default;
		}
		self::changeValue($key, $value, $htmlOptions, $preffix, $suffix);
	}

	protected static function moveValue(
		array &$before,
		$key1,
		array &$after,
		$key2,
		$ifNull = '',
		$preffix = '',
		$suffix = ''
	)
	{
		$value = self::getValue($before, $key1, $ifNull);
		if ($value !== '') {
			self::addAttributes($key2, $preffix . $value . $suffix, $after);
		}
	}

	protected static function copyValue(
		array &$before,
		$key1,
		array &$after,
		$key2,
		$ifNull = '',
		$preffix = '',
		$suffix = ''
	)
	{
		$value = self::getValue($before, $key1, $ifNull, FALSE);
		if ($value !== '') {
			self::addAttributes($key2, $preffix . $value . $suffix, $after);
		}
	}

	protected static function changeValue(
		$key,
		$value,
		array &$htmlOptions,
		$preffix = '',
		$suffix = ''
	)
	{
		$val = self::getValue($htmlOptions, $value);
		if ($val !== '') {
			self::addAttributes($key, $preffix . $val . $suffix, $htmlOptions);
		}
	}

	protected static function getValue(array &$array, $attr, $ifNull = '', $unset = TRUE)
	{
		$val = isset($array[$attr]) ? $array[$attr] : $ifNull;
		if ($unset === TRUE) {
			self::remove($array, $attr);
		}

		return $val;
	}

	protected static function remove(array &$array, $string)
	{
		unset($array[$string]);
	}

	protected static function getId()
	{
		return self::$ID;
	}

	protected static function generateId()
	{
		self::$ID = self::$idName . self::$idNumber++;
	}

	protected static function getInstance()
	{
		if (self::$CI === NULL) {
			self::$CI = get_instance();
		}

		return self::$CI;
	}

	public static function getVersion()
	{
		return '1.0';
	}
}

class TbForm extends Bootstrap
{
	const FIELD_TYPE_TEXT = 'textField';
	const FIELD_TYPE_EMAIL = 'emailField';
	const FIELD_TYPE_PASSWORD = 'passwordField';
	const FIELD_TYPE_FILE = 'fileField';
	const FIELD_TYPE_TEXTAREA = 'textArea';

	protected $type = '';
	protected $left = 2;
	protected $right = 10;

	public function __construct($config = [])
	{
		$this->type = $this->getValue($config, 'type', '', FALSE);
		$this->left = $this->getValue($config, 'leftRow', 2);
		$this->right = $this->getValue($config, 'rightRow', 10);
		$action = $this->getValue($config, 'action', '');
		$this->changeValue('class', 'type', $config, 'form-');
		$this->addAttributes('role', 'form', $config);
		echo $this->formOpen($action, $config);
	}

	public function end()
	{
		echo $this->formClose();
	}

	public function textFieldRow($name, $label = '', $htmlOptions = [])
	{
		return $this->fieldControlGroup(self::FIELD_TYPE_TEXT, $name, $label, $htmlOptions);
	}

	public function passwordFieldRow($name, $label = '', $htmlOptions = [])
	{
		return $this->fieldControlGroup(self::FIELD_TYPE_PASSWORD, $name, $label, $htmlOptions);
	}

	public function emailFieldRow($name, $label = '', $htmlOptions = [])
	{
		return $this->fieldControlGroup(self::FIELD_TYPE_EMAIL, $name, $label, $htmlOptions);
	}

	public function fileFieldRow($name, $label = '', $htmlOptions = [])
	{
		return $this->fieldControlGroup(self::FIELD_TYPE_FILE, $name, $label, $htmlOptions);
	}

	public function textAreaRow($name, $label = '', $htmlOptions = [])
	{
		return $this->fieldControlGroup(self::FIELD_TYPE_TEXTAREA, $name, $label, $htmlOptions);
	}

	public function radioButtonInlineListROw($labelOne, $name, $active = '', $list = [], $htmlOptions = [])
	{
		$this->addAttributes('type', 'radioButtonInline', $htmlOptions);

		return $this->checkBoxListRow($labelOne, $name, $active, $list, $htmlOptions);
	}

	public function checkBoxInlineListRow($labelOne, $name, $active = '', $list = [], $htmlOptions = [])
	{
		$this->addAttributes('type', 'checkBoxInline', $htmlOptions);

		return $this->checkBoxListRow($labelOne, $name, $active, $list, $htmlOptions);
	}

	public function radioButtonListRow($labelOne, $name, $active = '', $list = [], $htmlOptions = [])
	{
		$this->addAttributes('type', 'radioButton', $htmlOptions);

		return $this->checkBoxListRow($labelOne, $name, $active, $list, $htmlOptions);
	}

	public function checkBoxListRow($labelOne, $name, $active = '', $list = [], $htmlOptions = [])
	{
		$help = $this->getHelpBlock($htmlOptions);
		$left = $this->labelRow($labelOne, $name);
		$right = $this->checkBoxList($name, $active, $list, $htmlOptions);

		return $this->formControlGroup($left, $right . $help);
	}

	public function radioButtonRow($labelOne, $name, $labelTwo, $value = '', $htmlOptions = [])
	{
		$this->addAttributes('type', 'radio', $htmlOptions);

		return $this->checkBoxRow($labelOne, $name, $labelTwo, $value, $htmlOptions);
	}

	public function checkBoxRow($labelOne, $name, $labelTwo, $value = '', $htmlOptions = [])
	{
		$help = $this->getHelpBlock($htmlOptions);
		$left = $this->labelRow($labelOne, $name);
		$right = $this->checkBox($name, $labelTwo, $value, $htmlOptions);

		return $this->formControlGroup($left, $right . $help);
	}

	protected function fieldControlGroup($type, $name, $label = '', $htmlOptions = [])
	{
		$help = $this->getHelpBlock($htmlOptions);
		$formLabel = $this->labelRow($label, $name, ['id' => 'lbl_' . $name]);
		$formInput = $this->$type($name, '', $htmlOptions);

		return $this->formControlGroup($formLabel, $formInput . $help);
	}

	public function submitButton($label, $htmlOptions = [])
	{
		$help = $this->getHelpBlock($htmlOptions);
		$this->addAttributes('type', self::BUTTON_TYPE_SUBMIT, $htmlOptions);

		return $this->formControlGroup('', $this->button($label, $htmlOptions) . $help);
	}

	public function dropDownListRow($label, $name, $active = '', $list = [], $htmlOptions = [])
	{
		$help = $this->getHelpBlock($htmlOptions);
		$left = $this->labelRow($label, $name);
		$right = $this->dropDownList($name, $active, $list, $htmlOptions);

		return $this->formControlGroup($left, $right . $help);
	}

	public function multiDropDownListRow($label, $name, $active = '', $list = [], $htmlOptions = [])
	{
		$this->addAttributes('multiple', 'multiple', $htmlOptions);

		return $this->dropDownListRow($label, $name, $active, $list, $htmlOptions);
	}

	public function labelRow($text, $for = '', $htmlOptions = [])
	{
		if ($this->type === self::FORM_TYPE_INLINE) {
			$this->addCssClass('sr-only', $htmlOptions);
		} elseif ($this->type === self::FORM_TYPE_HORIZONTAL) {
			$this->addCssClass('control-label pull-right', $htmlOptions);
		}

		return $text == '' || $text == FALSE ? '' : $this->label($text, $for, $htmlOptions);
	}

	protected function getHelpBlock(array &$htmlOptions)
	{
		$help = '';
		if ($this->getValue($htmlOptions, 'help', FALSE, FALSE)) {
			$help = $this->helpBlock($this->getValue($htmlOptions, 'help'));
		}

		return $help;
	}

	public function helpBlock($text, $htmlOptions = [])
	{
		$this->addCssClass('help-block', $htmlOptions);
		$text = $this->tag('p', $htmlOptions, $text);

		return $text;
	}

	public function formControlGroup($left = '', $right = '')
	{
		$html = $this->openTag('div', ['class' => 'form-group']);
		if ($this->type === self::FORM_TYPE_HORIZONTAL) {
			$html .= $this->tag('div', ['class' => 'col-sm-' . $this->left], $left);
			$html .= $this->tag('div', ['class' => 'col-sm-' . $this->right], $right);
		} else {
			$html .= $left . $right;
		}
		$html .= $this->closeTag('div');

		return $html;
	}

}

class Tb extends Bootstrap
{
}