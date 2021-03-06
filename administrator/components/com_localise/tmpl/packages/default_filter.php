<?php
/**
 * @package     Com_Localise
 * @subpackage  views
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$params     = (isset($this->state->params)) ? $this->state->params : new \JObject;

?>
<div class="row">
<!-- Begin Sidebar using custom submenu layout -->
<div id="j-sidebar-container" class="col-md-2">
	<?php echo $this->sidebar; ?>
</div>
<!-- End Sidebar -->
<!-- Begin Content -->
<div class="col-md-10">
<div id="j-main-container" class="j-main-container">
	<div id="filter-bar hidden-phone" class="btn-toolbar">
		<div class="js-stools-field-filter">
			<?php foreach($this->form->getFieldset('search') as $field): ?>
				<?php echo $field->input; ?>
			<?php endforeach; ?>
		</div>
			<?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
	</div>

